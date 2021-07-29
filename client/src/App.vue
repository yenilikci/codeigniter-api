<template>
  <div class="container">
    <h3 class="text-center mt-5">Codeigniter Api ile Vue.js Client Uygulaması</h3>
    <div class="d-flex justify-content-center mt-5 border border-primary p-5 shadow">
      <button @click="get" class="btn btn-primary mr-3">
        GET
      </button>
      <button @click="save" class="btn btn-success mr-3">
        SAVE
      </button>
      <button @click="update" class="btn btn-warning mr-3">
        UPDATE
      </button>
      <button @click="remove" class="btn btn-danger mr-3">
        DELETE
      </button>
    </div>
    <hr>
    <ul class="list-group">
      <li class="list-group-item" v-for="course in courses" v-bind:key="course.id">
        <div class="card">
          <div class="card-header">
            <h4 class="text-primary">{{ course.title }}</h4>
          </div>
          <div class="card-body">
            <strong>CODE: <span class="text-success">{{ course.couponCode }}</span> </strong>
          </div>
          <div class="card-footer">
            <h5 class="text-danger">
              {{ course.price }} TL
            </h5>
          </div>
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
  import axios from "axios"
  export default {
    data() {
      return {
        courses: []
      }
    },
    methods: {
      get() {
        axios.get("http://localhost/codeigniter-api/api/get_all_data")
          .then(response => {
            // console.log(response.data);
            this.courses = response.data;
          })
      },
      save() {
        let course = {
          title: "MySQL Eğtimi",
          couponCode: "SQLDSC",
          price: 20.00
        }
        axios.post("http://localhost/codeigniter-api/api/save", JSON.stringify(course))
          .then(response => console.log(response));
      },
      update() {
        let course = {
          title: "Codeigniter ile CMS",
          couponCode: "CICMS",
          price: 50.00,
          id: 4
        }
        axios.post("http://localhost/codeigniter-api/api/update", JSON.stringify(course))
          .then(response => console.log(response));
      },
      remove() {
        let course = {
          id: 4
        }
        axios.post("http://localhost/codeigniter-api/api/delete", JSON.stringify(course))
          .then(response => console.log(response));
      }
    }
  }
</script>