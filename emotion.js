//버튼마다 event를 걸고 랜덤으로 그에 맞는 페이지를(byEmotion 폴더에 들어있는 페이지중) 열어준다.
document.getElementById("happy").addEventListener("click",happyPage);
document.getElementById("sad").addEventListener("click",sadPage);
document.getElementById("gloomy").addEventListener("click",gloomyPage);
document.getElementById("needCourage").addEventListener("click",needCouragePage);




function happyPage(){
var number = (Math.floor(Math.random()*3)+1).toString();
location.href="byEmotion/happy" + number + ".html";
}

function sadPage(){
var number = (Math.floor(Math.random()*3)+1).toString();
location.href="byEmotion/sad" + number + ".html";
}

function gloomyPage(){
var number = (Math.floor(Math.random()*3)+1).toString();
location.href="byEmotion/gloomy" + number + ".html";
}

function needCouragePage(){
var number = (Math.floor(Math.random()*3)+1).toString();
location.href="byEmotion/courage" + number + ".html";
}
