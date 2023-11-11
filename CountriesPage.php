<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8"  content=", initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
  <link rel="manifest" href="ico/site.webmanifest">
  <title> Cocking </title>
  <link rel="stylesheet" type="text/css" href="Home.css"> 
  <script type="text/javascript" href="Main.js"></script>
  <?php
    require "functions/functions.php";
    $dishes = getDishesBC(7, $_GET["id"]);
    $countries = getCountries();
    $Name = "admin";
    $autorised = false;
    $user_id = -1;
  ?>
</head>
<body> 
  <div class="begin">
    <div class="logo"> 
      <a href="index.php"><img src="images/Logo.png" width="100" height="100" border="0" ></a>
    </div>
    <div class="name">
      <p class="sitename">cocking.ass</p>
      <p class="info">Здесь только избранные рецепты</p>
    </div>
    <div class="sign_div">
      <?php
        if ($autorised == false){
          echo"
            <a class=\"sign\" style=\"color: black;\" href=\"RegAuthPage.php?id=2\">Авторизация</a>
            <a class=\"sign\" style=\"color: black;\" href=\"RegAuthPage.php?id=1\">Регистрация</a>";
        }
        else{
          echo"
            <a class=\"sign\" style=\"color: black;\" href=\"ProfilePage.php?id=".$user_id."\">".$Name."</a>";
        }
      ?>
    </div>
  </div>
  <div class="main">
    <div class="kards">
      <?php
        for ($i = 0; $i < count($dishes); $i++){
          echo "
            <a class=\"amnyam\" style=\"text-decoration: none; color: black;\" href=\"/DishesPage.php?id=".$dishes[$i]["id"]."\" target:\"_self\">
              <img src=\"/images/cocks/".$dishes[$i]["id"].".jpg\" class=\"cocks_image\">
		          <h class=\"title_amnyam\" style=\"text-decoration: none; color: black; \" >".$dishes[$i]["title"]."</h>
		          <p class=\"short_text_amnyam\" style=\"text-decoration: none; color: black;\" >".$dishes[$i]["short_text"]."</p>
		        </a>";
        }
      ?>
    </div>
    <div class="countries"> 
      <a class="p2" href="index.php" style="text-decoration: none" target="_self">Все страны</a>
      <?php 
        for($i = 0; $i < count($countries); $i++){
          echo "
            <p class=\"p1\"><a class=\"a1\" href=\"CountriesPage.php?id=".$countries[$i]["id"]."\" target=\"_self\">".$countries[$i]["name"]."</a></p>";
        }
      ?>
    </div>
  </div>
  <div class="end">Конец</div>
</body>
</html>