<template>
  <div>
    <nav>
      <router-link to="/" v-if="!isAuthenticated">Login</router-link>
      <router-link to="/register" v-if="!isAuthenticated">Register</router-link>
      <router-link to="/Welcome" v-if="isAuthenticated">Welcome</router-link>
      <router-link to="/books" v-if="isAuthenticated">Books</router-link>
      <button @click="logout" v-if="isAuthenticated">Logout</button>
    </nav>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  computed: {
    isAuthenticated() {
      return !!localStorage.getItem('token');
    }
  },
  methods: {
    logout() {
      localStorage.removeItem('token');
      this.$router.push('/login');
    }
  }
};
</script>
