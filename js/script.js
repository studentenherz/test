// function validateTextbox() {
//
//   if(confirm("Are you sure?")){
//     var boxname = document.getElementById("name");
//     var boxadd = document.getElementById("address");
//     var boxphone = document.getElementById("phone");
//     var boxemail = document.getElementById("email");
//
//     if(boxname.value == "" || boxadd.value == "" || boxphone.value == "" || boxemail.value == ""){
//       alert("Fill out all the fields before submiting");
//       return false;
//     }
//   }
//   else {
//     return false;
//   }
// }
//
// function goToGoogle() {
//   window.location = "http://google.com";
// }
//
// function addText(){
//   var entry = document.getElementById("entry");
//   var body = document.getElementById("place");
//
//   body.innerHTML = "asd";
// }

function displayDate(date){
    var datestr = date[2] + "/" + date[1] + "/" + date[0];
    return datestr;
}

function displayTime(date){
  var datestr = (date[3] > 9 ?" ":" 0") + date[3] + (date[4] > 9 ?":":":0")+ date[4] + (date[5] > 9 ?":":":0") + date[5];
  return datestr;
}

function dateDif(date1, date2){
    var months = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    var diff = [0, 0, 0, 0, 0, 0]
    for(var i=0; i<6; i++){
      diff[i] = date2[i] - date1[i];
    }
    if(diff[1] < 0 && diff[0] > 0){
      diff[0]--;
      diff[1]+=12;
    }
    if(diff[2] < 0 && diff[1] > 0){ // if days < 0 and months > 0
      diff[1]--; // month --
      diff[2]+= months[(date2[1]-1) % 12] // add previous moth
    }
    return diff;
}

function toSec(date){
  var time = 0;
  var secs = [365*24*60*60, 30*24*60*60, 24*60*60, 60*60, 60, 1];
  for(var i =0; i<6; i++)
    time += date[i] * secs[i];
  return time;
}

function countdown(){

  var d = new Date();

  var startdate = [2019, 11, 24, 00, 00, 00];
  var specteddate = [2020, 12, 21, 00, 00, 00];
  var now = [d.getFullYear(), d.getMonth(), d.getDate(), d.getHours(), d.getMinutes(), d.getSeconds()];

  var remaining = dateDif(now, specteddate);
  var elapsed = dateDif(startdate, now);

  var secstart = toSec(startdate), secspected = toSec(specteddate);
  var percent = 100*(toSec(now) - secstart)/(secspected - secstart);


  document.getElementById("date").innerHTML = displayDate(now);
  document.getElementById("time").innerHTML = displayTime(now);
  document.getElementById("progressbar1").style.width = percent + "%";
  document.getElementById("progressbar1").innerHTML = elapsed[1] + " months      " + elapsed[2] + " days";
  document.getElementById("progressbar2").style.width = (90 - percent) + "%";
  document.getElementById("progressbar2").innerHTML = remaining[1] + " months      " + remaining[2] + " days";
}


setInterval(countdown, 500)



var slideIndex = 0;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  var slides = document.getElementsByClassName("slide");
  slideIndex += n + slides.length;
  showSlides(slideIndex %= slides.length);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex].style.display = "block";
  dots[slideIndex].className += " active";
}

setInterval(plusSlides,10000,1);
