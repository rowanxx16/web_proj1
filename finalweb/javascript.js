
function printError(elementid,errorMessage){
    document.getElementById(elementid).innerHTML=errorMessage;
}
//function defination of checkForm
function checkForm(){
    //you have to pick up the values from the document input 
    var fullname=document.getElementById('fullname').value;
    var username=document.getElementById('username').value;
    var email=document.getElementById('email').value;
    var password=document.getElementById('pswd').value;
    var passwordconfirm=document.getElementById('pswdconf').value;





    //declere the error variable (error massage) for require field validation
    //nothing user enter so...
    var fullnameerror=emailerror=usernameerror=passworderror=passwordconfirmerror=true;

    //check all the required field individually 

    //fullname validation 
    while(true){
        if (fullname==""|| fullname==null){
            printError("fullnameErr","Please Enter Your Fullname ");
        }else{//at least A-z a-z . or space and we can use both 
            var regex=/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/;
            if(regex.test(fullname)===false){
                printError("fullnameErr","Your Name is invalid ,Please Try Again");
            }else{
                printError("fullnameErr",'');
                //no error find
                fullnameerror=false;} }
    
         //email validation 
         if (email==""|| email==null){
            printError("emailErr","Please Enter Your email ");
        }else{
            var regex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if(regex.test(email)===false){
                printError("emailErr","Your Email is invalid ,Please Try Again");
            }else{
                printError("emailErr",'');
                //no error find
                emailerror=false;} }   
    
          //username validation 
          if (username==""|| username==null){
            printError("usernameErr","Please Enter Your username ");
        }else{
            var regex=/^[A-Za-z][A-Za-z0-9_]{5,29}$/;
            if(regex.test(username)===false){
                printError("usernameErr","Your Username is invalid ,Please Try Again");
            }else{
                printError("usernameErr",'');
                //no error find
                usernameerror=false;} }
    
             //password validation 
            if (password==""|| password==null){
                    printError("passwordErr","Please Enter Your Password ");
            }else{//at least 1 lower-upper letter with special charachter and from 8-20
                var regex=/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;
                if(regex.test(password)===false){
                    printError("passwordErr","Your Password is invalid ,Please Try Again");
                }else{
                    printError("passwordErr",'');
                    //no error find
                    passworderror=false;} }   
            if(password!=passwordconfirm){
                printError("passwordconfirmerror","The password and Confrim Password dose not match");
    
            }else{
                printError("passwordconfirmerror",);
                passwordconfirmerror=false;
            }
    
    
        //check all error variable , if not stop the exction , and show the error message 
        if (fullnameerror|| emailerror||usernameerror||passworderror||passwordconfirmerror===true){
            return false;
    
        }else{
            var datapreviwe=`The Data That You Have Entered.,\n fullname: ${fullname}\n Email Address :${email}\n username :${username}\n password \n Email Address :${email};`
            alert(datapreviwe);
            return true;
        }
    
    
    }

    }
    