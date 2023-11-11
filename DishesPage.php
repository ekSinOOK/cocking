<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8"  content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
  <link rel="manifest" href="images/ico/site.webmanifest">

  <link rel="stylesheet" type="text/css" href="Page.css"> 
  <script src="Main.js"></script>
  <?php
    require "functions/functions.php";
    require "functions/page.php";

    $user_id = (int)getUser("No","No");
    $ratio = getRatioFD($user_id,$_GET["id"]);
    $dishes = getDishesFP($_GET["id"]);  
    $title = $dishes["title"];
    echo "<title>".$title."</title>";
    $Name = "admin";
    $autorised = true;
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
    <?php
      echo "
        <div class=\"page\" style=\"text-align: center;\">
          <h class=\"title_page\" style=\"text-align: center;\">".$dishes["title"]."</h>
		      <img src=\"/images/cocks/".$dishes["id"].".jpg\" class=\"cocks_image_page\">
		      <p class=\"full_text_page\" style=\"text-align: center;\">".$dishes["full_text"]."</p>
        </div>";
    ?>
    <div class="stars" onmouseout='HowMuch(0)' > 
    <?php
        echo"
          <script type=\"text/javascript\">
          function HowMuch (HoverNumber){
            var StarNumber = ".$ratio.";
            if (StarNumber == 0){
              stars(HoverNumber);
            }
            else
              stars(StarNumber);
            }
          </script>"
      ?>


      <span id='star1' onmouseover='HowMuch(1)' onmouseout='HowMuch(0)'> <img class='star' src='images/stars/star0.png'  /> </span>
      <span id='star2' onmouseover='HowMuch(2)' onmouseout='HowMuch(0)'> <img class='star'  src='images/stars/star0.png'  /> </span>
      <span id='star3' onmouseover='HowMuch(3)' onmouseout='HowMuch(0)'> <img class='star'  src='images/stars/star0.png'  /> </span>
      <span id='star4' onmouseover='HowMuch(4)' onmouseout='HowMuch(0)'> <img class='star'  src='images/stars/star0.png'  /> </span>
      <span id='star5' onmouseover='HowMuch(5)' onmouseout='HowMuch(0)'> <img class='star'  src='images/stars/star0.png' /> </span>  
    </div>
  </div>
  <div class="end">Конец</div>
</body>
</html>