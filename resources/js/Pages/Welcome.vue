<template>
  <layout>
    <h1>Hello!</h1>
    <inertia-link :href="route('about')">About page</inertia-link>
  </layout>
</template>

<script>
  import Layout from '@/Shared/Layout'

  export default {
    components: {
      Layout,
    }
  }
</script>
