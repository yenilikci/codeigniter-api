<template>
  <div class="container">

    <h1 class="text-center mt-5 text-info">
      Vue.js İle Codeigniter Servisine Bağlantı
    </h1>

    <!--appList => app-list -->
    <app-list></app-list>

    <NewCourse />

  </div>
</template>

<script>
  import List from "./pages/List"
  //import NewCourse from "./pages/NewCourse"

  export default {
    components: {
      //List or
      appList: List,

      //NewCourse
    }
  }
</script>

<style>
  html {
    height: 100% !important;
  }

  body {
    background-image: linear-gradient(to right top, #051937, #002b2d, #203028, #32342d);
  }
</style>