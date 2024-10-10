const { createApp } = Vue       

createApp({
  data() {
    return {
      disks:[],
      apiUrl:"http://localhost/php-dischi-json/dischi.php",
    };
  },
  methods: {
    getDisks(url){
        axios.get(url)
        .then((response)=>{ 
           console.log(response.data);
           this.disks = response.data;
        })
        .catch(function(error) {
            console.log("Errore nel caricamento dei dischi: ", error);
        })
}
  },
created(){
    this.getDisks(this.apiUrl);
}
  
}).mount('#app')