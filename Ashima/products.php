<html>
    <head>
        <title>
        </title>
        <style>
            * {box-sizing: border-box}
            body{
              background-color: black;
            }
    
            
h1{
    color:gray;
    font-family: cursive;
    font-size: 50px;
    text-align: center;
}
p{
    color: gray;
    font-family: cursive;
}
/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    color: black;
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: gray;
}

input[type=text]:focus, input[type=password]:focus {
  background-color:darkgrey;
  color: bisque;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color:black;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: darkkhaki;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: black;
  text-align: center;
}

            </style>
            </head>
            <body>
                
                <form action="login.php" method="post">
                    <div class="container">
                      <h1>Register</h1>
                      <p>Please fill in this form to create an account.</p>
                      <hr>
                  
                      <label style="color: gray;" for="email"><b>Email</b></label>
                      <input type="text" placeholder="Enter Email" name="email" id="email" required>
                  
                      <label style="color:gray " for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                  
                      <label style="color:gray" for="psw-repeat"><b>Repeat Password</b></label>
                      <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                      <hr>
                  
                      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                      <button type="submit" class="registerbtn">Register</button>
                    </div>
                  
                    <div class="container signin">
                      <p>Already have an account? <a href="#">Sign in</a>.</p>
                    </div>
                  </form>
            </body>
            </html>