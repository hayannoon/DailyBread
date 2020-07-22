<?php
$today = date('Ymd');
echo date("Y-m-d H:i:s") . "<br />\n";

$beforeDay1 = date("Y-m-d", strtotime($today." -1 day"));
$beforeDay2 = date("Y-m-d", strtotime($today." -2 day"));
$beforeDay3 = date("Y-m-d", strtotime($today." -3 day"));
$beforeDay4 = date("Y-m-d", strtotime($today." -4 day"));
$beforeDay5 = date("Y-m-d", strtotime($today." -5 day"));
$beforeDay6 = date("Y-m-d", strtotime($today." -6 day"));
$beforeDay7 = date("Y-m-d", strtotime($today." -7 day"));
$beforeDay8 = date("Y-m-d", strtotime($today." -8 day"));
$beforeDay9 = date("Y-m-d", strtotime($today." -9 day"));
$beforeDay10 = date("Y-m-d", strtotime($today." -10 day"));
 ?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>history</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="history.css?ver=1">
  </head>
  <body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <h1><strong>HISTORY<strong></h1>
    <div id="historyButton" class="">
      <br><br>

    <input style="display: none;" type="text" name="historyDate" value="">

    <button id="test" type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay1 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay2 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay3 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay4 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay5 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay6 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay7 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay8 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay9 ?></button> <br><br>
    <button type="button" class="btn btn-secondary" name="button"><?php echo $beforeDay10 ?></button> <br><br>

</div>

    <script type="text/javascript" src="history.js?ver=2">

    </script>
  </body>
</html>
