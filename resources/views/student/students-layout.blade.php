<?php ?>
<!DOCTYPE html> 
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
<style>
body{
    margin: 10px;}
    ul{
    float: right;
    list-style-type: none;
    padding-right:20px;} 
ul li{
    display: inline-block;
    font-size: 20px;}
ul li a{
    text-decoration: none;
    color: black;
    padding: 10px 60px;
    transition: 0.6s ease;
    border-radius: 8%;}
ul li a:hover{
    background-color: lightblue;
    color: #000; }
ul li.active a{
    text-decoration: underline;
    color: #000; }
.image2{
    float:left;
    padding-left: 45px;
    margin-top: 5px;
    border-top: 1px solid;
    border-color: gray; }
.image2 h1{
    float:left;
    padding-left: 25px;
    font-size: 60px; }
.image2 img{
    width: 400px;
    float: right;
    padding-right: 20px;
    padding-left: 55px; }
.bottom {
    float: left;
    margin-left: 30px; }
.third img{
    display: flex;
    justify-content: center;
    margin-right: 230px; }
.third h2{
    padding-top:10px;
    text-align: center; }
.container {
width:100px;
float: right;}
.container img{
    width: 70px;
    float: right;}
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
.blank {
    border-bottom : 1px solid;
    border-color: gray;
    float: right;
width: 1200px;}
.newp p{
    margin-left: 450px;
    margin-top: 550px;}
table{ float: right;}
.calendar iframe{
    width: 600px;
    justify-content:center;}
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

.logo img{
    width: 100px;
    margin-left: 80px;}
#nav{
    border-bottom: 1px solid;
    border-color: gray;}
.containers{
    border-bottom: 1px solid;
    border-color: gray;
    float: right;
    margin-top: 50px;}
ul li.unactive a{
    background-color: gray;
    color: white;}
ul li .act a{
    text-decoration: underline;
    color: black;}
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
.s h3{
    float:left;
    margin-left: 160px;
}
</style>    
<title></title>
</body>
    <div class="container">
<img class="click" src="/storage/1.png">
<div class="list">
    <button class="links">Information</button>
    <button class="links">Schedule</button>
    <button class="links">Log Out</button>
</div>
</div>
<div class="lists"><nav>
    <ul><h4>
        <li><a href="">Event</a></li>
        <li><a href="calendar">Calendar</a></li>
        <li><a href="aboutus">About us</a></li>
        </h4>
    </ul>
</nav>
</div>
</div>
<script>
let click = document.querySelector('.click');
let list = document.querySelector('.list');
click.addEventListener("click",()=>{
    list.classList.toggle('newlist');
});
</script>
<div class=""> @yield('content')</div> 
</body>
</html>