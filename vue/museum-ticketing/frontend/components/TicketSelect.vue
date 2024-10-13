<template>
    <div>
      <h1>Ticket Selection</h1>
      <p>Select a ticket type for the event: {{ event.name }}</p>
      <select v-model="selectedTicketType">
        <option value="regular">Regular - $50</option>
        <option value="vip">VIP - $100</option>
      </select>
      <button @click="purchaseTicket">Purchase</button>
    </div>
  </template>
  
  <script>
  export default {
    props: ['event'],
    data() {
      return {
        selectedTicketType: 'regular'
      };
    },
    methods: {
      purchaseTicket() {
        fetch('/tickets/purchase', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: JSON.stringify({
            event_id: this.event.id,
            ticket_type: this.selectedTicketType
          })
        })
        .then(response => response.json())
        .then(data => {
          alert('Ticket purchased successfully!');
        });
      }
    }
  };
  </script>
  