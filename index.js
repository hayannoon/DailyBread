

function openLoginWindow() {
  //var popupX = (document.body.offsetWidth / 2) - (200 / 2);
  //var popupY= (document.body.offsetHeight / 2) - (300 / 2);
 window.open("login.html", "login", "width=500, height=200, left=1000, top=50");
 //window.open("login.html", "login", "width=500, height=200, left="+ popupX+" , top=" + popupY);
}
document.getElementById("LogInButton").addEventListener("click",openLoginWindow);

if(localStorage.getItem('login')=="1"){ //로그인상태일경우는 관리자 메뉴를 보여준다.
  var changedTag = "<a id='LogOutButton' class='nav-link' href='#'>LogOut</a>";
  document.getElementById("logIn").innerHTML = changedTag;
  function logout(){
    localStorage.setItem("login",0);
    location.reload();
  }
  document.getElementById("LogOutButton").addEventListener("click",logout);

  document.getElementById("forAdmin").style.display = "block";
}
