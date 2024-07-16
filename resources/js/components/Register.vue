<template>
  <div>
    <h1>Register</h1>
    <form @submit.prevent="register">
      <div>
        <label for="name">Name:</label>
        <input type="text" v-model="name" required />
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" v-model="email" required />
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" v-model="password" required />
      </div>
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: '',
      email: '',
      password: ''
    };
  },
  methods: {
    register() {
      axios.post('/api/register', {
        name: this.name,
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
