var xhttp = new XMLHttpRequest();

function remove(val) {


    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("main").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", "delete.php/?id=" + val, true);

    xhttp.send();

}

function edit(val) {

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(val).innerHTML = this.responseText;
        }
    }

    xhttp.open("GET", "edit.php/?id=" + val, true);

    xhttp.send();

}

// alert("here we are!");

var editUser = document.getElementById("edituser");

editUser.addEventListener("submit", function(event) {

    event.preventDefault();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("main").innerHTML = this.responseText;
        }
    }
    xhttp.open("GET", "update.php", true);
    xhttp.sendData();
})