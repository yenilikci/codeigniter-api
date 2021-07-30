<template>
  <div class="container">

    <h1 class="text-center mt-5 text-info">
      Vue.js İle Codeigniter Servisine Bağlantı
    </h1>

    <!--Note: CourseList => course-list -->
    <!-- <course-list></course-list> -->
    <!-- <NewCourse /> -->

    <transition name="page" mode="out-in">
      <router-view></router-view>
    </transition>

  </div>
</template>

<script>
  //import Courses from "./components/ListCourse/Courses"
  //import NewCourse from "./components/NewCourse"

  export default {
    components: {
      //CourseList or
      //CourseList: Courses,

      //NewCourse
    },

    //created lifecycle hook
    created() {
      this.$store.dispatch("initApp")
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

  .page-enter,
  .page-leave-active {
    opacity: 0;
    transform: translate(50px) scale(0);
  }

  .page-enter-active,
  .page-leave-active {
    transition: all .5s;
  }
</style>