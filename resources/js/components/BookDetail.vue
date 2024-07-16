<template>
  <div v-if="book">
    <h1>{{ book.title }}</h1>
    <p>{{ book.description }}</p>
    <p><strong>Genre:</strong> {{ book.genre }}</p>
    <p><strong>Price:</strong> ${{ book.price }}</p>
    <button @click="borrowBook">Borrow</button>
  </div>
  <div v-else>
    <p>Loading...</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: ['id'],
  data() {
    return {
      book: null
    };
  },
  mounted() {
    axios.get(`/api/books/${this.id}`)
      .then(response => {
        this.book = response.data;
      });
  },
  methods: {
    borrowBook() {
      // Implement borrowing logic
    }
  }
}
</script>
