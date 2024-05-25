console.log("added js");


function verify()
{
    const inputPassword=document.querySelector('#inputPassword')
    const confirmPassword=document.querySelector('#confirmPassword')
    const passwordAlert=document.querySelector('#password')

if(inputPassword.value!==confirmPassword.value)
    {
        passwordAlert.innerHTML="password doesn't match";
    passwordAlert.style.display="block"
}
else
{
    console.log("password not match");
    passwordAlert.style.display="none"
}
}


let fruits=["mango","orange","grapes"]
    console.log(fruits)

    const details=[{name:"priyanka",role:"testing",},{name:"shreya",role:"fullstack developer"},{name:"nandan",role:"data analytics"}]
    console.log(details)