<template>
    <section>
        <div class="row">
            <div class="col-12">
                <h1>{{ $t('users')}} ({{total}})</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light pl-0 pr-0 pt-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <router-link class="btn btn-primary mr-auto" :to="{ name: 'users.create'}">
                            {{ $t('create_user') }}
                        </router-link>

                        <form @submit.prevent="updateSearch" class="form-inline ml-auto">
                            <div class="form-check form-check-inline">
                                <input v-model="role" class="form-check-input" type="radio" name="inlineRadioOptions"
                                       id="inlineRadio1" value="trainee">
                                <label class="form-check-label" for="inlineRadio1">{{ $t('trainee') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input v-model="role" class="form-check-input" type="radio" name="inlineRadioOptions"
                                       id="inlineRadio2" value="trainer">
                                <label class="form-check-label" for="inlineRadio2">{{ $t('trainer') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input v-model="role" class="form-check-input" type="radio" name="inlineRadioOptions"
                                       id="inlineRadio3" value="admin">
                                <label class="form-check-label" for="inlineRadio3">{{ $t('admin') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input v-model="role" class="form-check-input" type="radio" name="inlineRadioOptions"
                                       id="inlineRadio4" value="all">
                                <label class="form-check-label" for="inlineRadio4">{{ $t('all') }}</label>
                            </div>

                            <input v-model="searchInput" class="form-control mr-sm-2" type="search" placeholder="Search"
                                   aria-label="Search">
                            <button @click="updateSearch" class="btn btn-outline-success my-2 my-sm-0" type="submit">{{
                                $t('search') }}
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row" v-if="userListLength">
            <div class="col">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">{{ $t('name') }}</th>
                        <th scope="col">{{ $t('email') }}</th>
                        <th scope="col">{{ $t('role') }}</th>
                        <th scope="col" class="text-center">{{ $t('actions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(user, key) in users">
                        <td>{{currentIndex+(key+1)}}</td>
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>{{ $t(user.role.name|| 'undefined') }}</td>
                        <td class="text-center" style="padding: 0.4rem !important;">
                            <router-link class="btn btn-primary"
                                         :to="{ name: 'users.update', params: { userId: user.id}}">
                                <fa :icon="['fas', 'pencil-alt']"></fa>
                            </router-link>
                            <button class="btn btn-danger" @click="deleteUser(user.id)">
                                <fa :icon="['fas', 'trash']"></fa>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row" v-else>
            <div class="col-12"><h4 class="mt-3 text-center">{{ $t('no_users') }}</h4></div>
        </div>
        <div class="row text-right">
            <div class="col text-right">
                <pagination classes="ml-auto" prefix="bottom" action="users/setFilter"></pagination>
            </div>
        </div>
    </section>

</template>
<script>
  import {mapGetters} from 'vuex'
  import Pagination from '~/components/Pagination'
  import swal from 'sweetalert2'

  export default {

    scrollToTop: false,
    middleware: 'auth',

    components: {
      Pagination
    },

    computed: mapGetters({
      users: 'users/list',
      currentIndex: 'pagination/current_page_start_index',
      total: 'pagination/total',
      userListLength: 'users/userListLength'
    }),

    metaInfo() {
      return {title: this.$t('user_list')}
    },

    created() {
      this.serFilter();
    },

    methods: {
      async serFilter() {
        await this.$store.dispatch('users/setFilter', this.$route.query)
      },
      updateSearch(e) {
        if (this.searchInput.length === 0 || this.searchInput.length >= 3) {
          this.$store.dispatch('users/setFilter', {search: this.searchInput})
        }
      },
      async deleteUser(userId) {
        const vm = this;

        swal({
          title: vm.$t('sure'),//'Are you sure?',
          text: vm.$t('user_will_deleted'),//'You will not be able to recover this user!',
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: vm.$t('yes_delete'),//'Yes, delete it!',
          cancelButtonText: vm.$t('no_keep_it'),//'No, keep it'
        }).then(async (result) => {

          if (!result.value && result.dismiss === 'cancel') {
            swal(
              vm.$t('canceled'),// 'Cancelled',
              vm.$t('user_saved'),// 'Your user is safe :)',
              'error'
            )
          }

          const {message, status} = await vm.$store.dispatch('users/deleteUser', userId)

          if (status === 'success') {
            await this.$store.dispatch('users/fetchUsers')
            swal(
              vm.$t('deleted'),// 'Deleted!',
              vm.$t('user_destroyed'),// 'Your user has been deleted.',
              'success'
            )
            return
          }

          (status === 'error') &&(swal('Cancelled', message || vm.$t('user_destroyed'), 'error'))
        })
      }
    },

    data() {
      return {
        searchInput: '',
        role: this.$route.query.role || 'all',
      }
    },

    watch: {
      role: function (val) {

        this.$store.dispatch('users/setFilter', {
          page: 1,
          search: this.searchInput,
          role: val
        })
      }
    }
  }
</script>
