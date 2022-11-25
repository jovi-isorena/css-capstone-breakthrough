<?php ?>

<!DOCTYPE html> 
<head>
<style>
body{
    margin: 10px;
}

    ul{
    float: right;
    list-style-type: none;
    padding-right:30px;
}

ul li{
    display: inline-block;
    font-size: 25px;
}
.userlogo img{
    width: 60px;
    float: right;
    padding-top:30px;
}
ul li a{
    text-decoration: none;
    color: black;
    padding: 10px 60px;
    transition: 0.6s ease;
    border-radius: 8%;
    
}
ul li a:hover{
    background-color: lightblue;
    color: #000;
}
ul li.active a{
    background-color: lightblue;
    color: #000;
}
.image2 h1{
    padding-top: 100px;
    float:left;
    padding-left: 55px;
    font-size: 60px;
}
.image2 img{
    width: 650px;
    float: right;
    padding-right: 20px;
}
.third{
    align-content: center;
}
.third h2{
    padding-top:700px;
    text-align: center;
}
form {
  border: 3px solid #f1f1f1;
  float:left;
  margin-top: 50px;
  margin-left: 50px;
  font-size: 25px;
  padding: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #ccc;
  box-sizing: border-box;
  border-radius: 15px;
  width: 500px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  float: left;
}

/* Add padding to containers */
.container {
  
}

/* The "Forgot password" text */
span.psw {
  float: left;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: left;
  }
  .cancelbtn {
    width: 50px;
  }
}
</style>    
<title></title></head>
<body>
<div class="userlogo">
<img src="/storage/1.png"></div>
<div class="list"><nav>
    <ul><h4>
        <li><a href="">Event</a></li>
        <li><a href="">Calendar</a></li>
        <li><a href="">About us</a></li>
        </h4>
    </ul>
</nav></div>
<form action="home" >

  <div class="container">
    <label for="uname"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
    <button type="submit"><a href="subjects">Login</a></button>
    <button type="button" class="cancelbtn">Cancel</button><br>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<div class="image2">
<img src="/storage/2.png">
</div>


</body>
</html>