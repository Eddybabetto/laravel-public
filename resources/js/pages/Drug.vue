<script setup>
import AuthBase from '@/layouts/auth/AuthSimpleLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({ data: Object })
</script>

<template>
  <AuthBase title="" description="">

    <Head title="Drug" />
    <h1>Welcome</h1>
    <br/>
    <p>{{ data }}</p>
    <br/>

    <!-- <tbody>
      <tr>
        <th scope="row">id</th>
        <th scope="row">nome</th>
      </tr>

      <tr v-for="company in data">
        <td>{{ company["id"] }}</td>
        <td>{{ company.name }}</td>
      </tr>
    </tbody> -->
  </AuthBase>
</template>