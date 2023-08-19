<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
     <section class="home" id="home">

          <div class="image">
              <img src="image/home-img.svg" alt="" style="width: 42%;">
          </div>
     </section>
    
          <h1 class="heading" style="margin-top: -437px; margin-right: -525px;"> <span>Hello</span><?php echo $_SESSION['name']; ?></h1>


          <div class="lbut">  <a href="compare/Hospotals.html"><input type="button" value="Hospitals" class="btn" style="width: 132px; height: 60px;" ></a>
             &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
       <a href="compare/Medicine.html"> <input type="button" value="Medicines" class="btn"style="width: 132px; height: 60px;"></div></a> 

    

     <!-- <h1>Hello<?php echo $_SESSION['name']; ?></h1> -->

  
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
