const {createApp} = Vue;

createApp({
  data(){
    return{
      ApiUrl: 'server.php',
      lists:[],
      AddToDo: ''
    }
  },

  methods:{
    
  }
}).mount('#app');