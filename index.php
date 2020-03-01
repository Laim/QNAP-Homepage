<?php
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    //error_reporting(E_ALL);

    include("include/qnap_redirect.php");
    $hostname = exec('/bin/hostname');
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php print($hostname);?></title>
  <meta name="description" content="">
  <meta name="author" content="<?php print($hostname);?>">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    html, body {
      height: 100%;
      background-color: #252525;
    }

   .fs {
     font-size: 100px;
   }

   .secure {
     font-size: 16px;
     color: white;
   }

   a { 
     color: white;
     text-decoration: none;
   }
   a:hover { 
     color: red;
     text-decoration: none;
   }

  </style>
</head>

<body>
  <div class="container h-100">
      <div class="row h-100">
          <div class="col-sm-12 my-auto">
              <div class="mx-auto fs">
                <a href="<?php print($webAccessUrl);?>"><?php print($hostname);?></a>
              </div>
              <div class="mx-auto">
                <?php 
                  if($secure == false) {
                    print('
                      <p class="secure">
                        You are using an insecure session.
                      </p>
                    ');
                  }
                ?>
              </div>
          </div>
      </div>
  </div>            
</body>
</html>