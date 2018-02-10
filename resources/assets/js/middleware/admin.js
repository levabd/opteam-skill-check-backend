import store from '~/store'

export default (to, from, next) => {

  if (store.getters['auth/user'].role.name !== 'admin') {
    next({ name: 'home' })
  } else {
    next()
  }
}
