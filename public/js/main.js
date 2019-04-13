
var img = document.getElementById("myImage");
img.addEventListener("click", function(){
  if(img.src != "http://placehold.it/350x150/ff0000"){
    img.src = "http://placehold.it/350x150/ff0000";}
  else{
    img.src = "http://placehold.it/350x150";}});
