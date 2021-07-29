<template>
    <div class="row">
        <div class="col-md-6 offset-3">
            <form class="card mt-5 p-3 border border-dark bg-dark shadow-lg">
                <div class="form-group">
                    <label class="text-light">Kursun Adı</label>
                    <input type="text" class="bg-dark border-info text-info form-control"
                        placeholder="Kursun adını giriniz...">
                </div>
                <div class="form-group">
                    <label class="text-light">Kupon Adı</label>
                    <input type="text" class="bg-dark border-success text-success form-control"
                        placeholder="Kupon kodunu giriniz...">
                </div>
                <div class="form-group">
                    <label class="text-light">Kurs Ücreti</label>
                    <input type="text" class="bg-dark border-warning text-warning form-control"
                        placeholder="Kursun ücretini giriniz...">
                </div>
                <div class="button-container">
                    <router-link
                    to="/"
                    tag="button"
                    class="btn btn-outline-danger mx-1">
                        İptal
                    </router-link>
                    <button type="submit" class="btn btn-outline-success mx-1">Kaydet</button>
                </div>
            </form>
        </div>
    </div>
</template>