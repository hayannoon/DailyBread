
var lis = document.getElementsByClassName('btn btn-secondary');
    for(var i=0; i < lis.length; i++){
        lis[i].addEventListener("click",movePage)  ;
    }


function movePage(){

  var form = document.createElement("form");
     form.setAttribute("charset", "UTF-8");
     form.setAttribute("method", "Post");  //Post 방식
     form.setAttribute("action", "./historyPages.php"); //요청 보낼 주소

     var hiddenField = document.createElement("input");
         hiddenField.setAttribute("type", "text");
         hiddenField.setAttribute("name", "date");
         hiddenField.setAttribute("value", this.innerHTML);
         form.appendChild(hiddenField);

         document.body.appendChild(form);

          form.submit();

}
