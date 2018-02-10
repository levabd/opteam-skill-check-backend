import axios from 'axios'
import * as types from '../mutation-types'

import app from '../../app'
// state
export const state = {
  users: null,
  user: null,
  filter: {
    page: 1,
    role: null,
    search: null,
  }
}

// getters
export const getters = {
  list: state => state.users,
  user: state => state.user,
  filter: state => state.filter,
  userListLength: state => state.users && state.users.length,
}

// mutations
export const mutations = {
  [types.FETCH_USER_SUCCESS](state, {user}) {
    state.user = user
  },
  [types.FETCH_USER_FAILURE](state) {
    state.user = null
  },
  [types.FETCH_USER_LIST_SUCCESS](state, {users}) {
    state.users = users
  },
  [types.FETCH_USER_LIST_FAILURE](state) {
    state.users = null
  },
  [types.SET_USER_LIST_FILTER](state, filterData) {

    if (typeof filterData === 'undefined') {
      return
    }
    let role = null;
    if (['all', 'trainee', 'trainer', 'admin'].indexOf(filterData.role) != -1) {

      (filterData.role !== 'all') && (role = filterData.role)
    } else {
      role = state.filter.role
    }

    try {
      state.filter.page = filterData.page || state.filter.page
      state.filter.role = role
      state.filter.search = filterData.search || state.filter.search
    } catch (e) {
      console.warn(e);
    }
  },
}

// actions
export const actions = {

  async fetchUsers({dispatch, commit, state}) {
    try {
      const {data} = await axios.get('/api/admin/users', {
        params: JSON.parse(JSON.stringify(state.filter))
      })

      commit(types.FETCH_USER_LIST_SUCCESS, {users: data.data})
      delete data.data
      dispatch('pagination/setPagination', data, {root: true})
    } catch (e) {
      commit(types.FETCH_USER_LIST_FAILURE)
    }
  },
  async setFilter({commit, dispatch, state}, filter) {
    commit(types.SET_USER_LIST_FILTER, filter)

    await dispatch('fetchUsers')

    // app.$router.push({name: 'users.list', query: JSON.parse(JSON.stringify(state.filter))})
  },
  async fetchUser({commit}, id) {
    try {
      const {data} = await axios.get('/api/admin/users/' + id + '/edit')

      commit(types.FETCH_USER_SUCCESS, {user: data})
    } catch (e) {
      commit(types.FETCH_USER_FAILURE)
    }
  },
  async updateUser({commit}, user) {
    try {
      const {data} = await axios.get('/api/admin/users/' + id + '/edit')

      commit(types.FETCH_USER_SUCCESS, {user: data})
    } catch (e) {
      commit(types.FETCH_USER_FAILURE)
    }
  },
  async deleteUser({commit}, userId) {
    try {
      const response = await axios.delete('/api/admin/users/' + userId)
      return response.data;
    } catch (e) {
      console.error(e);
    }
  }

}
