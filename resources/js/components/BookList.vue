<template>
  <div>
    <h1>Books</h1>
    <ul>
      <li v-for="book in books" :key="book.id">
        <router-link :to="`/books/${book.id}`">{{ book.title }} - {{ book.genre }}</router-link>
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      books: []
    };
  },
  mounted() {
    axios.get('/api/books')
      .then(response => {
        this.books = response.data.data;
      });
  }
}
</script>
