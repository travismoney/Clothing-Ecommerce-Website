function showpw() { // password toggle visibility

    var pw = document.getElementById('pass');

    if(pw.type == "text") {
        pw.type = "password";
    }

    else {
        pw.type = "text";
    }
}

function showcpw() { // confirm password toggle visibility

    var cpw = document.getElementById('cpass');

    if(cpw.type == "text") {
        cpw.type = "password";
    }

    else {
        cpw.type = "text";
    }
}

function onlyAlphabets(e, t) { // Function to only allow alphabets in the First name and Last Name Section 
    try {
        if (window.event) {
            var charCode = window.event.keyCode;
        }
        else if (e) {
            var charCode = e.which;
        }
        else { return true; }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode == 32) 
            return true;
        else
            return false;
    }
    catch (err) {

        alert(err.Description);

    }
}

function isNumber(evt) { // function to allow numerics only on Contact Number keypress
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

function validateFields(){ // Function to validate the form that

    if( document.myForm.c_name.value == "" ){ // to validate first name
        alert( "Please provide your First Name!" );
        document.myForm.c_name.focus() ;
        return false;
    }

    /*if( document.myForm.c_email.value == "" ){ // to validate email >>>> this statement commented since redundant with validateEmail function below <<<<
        alert( "Please provide your Email!" );
        document.myForm.c_email.focus() ;
        return false;
    }*/

    if( document.myForm.c_pass.value == "" ){ //to validate password
        alert( "Please provide your Password!" );
        document.myForm.c_pass.focus() ;
        return false;
    }

    if( document.myForm.c_confirm_pass.value == "" ){ // to validate confirm password 
        alert( "Please provide your Confirm Password!" );
        document.myForm.c_confirm_pass.focus() ;
        return false;
    }

    if( document.myForm.c_country.value == "" ){ // to validate country
        alert( "Please provide your Country!" );
        document.myForm.c_country.focus() ;
        return false;
    }

    if( document.myForm.c_city.value == "" ){ // to validate city
        alert( "Please provide your City!" );
        document.myForm.c_city.focus() ;
        return false;
    }

    if( document.myForm.c_contact.value == "" ) { // to validate contact number
        alert( "Please provide your Contact Number!" );
        document.myForm.c_contact.focus() ;
        return false;
    }

    if( document.myForm.c_address.value == "" ) { // to validate address
        alert( "Please provide your Address!" );
        document.myForm.c_address.focus() ;
        return false;
    }

    /* if( document.myForm.c_image.value == "" ) { // to validate profile picture
        alert( "Please provide your Profile Picture!" );
        document.myForm.c_image.focus() ;
        return false;
    } */

    return( true );

}

function validateEmail(inputText){ //function to make sure email is in proper format

    var emailFilled = document.myForm.c_email.value;

    if (emailFilled !== "") {

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(inputText.value.match(mailformat))
                {
                    document.myForm.c_email.focus();
                    return true;
                }
                else
                {
                alert("You have entered an invalid email address! \nPlease enter an email address with the correct format!");
                    document.myForm.c_email.focus();
                    return false;
                }
    } else {
        alert("Email must be filled out");
        return false;
    }
}

function validatePassword(){ //function to make sure password is according to criteria

        var res; 
        var str = 
        
        document.getElementById("pass").value; 
        if (
            str.match(/[a-z]/g) &&  // lowercase letters
            str.match( /[A-Z]/g) &&  // uppercase letters
            str.match( /[0-9]/g) &&  // numerical
            str.match( /[^a-zA-Z\d]/g) &&  // special case letters
            str.length == 6){ // 6 digits only
                res = "TRUE"; 
                return true;
                } 
                else 
                {
                res = "FALSE"; 
                    alert("Please enter a password using the correct format!");
                    return false;
                }
}

function validateConfirmPassword(){ // comparing password string and confirm password string

    if(document.myForm.c_pass.value == document.myForm.c_confirm_pass.value)
    {

        return true; // returning true when password and confirm password string matches.
        
    }else{

        alert("Password and Confirm Password entered does not match!");

        return false; // returning false when password and confirm password string doesnt match. 
 
    }

}

function validateForm(){ // total form validate 

    var isFormValid = true;

    isFormValid &= validateFields(); // validate empty fields
    isFormValid &= validateEmail(document.myForm.c_email); // validate email format
    isFormValid &= validatePassword(); // validate password format 
    isFormValid &= validateConfirmPassword(); // validate password string and confirm password string comparison

    return isFormValid? true:false; // Travis, I'm don't quite understand about this kinda shortcut if-else statement ~Huzaifah
    
    // if all fields are valid, will return true and form will submit.
    // if either fields are not valid, will return false and form will not submit. Alert message will be displayed. 
}







