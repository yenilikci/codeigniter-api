<template>
    <tr>
        <td class="text-danger"># {{ course.id }}</td>
        <td class="text-info">{{ course.title }}</td>
        <td class="text-success">{{ course.couponCode }}</td>
        <td class="text-warning font-italic">{{ course.price }}₺</td>
        <td>
            <button class="btn btn-sm btn-outline-danger mx-1">
                Sil
            </button>
            <router-link to="/update" tag="button" class="btn btn-sm btn-outline-warning mx-1">
                Düzenle
            </router-link>

        </td>
    </tr>
</template>

<script>
    export default {
        /* practice-1
          props: {
              course: {
                  type: Object,
                  required: true
              }
          }
        */

        // practice-2
        props: ["course"]

    }
</script>