import axios from 'axios'
import {
  MENU_CLOSED, MENU_OPENED
} from '../../mutation-types'

import app from '../../../app'
// state
export const state = {
  open: true,
  menuItems: [
    {
      id: 'menu-dashboard',
      routeName: 'admin.dashboard',
      title: 'dashboard',
      icon: 'level-up-alt',
      tooltip: 'dashboard',
      query: null,
      parentRouteName: null,
      active: false,
      roles: ['admin', 'trainer'],
      level: 1
    }, {
      id: 'menu-statistics',
      routeName: 'statistics',
      title: 'statistics',
      tooltip: 'statistics',
      query: null,
      icon: 'chart-pie',
      active: false,
      parentRouteName: null,
      roles: ['admin', 'trainer'],
      level: 1,
      items: [
        {
          id: 'menu-users-list',
          routeName: 'admin.users.list',
          query: app.$store.state.users.filter,
          title: 'user_list',
          tooltip: 'user_list',
          parentRouteName: 'users',
          active: false,
          roles: ['admin', 'trainer'],
          level: 2
        },
        {
          id: 'menu-users-list2',
          routeName: 'admin.users.list',
          query: app.$store.state.users.filter,
          title: 'user_list',
          tooltip: 'user_list',
          active: false,
          parentRouteName: 'users',
          roles: ['admin', 'trainer'],
          level: 2
        },
        {
          id: 'menu-users-list3',
          routeName: 'users.list',
          query: null,
          title: 'user_list',
          tooltip: 'user_list',
          active: false,
          parentRouteName: 'users',
          roles: ['admin', 'trainer'],
          level: 2,
          items: [
            {
              id: 'menu-users-list4',
              routeName: 'users.list',
              query: null,
              title: 'user_list',
              tooltip: 'user_list',
              active: false,
              parentRouteName: 'users.list',
              roles: ['admin', 'trainer'],
              level: 3
            },
          ]
        }
      ]
    }, {
      id: 'menu-users-list5',
      routeName: 'users.list',
      query: null,
      title: 'user_list',
      icon: 'users',
      tooltip: 'users',
      active: false,
      parentRouteName: null,
      roles: ['admin', 'trainer'],
      level: 1
    },
    {
      id: 'menu-courses',
      routeName: 'courses.list',
      query: null,
      title: 'courses_list',
      icon: 'clipboard',
      active: false,
      tooltip: 'courses_list',
      parentRouteName: null,
      roles: ['admin', 'trainer'],
      level: 1
    },
    {
      id: 'menu-tests',
      routeName: 'tests.list',
      query: null,
      title: 'test_list',
      tooltip: 'test_list',
      icon: 'question',
      active: false,
      parentRouteName: null,
      roles: ['admin', 'trainer'],
      level: 1
    },
    {
      id: 'menu-gates',
      routeName: 'gates.list',
      query: null,
      title: 'gate_list',
      active: false,
      tooltip: 'gate_list',
      icon: 'level-up-alt',
      parentRouteName: null,
      roles: ['admin', 'trainer'],
      level: 1
    }
  ]
}

// getters
export const getters = {
  isOpen: state => state.open,
  isClosed: state => !state.open,
  menu: state => state.menuItems,
}

// mutations
export const mutations = {
  [MENU_CLOSED](state) {
    state.open = true
  },
  [MENU_OPENED](state) {
    state.open = false
  },
}

// actions
export const actions = {

  toggleMenu({commit, state}) {

    if (state.open === true) {
      commit(MENU_OPENED)
      return
    }
    if (state.open === false) {
      commit(MENU_CLOSED)
    }
  }
}
