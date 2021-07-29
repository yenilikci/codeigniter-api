<template>
  <div class="container">

    <h1 class="text-center mt-5 text-info">
      Vue.js İle Codeigniter Servisine Bağlantı
    </h1>

    <!--CourseList => course-list -->
    <course-list></course-list>

    <NewCourse />

  </div>
</template>

<script>
  import Courses from "./components/ListCourse/Courses"
  //import NewCourse from "./components/NewCourse"

  export default {
    components: {
      //CourseList or
      CourseList: Courses,

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