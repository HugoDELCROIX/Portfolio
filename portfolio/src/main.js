import { createApp } from 'vue'
import App from './App.vue'

import './assets/main.css'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import {
  faGithub,
  faLinkedinIn,
  faInstagram,
  faTelegram,
  faVuejs
} from '@fortawesome/free-brands-svg-icons'
import {
  faChevronDown,
  faInbox,
  faGraduationCap,
  faHouseLaptop,
  faDiagramProject,
  faThumbTack,
  faChalkboardTeacher,
  faComment,
  faCube
} from '@fortawesome/free-solid-svg-icons'

library.add(
  faGithub,
  faLinkedinIn,
  faInstagram,
  faTelegram,
  faInbox,
  faChevronDown,
  faGraduationCap,
  faHouseLaptop,
  faDiagramProject,
  faThumbTack,
  faChalkboardTeacher,
  faComment,
  faCube,
  faVuejs
)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).mount('#app')
