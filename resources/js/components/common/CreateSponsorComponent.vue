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

    <div class="row">
      <div class="col-12 " v-for="(item,index) in sponsors" :key="index">
        <div class="row">
          <div class="col-6">
            <div class="form-group row m-2">
              <label class="mr-2 text-right col-3" for="inputname+`name`+`${index}`">Name</label>
              <div class="col">
                <input
                  v-bind:id="inputname+`name`+`${index}`"
                  type="text"
                  v-model="item.value"
                  class="form-control"
                  aria-describedby="basic-addon2"
                  v-bind:name="inputname+`[${index}]`+ '[name]'"
                  v-bind:disabled="disablecontrol"
                />
              </div>
            </div>

            <div class="form-group row m-2" v-if="parental">
              <label
                class="mr-2 text-right col-3"
                for="inputname+`relations`+`${index}`"
              >Relationship</label>
              <div class="col">
                <input
                  v-bind:id="inputname+`relations`+`${index}`"
                  type="text"
                  v-model="item.relationship"
                  class="form-control"
                  aria-describedby="basic-addon2"
                  v-bind:name="inputname+`[${index}]`+ '[relationship]'"
                  v-bind:disabled="disablecontrol"
                />
              </div>
            </div>
          </div>

          <div class="col-6" v-if="parental">
            <div class="form-group row m-1">
              <label
                class="mr-2 text-right col-3"
                for="inputname+`citizenship`+`${index}`"
              >Citizenship</label>

              <div class="col">
                <input
                  v-bind:id="inputname+`citizenship`+`${index}`"
                  type="text"
                  v-model="item.citizenship"
                  class="form-control"
                  aria-describedby="basic-addon2"
                  v-bind:name="inputname+`[${index}]`+ '[citizenship]'"
                  v-bind:disabled="disablecontrol"
                />
              </div>
            </div>

            <div class="form-group row m-2" v-if="parental">
              <label class="mr-2 text-right col-3" for="inputname+`residence`+`${index}`">Residence</label>
              <div class="col">
                <input
                  v-bind:id="inputname+`residence`+`${index}`"
                  type="text"
                  v-model="item.residence"
                  class="form-control"
                  aria-describedby="basic-addon2"
                  v-bind:name="inputname+`[${index}]`+ '[residence]'"
                  v-bind:disabled="disablecontrol"
                />
              </div>
            </div>
          </div>

          <div class="col d-flex align-items-center">
            <button
              v-if="!disablecontrol"
              class="btn btn-danger mx-2"
              v-on:click="removeSponsor(index)"
              type="button"
            >Remove</button>
          </div>
        </div>

        <hr class="my-3" v-if="index != sponsors.length -1" />
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
    "parental"
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
