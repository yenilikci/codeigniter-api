<template>
    <div class="row">
        <div class="col-md-8 offset-2 mt-5">
            <table v-if="courses.length > 0" class="table table-hover table-dark table-striped border-dark border shadow-lg">
                <thead>
                    <th>#id</th>
                    <th>Kursun Adı</th>
                    <th>Kupon Kodu</th>
                    <th>Kurs Ücreti</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <!-- courses ==> computed data, store getters access -->
                    <Course v-for="(course, i) in courses" :key="'course'+i" :course="course"/>
                </tbody>
            </table>

            <div v-else class="alert alert-danger text-center shadow-lg border-0">
                Henüz eklenmiş bir kurs <strong>bulunmamaktadır!</strong>
            </div>

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