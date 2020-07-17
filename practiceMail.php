<?php 
    $Alerts = ['alert-primary','alert-secondary','alert-success','alert-danger','alert-warning','alert-info','alert-light','alert-dark'];

    for($l = 0 ;$l <8 ;$l++){
        $k= mt_rand(0,7);
    $temp = $Alerts[$l];
    $Alerts[$l] = $Alerts[$k];
    $Alerts[$k] = $temp;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     </head>
  <body>
      <ul class="list-group">
  <?php for($i = 0 ;$i <= 7 ;$i++):?> 
    <li class="alert <?php echo $Alerts[$i];
   ?> list-group-items"> <a href="<?php echo $_SERVER['PHP_SELF'];?>">
    <?php   echo $Alerts[$i];?></a>
</li>
  <?php endfor; ?>
      </ul>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>