<template>
  <div>
    <div class="col-12 mb-3" id="app">
      Sponsors
      <button class="btn btn-primary" type="button" v-on:click="addSponsor()">
        <span class="fa fa-plus"></span>
        Add
      </button>
    </div>

    <div class="col my-3" v-for="(item,index) in sponsors" :key="index">
      <div class="input-group mb-3">
        <input
          type="text"
          v-bind:id="index"
          v-model="item.value"
          class="form-control"
          placeholder="Sponsor's name"
          aria-label="Sponsor's name"
          aria-describedby="basic-addon2"
          name="sponsors[]"
        />
        <div class="input-group-append">
          <button class="btn btn-danger" v-on:click="removeSponsor(index)" type="button">Remove</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sponsors: []
    };
  },

  methods: {
    addSponsor: function() {
      const arrayLength = this.sponsors.length;

      this.sponsors.push({ value: "" });
    },
    removeSponsor: function(index) {
      console.log(index);
      this.sponsors.splice(index, 1);
    }
  }
};
</script>
