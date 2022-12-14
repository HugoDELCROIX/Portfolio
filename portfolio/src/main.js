import { createApp } from "vue";
import App from "./App.vue";

import "./main.css";

import { library } from "@fortawesome/fontawesome-svg-core";

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

import {
  faEarthAmericas,
  faEnvelopeSquare,
  faChevronRight,
  faScrewdriverWrench,
} from "@fortawesome/free-solid-svg-icons";
import { faUser } from "@fortawesome/free-regular-svg-icons";
import {
  faLinkedin,
  faGithubSquare,
  faInstagramSquare,
  faStackOverflow,
} from "@fortawesome/free-brands-svg-icons";

library.add(
  faEarthAmericas,
  faLinkedin,
  faGithubSquare,
  faInstagramSquare,
  faStackOverflow,
  faEnvelopeSquare,
  faUser,
  faChevronRight,
  faScrewdriverWrench
);

createApp(App).component("font-awesome-icon", FontAwesomeIcon).mount("#app");
