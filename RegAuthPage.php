<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
  <link rel="manifest" href="images/ico/site.webmanifest">

  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="RegAutPage.css"> 
  <script src="Main.js"></script>
  <?php
    require "functions/functions.php";

  ?>
</head>
<body> 
  <div class="main">
    <?php "
      <script type=\"text/javascript\">
        idPage = ".$_GET["id"].";
        elementP0 = document.getElementById('inpP0');
        elementA = document.getElementById('inpA');
        function changePage(){
          if (idPage == 2){
            elementP0.innerHTML = 'Авторизация';
            
            idPage = 1;
          } 
          else{
            elementP0.innerHTML = 'Регистрация';
            
            idPage = 2;
          }
        }
        window.onload = changePage(".$_GET["id"].");
      </script>"
    ?>
    <p class="inpP0" id="inpP0">Регистрация</p>
    <p class="inpP1" id="inpP1"><p>Такой логин уже занят</p></p>
    <p class="inpI1" id="inpI1"><input        /></p>
    <p class="inpP2" id="inpP2"><p></p></p>
    <p class="inpI2" id="inpI2"><input    /></p>
    <p class="inpB" id="inpB"><button>Зарегистрироваться</button></p>
    <p class="inpA" id='inpA' type="button" onclick = 'changePage(2);'><button id='inpA' type="button" onclick = 'changePage(2);'>Авторизация</button></p>
  </div>
</body>
</html>