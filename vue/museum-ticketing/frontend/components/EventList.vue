<template>
    <div>
      <h1>Events</h1>
      <ul>
        <li v-for="event in events" :key="event.id">
          <h2>{{ event.name }}</h2>
          <p>{{ event.description }}</p>
          <button @click="selectEvent(event.id)">Select Event</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        events: []
      };
    },
    mounted() {
      fetch('/api/events')
        .then(response => response.json())
        .then(data => {
          this.events = data;
        });
    },
    methods: {
      selectEvent(eventId) {
        this.$emit('event-selected', eventId);
      }
    }
  };
  </script>
  