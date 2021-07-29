<template>
    <tr>
        <td class="text-danger">#1</td>
        <td class="text-info">Vue.js Eğitimi</td>
        <td class="text-success">CPNVUE</td>
        <td class="text-warning font-italic">25.00₺</td>
        <td>
            <button class="btn btn-sm btn-outline-danger mx-1">
                Sil
            </button>
            <router-link
            to="/update"
            tag="button"
            class="btn btn-sm btn-outline-warning mx-1"
            >
                Düzenle
            </router-link>

        </td>
    </tr>
</template>