<template>
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <table class="table table-hover table-dark table-striped border-dark border shadow-lg">
                <thead>
                    <th>#id</th>
                    <th>Kursun Adı</th>
                    <th>Kupon Kodu</th>
                    <th>Kurs Ücreti</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <!-- courses ==> computed data, store getters access -->
                    <Course v-for="course in courses" :key="course" :course="course"/>
                </tbody>
            </table>

            <router-link to="/new" tag="button" class="btn btn-dark text-info float-right">
                Yeni Ekle
            </router-link>

        </div>
    </div>
</template>

<script>
    import Course from "./Course"
    export default {
        components: {
            Course
        },
        // store getters access
        computed: {
            courses() {
                return this.$store.getters.getCourses
            }
        }
    }
</script>