<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <link rel="stylesheet" href="./index.css?var=1">
  </head>
  <body>
    <?php
    $inputId = $_POST["id"];
    $inputPw = $_POST["pw"];

    $flag = 0;
    $fp = fopen("./data/LoginData.txt","r"); //파일열고

    while(!feof($fp)){
            $temp = fgets($fp);
            if($temp == ""){
              break;
            }

            $x = explode("|",$temp);

            $existingId= $x[0];
            $existingPw = $x[1];


            if($inputId == $existingId){
              $flag = 1;


              if(trim($inputPw) == trim($existingPw)) { //로그인 성공인 경우
                  //fclose($fp);

                  echo "<script> alert('로그인 성공')</script>";
                  echo "<script> localStorage.setItem('login', '1'); </script>";
                  echo "<script> opener.parent.location.reload(); </script>";

                  echo "<script> window.close() </script>";

                  break;
              } else{


                  echo "<script> alert('잘못된 비밀번호를 입력하셨습니다.')</script>" ;
                  echo "<script>window.close()</script>" ;
              }
            }
          } //listArr에 booklist값들 저장
          fclose($fp);
          if($flag==0){
            echo "<script> alert('잘못된 아이디를 입력하셨습니다.')</script>" ;
            //echo "<script>location.href='index.php'</script>";
            echo "<script>window.close()</script>" ;
          }
     ?>
  </body>
</html>
