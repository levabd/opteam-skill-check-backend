<template>
    <ul class="pagination" v-if="last_page > 1" :class="classes">
        <li v-show="current_page != 1">
            <a href="#" @click.prevent="changePage(1)"><fa :icon="['fas', 'angle-double-left']" size="xs"></fa></a>
        </li>
        <li v-show="current_page > 10">
            <a href="#" aria-label="Previous" @click.prevent="changePage(back_to_page)">
                <span aria-hidden="true"><fa :icon="['fas', 'angle-left']" size="xs"></fa></span>
            </a>
        </li>
        <li v-for="page in page_numbers"
            :class="[ page === current_page ? 'active' : '']">
            <a href="#" @click.prevent="changePage(page)">{{ page }}</a>
        </li>
        <li v-show="current_page < last_page - 10">
            <a href="#" aria-label="Next" @click.prevent="changePage(forward_to_page)">
                <span aria-hidden="true"><fa :icon="['fas', 'angle-right']" size="xs"></fa></span>
            </a>
        </li>
        <li v-show="current_page != last_page">
            <a href="#" @click.prevent="changePage(last_page)"><fa :icon="['fas', 'angle-double-right']" size="xs"></fa></a>
        </li>
    </ul>
</template>

<script type="text/babel">

  import {mapGetters, mapActions} from 'vuex';
  import {SET_PAGINATION_ACTION_NAME} from '../store/mutation-types';

  export default {
    props: ['prefix', 'action', 'classes'],
    computed: mapGetters({
      current_page: 'pagination/current_page',
      back_to_page: 'pagination/back_to_page',
      page_numbers: 'pagination/page_numbers',
      forward_to_page: 'pagination/forward_to_page',
      last_page: 'pagination/last_page',
      total: 'pagination/total',
    }),
    methods: {
      changePage(pageNUmber) {
        // Log out the user.
        this.$store.dispatch('pagination/changePage', pageNUmber)
      }
    },
    mounted() {
      this.$store.dispatch('pagination/setAction', this.action);
    },

  }
</script>

<style scoped>
    /* Variables */
    .pagination {
        display: inline-block;
        padding-left: 0;
        margin: 20px 0;
        border-radius: 4px;
    }

    .pagination > li > a,
    .pagination > li > a:active,
    .pagination > li > a:focus,
    .pagination > li > a:hover,
    .pagination > li > span,
    .pagination > li > span:active,
    .pagination > li > span:focus,
    .pagination > li > span:hover {
        color: #000;
        border: 1px solid #dee2e6;
    }

    .pagination > .active > a,
    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover {
        background-color: #dee2e6;
        color: black;
        border: 1px solid #dee2e6;
    }

    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        line-height: 1.428571429;
        text-decoration: none;
        color: black;
        background-color: #fff;
        margin-left: -1px;
        border: 1px solid #dee2e6;
    }

    .pagination > li {
        display: inline;
    }

    .pull-left {
        float: left;
    }

    .pull-right {
        float: right;
    }

    a:hover {
        background-color: #dee2e6!important;
    }
</style>