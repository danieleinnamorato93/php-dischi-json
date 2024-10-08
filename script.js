const { createApp } = Vue

createApp({
  data() {
    return {
      disks:[],
    };
  },
  methods: {
    getDisks(){
        axios.get('http://localhost/dischi.php').then(response=>{ 
            this.disks = response.data;
        }).catch(error => {
            console.error("Errore nel caricamento dei dischi: ", error);
        });
},
mounted(){
    this.getDisks();
}
  }
}).mount('#app')