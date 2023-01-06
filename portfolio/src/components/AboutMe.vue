<template>
  <section>
    <div class="titre-icon shadowed">
      <font-awesome-icon icon="fa-regular fa-user" class="icon" />
      <h1>À propos de moi</h1>
    </div>
    <div class="flex justify-between items-start mt-6">
      <img
        class="w-[250px] rounded-tl-xl rounded-br-xl"
        src="../assets/images/pdp.jpg"
        alt="Photo de moi"
      />
      <p class="ml-5">
        Je m’appelle Hugo, j’ai 21 ans. Je suis actuellement
        <b
          >étudiant en systèmes et réseau à l’Esaip, école d’ingénieur du
          numérique</b
        >.
        <br />
        <br />
        J’ai vécu pendant 18 ans à <b>l’île de la Réunion</b> où j’ai eu mon bac
        mention Bien au <b>lycée Lasalle Saint-Charles</b>. Pendant mon enfance,
        je me suis pris d’une passion pour <b>l’informatique</b>. Il m’est déjà
        arrivé de rester des journées entières sur mon ordinateur alors que mes
        amis me proposaient de profiter du soleil sur les plages réunionnaises.
        J'ai très tôt voulu que mon <b>activité professionnelle</b> se base sur
        le
        <b>numérique</b>
        et c’est chose faite aujourd’hui.
        <br />
        <br />
        J’ai choisi de m’installer en <b>Métropole</b> pour faire mes études
        supérieures mais aussi
        <b>me rapprocher de la modernité, de la technologie</b>. J'ai ce
        <b>souhait</b> de <b>rester à proximité des milieux qui innovent</b> et
        évoluent au sein du numérique.
        <br />
        <br />
        Je compte me spécialiser dans la majeure <b>Cybersécurité</b> durant mon
        cycle ingénieur et continuer à apprendre dans le développement Web que
        ce soit <b>frontend ou backend</b>.
      </p>
    </div>
    <div>
      <div class="titre-icon mt-10">
        <font-awesome-icon icon="fa-solid fa-chevron-right" class="icon" />
        <h1>Mes Centres d’intérêt</h1>
      </div>
      <div class="flex mt-5 h-16 justify-around">
        <img v-for="image in HobbyURL" :src="image" :alt="image" />
      </div>
      <div class="titre-icon mt-10">
        <font-awesome-icon icon="fa-solid fa-screwdriver-wrench" class="icon" />
        <h1>Mes Outils</h1>
      </div>
      <div class="flex mt-5 h-16 justify-around">
        <img v-for="image in ToolURL" :src="image" :alt="image" />
      </div>
    </div>
  </section>
</template>

<script>
import { ref } from "vue";

export default {
  data() {
    const hobbiesList = [
      "apple.png",
      "tesla.png",
      "linux.png",
      "microsoft.png",
      "HTB.png",
      "LandRover.png",
      "RollandGarros.png",
    ];
    const HobbyURL = ref([]);

    const toolsList = [
      "fedora.png",
      "terminal.png",
      "vscode.png",
      "github.png",
      "stackOverflow.png",
      "office.png",
      "brave.png",
    ];
    const ToolURL = ref([]);

    hobbiesList.forEach((image) => {
      HobbyURL.value.push(
        new URL(`../assets/images/hobbies/${image}`, import.meta.url).href
      );
    });

    toolsList.forEach((image) => {
      ToolURL.value.push(
        new URL(`../assets/images/tools/${image}`, import.meta.url).href
      );
    });

    return {
      HobbyURL,
      ToolURL,
    };
  },
};
</script>
