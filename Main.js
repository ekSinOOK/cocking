/* function HowMuch (HoverNumber){
    var StarNumber = 0;
    if (StarNumber == 0){
      stars(HoverNumber);
    }
    else {
      stars(StarNumber);
    }
} */
  function stars (Number){
    for (i = 1; i <= 5; i++){
      element = document.getElementById('star' + i);
      if (i <= Number){
        element.innerHTML = "<img class='star' id='star' src='images/stars/star1.png'>";
      }
      else {
        element.innerHTML = "<img class='star' id='star' src='images/stars/star0.png'>";
      }
    }
  }
  

        
        /* function changePage(){
          elementP0 = document.getElementById('inpP0');
          elementI1 = document.getElementById('inpI1');
          elementI2 = document.getElementById('inpI2');
          elementP1 = document.getElementById('inpP1');
          elementP2 = document.getElementById('inpP2');
          elementB = document.getElementById('inpB');
          elementA = document.getElementById('inpA');
          if (idPage == 2){
            elementP0.innerHTML = 'Авторизация';
            elementI1.innerHTML = '<input    />';
            elementI2.innerHTML = '<input    />';
            elementP1.innerHTML = '<p>Такой логин не существует</p>';
            elementP2.innerHTML = '<p>Неправильный пароль</p>';
            elementB.innerHTML = '<button>Авторизироваться</button>';
            elementA.innerHTML = '<button>Регистрация</button>';
            idPage = 1;
          } 
          else{
            elementP0.innerHTML = 'Регистрация';
            elementI1.innerHTML = '<input    />';
            elementI2.innerHTML = '<input    />';
            elementP1.innerHTML = '<p>Такой логин уже занят</p>';
            elementP2.innerHTML = '<p></p>';
            elementB.innerHTML = '<button>Зарегистрироваться</button>';
            elementA.innerHTML = '<button>Авторизация</button>';
            idPage = 2;
          }

        } */





  /* <?php
        echo"
          <script type=\"text/javascript\">
            function HowMuch (HoverNumber){
              var StarNumber = 0;
              if (StarNumber == 0){
                stars(HoverNumber);
              }
              else
                stars(StarNumber);
              }
            function stars (Number){
              for (i = 1; i <= 5; i++){
                element = document.getElementById('star' + i);
                if (i <= Number){
                  element.innerHTML = \"<img class='star' id='star' src='images/stars/star1.png'>\";
                }
                else {
                  element.innerHTML = \"<img class='star' id='star' src='images/stars/star0.png'>\";
                }
              }
            }
          </script>"
      ?>  */


     /*  <script type=\"text/javascript\">
        idPage = ".$_GET["id"].";
        elementP0 = document.getElementById('inpP0');
        elementI1 = document.getElementById('inpI1');
        elementI2 = document.getElementById('inpI2');
        elementP1 = document.getElementById('inpP1');
        elementP2 = document.getElementById('inpP2');
        elementB = document.getElementById('inpB');
        elementA = document.getElementById('inpA');
        
        
        function changePage(){
          if (idPage == 2){
            elementP0.innerHTML = 'Авторизация';
            elementI1.innerHTML = '<input    />';
            elementI2.innerHTML = '<input    />';
            elementP1.innerHTML = '<p>Такой логин не существует</p>';
            elementP2.innerHTML = '<p>Неправильный пароль</p>';
            elementB.innerHTML = '<button>Авторизироваться</button>';
            elementA.innerHTML = '<button id='inpA'>Регистрация</button>';
            idPage = 1;
          } 
          else{
            elementP0.innerHTML = 'Регистрация';
            elementI1.innerHTML = '<input    />';
            elementI2.innerHTML = '<input    />';
            elementP1.innerHTML = '<p>Такой логин уже занят</p>';
            elementP2.innerHTML = '<p></p>';
            elementB.innerHTML = '<button>Зарегистрироваться</button>';
            elementA.innerHTML = '<button>Авторизация</button>';
            idPage = 2;
          }

        }
        window.onload = changePage();
        
      </script>" */