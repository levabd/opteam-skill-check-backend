<template>
    <div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright © Your Website 2018</small>
                </div>

            </div>  <!-- Scroll to Top Button-->

        </footer>
        <a class="scroll-to-top rounded" :href="anckorId" style="display: none;">
            <fa :icon="['fas', 'angle-up']" />
        </a>
    </div>

</template>

<script>

  const jQuery = require("jquery-easing");

  export default {
    props: {
      anckor: {
        type: String,
        default: 'page-top'
      },
    },
    computed: {
      anckorId() {
        return `#${this.anckor}`
      }
    },
    mounted() {

      // Scroll to top button appear
      jQuery(document).scroll(function () {
        var scrollDistance = jQuery(this).scrollTop();
        if (scrollDistance > 100) {
          jQuery('.scroll-to-top').fadeIn();
        } else {
          jQuery('.scroll-to-top').fadeOut();
        }
      });
      // Configure tooltips globally
      jQuery('[data-toggle="tooltip"]').tooltip()
      // Smooth scrolling using jQuery easing
      jQuery(document).on('click', 'a.scroll-to-top', function (event) {
        var $anchor = jQuery(this);
        jQuery('html, body').stop().animate({
          scrollTop: (jQuery($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
      });
    }
  }
</script>
<style scoped>

    footer{
        -webkit-transition: width 0.2s;
        -moz-transition: width 0.2s;
        -ms-transition: width 0.2s;
        -o-transition: width 0.2s;
        transition: width 0.2s;
        will-change: transition;
    }

    .scroll-to-top {
        position: fixed;
        right: 15px;
        bottom: 3px;
        display: none;
        width: 50px;
        height: 50px;
        text-align: center;
        color: white;
        background: rgba(52, 58, 64, 0.5);
        line-height: 45px;
    }

    .scroll-to-top:focus, .scroll-to-top:hover {
        color: white;
    }

    .scroll-to-top:hover {
        background: #343a40;
    }

    .scroll-to-top i {
        font-weight: 800;
    }

</style>