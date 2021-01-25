import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue({


  el: '#root',

  data: {
    albums: [],
    selGenre: "",
    genres: [],
  },

  methods: {
    selectGenre() {
      axios.get("http://localhost:8888/php-ajax-dischi/server.php", {
        params: {
          genre: this.selGenre,
        }
      })
      .then((result) => {

      });
    }, 
  },

  mounted: function() {
    var self = this;
    axios
      .get("server.php")
      .then(
        function (response) {
          self.albums = response.data;
          self.albums.forEach(album => {
            if(self.genres.includes(album.genre) == false) {
              self.genres.push(album.genre)
            }
          });
        }
      );
  },

})