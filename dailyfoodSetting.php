<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DailyFood Setting Page</title>
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="dailyfoodSetting.css?ver=1">
  </head>
  <body>

    <h1><strong>일용할 양식 등록</strong></h1>
    <br><br><br>
    <form class="" action="upload.php" method="post" enctype='multipart/form-data'>
      <div id="forCenter" class="">


      <select class="language" name="language">
        <option value="한국어">한국어</option>
        <option value="영어">영어</option>
      </select>
      <select id="words" name="words">
        <option value="창세기" selected>창세기</option>
        <option value="출애굽기">출애굽기</option>
        <option value="레위기">레위기</option>
        <option value="민수기">민수기</option>
        <option value="신명기">신명기</option>
        <option value="사사기">사사기</option>
        <option value="룻기">룻기</option>
        <option value="사무엘상">사무엘상</option>
        <option value="사무엘하">사무엘하</option>
        <option value="열왕기상">열왕기상</option>
        <option value="열왕기하">열왕기하</option>
        <option value="역대상">역대상</option>
        <option value="역대하">역대하</option>
        <option value="에스라">에스라</option>
        <option value="느혜미야">느혜미야</option>
        <option value="에스더">에스더</option>
        <option value="욥기">욥기</option>
        <option value="시편">시편</option>
        <option value="잠언">잠언</option>
        <option value="전도서">전도서</option>
        <option value="아가">아가</option>
        <option value="이사야">이사야</option>
        <option value="예레미야">예레미야</option>
        <option value="예레미야애가">예레미야애가</option>
        <option value="에스겔">에스겔</option>
        <option value="다니엘">다니엘</option>
        <option value="호세아">호세아</option>
        <option value="요엘">요엘</option>
        <option value="아모스">아모스</option>
        <option value="오바댜">오바댜</option>
        <option value="요나">요나</option>
        <option value="미가">미가</option>
        <option value="나훔">나훔</option>
        <option value="하박국">하박국</option>
        <option value="스바냐">스바냐</option>
        <option value="스가랴">스가랴</option>
        <option value="말라기">말라기</option>
        <option value="마태복음">마태복음</option>
        <option value="마가복음">마가복음</option>
        <option value="누가복음">누가복음</option>
        <option value="요한복음">요한복음</option>
        <option value="사도행전">사도행전</option>
        <option value="로마서">로마서</option>
        <option value="고린도전서">고린도전서</option>
        <option value="고린도후서">고린도후서</option>
        <option value="갈라디아서">갈라디아서</option>
        <option value="에베소서">에베소서</option>
        <option value="빌립보서">빌립보서</option>
        <option value="골로새서">골로새서</option>
        <option value="데살로니가전서">데살로니가전서</option>
        <option value="데살로니가후서">데살로니가후서</option>
        <option value="디모데전서">디모데전서</option>
        <option value="디모데후서">디모데후서</option>
        <option value="디도서">디도서</option>
        <option value="빌레몬서">빌레몬서</option>
        <option value="히브리서">히브리서</option>
        <option value="야고보서">야고보서</option>
        <option value="베드로전서">베드로전서</option>
        <option value="베드로후서">베드로후서</option>
        <option value="요한일서">요한일서</option>
        <option value="요한이서">요한이서</option>
        <option value="요한삼서">요한삼서</option>
        <option value="유다서">유다서</option>
        <option value="요한계시록">요한계시록</option>
      </select>
        <select id="sheets" class="sheet" name="sheet">
          <option value="1">1장</option>
          <option value="2">2장</option>
          <option value="3">3장</option>
          <option value="4">4장</option>
          <option value="5">5장</option>

            </select>
            <p> </p>

              <input id="file" type="file" name="file"> </input> <br>
            <input id="save" class="btn btn-primary"  type="submit" name="save" value="저장하기">

            </div>
    </form>


    <script type="text/javascript" src="dailyfoodSetting.js">

    </script>
  </body>
</html>
