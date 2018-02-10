<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.html">{{appName}}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-responsive" aria-controls="navbar-responsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-responsive">

            <side-menu :items="menuItems" id="left-side-menu" :start="true"/>

            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler" @click.prevent="toggleSideNav">
                        <fa :icon="['fas', 'angle-left']" size="xs"></fa>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <locale-dropdown/>
            </ul>

            <top-menu/>

        </div>
    </nav>
</template>

<script>

  import jQuery from 'jquery'
  import LocaleDropdown from '../LocaleDropdown'
  import SideMenu from './SideMenu.vue'
  import TopMenu from './TopMenu.vue'

  import { mapGetters } from 'vuex'

  export default{
    components: {
      LocaleDropdown,
      SideMenu,
      TopMenu
    },
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
      menuItems: 'adminMenu/menu',
    }),
    methods:{
      toggleSideNav(){
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
      }
    },
//    mounted(){
//      (function($) {
//        "use strict"; // Start of use strict
//
//        // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
//        $('#main-layout-admin.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse').on('mousewheel DOMMouseScroll', function(e) {
//          var e0 = e.originalEvent,
//            delta = e0.wheelDelta || -e0.detail;
//          this.scrollTop += (delta < 0 ? 1 : -1) * 30;
//          e.preventDefault();
//        });
//      })(jQuery); // End of use strict
//    },
  }
</script>

<style lang="scss">

    #mainNav {
        .navbar-collapse {
            overflow: auto;
            max-height: 75vh;

            .navbar-nav{
                .nav-item{
                    .nav-link{
                        cursor: pointer;
                    }
                }
            }
        }
    }

</style>
<style>
    #mainNav .navbar-collapse .sidenav-toggler {
        display: none;
    }

    #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
        position: relative;
        min-width: 45px;
    }

    #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
        float: right;
        width: auto;
        content: '\f105';
        border: none;
        font-family: 'FontAwesome';
    }

    #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link .indicator {
        position: absolute;
        top: 5px;
        left: 21px;
        font-size: 10px;
    }

    #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown.show > .nav-link:after {
        content: '\f107';
    }

    #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
        overflow: hidden;
        max-width: none;
        text-overflow: ellipsis;
    }

    @media (min-width: 992px) {
        #mainNav .navbar-brand {
            width: 250px;
        }
        #mainNav .navbar-collapse {
            overflow: visible;
            max-height: none;
        }
        #mainNav .navbar-collapse .navbar-sidenav {
            position: absolute;
            top: 0;
            left: 0;
            flex-direction: column;
            margin-top: 56px;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item {
            width: 250px;
            padding: 0;
            transition: width 0.2s;
            will-change: transition;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
            padding: 1em;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
            padding-left: 0;
            list-style: none;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li,
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li {
            width: 250px;
            transition: width 0.2s .2s;
            will-change: transition;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
            padding: 1em;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a {
            padding-left: 2.75em;
        }
        #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
            padding-left: 3.75em;
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
            min-width: 0;
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
            width: 24px;
            text-align: center;
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
            max-width: 300px;
        }
    }

    #mainNav.fixed-top .sidenav-toggler {
        display: none;
    }

    @media (min-width: 992px) {
        #mainNav.fixed-top .navbar-sidenav {
            height: calc(100vh - 112px);
        }
        #mainNav.fixed-top .sidenav-toggler {
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            margin-top: calc(100vh - 56px);
        }
        #mainNav.fixed-top .sidenav-toggler > .nav-item {
            width: 250px;
            padding: 0;
        }
        #mainNav.fixed-top .sidenav-toggler > .nav-item > .nav-link {
            padding: 1em;
        }
    }

    #mainNav.fixed-top.navbar-dark .sidenav-toggler {
        background-color: #212529;
    }

    #mainNav.fixed-top.navbar-dark .sidenav-toggler a i {
        color: #adb5bd;
    }

    #mainNav.fixed-top.navbar-light .sidenav-toggler {
        background-color: #dee2e6;
    }

    #mainNav.fixed-top.navbar-light .sidenav-toggler a i {
        color: rgba(0, 0, 0, 0.5);
    }

    #main-layout-admin.sidenav-toggled #mainNav.fixed-top .sidenav-toggler {
        overflow-x: hidden;
        /*width: 55px;*/
    }
    #mainNav.fixed-top .sidenav-toggler .nav-item,
    #mainNav.fixed-top .sidenav-toggler .nav-link {
        width: 250px !important;
        transition: width 0.2s ;
        will-change: transition;
    }

    #main-layout-admin.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-item,
    #main-layout-admin.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-link {
        width: 55px !important;
    }


    #mainNav.static-top .sidenav-toggler {
        display: none;
    }

    @media (min-width: 992px) {
        #mainNav.static-top .sidenav-toggler {
            display: flex;
        }
    }

    #sidenavToggler i {
        font-weight: 800;
    }
    .navbar-sidenav-tooltip.show {
        display: none;
    }

    @media (min-width: 992px) {
        #main-layout-admin.sidenav-toggled .content-wrapper {
            margin-left: 55px;
        }
    }

    #main-layout-admin.sidenav-toggled .navbar-sidenav {
        /*width: 55px;*/
        transition: width 0.2s;
        will-change: transition;
    }

    #main-layout-admin.sidenav-toggled .navbar-sidenav .nav-item,
    #main-layout-admin.sidenav-toggled .navbar-sidenav .nav-link {
        width: 55px !important;
    }

    #main-layout-admin.sidenav-toggled .navbar-sidenav .nav-item:after,
    #main-layout-admin.sidenav-toggled .navbar-sidenav .nav-link:after {
        display: none;
    }

    #main-layout-admin.sidenav-toggled .navbar-sidenav .nav-item {
        white-space: nowrap;
    }

    #main-layout-admin.sidenav-toggled .navbar-sidenav-tooltip.show {
        display: flex;
    }

    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
        color: #868e96;
    }

    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
        color: #868e96;
    }

    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
        color: #adb5bd;
    }

    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
        color: #868e96;
    }

    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
    #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
        color: #adb5bd;
    }

    #mainNav.navbar-dark .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
        color: #adb5bd;
    }

    @media (min-width: 992px) {
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
            background: #343a40;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a {
            color: white !important;
            background-color: #495057;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:hover {
            color: white;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
            background: #343a40;
        }
    }


    svg[data-icon=angle-left]{
        transform: rotate(0deg);
        transition: transfom .2s;
    }

    #main-layout-admin.sidenav-toggled svg[data-icon="angle-left"]{
        transform: rotate(180deg);
    }


</style>
