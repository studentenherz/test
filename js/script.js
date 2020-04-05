function validateTextbox() {

  if(confirm("Are you sure?")){
    var boxname = document.getElementById("name");
    var boxadd = document.getElementById("address");
    var boxphone = document.getElementById("phone");
    var boxemail = document.getElementById("email");

    if(boxname.value == "" || boxadd.value == "" || boxphone.value == "" || boxemail.value == ""){
      alert("Fill out all the fields before submiting");
      return false;
    }
  }
  else {
    return false;
  }
}

function goToGoogle() {
  window.location = "http://google.com";
}
