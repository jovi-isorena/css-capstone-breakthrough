
<html><head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous"><style>
    * Navigation Bar */
.navbar{
  padding: 20px 10px 20px 0px;
  background-color: #28a7e9;
  transition: all ease 0.4s;
}
.navbar-brand{
  font-size: 22px;
  color: white !important;
}
.navbar .navbar-nav li a{
  font-size: 16px;
  color: white;
}

/* Animation */
.animate{
  padding: 0px 10px 0px 0px;
  transition: all ease 0.4s;
}

/* Jumbotron */
.jumbotron{
  margin-top: 110px;
}</style></head><body>

<!-- Navigation Bar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#resNav">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="#" class="navbar-brand">Company Logo</a>
  </div>
  <div class="collapse navbar-collapse" id="resNav">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Team</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>  <!-- End of Navigation Bar -->

<!-- Jumbotron -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="jumbotron">
        <h1>Hello World!</h1>
        <p class="lead">Some simple text so you can see how awesome i am.</p>
        <button type="btn" class="btn btn-primary">Click me!</button>
      </div>
    </div>
  </div>
</div>  <!-- End of Jumbotron -->

<!-- Simple Article -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="text-center">
        <h3>Simple article</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </div>
</div>  <!-- End of Simple Article --><script>
    // Toggle Animation by Class
$(window).scroll(function(){
  if($(document).scrollTop() > 100){
    $('nav').addClass('animate');
  }else{
    $('nav').removeClass('animate');
  }
})
</script>
</body>
<html>