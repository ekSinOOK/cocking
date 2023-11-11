<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
  <link rel="manifest" href="images/ico/site.webmanifest">

  <title>Profile</title>
  <link rel="stylesheet" type="text/css" href="Home.css"> 
  <script src="Main.js"></script>
  <?php
    require "functions/functions.php";
    $dishes = getDishesByUser(7,1);
    $countries = getCountries();
    $name = "admin";
    $autorised = true;
    $user_id = -1;
  ?>
</head>
<body> 

  <div class="begin">
    <div class="logo"> 
      <a href="index.php"><img src="images/Logo.png" class="logo_img" width="100" height="100" border="0" ></a>
    </div>
    <div class="name">
      <p class="sitename">cocking.ass</p>
      <p class="info">Здесь только избранные рецепты</p>
    </div>
    

  </div>
  <div class="main">
    <?php
        echo"<p>".$name."<br>Рецепты от автора:</p>";
    ?>
    <p></p>
    <div class="kards">
      <?php
        for ($i = 0; $i < count($dishes); $i++){
          echo "
            <a class=\"amnyam\"; style=\"text-decoration: none; color: black;\" href=\"/DishesPage.php?id=".$dishes[$i]["id"]."\" target:\"_self\">
              <img src=\"/images/cocks/".$dishes[$i]["id"].".jpg\" class=\"cocks_image\">
		          <h class=\"title_amnyam\" style=\"text-decoration: none; color: black; \" >".$dishes[$i]["title"]."</h>
		          <p class=\"short_text_amnyam\" style=\"text-decoration: none; color: black;\" >".$dishes[$i]["short_text"]."</p>
		        </a>";
        }
      ?>
    </div>
  </div>
  <div class="end">
    <div class="credits">
      <p class="credits_info">Сайт сделали студенты группы ЦИС-28:</p>
      <p class="credit">Егоров Арсений<br>Омельченко Егор<br>Поляшев Денис</p>
    </div>
  </div>
</body>
</html>