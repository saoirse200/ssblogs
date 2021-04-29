<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/writing.css"  >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>S&S Blogs</title>
</head>
<body>
<ul>
		<li><a href="http://blogss.gearhostpreview.com/pages/about.html">&nbsp; About Us &nbsp; </a></li>
		<li><a href="http://blogss.gearhostpreview.com/pages/topics.html">&nbsp; Topics &nbsp;</a></li>
		<li style="float:right"><a class="active" href="http://blogss.gearhostpreview.com/pages/contact.html">Contact Us</a></li>
		<li style="float:right"><a class="active" href="https://registration-pages.herokuapp.com/index.php">Sign Up/Login</a></li>
		<!--logo/homepage link-->
<h1> <a  href="http://blogss.gearhostpreview.com/index.html"> <img src="S&S Blogs Logo.jpg" alt="Home" width="150" height="150";></a></h1>
</ul>

   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Blog Title" class="form-control my-3 bg-white text-dark text-center" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="form-control my-3 bg-white text-dark" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <button class="btn btn text-white" name="update" style="background-color:#B9D8D2">Update</button>
            </form>
        <?php } ?>    
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>