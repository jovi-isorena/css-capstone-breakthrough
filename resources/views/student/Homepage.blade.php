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
    padding-right:20px;
}

ul li{
    display: inline-block;
    font-size: 20px;
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

.image2{
    float:left;
    padding-left: 25px;
    margin-top: 5px;
}
.image2 h1{
    float:left;
    padding-left: 25px;
    font-size: 60px;
}
.image2 img{
    width: 600px;
    float: right;
    padding-right: 20px;
    padding-left: 75px;
}
.bottom {
    float: left;
    margin-left: 30px;
}
.third{
    align-content: center;
}
.third h2{
    padding-top:10px;
    text-align: center;
}
.container {

width:100px;

float: right;

}
.container img{
    width: 70px;
    float: right;
    margin-top:15px;
}

.click{
 

}

.click:hover {

background-color: skyblue;

}

.click,.links {

padding: 10px;

font-size: 1.2em;

font-family: futura Md BT;

border: none;

outline: none;

width:100px;

color:#fff;

transition: 0.3s;

}

.list {

position: absolute;

transform: scaleY(0);

transform-origin: top;

transition: 0.3s;

margin-top: 80px;

}

.newlist {

transform: scaleY(1);

}

.links {

background-color: #283c63;

}

.links:hover {

background-color: #01579B;

transform: scale(1.1);

}

.blank {
    border-bottom: 1px solid;
    border-color: gray;
    margin-top: 500px;
    width: 1100px;
    margin-left:50px;
}

</style>    
<title></title></head>
<body>
<div class="container">

<img class="click" src="/storage/1.png">

<div class="list">
    <button class="links">Information</button>
    <button class="links">Schedule</button>
    <button class="links">Log Out</button>
</div>
</div>
<script>
let click = document.querySelector('.click');

let list = document.querySelector('.list');

click.addEventListener("click",()=>{

    list.classList.toggle('newlist');

});

</script>
<div class="lists"><nav>
    <ul><h4>
        <li><a href="">Event</a></li>
        <li><a href="calendar">Calendar</a></li>
        <li><a href="aboutus">About us</a></li>
        </h4>
    </ul>
</nav></div><div class="whole">
<div class= "image2">
<h1>
    Ina ng Buhay <br>
    Catholic School
</h1>
<img src="/storage/2.png" width>
<br><br><div class="bottom">
<p>School Announcements that<br>
maybe Will take two or more lines ir its up to you </p>
<button type="button"> <a href="loginn">Log in</a></button></div>
<div class="blank"></div>

<div class="third"><h2>ANNOUNCEMENTS</h2>
</div>

    </div></div>

</body>
</html>