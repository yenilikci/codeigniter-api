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
                    <Course v-for="index in 10" :key="index" />
                </tbody>
            </table>
            <button class="btn btn-dark text-info float-right">
                Yeni Ekle
            </button>
        </div>
    </div>
</template>

<script>
    import Course from "./Course"
    export default {
        components: {
            Course
        }
    }
</script>