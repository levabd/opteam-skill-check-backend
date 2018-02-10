import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/components/App'
import mixins from '~/mixins'

import '~/plugins'
import '~/components'

Vue.config.productionTip = false
Vue.mixin({methods: mixins})

const app = new Vue({
  i18n,
  store,
  router,
  ...App
})

export default app