<!DOCTYPE html>
<html>
<head>
	<title>Blog about tripping</title>
	<link rel = "stylesheet" type = "text/css" href="Styles.css">
	<link rel="stylesheet" href="css\bootstrap.min.css">

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
     <div class = "col-md-7 bord" style = " margin-top:10px; ">

       <div class = "col-md-12 b_border">
       	<h2>Work with me</h2>
       	<p class="text-left bg-info" style="padding: 5px;">
       You can find me by this adresses : <br>
       Email : nursultan.zhumagul@ce.sdu.edu.kz <br>
       Vk : <a href="http://vk.com/n.zhumagul">http://vk.com/n.zhumagul</a>
       <br>
       Also you can send your wishes to me by following this form
       <form action="upload.php" method = "post" onsubmit="return validate_form()" name = "forma_vhoda">
         <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control"  placeholder="Name" name = "name">
         </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control"  placeholder="Email" name = "email">
            <label for="exampleInputPassword1">Your message</label>
            <textarea class="form-control" rows="3" name = "msg"></textarea>
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
        </form>
       </div>

     </div>
     <div class = "col-md-3 info bord">
     	<input type="password" class="form-control" id="search" placeholder="Search">
     	<img src="img/ava.jpg" style = "max-width : 100%;margin-top:15px;">
     	<p>Hey there! My name is Nursultan Zhumagul (you can call me Nurs), a full-time adventure travel blogger & photographer who’s been exploring the world for over 5 years.

Welcome to my travel blog! This is where I share entertaining stories, useful travel tips, fun videos, amazing photography, and crazy adventures with you from my non-stop travels around the world.

It’s a place for people like you who seek daily inspiration & motivation to live a life of adventure. I want to teach you how to travel more.</p>
     </div>
</div>
<script type="text/javascript">
<!--

function validate_form ( )
{
  valid = true;

        if ( document.forma_vhoda.name.value == "" ||  document.forma_vhoda.email.value == "")
        {
                alert ( "Пожалуйста заполните поле 'Ваше имя' или 'Ваш электронный адрес'." );
                valid = false;
        }

        return valid;
}

//-->
</script>
</body>
</html>