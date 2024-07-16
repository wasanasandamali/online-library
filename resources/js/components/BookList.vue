<template>
  <div>
    <h1>Books</h1>
    
    <input type="text" v-model="searchQuery" placeholder="Search for a book...">
    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Description</th>
          <th>Genre</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in filteredBooks" :key="book.id">
          <td><router-link :to="`/books/${book.id}`">{{ book.title }}</router-link></td>
          <td>{{ book.description }}</td>
          <td>{{ book.genre }}</td>
          <td>${{ book.price }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      books: [],
      searchQuery: ''
    };
  },
  computed: {
    filteredBooks() {
      return this.books.filter(book => 
        book.title.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
        book.description.toLowerCase().includes(this.searchQuery.toLowerCase()) ||
        book.genre.toLowerCase().includes(this.searchQuery.toLowerCase())
      );
    }
  },
  mounted() {
    axios.get('/api/books')
      .then(response => {
        this.books = response.data.data;
      });
  }
}
</script>

<style>
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
  text-align: left;
}
</style>
