
// รับ values จาก input 
var getUsername = () => document.getElementById("username").value? document.getElementById("username").value : "null";
var getPassword = () => document.getElementById("password").value? document.getElementById("password").value : "null";

// chack null value.
var setValue = () => {

    if (this.getUsername() == "null" || this.getPassword() == "null") {
        return 0;
    }else if(this.getUsername() == "null" && this.getPassword() == "null"){
        return 0;
    }else{
        return this.getUsername() + "aswe" + this.getPassword();
    }
}

// set show alert popup
var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
    keyboard: false
});



function mainLogin() {

	const value = this.setValue();

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          if (value == 0) {
              myModal.toggle();
          }else{
            if(this.responseText == "error"){
                myModal.toggle();
            }else{
                window.location = "main.php";
                //document.getElementById("demo").innerHTML = this.responseText;
            }
          }
    }else{
        return "error";
    }
  };
  xhttp.open("GET", "control_db/php/login-control-db.php?value="+value, true);
  xhttp.send();
}
