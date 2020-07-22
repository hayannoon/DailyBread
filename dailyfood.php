<!DOCTYPE html>

<?php
$today = date("Ymd");
$contents ;

if (!file_exists("./dailyfood/" . $today . ".txt"))
{

   $contents = " <div id='notYet'>
      <img src='./image/crying.png'>
      <br><br><br>
      <p><strong>아직 오늘의 일용할양식이 등록되지 않았어요! 조금만 기다려주세요!</strong></p>
       </div>";
} else{


                    $todayfile= fopen("./dailyfood/" . $today . ".txt","r");
                    $wordsInformation = trim(fgets($todayfile));
                    fclose($todayfile);
                    $parsingArr = explode("|",$wordsInformation);
                    $wordsPath = $parsingArr[0];
                    $mp3Path = $parsingArr[1];
                    $todayWords = explode("/",$wordsPath)[3];
                    $finalWords = explode(".",$todayWords)[0];




  $contents = "
      <h1 style='text-align:center;'>Daily Food</h1> <br>
     <h2 style='text-align:center;'>".$finalWords." </h2><br>

        <audio id='bgm' src='./audio/마커스-6-그 사랑.mp3' preload='auto'></audio>
    <audio id='sermon' src='./audio/" .$mp3Path . "' preload='auto'></audio>
    <div class='audiocontroller'>
      <i class='audio-logo glyphicon glyphicon-headphones'></i>
      <i class='dynamiclink glyphicon glyphicon-play' id='play'></i></a>
      <i class='dynamiclink glyphicon glyphicon-pause' id='pause'></i>
      <select id='currentTrack'>
        <option value='bgm'>BGM</option>
        <option value='sermon'>sermon</option>
      </select>
      <i class='dynamiclink glyphicon glyphicon-stop' id='stop'></i>
    </div>";
}
 ?>


<html lang="ko" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Daily Food</title>
    <script data-require="jquery@*" data-semver="2.1.3" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link data-require="bootstrap-glyphicons@*" data-semver="3.2.1" rel="stylesheet" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/img/glyphicons-halflings.png" />
<link data-require="bootstrap@*" data-semver="3.3.1" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<script data-require="bootstrap@*" data-semver="3.3.1" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dailyfood.css?ver=2">
<script src="dailyfood.js"></script>

  </head>
  <body>
    <?php
    echo $contents;

    $lines = @file($wordsPath) or $result="파일을 읽을 수 없습니다.";
    echo "<br><p>";
    if($lines != null){
      $itemcount = count($lines); //전체 아이템수 계산
          for($i = 0 ; $i < $itemcount; $i++){
            $line = $lines[$i]; //한 라인 읽어서 쪼개서 배열에저장
            echo $line . "<br>";
          }
      }
      echo "</p>";
     ?>

  </body>
</html>
