function myFunction() { // Function to clear the form 

    document.getElementById("registration-form").reset();

}

function ConfirmClear(){ // Function for confirmation to clear form 

    var x = confirm("Are you sure you want to clear all items?");

        if (x)
        {
            myFunction(); // confirmation will call the function -> myFunction to get the form reset. 
        }
        else
        {
            return false; // form won't be reset 
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
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) 
            return true;
        else
            return false;
    }
    catch (err) {

        alert(err.Description);

    }
}

function validateFields(){ // Function to validate the form that

    if( document.myForm.first_name.value == "" ){ // to validate first name
        alert( "Please provide your First Name!" );
        document.myForm.first_name.focus() ;
        return false;
    }

    if( document.myForm.last_name.value == "" ){ // to validate last name
        alert( "Please provide your Last Name!" );
        document.myForm.last_name.focus() ;
        return false;
    }

    if( document.myForm.email.value == "" ){ // to validate email 
        alert( "Please provide your Email!" );
        document.myForm.email.focus() ;
        return false;
    }

    if( document.myForm.password.value == "" ){ //to validate password
        alert( "Please provide your Password!" );
        document.myForm.password.focus() ;
        return false;
    }

    if( document.myForm.confirm_password.value == "" ){ // to validate confirm password 
        alert( "Please provide your Confirm Password!" );
        document.myForm.confirm_password.focus() ;
        return false;
    }

    if( document.myForm.gender.value == "" ){ // to validate gender
        alert( "Please provide your Gender!" );
        document.myForm.gender.focus() ;
        return false;
    }

    if( document.myForm.state.value == "" ){ // to validate state
        alert( "Please provide your State!" );
        document.myForm.state.focus() ;
        return false;
    }

    return( true );

}

function validateTerms(){ // to validate that the terms and conditions is checked. 

    if(document.getElementById("terms").checked == true){

        return true; // terms and condition is checked, return true. 
    }
    else
    {
        alert("You have to agree on terms and conditions");

        return false; // terms and condition is not checked, return false. 
    }
    
}

function validateEmail(inputText){ //function to make sure email is in proper format

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(inputText.value.match(mailformat))
            {
                document.myForm.email.focus();
                return true;
            }
            else
            {
            alert("You have entered an invalid email address! \nPlease enter an email address with the correct format!");
                document.myForm.email.focus();
                return false;
            }
}

function validatePassword(){ //function to make sure password is according to criteria

        var res; 
        var str = 
        
        document.getElementById("password").value; 
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

    if(document.getElementById("password").value == document.getElementById("confirm_password").value)
    {

        return true; // returning true when password and confirm password string matches.
        
    }else{

        alert("Password and Confirm Password entered does not match!");

        return false; // returning false when password and confirm password string doesnt match. 
 
    }

}

function validateForm(){ // total form validate 

    var isFormValid = true;
    isFormValid &= validateTerms(); //validate terms and condition checkbox
    isFormValid &= validateFields(); // validate empty fields
    isFormValid &= validateEmail(document.myForm.email); // validate email format
    isFormValid &= validatePassword(); // validate password format 
    isFormValid &= validateConfirmPassword(); // validate password string and confirm password string comparison 
    return isFormValid? true:false; 
    
    // if all fields are valid, will return true and form will submit.
    // if either fields are not valid, will return false and form will not submit. Alert message will be displayed. 
    
}









