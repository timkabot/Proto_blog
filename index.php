<!DOCTYPE html>
<html>
<head>
	<title>Blog about tripping</title>
	<link rel = "stylesheet" type = "text/css" href="Styles.css">
	<link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class = "col-md-12 all container" >
     <div class="col-md-12 shapka">
     		<div class = "col-md-3 logo"> <img src="img/Nurslogo.png" style = "max-width:100%;max-height:100%;"> </div>
     		<div class = "col-md-2" style = "height:75%; border:1px black solid;margin-top:1.2%">
     		 <a href="index.php"><img src="img/registration.png" style  = "max-width:100%;"></a>
     		</div> 

     		<div class = "col-md-2" style = "height:75%; border:1px black solid;margin-top:1.2%">
     		 <a href = "about_life.php"><img src="img/about_life.png" style  = "max-width:100%;"></a>
     		</div>
     		<div class = "col-md-2" style = "height:75%; border:1px black solid;margin-top:1.2%">
     		 <a href = "about_us.php"><img src="img/about_us.png" style  = "max-width:100%;"></a>
     		</div> 
     		<div class = "col-md-2" style = "height:75%; border:1px black solid;margin-top:1.2%">
     		 <a href = "contacts.php"><img src="img/contacts.png" style  = "max-width:100%;"></a>
     		</div>
     </div>
     <div class="col-md-12 panorama">
     	<img src="img/panorama.jpg" style = "max-height:100%;width:100%;">
     </div>
     <div class = "col-md-2"></div>
     <div class = "col-md-7 bord" style = " margin-top:10px; " name = "result" id = "result">
 
     </div>
     <div class = "col-md-3 info bord">
     	<input type="text" class="form-control" id="search" placeholder="Search" name = "search">
     	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/ava.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/ava.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/ava.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/ava.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <a href="wishes.php">My wishes</a>
      <a href="add_post.php">Add post</a>
     	<p>Hey there! My name is Nursultan Zhumagul (you can call me Nurs), a full-time adventure travel blogger & photographer who’s been exploring the world for over 5 years.

Welcome to my travel blog! This is where I share entertaining stories, useful travel tips, fun videos, amazing photography, and crazy adventures with you from my non-stop travels around the world.

It’s a place for people like you who seek daily inspiration & motivation to live a life of adventure. I want to teach you how to travel more.</p>
     </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
          $('#search').keyup(function(){
            var txt = $(this).val();
            if(txt == 'kino'){
                 
            }else{
              $('#result').html('');
              $.ajax({
                url:"post_creating.php",
                method:"post",
                data:{search:txt},
                dataType:"text",
                success:function(data){
                  $('#result').html(data);
                }
              });
            }
          });

        });

</script>
</body>
</html>