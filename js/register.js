function compare(){
    var password = document.getElementById('repassword').value;
    var confirmation = document.getElementById('password').value;
    if (password !== confirmation) {
        document.getElementById('password').style.color = 'red'
        document.getElementById('repassword').style.color = 'red'
    }else{
        document.getElementById('password').style.color = 'black'
        document.getElementById('repassword').style.color = 'black'
    }
}
function checkAddress(checkbox)
{
    if (checkbox.checked)
    {
        document.getElementById('password').type = 'text'
        document.getElementById('repassword').type = 'text'
    }
    else{
        document.getElementById('password').type = 'password'
        document.getElementById('repassword').type = 'password'
    }
}

