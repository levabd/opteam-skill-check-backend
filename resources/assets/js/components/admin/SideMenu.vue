<template>
    <ul :class="{
             'navbar-nav navbar-sidenav': start,
             'sidenav-second-level': (level+1)===2 && !start,
             'sidenav-third-level': (level+1)===3,
             'collapse':(level+1)===3||(level+1)===2
             }" :id="id">

        <li v-for="item in items"
            class="nav-item"
            data-toggle="tooltip"
            :data-original-title="$t(item.tooltip)"
            data-placement="right"
            :key="item.id">

            <!-- Dropdown -->
            <a v-if="hasChildren(item)"
               data-toggle="collapse"
               @click="toggleSideNav"
               class="nav-link nav-link-collapse collapsed"
               :href="'#'+item.id"
               :aria-expanded="item.active">
                <fa v-if="item.icon" :icon="['fas', item.icon]" fixed-width/>
                <span class="nav-link-text">{{ $t(item.title) }}</span>
                <fa :icon="['fas', 'angle-right']" fixed-width/>
            </a>
            <side-menu-item
                    v-if="hasChildren(item)"
                    :level="item.level"
                    :items="item.items"
                    :id="item.id"/>

            <!-- Link -->
            <router-link v-else
                         :data-parent="'#'+id"
                         :to="{ name: item.routeName, query: item.query||null }"
                         class="nav-link">
                <fa v-if="item.icon" :icon="['fas', item.icon]" fixed-width/>
                <span class="nav-link-text">{{ $t(item.title) }}</span>
            </router-link>
        </li>
    </ul>
</template>
<script type="text/babel">
  import {mapGetters} from 'vuex'
  import jQuery from 'jquery'

  export default {
    name: 'side-menu-item',
    props: {
      items: {
        type: Array, default: function () { return []},
      },
      id: {
        type: String
      },
      start: {
        type: Boolean,
        default: false
      },
      level: {
        type: Number,
        default: 1
      },
    },
    components: {
      'side-menu-item': require('./SideMenu.vue')
    },
    mounted() {
      jQuery("#left-side-menu span.nav-link-text").addClass("open");
    },
    computed: mapGetters({
      sideNavClosed: 'adminMenu/isClosed',
      sideNavOpened: 'adminMenu/isOpen',
    }),
    methods: {



      toggleSideNav(){
        if (this.sideNavOpened){
          return
        }

        if (!this.sideNavClosed){
          jQuery("#left-side-menu span.nav-link-text").removeClass("open");
        }

        this.$store.dispatch('adminMenu/toggleMenu')
        let vm = this;
        jQuery('#sidenavToggler').one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(){
          if (!vm.sideNavClosed){
            jQuery("#left-side-menu span.nav-link-text").addClass("open");
          }
        })

        jQuery(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show");
      },
      needShowing(item = {}) {
        if (!this.$route.$parent) {
          return false;
        }
        return item.parentRouteName === this.$route.$parent.name
      },

      /**
       * Определить, есть ли у элемента дочерние элементы
       * @param item
       */
      hasChildren(item = {}) {
        return item.items &&
          item.items.length
      },

      /**
       * Проверяет обладает пользователь ролью, которой доступен данный пункт меню
       *
       * @param haystack -массив ролей
       * @returns {boolean}
       */
      userHasRole(haystack) {

        if (!haystack) {
          return true;
        }

        // see rresources/views/layouts/app.blade.php:39
        let roles = this.$root.window.Laravel.roles;

        return roles.some(function (v) {
          return haystack.indexOf(v) >= 0;
        });
      },

      setMenu($event) {
        console.log($event);
      }
    }
  }
</script>
<style lang="scss">
    @import '~@/_variables.scss';

    .navbar-sidenav {
        .nav-link-text {
            display: none;
            opacity: 0;
            transition: opacity .4s .1s;

            + svg[data-icon=angle-right] {
                float: right !important;
                display: none;
            }

            &.open {
                display: inline-block !important;
                opacity: 1;
                + svg[data-icon=angle-right] {
                    float: right !important;
                    display: block;
                }
            }
        }
    }

    .navbar-nav.navbar-sidenav {
        .nav-item {
            &:hover {
                background-color: darken($sideNavBgColor, 1);
            }
            .nav-link {

                .svg-inline--fa {
                    font-size: 1rem;
                }
            }
        }
    }

    /* Toggle icon */
    a.nav-link.nav-link-collapse {
        transition: width 1s 0.2s;
    }

    .nav-link.nav-link-collapse[aria-expanded=true] {
        background-color: darken($sideNavBgColor, 0.1);

        svg[data-icon=angle-right] {
            transform: rotate(90deg);
        }
    }

    /* Active route */
    .nav-link.router-link-exact-active.router-link-active {
        background-color: darken($sideNavBgColor, 1);
    }
</style>