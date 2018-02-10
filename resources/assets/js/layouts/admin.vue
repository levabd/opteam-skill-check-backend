<template>
    <div class="main-layout-admin"
         id="main-layout-admin"
         :class="{'sidenav-toggled': sideNavClosed}"
    >
        <admin-nav/>

        <div class="content-wrapper">
            <div class="container-fluid" id="page-top">
                <Child/>
            </div>

           <admin-footer anckor="page-top"/>
        </div>
    </div>
</template>

<script>
  import Footer from '../components/admin/Footer'
  import Nav from '../components/admin/Nav'

  import { mapGetters } from 'vuex'

  export default {
    middleware: 'auth',

    name: 'admin',
    data: () => ({
      appName: window.config.appName
    }),
    components: {
      'admin-footer': Footer,
      'admin-nav':  Nav
    },
    computed: mapGetters({
      user: 'auth/user',
      isAdmin: 'auth/isAdmin',
      sideNavClosed: 'adminMenu/isClosed',
    }),
    mounted(){
      try {
        const body =document.getElementsByTagName('body')[0]
        body.classList.add('fixed-nav')
        body.classList.add('sticky-footer')
      }catch(e){
        console.error(e);
      }


    }
  }
</script>
<style>
    #main-layout-admin{
        height: 100%;
    }
    body.fixed-nav {
        padding-top: 56px;
    }

    body.sticky-footer {
        margin-bottom: 56px;
    }

    @media (min-width: 992px) {
        .content-wrapper {
            margin-left: 250px;
        }
    }

    html {
        position: relative;
        min-height: 100%;
    }

    #main-layout-admin {
        overflow-x: hidden;
    }


    #main-layout-admin.fixed-nav {
        padding-top: 56px;
    }


    .content-wrapper {
        overflow-x: hidden;
        background: white;
    }

    .content-wrapper {
        min-height: calc(100vh - 56px);
        padding-top: 1rem;
    }

    #main-layout-admin.sticky-footer {
        margin-bottom: 56px;
    }

    #main-layout-admin.sticky-footer .content-wrapper {
        min-height: calc(100vh - 56px - 56px);
    }


    footer.sticky-footer {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 56px;
        background-color: #e9ecef;
        line-height: 55px;
    }

    @media (min-width: 992px) {
        footer.sticky-footer {
            width: calc(100% - 250px);
        }
    }

    @media (min-width: 992px) {
        #main-layout-admin.sidenav-toggled footer.sticky-footer {
            width: calc(100% - 55px);
        }
    }


</style>