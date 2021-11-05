<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Intégration maquette téléchargée sur figma, conçue par un webdesigner pro.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <link rel="shortcut icon" href="../pages/assets/images/logonotittle.svg" type="image/svg+xml">
    <title>Erreur 404</title>
</head>
<body>

    <header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00B4F5" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,144C384,139,480,117,576,90.7C672,64,768,32,864,32C960,32,1056,64,1152,85.3C1248,107,1344,117,1392,122.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <h1 class="text-center fw-bold mx-5" >oO Oups ! ERREUR 404</h1>
    <p class="text-center fs-5 fw-bold mx-5">Vous avez tenté d’accéder à une page introuvable. <br>Cliquez sur le ❤️ ci-dessous !</p>

   <style>
       *, ::before, ::after{
    box-sizing: border-box;
}

@font-face {
    font-family: 'MyriadPro';
    src: url('../fonts/MYRIADPRO-REGULAR.woff');
}

body {
font-family: "MYRIADPRO-REGULAR", sans-serif;
color: black;
overflow: hidden;
} 

span{
    height: 10vh;
    width: 100vw;
    padding: 0;
}

#btn-error{
    background-color: #00B4F5;
    
}
/*btn chloe*/

.container{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin-left: 0;
    margin-right: 0;
}

.btn-confettis{
  width: 100px;
  height: 100px;
  background-color: #00B4F5;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 50%;
  border : none;
  cursor: pointer;
  outline: none;
  box-shadow: 0 7px 0 rgb(160,160,160);
  font-size: 30px;
}

.btn-confettis:active{
    margin-top: 7px;
    box-shadow: 0 0px 0 rgb(160,160,160);
}

.slot{
    position: relative;
    perspective: 1000px;
}

.slot div {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    user-select: none;
}



   </style>
    
    </header>

      


    <div class="row">
        <span></span>
    </div>


    <div class="container">

        <div class="slot "></div>
        <button class="btn-confettis">❤️</button>
        

    </div>

    <div class="row">
        <span></span>
    </div>
<div class="col text-center">
<a class="btn fw-bold text-white text-center" id="btn-error" href="index.php" role="button">ACCUEIL</a>
</div>
    
<script>

const containerSlot = document.querySelector('.slot');
const btnConfettis = document.querySelector('.btn-confettis');
const emojis = ["❤️", "💻", "💙", "🖱️"];

btnConfettis.addEventListener('click', fiesta);

function fiesta() {

  if(isTweening()) return;
  
  for(let i = 0; i < 50; i++){
    const confetti = document.createElement('div');
    confetti.innerText = emojis[Math.floor(Math.random() * emojis.length)];
    containerSlot.appendChild(confetti);
  }

  animateConfettis();
}

function animateConfettis() {
  const TLCONF = gsap.timeline()

  TLCONF
  .to('.slot div', {
    y: "random(-100,100)",
    x: "random(-100,100)",
    z: "random(0,1000)",
    rotation: "random(-90,90)",
    duration : 1
  })
  .to('.slot div', {autoAlpha: 0, duration: 0.3},'-=0.2')
  .add(() => {
    containerSlot.innerHTML = "";
  });
}

function isTweening(){
  return gsap.isTweening('.slot div');
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>


</body>
</html>
