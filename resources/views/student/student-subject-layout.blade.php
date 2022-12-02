<html><head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous"><style>
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");

// Colors
$navbar-white: #fafafa;
$navbar-black: #131313;
$navbar-active-color: #fafafa;
$navbar-bg-active-color: #ff9900;
$bg-light-blue: #00c6ff;
$bg-dark-blue: #0072ff;

html, body {
  margin: 0;
  padding: 0;
  width: 100%;
  min-height: 100vh;
}
body {
  font-family: "Open Sans", sans-serif;
  background: #FCF8FC;
}
.jumbo {
  padding-top: 100px;
  min-height: 200vh;
}
 .prof{
    width: 1000px;
    border:1px solid;
    border-color: gray;
    height: 500px;
    margin-top: 100px;
    margin-left: 80px;
    background-color: #EBE5E5;
    border-radius: 12px;
}
img.profile{
    width: 50px;
}
.prof img{
    width: 100px;
    float: left;
    margin-top: 50px;
    margin-left:60px;
}
.prof h2{
    padding-top: 45px;
}
.blank {
    border-bottom: 1px solid;
    border-color: gray;
    margin-top: 50px;
    width: 850px;
    margin-left:50px;
}
.blank1 {
    border-bottom: 1px solid;
    border-color: gray;
    margin-top: 80px;
    width: 850px;
    margin-left:50px;
}
.containers img {
width: 70px;
float: right;
padding-top:5px;
}
.click{}
.click:hover { background-color: skyblue;}
.click,.links {
padding: 10px;
font-size: 1.2em;
font-family: futura Md BT;
border: none;
outline: none;
width:100px;
color:#fff;
transition: 0.3s;}
.list {
position: absolute;
transform: scaleY(0);
transform-origin: top;
transition: 0.3s;
margin-top: 80px;}
.newlist { transform: scaleY(1);}
.links { background-color: #283c63;}
.links:hover { background-color: #01579B;
transform: scale(1.1);}
i{
    padding-top: 10px;
}
ul li{
margin-left: 15px;
margin-right:15px;
}
.s h3{
    float:left;
    margin-left: 160px;}
    Shrink
.shrink {
  .navbar {
    color: $navbar-white;
    background: $bg-light-blue;
    background: -webkit-linear-gradient(55deg,$bg-light-blue 10%,$bg-dark-blue 90%);
    background: linear-gradient(35deg,$bg-light-blue 10%,$bg-dark-blue 90%);
  }
}
/* Classs stream */
#menu ul{ float: left;}
#menu li{
    list-style: none;
    display: inline-block;
    margin: 5px;
    margin-top: 50px;}
#menu li a{
    font-size: 17px;
    padding: 10px 30px;}
#home{
   background-color: #E8E5E5;
   margin-left: 30px;}
ul li.unactive a{
    background-color: gray;
    color: white;}
.Sub1{
    width: 1230px;
    height: 200px;
    border-style: solid;
    border-color: #CDBCCB;
    background-color: #E0D3DE;
    float: left;
    padding-top: 10px;
    padding-bottom: 60px;
    margin-left: 80px;
    padding-left: 30px;
    padding-right: 500px;
    border-radius: 10px;}
.Subs{
    flex-direction: column;
    float: left;
    width: 100%;;}
#conference .class{
    width: 200px;
    height: 100px;
    background-color:blue;
    float:left;
    margin-left: 80px;
    margin-top: 10px;
    border-radius: 10px;
    font-style: none;
    color: white;}
#conference .posted {
    float: left;
    padding-left: 5px;}
#conference .post{
    float: left;
    padding-left: 20px;
    margin-top: 10px;
    width: 600px;}
#conference .post h5{
    background-color: #E8E5E5;
    width: 1005px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    border-radius: 5px; 
    color: gray;}
#conference .posted {
    background-color: #E8E5E5;
    width: 1005px;
    border-radius: 5px; 
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    margin-bottom: 10px;}
/**Class Work */
#conferences .class{
    width: 200px;
    height: 100px;
    background-color:blue;
    float:left;
    margin-left: 80px;
    margin-top: 10px;
    border-radius: 10px;
    font-style: none;
    color: white;
}

#conferences .posted {
    background-color: #E8E5E5;
    width: 1005px;
    border-radius: 5px; 
    padding-top: 10px;
    margin-top: 20px;
    margin-left: 80px;
    padding-bottom: 10px;
    padding-left: 10px;
    margin-bottom: 10px;
    float: left;
}
</style>
</head> <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="https://reezhdesign.com">Ina ng Buhay<br>Catholic School</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>        
        <div class="collapse navbar-collapse" id="navbarMain">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Subject</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">To Do</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Calendar</a>
            </li>
</li><i class="bi bi-bell"><a href="notifications"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black" class="bi bi-bell" viewBox="0 0 15 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg></a></i></li>
            <li>
            <div class="containers">
<img class="click" src="/storage/1.png">
<div class="list">
    <button class="links">Information</button>
    <button class="links">Schedule</button>
    <button class="links">Log Out</button>
</div>
</div></li>
          <!--   <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>-->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <script>
let click = document.querySelector('.click');
let list = document.querySelector('.list');
click.addEventListener("click",()=>{
    list.classList.toggle('newlist');
});
</script>
@yield('contents')
</body>
</html>