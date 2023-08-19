<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/style.css">
    <title>Sign Up Page</title>
</head>
<body>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

    <nav class="navbar">
        <a href="first_page.php">home</a>
        <a href="login.php">login</a>
     
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

    <section class="book" id="book">

        <h1 class="heading"  style="margin-top: 51px;"> <span>Sign</span> UP  </h1>    
    
        <div class="row">
    
            <div class="image">
                <img src="image/book-img.svg" alt="">
            </div>
    
            <form action="signup-check.php" method="post">
                <h3>sign up now</h3>

                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>



                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                           name="name" class="box"
                           placeholder="Name"
                           value="<?php echo $_GET['name']; ?>"><br>
               <?php }else{ ?>
                    <input type="text" 
                           name="name" class="box"
                           placeholder="Name" ><br>
               <?php }?>



               <?php if (isset($_GET['uname'])) { ?>
                <input type="email" 
                       name="uname" class="box"
                       placeholder="Enter Your Email Here"
                       value="<?php echo $_GET['uname']; ?>"><br>
           <?php }else{ ?>
                <input type="email" 
                       name="uname" class="box"
                       placeholder="Enter Your Email Here"><br>
           <?php }?>


     	<input type="password" 
                 name="password" class="box"
                 placeholder="Enter Your Password Here"><br>

          <input type="password" 
                 name="re_password" class="box"
                 placeholder="Please Confirm Your Password"><br>
                <input type="submit" value="Sign Up" class="btn" style="  float:right;"> 
                <a href="index.php" class="ca">Already have an account?</a>
            </form>
    
        </div>
    
    </section>
</body>
</html>