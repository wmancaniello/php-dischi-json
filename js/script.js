const { createApp } = Vue;

createApp({
  data() {
    return {
      message: "DISCHI:",
      disk: [],
    };
  },
  created() {
    axios
      .get("http://localhost:8888/boolean/php-dischi-json/server.php")
      .then((resp) => {
        this.disk = resp.data.results;
        // Stampa dell'array in console
        console.log("Array di dischi:", this.disk);
      });
  },
}).mount("#app");
