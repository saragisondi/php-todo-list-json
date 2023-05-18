<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- Axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js' integrity='sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==' crossorigin='anonymous'></script>

  <!-- Cdnjs Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

  <title>TO DO LIST</title>
</head>
<body>
  

<div id="app">

  <header>
    <div class="container-title">
      <div class="title">TO DO LIST  <i class="fa-solid fa-clipboard-check"></i></div>
    </div>
  </header>

  <div class="input">

  <!-- @keyup.enter="NewToDo"  -->
    <input
    
    v-model.trim="AddToDo" class="input-text" type="text" placeholder= "devo fare......">

    <!-- @click="NewToDo" -->
    <button >
      <i class="fa-solid fa-plus"></i>
    </button>

  </div>

    <main>
      <div class="container-list">

        <ul >
          
          <div class="title-list">
            <h3>You can do it</h3>
            <h3>Check</h3>
          </div>

          <!-- faccio un ciclo per visualizzare gli elementi della lista -->
          <!-- v-for="(list,i) in lists" -->
          <li >

            <!-- condizione true -->
            <!--v-if="list.done === true"  -->
            <span  class="decoration" >
              <!-- {{list.text}} -->
            </span>

            <!-- condizione false -->
            <!-- v-else="list.done === false" -->
            <span  > 
              <!-- {{list.text}} -->
            </span> 

            <span > 

              <!-- fatto -->
              <!-- v-model="list.done" -->
              <input  
              type="checkbox" name="checkbox" id="checkbox"> 
              
              <!-- cestino -->
              <!-- @click="deleteRow(i)" -->
              <i 
              
              class="fa-solid fa-trash-can">
              </i>
            </span> 

          </li>
          
        </ul>

      </div>

    </main>










</div>


  <script src="main.js"></script>
</body>
</html>