<template>
  <nav>
    <router-link to="/">Home {{ name }}</router-link> |
    <router-link to="/about">About</router-link>
  </nav>
  <router-view />
</template>
<script>
export default {
  data() {
    return {
      name: "ok",
    };
  },
};
</script>
