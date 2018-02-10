import * as types from '../mutation-types'

// initial state
export const state = {
  offset: 5,
  jump_length: 10,

  page: 1,
  total: 0,
  per_page: 0,
  current_page: 0,
  last_page: 0,
  from: 0,
  to: 0,
  action: 'undefinedAction'
}

// getters
export const getters = {
  total: state => state.total,
  current_page: state => state.current_page,
  page_numbers: state => {
    let from = state.current_page - state.offset
    if (from < 1) {
      from = 1
    }
    let to = from + (state.offset * 2)
    if (to >= state.last_page) {
      to = state.last_page
    }
    const pagesArray = []
    while (from <= to) {
      pagesArray.push(from)
      from++
    }
    return pagesArray
  },
  back_to_page: state => {
    const prevPages = state.current_page - state.jump_length

    return prevPages > 0 ? prevPages : 1
  },
  forward_to_page: state => {
    return state.last_page - state.current_page > state.jump_length
      ? state.current_page + state.jump_length
      : state.last_page
  },
  last_page: state => state.last_page,
  per_page: state => state.per_page,
  current_page_start_index: state => state.current_page === 1 ? 0 : state.current_page * state.per_page,
}

// actions
export const actions = {
  changePage({dispatch, state}, pageNumber) {
    dispatch(state.action, {page: pageNumber}, {root: true})
  },
  setAction({commit}, action) {
    commit(types.SET_PAGINATION_ACTION_NAME, action)
  },
  setPagination({commit}, data) {
    commit(types.RECEIVE_PAGINATION, data)
  }
}

// mutations
export const mutations = {
  [types.RECEIVE_PAGINATION](state, pagination) {

    state.total = pagination.total
    state.per_page = pagination.per_page
    state.current_page = pagination.current_page
    state.last_page = pagination.last_page
    state.next_page_url = pagination.next_page_url
    state.prev_page_url = pagination.prev_page_url
    state.from = pagination.from
    state.to = pagination.to
  },
  [types.SET_PAGINATION_ACTION_NAME](state, action) {
    state.action = action
  }
}

