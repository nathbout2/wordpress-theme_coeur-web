/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }
  
  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
  const consolecss = 'font-family: monospace; padding: 0 10px;font-size: 16px;color: white; background-image: linear-gradient(to left, violet, indigo, blue, green, gold, orange, red); background-repeat: no-repeat;';
	console.log("%cWeLcOmE hAcKeRz! Do YoU KnOw ThE KoNaMi CoDe ? 🤫...", consolecss);

// pages aléatoires au click

const pages = document.getElementById("pages");
pages.addEventListener('click', randomPages);

function randomPages(){
  let random = Math.floor (Math.random() * 5);
  console.log(random);
  switch(random){
      case 0:
          pages.href="web-designer.php";
      break;
      case 1:
          pages.href="pentesteur.php";
      break;
      case 2:
          pages.href="graphiste.php";
      break;
      case 3:
          pages.href="chef-projet.php";
      break;
      case 4:
          pages.href="motion-designer.php";
      break;
      default:
      }
  }