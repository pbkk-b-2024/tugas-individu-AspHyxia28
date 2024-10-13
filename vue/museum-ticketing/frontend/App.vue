<template>
    <div>
      <event-list @event-selected="loadEvent"></event-list>
      <ticket-select v-if="selectedEvent" :event="selectedEvent"></ticket-select>
    </div>
  </template>
  
  <script>
  import EventList from './components/EventList.vue';
  import TicketSelect from './components/TicketSelect.vue';
  
  export default {
    components: {
      EventList,
      TicketSelect
    },
    data() {
      return {
        selectedEvent: null
      };
    },
    methods: {
      loadEvent(eventId) {
        fetch(`/events/${eventId}`)
          .then(response => response.json())
          .then(event => {
            this.selectedEvent = event;
          });
      }
    }
  };
  </script>
  