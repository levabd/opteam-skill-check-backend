<template>
    <ul class="navbar-nav" :class="{'ml-auto': !user || !isAdmin}">
        <!-- Authenticated -->
        <li v-if="user" class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark"
               href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img :src="user.photo_url" class="rounded-circle profile-photo mr-1">
                {{ user.name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <router-link :to="{ name: 'settings.profile' }" class="dropdown-item pl-3">
                    <fa icon="cog" fixed-width/>
                    {{ $t('settings') }}
                </router-link>

                <div class="dropdown-divider"></div>
                <a @click.prevent="logout" class="dropdown-item pl-3"  href="#">
                    <fa icon="sign-out-alt" fixed-width/>
                    {{ $t('logout') }}
                </a>
            </div>
        </li>
        <!-- Guest -->
        <template v-else>
            <li class="nav-item">
                <router-link :to="{ name: 'login' }" class="nav-link" active-class="active">
                    {{ $t('login') }}
                </router-link>
            </li>
            <li class="nav-item">
                <router-link :to="{ name: 'register' }" class="nav-link" active-class="active">
                    {{ $t('register') }}
                </router-link>
            </li>
        </template>
    </ul>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default{
    data() {
      return  {
        appName: window.config.appName,
        toggled: false
      }
    },
    computed: mapGetters({
      user: 'auth/user',
      isAdmin: 'auth/isAdmin',
      sideNavClosed: 'adminMenu/isClosed',
    }),
    }
</script>