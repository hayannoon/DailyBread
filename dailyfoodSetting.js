var dict = {};
dict["창세기"]=50;dict["출애굽기"]=40;dict["레위기"]=27;dict["민수기"]=36;dict["신명기"]=34;dict["여호수아"]=24;dict["사사기"]=21;
dict["룻기"]=4;dict["사무엘상"]=31;dict["사무엘하"]=24;dict["열왕기상"]=22;dict["열왕기하"]=25;dict["역대상"]=29;dict["역대하"]=36;
dict["에스라"]=10;dict["느혜미야"]=13;dict["에스더"]=10;dict["욥기"]=42;dict["시편"]=150;dict["잠언"]=31;dict["전도서"]=12;
dict["아가"]=8;dict["이사야"]=66;dict["예레미야"]=52;dict["예레미야애가"]=5;dict["에스겔"]=48;dict["다니엘"]=12;dict["호세아"]=14;
dict["요엘"]=3;dict["아모스"]=9;dict["오바야"]=1;dict["요나"]=4;dict["미가"]=7;dict["나훔"]=3;dict["하박국"]=3;dict["스바냐"]=3;
dict["학개"]=2;dict["스가랴"]=14;dict["말라기"]=4;dict["마태복음"]=28;dict["마가복음"]=16;dict["누가복음"]=24;dict["요한복음"]=21;
dict["사도행전"]=28;dict["로마서"]=16;dict["고린도전서"]=16;dict["고린도후서"]=13;dict["갈라디아서"]=6;dict["에베소서"]=6;
dict["빌립보서"]=4;dict["골로새서"]=4;dict["데살로니가전서"]=5;dict["데살로니가후서"]=3;dict["디모데전서"]=6;dict["디모데후서"]=4;
dict["디도서"]=3;dict["빌레몬서"]=1;dict["히브리서"]=13;dict["야고보서"]=5;dict["베드로전서"]=5;dict["베드로후서"]=3;
dict["요한일서"]=5;dict["요한이서"]=1;dict["요한삼서"]=1;dict["유다서"]=1;dict["요한계시록"]=22;

var words = document.getElementById("words").value;
var numberOfSheet = dict[words];
changeNumberOfSheet(numberOfSheet);

document.getElementById("words").addEventListener("click", function(){
  var words = document.getElementById("words").value;
  var numberOfSheet = dict[words];
  changeNumberOfSheet(numberOfSheet);
})

function changeNumberOfSheet(num){
  var msg = "";
  for(var i = 1 ; i < num+1 ; i+=1){
    msg += ("<option value=" + String(i) + ">" + String(i) + "장</option>" );
  }
  document.getElementById("sheets").innerHTML = msg;
}
