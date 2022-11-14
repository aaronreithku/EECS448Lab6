function validateForm(){

    let username = document.forms["items"]["username"].value;
    let password = document.forms["items"]["pwd"].value;

    var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (username.match(validEmail) && password != "") {
        document.getElementById("loginDiv").style.display = "none";
        document.getElementById("Store").style.display = "block";
        return true;
    }
    else if (password == "" && !(username.match(validEmail))){
        alert("Username must be of the form name@domain.com\nPassword cannot be blank");
        return false;
    }
    else if (password == "" && username.match(validEmail)){
        alert("Password cannot be blank");
        return false;
    }
    else if (password != "" && !(username.match(validEmail))) {
        alert("Username must be of the form name@domain.com");
        return false;
    }
}

function validateQuantities(){

    let footballquan = document.forms["items"]["Footballnum"].value;
    let Saltinesquan = document.forms["items"]["Saltinesnum"].value;
    let Grapesquan = document.forms["items"]["Grapesnum"].value;
    let shipping = document.forms["items"]["shipping"].value;

    if(footballquan == "" || Saltinesquan == "" || Grapesquan == "")
    {
        alert("Please fill out a quantity for all items");
        return false;
    }
    else if(footballquan < 0 || Saltinesquan < 0 || Grapesquan < 0)
    {
        alert("Item quantities must be at least 0");
        return false;
    }
    else if(shipping == "")
    {
        alert("Please select a shipping option");
        return false;
    }
    return true;
}

function resetFields()
{
    document.getElementById("Footballnum").value = "0";
    document.getElementById("Saltinesnum").value = "0";
    document.getElementById("Grapesnum").value = "0";
    var ship = document.getElementsByName("shipping");
    for(var i=0;i<ship.length;i++)
        ship[i].checked = false;
} 