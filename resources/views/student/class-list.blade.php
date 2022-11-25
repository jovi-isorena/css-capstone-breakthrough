<?php ?>

<!DOCTYPE html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    margin: 2px;
    width: 100%;
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
    padding: 10px 50px;
    transition: 0.6s ease;
    border-radius: 8px;
    
}
ul li a:hover{
    background-color: lightblue;
    color: #000;

}
ul li.active a{
    text-decoration: underline;
    color: #000;
}
.image2 img{
    width: 650px;
    float: right;
    padding-right: 20px;
}
.Sub1{
    width: 700px;
    height: 100px;
    border-style: solid;
    border-color: #CDBCCB;
    background-color: #E0D3DE;
    float: inherit;
    padding-top: 10px;
    margin-left: 80px;
    padding-bottom: 60px;
    margin-top: 15px;
    padding-left: 30px;
    padding-right: 500px;
    border-radius: 10px;
}
.Subs{
    flex-direction: column;
    float: left;
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
#menu ul{
    float: left;
}
#menu li{
    list-style: none;
    display: inline-block;
    margin: 5px;
    float: left;
    margin-top: 10px;
}

#menu li a{
    font-size: 17px;
    padding: 10px 30px;
}

#home{
   background-color: #E8E5E5;
   margin-left: 40px;
}
ul li.unactive a{
    background-color: gray;
    color: white;
}
ul li .act a{
    text-decoration: underline;
    color: black;
}
.logo img{
    width: 100px;
    margin-left: 80px;
}
#nav{
    border-bottom: 1px solid;
    border-color: gray;
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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
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
</body>
<section id="nav">
<div class="lists"><nav>
    <ul><h4>
    <li class="active"><a href="subjects">Subjects</a></li>
        <li><a href="calendar">Calendar</a></li>
        <li><a href="todo">To-Do</a></li>
        </h4>
    </ul>
    <div class="logo">
            <img src="/storage/2.png"></div>
</nav>
</section>
</div>
<section id="home">
            <ul id="menu">
                <li class="active"><a href="class-list">Class lists</a></li>
                <li class="unactive"><a href="class-work">Class Work</a><li>
                <li class="unactive"><a href="class-stream">Class Stream</a></li>

            </ul>
    </section>
<section id="teacher">
<div class="prof"><img src="/storage/1.png">
<h2> Professors Name
    <div class="blank"></div>
    <div class="s"><h3>Students</h2></div>
    <div class="students">
    <div class="blank1"></div>
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">
<img src="/storage/3.png">

</div>

</div>
</section>


</body>
</html>