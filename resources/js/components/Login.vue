<template>
  <div>
    <h1>Login</h1>
    <form @submit.prevent="login">
      <div>
        <label for="email">Email:</label>
        <input type="email" v-model="email" required />
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" v-model="password" required />
      </div>
      <button type="submit">Login</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: ''
    };
  },
  methods: {
    login() {
      axios.post('/api/login', {
        email: this.email,
        password: this.password
      })
      .then(response => {
        localStorage.setItem('token', response.data.access_token);
        this.$router.push('/');
      })
      .catch(error => {
        console.error(error);
      });
    }
  }
}
</script>
