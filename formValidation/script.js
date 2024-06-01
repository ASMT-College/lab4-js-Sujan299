const emailValidate = (email)=> {
    let pattern = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/;
    return pattern.test(email);
}

const formValidate = ()=> {
    const email = document.getElementById("email").value;
    const errMsg = document.getElementById("errMsg");
    if (emailValidate(email)) {
        errMsg.style.display = "none";
        return true;
    }
    errMsg.style.display = "block";
    return false;

}