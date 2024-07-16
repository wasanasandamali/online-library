<template>
  <div>
    <h1>Welcome to the Online Library</h1>
    <nav>
      <router-link to="/login">Login</router-link>
      <router-link to="/register">Register</router-link>
      <router-link to="/books">Books List</router-link>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'Welcome',
};
</script>

<style>
nav {
  margin-top: 20px;
}

nav a {
  margin-right: 10px;
  text-decoration: none;
  color: blue;
}
</style>
