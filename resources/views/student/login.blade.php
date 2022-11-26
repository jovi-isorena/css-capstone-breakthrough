<?php ?>

<!DOCTYPE html> 
<head>
  <!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
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
.container {
  padding: 2rem 0rem;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 400px;
  }
  .modal-dialog .modal-content {
    padding: 1rem;
  }
}
.modal-header .close {
  margin-top: -1.5rem;
}

.form-title {
  margin: -2rem 0rem 2rem;
}

.btn-round {
  border-radius: 3rem;
}

.delimiter {
  padding: 1rem;
}

.social-buttons .btn {
  margin: 0 0.5rem 1rem;
}

.signup-section {
  padding: 0.3rem 0rem;
}
h5{
  float: left;
} 
.modal-content {
  width: 900px;
  margin-left: 20px;
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
</nav></div><div class="container">
  <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
    Login
  </button>  
</div> 
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="/storage/2.png">
        <div class="form-title text-center">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="form-group">
              <h5>Email</h5>
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div> 
            <button type="button" class="btn btn-info btn-block btn-round">Login</button>
          </form>
          
          <div class="text-center text-muted delimiter">or use a social network</div>
          <div class="d-flex justify-content-center social-buttons">
<button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
              <i class="fab fa-twitter"></i>
            </button>
<button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
<i class="fab fa-facebook"></i>
            </button>
<button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
              <i class="fab fa-linkedin"></i>
            </button>
        </div>
      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
      </div>
  </div>
</div>
</div>

<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
</body>
</html>