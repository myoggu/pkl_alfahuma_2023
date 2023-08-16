







<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  
  
  
      <link rel="stylesheet" href="<?=base_url()?>css2/style.css">

  
</head>

<body>

  <div class="login-page">

  <div class="form">

     

<?php 

	echo "Username telah terdaftar";echo "</br></br>";
	echo anchor('login/create', 'silahkan Coba Menggunakan Username Yang Lain');

 ?>





    <form class="login-form">


    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?=base_url()?>js2/index.js"></script>

</body>
</html>
