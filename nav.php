<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ACCUEIL</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  
    <div class="nav-bar">
      <div class="nav-logo">
          
      </div>
      <div class="nav-links" id="nav-links">
        <i class="fa fa-close" onclick="closeMenu()"></i>
        <ul>
          <a href="index.html"><li>HOME</li></a>
          <a href="compétence.html"><li>EXPERIENCES / COMPETENCES</li></a>
          <a href="propos.html"><li>A PROPOS</li></a>
          <a href="https://web.facebook.com/mamadoulamine.diouf"><i class="fa fa-facebook"></i></a>
          <a href="https://www.instagram.com/mldiouf/?hl=fr"><i class="fa fa-instagram"></i></a>
          <i class="fa fa-twitter"></i>
          <a href="https://www.youtube.com/feed/my_videos"><i class="fa fa-youtube"></i></a>
        </ul>
        <button type="button" class="btn">SIGN UP</button>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </div>

   
        
    
    <div class="notifications">
      
    </div>
  </div>
  <script type="text/javascript">
    

    var show = document.getElementById("nav-links");
    function showMenu(){
      show.style.right ="0";
    }
    var show = document.getElementById("nav-links");
    function closeMenu(){
      show.style.right = "-200px";
    }

  </script>
  
</body>
</html>