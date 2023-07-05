import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/main.css'

import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import {
  faGithub,
  faLinkedinIn,
  faInstagram,
  faTelegram,
  faVuejs,
  faLinux,
  faApple,
  faWindows,
  faFedora,
  faPython,
  faPhp,
  faSymfony,
  faJs,
  faJava,
  faTrello,
  faFigma
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
  faCube,
  faBars,
  faXmark
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
  faVuejs,
  faBars,
  faXmark,
  faLinux,
  faApple,
  faWindows,
  faFedora,
  faPython,
  faPhp,
  faSymfony,
  faJs,
  faJava,
  faTrello,
  faFigma
)

createApp(App).component('font-awesome-icon', FontAwesomeIcon).use(router).mount('#app')
