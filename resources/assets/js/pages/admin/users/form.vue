<template>
    <div class="row">
        <div class="col-lg-8 m-auto">
            <card :title="updating() ? $t('update_user') : $t('create_user')">
                <form @submit.prevent="save" @keydown="form.onKeydown($event)">
                    <!-- Name -->
                    <input v-model="form.id" type="hidden" name="id">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ $t('first_name') }}</label>
                        <div class="col-md-7">
                            <input v-model="form.name" type="text" name="name" class="form-control"
                                   :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"/>
                        </div>
                    </div>

                    <!-- Surname -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ $t('last_name') }}</label>
                        <div class="col-md-7">
                            <input v-model="form.surname" type="text" name="surname" class="form-control"
                                   :class="{ 'is-invalid': form.errors.has('surname') }">
                            <has-error :form="form" field="surname"/>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ $t('email') }}</label>
                        <div class="col-md-7">
                            <input v-model="form.email" type="email" name="email" class="form-control"
                                   :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"/>
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ $t('password') }}</label>
                        <div class="col-md-7">
                            <input v-model="form.password" type="password" name="password" class="form-control"
                                   :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"/>
                        </div>
                    </div>

                    <!-- Role -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label text-md-right">{{ $t('role') }}</label>
                        <div class="col-md-7">
                            <select v-model="form.role_id" class="form-control"
                                    :class="{ 'is-invalid': form.errors.has('role_id') }">
                                <option disabled value=""> {{ $t('select_role') }}</option>
                                <option v-for="role in roles" :value="role.id">{{ $t(role.name) }}</option>
                            </select>
                            <has-error :form="form" field="role_id"/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-7 offset-md-3 d-flex">
                            <!-- Submit Button -->
                            <v-button :loading="form.busy">
                                {{ $t('create') }}
                            </v-button>
                        </div>
                    </div>

                </form>
            </card>
        </div>
    </div>
</template>

<script>
  import {mapGetters} from 'vuex'
  import Form from 'vform'

  export default {
    middleware: 'auth',

    computed: mapGetters({
      roles: 'roles/list',
      user: 'users/user',

    }),

    metaInfo() {
      return {title: this.$t('create_user')}
    },

    data: () => ({
      form: new Form({
        id: null,
        name: '',
        email: '',
        surname: '',
        password: '',
        role_id: '',
      })
    }),

    created() {
      this.serRoles()

      if (this.updating()) {
        this.getUserForUpdate( this.$route.params.userId)
      }
    },
    methods: {
      updating(){
        return this.$route.params && this.$route.params.userId
      },
      async serRoles() {
        await this.$store.dispatch('roles/fetchAll')
      },
      async getUserForUpdate(userId) {
        const {data} = await  this.form.get('/api/admin/users/' + userId + '/edit')

        this.form.id=data.id
        this.form.name=data.name
        this.form.email=data.email
        this.form.surname=data.surname
        this.form.role_id=data.role_id
      },

      /**
       * Save user
       * @returns {Promise.<void>}
       */
      async save() {

        if (this.updating()){
          this.form._method = 'PATCH'
            await this.form.patch('/api/admin/users/'+this.$route.params.userId)
        }else{
          await this.form.post('/api/admin/users')
        }
        this.$router.go(-1);
      }
    }
  }
</script>
