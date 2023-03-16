<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
    <script>$(document).ready(function () {
        $(".image").click(function () {
            w2popup.open({
                title: 'Pilt',
                body: '<img src="' + $(this).attr('src') + '" width="100%">',
                width: 500,
                height: 400
            });
        });
    });
    </script>
    <style>
    
        .jumbo2{
           background-image: url('https://www.solidbackgrounds.com/images/2560x1440/2560x1440-davys-grey-solid-color-background.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
            height: 100%;
            width: 100%;
        }
    </style>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg">
          
                <form class="d-flex" role="search">
                  <a href="logout.php">Logi Välja</a>
                    
                </form>
              
          </nav>
          
    <div class="container">
    <?php
        if(isset($_COOKIE["admin"])) {
            if ($_COOKIE["admin"]=="parool") {
                echo "Lubatud";
            }
            else{
                header('Location: login.php');
            }
            
            
        }
        else {
            
            header('Location: login.php');
        }

    ?>
       
        
       
    </div>
    <h1>Failide üleslaadimine</h1>
<form  method="post" enctype="multipart/form-data">
<input type="file" name="minu_fail" accept=".jpg, .jpeg" required>
    <input type="submit" value="Lae üles!">

</form>
<?php
if(!empty($_FILES['minu_fail']['name'])){
    $sinu_faili_nimi = $_FILES['minu_fail']['name'];
    $ajutine_fail= $_FILES['minu_fail']['tmp_name'];
    
    $faili_suurus = $_FILES['minu_fail']['size'];
    $lubatudlaiendus = array("image/jpeg", "image/jpg");
    
    $kataloog = 'failid';
    if (!is_dir($kataloog)) {
        mkdir($kataloog);
    }
    
    if (in_array($_FILES['minu_fail']['type'], $lubatudlaiendus)) {
        if (is_writable($kataloog)) {
            
            $previous_file = $kataloog.'/pilt.jpg';
            if (file_exists($previous_file)) {
                unlink($previous_file);
            }
            
            if(move_uploaded_file($ajutine_fail, $kataloog.'/pilt.jpg')){
                echo 'Faili üleslaadimine oli edukas';
            } else {
                echo 'Faili üleslaadimine ebaõnnestus';
            }
        } else {
            echo "Kataloog failid ei ole kirjutatav";
        }
    } else {
        echo 'Lubatud failitüübid on JPEG, JPG';    
    }
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   </body>
</html>





