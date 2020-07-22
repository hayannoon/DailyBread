<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>upload file</title>
  </head>
  <body>

    <?php
    $allowedExts = array("mp3", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    if ((($_FILES["file"]["type"] == "audio/mp3")
           || ($_FILES["file"]["type"] == "image/jpeg")
           || ($_FILES["file"]["type"] == "image/jpg")
           || ($_FILES["file"]["type"] == "image/pjpeg")
           || ($_FILES["file"]["type"] == "image/x-png")
           || ($_FILES["file"]["type"] == "image/png"))
           && in_array($extension, $allowedExts))
   {
      if ($_FILES["file"]["error"] > 0)
      {
         echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
      }
      else
      {
        /*
         echo "Upload: " . $_FILES["file"]["name"] . "<br>";
         echo "Type: " . $_FILES["file"]["type"] . "<br>";
         echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
         echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
         */
         if (file_exists("./audio/" . $_FILES["file"]["name"]))
         {
            echo $_FILES["file"]["name"] . " already exists. ";
         }
         else
         {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "./audio/" . $_FILES["file"]["name"]);
            echo "Stored in: " . "./audio/" . $_FILES["file"]["name"];
         }
      }
   }
   else
   {
       echo "Invalid file";
   }




    $today = date("Ymd");
    $file = fopen("dailyfood/" . $today . ".txt","w+");
    if(!$file) die("Cannot open the file");
    $words = $_POST["words"];
    $language = "한국어";
    $sheet = $_POST["sheet"];
    $target_file =  $_FILES["file"]["name"];
    $filePath = "data/" . $words . "/" . $language . "/" . "$words" . $sheet . "장.txt";
    $msg = $filePath .'|'. pathinfo($target_file, PATHINFO_DIRNAME).'/'.pathinfo($target_file, PATHINFO_BASENAME);
    fwrite($file,$msg);
        //여기서 저장을 하고
        fclose($file);

            ?>
        <p style="text-align: center">
          <br><br>

        <strong>  오늘의 일용할양식 저장이 완료되었습니다!</strong> <br>
        <a href="./index.html">메인 페이지로 돌아가기</a>
        </p>
        <br><br><br>

        <iframe src="https://center-pf.kakao.com/_PxggYT/dashboard" width="100%" height="500px"></iframe>



  </body>
</html>
