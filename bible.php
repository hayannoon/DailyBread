<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BIBLE</title>
    <link rel="stylesheet" href="bible.css">
  </head>
  <body>
    <h1 style="text-align:center;">Daily Food</h1>

    <table>
      <tr>
        <div class="music">
        <td id="background_music"><audio src="audio/Love_Never_Fail.mp3" controls="" autoplay="" loop="" preload="auto"></audio></td>
        </tr>
        </div>
    </table>
    <?php

  $language = $_GET["language"];
  $words = $_GET["words"];
  $sheet = $_GET["sheet"];
  $filePath = "data/" . $words . "/" . $language . "/" . "$words" . $sheet . "장.txt";


  $lines = @file($filePath) or $result="파일을 읽을 수 없습니다.";
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
