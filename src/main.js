import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/main.css'
import { createI18n } from 'vue-i18n'
import { library } from '@fortawesome/fontawesome-svg-core'

import en from './locales/en.json'
import fr from './locales/fr.json'

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
  faFigma,
  faCreativeCommonsBy,
  faCreativeCommonsNcEu,
  faCreativeCommons
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
  faXmark,
  faToggleOff,
  faToggleOn,
  faSun,
  faMoon,
  faGlobe,
  faLanguage,
  faArrowRight
} from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
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
  faFigma,
  faToggleOff,
  faToggleOn,
  faSun,
  faMoon,
  faCreativeCommonsBy,
  faCreativeCommonsNcEu,
  faCreativeCommons,
  faGlobe,
  faLanguage,
  faArrowRight
)

const messages = {
  en: en,
  fr: fr
}

const savedLocale = localStorage.getItem('locale') || 'fr'

const i18n = createI18n({
  locale: savedLocale,
  messages
})

const app = createApp(App)
app.component('font-awesome-icon', FontAwesomeIcon)
app.use(router)
app.use(i18n)
app.mount('#app')
