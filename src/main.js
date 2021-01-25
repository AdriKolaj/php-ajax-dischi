import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({


  el: '#root',

  data: {
    albums: [],
  },

  mounted: function() {
    var self = this;
    axios
      .get("http://localhost:8888/php-ajax-dischi/server.php")
      .then(
        function (response) {
          self.albums = response.data;
        }
      );
  }


})