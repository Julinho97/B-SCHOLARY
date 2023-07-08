// START FUNCTION THAT CHECKS THE HOURS 
function addZero(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

function get_time() {
    let date = new Date();
    let hours = addZero(date.getHours());
    let minuts = addZero(date.getMinutes());
    let seconds = addZero(date.getSeconds());
    document.getElementById("time").innerHTML = hours + ":" + minuts + ":" + seconds
}

function update_hours() {
    let update = setInterval(function() { get_time(); }, 1000);
};
// END OF THE FUNCTION
function open_registers() {
    let reg_etudiant = document.getElementsByClassName("reg_etudiant");
    reg_etudiant[0].style.height = "80vh";
    reg_etudiant[0].style.transition = " all 3s";
}
// START OF THE FUNCTION THAT CHECKS THE CATEGORY SELECTS AND PLAYS THE NECESSARY FIELDS
function open_registers(category) {
    var element = category.value
    var prof = document.getElementsByClassName("reg_prof");
    var etudiant = document.getElementsByClassName("reg_etudiant");
    var matiere = document.getElementsByClassName("reg_matiere");
    var documents = document.getElementsByClassName("reg_documents");


    if (element == "etudiant") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "visible";
        matiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
    if (element == "prof") {
        prof[0].style.visibility = "visible";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
    if (element == "Emails") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        Email[0].style.visibility = "visible";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
    if (element == "matiere") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "visible";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
    if (element == "absanc") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "visible";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
    if (element == "evaliation") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "visible";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
    if (element == "filiere") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "visible";
        documents[0].style.visibility = "hidden";
    }
    if (element == "Documents") {
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        Email[0].style.visibility = "hidden";
        absanc[0].style.visibility = "hidden";
        evaliation[0].style.visibility = "hidden";
        filiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "visible";
    }
};
// END OF THE FUNCTION

// START FUNCTION THAT CONTROLS OPENING AND CLOSING NEW RECORDS
function new_reg_controller(status) {
    var get_window = document.getElementsByClassName("register");
    var get_edit_window = document.getElementsByClassName("edit_registers");
    var prof = document.getElementsByClassName("reg_prof");
    var etudiant = document.getElementsByClassName("reg_etudiant");
    var matiere = document.getElementsByClassName("reg_matiere");
    var documents = document.getElementsByClassName("reg_documents");

    if (status == "open") {
        get_window[0].style.visibility = "visible";
        get_window[0].style.left = "40%";
        get_window[0].style.transition = "all 2s";
        var close_divs = document.querySelectorAll(".info_container");
        for (var i = 0; i < close_divs.length; i++) {
            close_divs[i].style.width = "0%";
            close_divs[i].style.zIndex = "-10";
        }
    }
    if (status == "close") {
        get_window[0].style.visibility = "hidden";
        get_window[0].style.left = "-100%";
        get_window[0].style.transition = "all 2s";
        prof[0].style.visibility = "hidden";
        etudiant[0].style.visibility = "hidden";
        matiere[0].style.visibility = "hidden";
        documents[0].style.visibility = "hidden";
    }
};
// END OF FUNCTION 

// FUNCTION TO CLOSE POP UP 
function pop_close() {
    var get_window = document.getElementsByClassName("pop_up");
    get_window[0].style.visibility = "hidden";
}
// END OF FUNCTION

// INFO CONTROL FUNCTION ON THE SCREEN
function anim(div) {
    var close_divs = document.querySelectorAll(".info_container");
    for (var i = 0; i < close_divs.length; i++) {
        close_divs[i].style.width = "0%";
        close_divs[i].style.zIndex = "-10";
    }
    var element = document.getElementById(div);
    element.style.width = "84%";
    element.style.zIndex = "5";
    element.style.transition = "width 2s";
}

// LOGOUT FUNCTION
function logout() {
    location.href = "navbar.php";
}

// FUNCTION THAT CLOSES THE EDIT OR DELETE SCREEN
function close_edit() {
    var container = document.getElementsByClassName("edit_register");
    container[0].style.visibility = "hidden";
    container[0].style.left = "-100%";
    container[0].style.transition = "all 2s";
}
x