function fun_val() {
    var log = document.loginsell.username.value;
    if (log == "") {
        alert("Please Enter User name");
        document.loginsell.username.focus;
        return false;
    }

    var pass = document.loginsell.password.value;
    if (pass == "") {
        alert("Please Enter Password");
        document.loginsell.password.focus;
        return false;
    }
}