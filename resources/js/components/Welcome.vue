<template>
  <div>
    <h1>Welcome to the Online Library</h1>
    <nav>
      <router-link to="/login">Login</router-link>
      <router-link to="/register">Register</router-link>
      <router-link to="/">Books List</router-link>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'Welcome',
};
</script>
