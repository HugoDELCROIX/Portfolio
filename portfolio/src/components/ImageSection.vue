<template>
  <section class="w-1/2 h-auto m-auto rounded-md bg-section p-10">
    <div class="flex gap-2 items-center text-titreSection font-bold">
      <font-awesome-icon
        icon="fa-regular fa-user"
        class="bg-white text-background p-1.5 rounded-md"
      />
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
    <div class="flex gap-2 items-center text-titreSection font-bold mt-10">
      <font-awesome-icon
        icon="fa-solid fa-chevron-right"
        class="bg-white text-background p-1.5 rounded-md"
      />
      <h1>Mes Centres d’intérêt</h1>
      <!-- do a v-for with an array of every logos -->
    </div>
  </section>
</template>

<script setup></script>
