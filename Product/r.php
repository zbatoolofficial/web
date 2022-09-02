<!--?php 
 include "db.php";
include "login.php";

?-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css" type="text/css">
</head>

<body>
   
<div class="container" id="formContainer">
   <div class="row d-flex">
       <div class="col-md-5  bg-warning" id="form">

<!--LOGIN FORM-------------------------->          
           <form method="post" action="" id="loginForm">
               <div id="imgContainer">
                   <img src="login-img.png">
                   <h2>Login</h2>
               </div>

               <div class="container">
                  <div id="loginMsgs"></div>

                      <div class="form-group">
                          <label for="username">Username</label>
                          <div id="error_username"></div>
                          <input type="text" class="form-control" name="user[username]">
                       </div>


                      <div class="form-group">
                          <label for="username">Password</label>
                          <div id="error_password"></div>
                          <input type="password" class="form-control" name="user[password]">
                      </div>

                      <div class="form-group">
                          <button class="btn btn-primary" id="submit">Login</button>   
                      </div>

               </div>

           </form>
</div>
           
    <!--REGISTRATION FORM---------------------->
    <div class="col-md-6  bg-warning" id="form">

           <form method="post" action="" id="registerForm">
               <div id="imgContainer">
                   <img src="login-img.png">
                   <h4>Let 's get your account setup</h4>
               </div>

               <div class="container">
<!--                   
                   <div id="loading" class="alert alert-info alert-dismissable hide"> 
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   </div> -->
                     
                        
                      <div class="form-group">
                          <label for="name">Name</label>
                          <div id="error_name"></div>
                          <input type="text" class="form-control" name="register[name]" placeholder="Enter your full name">
                      </div>
                       
                      <div class="form-group">
                          <label for="email">Email</label>
                          <div id="error_email"></div>
                          <input type="email" class="form-control" name="register[email]" placeholder="Enter your email">
                      </div>
                       
                       
                      <div class="form-group">
                          <label for="username">Username</label>
                          <div id="error_username"></div>
                          <input type="text" class="form-control" name="register[username]" placeholder="Create your username">
                       </div>


                      <div class="form-group">
                          <label for="username">Password</label>
                          <div id="error_password"></div>
                          <input type="password" class="form-control" name="register[password]" placeholder="Create a password">
                      </div>

                      <div class="form-group">
                          <button class="btn btn-primary" id="register">Register Now!</button>   
                      </div> 
                 </div>  
           </form>
           
          
           <br />
       </div>
   </div>
</div>
   
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="/scripts.js" type="text/javascript"></script>

</body>
</html>
 
<style>
/* Add Our CSS
That is our basic markup to create our forms and our container. We created a container with the ID of #formContainer, a form wrapper with an ID of #form, a login form with the ID of #loginForm and a registration form with the ID of #registerForm.  We will be using these Id's when we start writing our JavaScript. Notice also in our forms the `name` attribute on our input fields. Instead of create name="username", we are setting it name="register[username]".  This is a very useful feature of HTML 5 that allows us to store our data into a custom array. In this case, our data will be stored in an array called `register`.  This will come in handy later.

Before we dive into any logic, our forms look pretty haggard, and we certainly don't need two of them showing up right now, so let's fix that. 

We need to hide our registration form for the time being, center our form and add a background. We are going to add a background color and a box shadow to our #form  and set text-align:center. We're also going to add a sweet looking background image to our body and make our form look badass!

  */

/* SET OUR WIDTH AND HIGHT TO 100% FOR HTML AND BODY */
html,
body {
    background-color:pink;
    width:100%;
    height:100%;
}

/* SET BACKGROUND TO OUR IMAGE. */
body {
    background-image: url(bg.jpeg);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment:fixed;
}

/* SET BACKGROUND TO OUR FORM WITH A DROP SHADOW AND SET OUR COLOR TO WHITE OUR BACKGROUND USES AN ALPHA CHANNEL HEX CODE TO GIVE US OPACITY.*/
#form {
    background:#18184c73;  CAN ALSO USE RGBA. EXAMPLE: background: rgba(24, 24, 76, .45);
    box-shadow:0px 5px 23px 0px #eae3e3;
    color:#fff;
   
}

#formContainer {
    margin-top:100px;
    text-align: center;
}
 

Looking better, but let's make our buttons full width and size up our image a bit. The image size we set may vary depending on your image. Let's also add some styling to our input fields. Lets give it an opacity effect as well, remove the border, give it a slight border radius and make sure the color is set to white. We need to use the !important to make sure these values are overwritten since they are already defined in our bootstrap files. 

 

img {
    width: 50%;
    margin-top:20px;
    margin-bottom: 20px;
}

.btn {
    width:100%;
    margin-bottom:50px;
}

input {
    background:#ffffff61 !important;
    border:none !important;
    border-radius:5px;
    color:#fff;
}

input[name^="register"]::placeholder { /* Selects placeholders of inputs with the name attribute that begins with 'register'. */
    color:#fff;
    opacity:0.6;
}
</style>