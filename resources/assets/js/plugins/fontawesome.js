import Vue from 'vue'
import fontawesome from '@fortawesome/fontawesome'
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

Vue.component('fa', FontAwesomeIcon)

// import { } from '@fortawesome/fontawesome-free-regular/shakable.es'

import  {
  faUser,
  faLock,
  faSignOutAlt,
  faCog,
  faUsers,
  faAngleDoubleLeft,
  faAngleDoubleRight,
  faAngleLeft,
  faAngleRight,
  faPencilAlt,
  faAngleUp,
  faTrash,
  faChartPie,
  faKeyboard,
  faQuestion,
  faClipboard,
  faLevelUpAlt
} from '@fortawesome/fontawesome-free-solid/shakable.es'

import {
  faGithub, faFacebook, faLinkedin
} from '@fortawesome/fontawesome-free-brands/shakable.es'

fontawesome.library.add(
  faUser,
  faLock,
  faSignOutAlt,
  faCog,
  faGithub,
  faFacebook,
  faLinkedin,
  faUsers,
  faAngleDoubleLeft,
  faAngleDoubleRight,
  faAngleLeft,
  faPencilAlt,
  faAngleRight,
  faAngleUp,
  faTrash,
  faChartPie,
  faKeyboard,
  faQuestion,
  faClipboard,
  faLevelUpAlt
)
