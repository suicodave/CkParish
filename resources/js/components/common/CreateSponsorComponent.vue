<template>
  <div>
    <div class="col-12 mb-3" id="app">
      {{formlabel}}
      <button
        v-if="!disablecontrol"
        class="btn btn-primary"
        type="button"
        v-on:click="addSponsor()"
      >
        <span class="fa fa-plus"></span>
        Add
      </button>
    </div>

    <div class="col my-3 form-inline" v-for="(item,index) in sponsors" :key="index">
      <div class="row">
        <div class="form-group mx-1">
          <label class="mr-2" for="name">Name</label>
          <input
            id="name"
            type="text"
            v-model="item.value"
            class="form-control"
            aria-describedby="basic-addon2"
            v-bind:name="inputname+`[${index}]`+ '[name]'"
            v-bind:disabled="disablecontrol"
          />
        </div>

        <div class="form-group mx-1" v-if="includerelationship">
          <label class="mr-2" for="relations">Relationship</label>
          <input
            id="relations"
            type="text"
            v-model="item.relationship"
            class="form-control"
            aria-describedby="basic-addon2"
            v-bind:name="inputname+`[${index}]`+ '[relationship]'"
            v-bind:disabled="disablecontrol"
          />
        </div>

        <div class>
          <button
            v-if="!disablecontrol"
            class="btn btn-danger"
            v-on:click="removeSponsor(index)"
            type="button"
          >Remove</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: [
    "sponsorsprop",
    "disablecontrol",
    "formlabel",
    "inputname",
    "max",
    "includerelationship"
  ],
  data() {
    return {
      sponsors: []
    };
  },
  mounted: function() {
    this.sponsors = this.sponsorsprop || [];
  },

  methods: {
    _hasReachedLimit: function() {
      const maxInputs = parseInt(this.max);

      const length = this.sponsors.length;

      return this.max != undefined && length >= maxInputs;
    },
    addSponsor: function() {
      if (!this._hasReachedLimit()) {
        this.sponsors.push({ value: "" });
      }
    },
    removeSponsor: function(index) {
      console.log(index);
      this.sponsors.splice(index, 1);
    }
  }
};
</script>
