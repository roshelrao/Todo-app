
// GET DATA
// fetch("./signin.php")
// .then(res => res.json())
// .then(data => console.log(data))

//POST DATA
/*let data = {
    name: "rao",
    password: "1234"
}

fetch("./signin.php", {
    method: "POST",
    headers:{
        "content-type": "application/json"
    },
    body: JSON.stringify(data)
})
.then(res => res.json())
.then(data => console.log(data))
.catch(e => console.log(e))
*/

function login1(){
    var email = document.loginform.email.value;
    var lpass = document.loginform.pass.value;

    if(email=="" ||lpass=="")
    {
        alert ("Please fill in the details");
    }

    let data = {
        email,
        lpass
    }

    fetch("./signin.php", {
        method: "POST",
        headers:{
            "content-type": "application/json"
        },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(data => {
        //console.log(data)
        if(data.verified == 1){
//console.log("ok")
window.location.href = "add.php";
        }
        else{
//console.log("no")
alert ("Invalid username and password");
        }
    })
    
}

function signup1(){
    var fnme = document.signupform.fname.value;
    var lnme = document.signupform.lname.value;
    var mail = document.signupform.email.value;
    var pass = document.signupform.passw.value;
    var rpass = document.signupform.rpassword.value;

    if(fname=="" || lname=="" || mail=="" || pass=="" || rpass==""){
        alert("Please fill all the details");
    }
    else if( pass!= rpass){
        alert("Passwords do not match");
    }
    else{
        window.location.href="signupdb.php";
    }
}