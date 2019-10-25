<template>
  <layout>
    <h1>Hello!</h1>
    <ul>
      <li>
        <inertia-link :href="route('about')">About page</inertia-link>
      </li>
      <li>
        <inertia-link :href="route('register')">Register</inertia-link>
      </li>
      <li>
        <inertia-link :href="route('login')">Login</inertia-link>
      </li>
      <li>
        <inertia-link :href="route('verification')">Verification</inertia-link>
      </li>
    </ul>
  </layout>
</template>

<script>
import Layout from '../Shared/Layout'

export default {
  components: {
    Layout,
  },
}
</script>
