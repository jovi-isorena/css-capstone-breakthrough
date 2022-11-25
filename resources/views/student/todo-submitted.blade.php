<?php ?>

<!DOCTYPE html> 
<head>
<style>

body{
    margin: 10px;
}

    .lists ul{
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
.image2 h1{
    float:left;
    padding-left: 55px;
    font-size: 60px;
}
.image2 img{
    width: 650px;
    float: right;
    padding-right: 20px;
}
.bottom {
    float: left;
    margin-left: 60px;
}
.third{
    align-content: center;
}
.third h2{
    padding-top:700px;
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

/*css reset*/
#menu ul{
    float: left;
}
#menu li{
    list-style: none;
    display: inline-block;
    margin: 20px;
    float: left;
}

#menu li a{
    color: black;
    text-decoration: none;
    font-size: 17px;
}

section{
    width: 100%;
    float: left;
    height: 100vh;
    position: relative;
}

#home{
   background-color: #E8E5E5;
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
        <li><a href="subjects">Classes</a></li>
        <li><a href="calendar">Calendar</a></li>
        <li class="active"><a href="todo">To-Do</a></li>
        <li><a href="aboutus">About us</a></li>
        <li><a href="notifications">Notifications</a></li>
        </h4>
    </ul>
</nav></div><section id="home">
            <ul id="menu">
                <li><a href="todo">All</a><li>
                <li><a href="pending">Pending</a></li>
                <li class="active"><a href="#about">Submitted</a></li>
                <li><a href="missing">Missing</a></li>

            </ul>
    </section>

</body>
</html>