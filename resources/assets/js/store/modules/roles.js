import axios from 'axios'
import {
  FETCH_ROLE_LIST_SUCCESS, FETCH_ROLE_LIST_FAILURE
} from '../mutation-types'

// initial state
export const state = {
  roles: null,
};

// getters
export const getters = {
  list: state => state.roles,
};

// actions
export const actions = {
  async fetchAll({commit}) {
    try {
      const {data} = await axios.get('/api/admin/roles')

      commit(FETCH_ROLE_LIST_SUCCESS, data)
    } catch (e) {
      commit(FETCH_ROLE_LIST_FAILURE)
    }
  }
}

// mutations
export const mutations = {
  [FETCH_ROLE_LIST_SUCCESS](state, roles) {
    state.roles = roles;
  },
  [FETCH_ROLE_LIST_FAILURE](state) {
    state.roles = null;
  },
};
