<template>
  <span>{{date.toLocaleDateString('en-US' ,dateFormatOptions)}}</span>
</template>

<script>
export default {
  data() {
    return {
      dateFormatOptions: {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
        second: "numeric"
      },
      date: new Date(Date.now())
    };
  },
  mounted() {
    this.runTimer();
  },

  methods: {
    runTimer: function() {
      setInterval(() => {
        this.date = new Date(Date.now());
      }, 1000);
    }
  }
};
</script>
