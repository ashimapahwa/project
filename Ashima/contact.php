<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
  * {
    box-sizing: border-box;
    background-color:black;
  }
  
  /* Style inputs */
  input[type=text], select, textarea {
    
    width: 100%;
    padding: 12px;
    border: 1px solid gray;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color:gray;
    color:darkgray;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: gray;
  }
  
  /* Style the container/contact section */
  .container {
    border-radius: 5px;
    background-color: gray;
    padding: 10px;
  }
  
  /* Create two columns that float next to eachother */
  .column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
  h2{
                font-family: cursive;
                font-size: 60px;
                color: gray;
            }
            p{
                font-family: cursive;
                font-size: 30px;
                color: gray;
            }        

</style>
</head>
<body>
  
       
                 
    

<div class="container">
    <div style="text-align:center">
      <h2 style="">Contact Us</h2>
      <p>Adore yourself with  a beautiful jewellery.</p>
    </div>
    <div class="row">
      <div class="column">
       
      </div>
      <div class="column">
        <form action="/action_page.php">
          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
         
          </select>
          
          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
  
  
  