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
.Sub1 img{
    float: right;
    width: 150px;
 
}
#conference .class{
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
#conference .posted {
    float: left;
    padding-left: 5px;
}
#conference .post{
    float: left;
    padding-left: 20px;
    margin-top: 10px;
    width: 600px;
}
#conference .post h5{
    background-color: #E8E5E5;
    width: 1005px;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    border-radius: 5px; 
    color: gray;
}
#conference .posted {
    background-color: #E8E5E5;
    width: 1005px;
    border-radius: 5px; 
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    margin-bottom: 10px;
}
.class {
    margin: 0 auto;
}
.logo img{
    width: 100px;
    margin-left: 80px;
}
#nav{
    border-bottom: 1px solid;
    border-color: gray;
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
        <li><a href="aboutus"> About us</a></li>
        </h4>
    </ul>
    <div class="logo">
            <img src="/storage/2.png"></div>
</nav>
</section>
</div>
<section id="home">
            <ul id="menu">
                <li class="active"><a href="class-stream">Class Stream</a></li>
                <li class="unactive"><a href="class-list">Class List</a><li>
                <li class="unactive"><a href="class-work">Class Work</a></li>

            </ul>
    </section>
<section class="subject">
<div class="Subs">
<div class="Sub1">
    <h3>Subject 1</h3>
    <p>FULL DETAILS OF SUBJECTS OR ANY HEADING THAT  SHOULD BE HIGHLIGHTED FOR SOME REASONS----</p>
    <p>SCHOOL DAY-TIME SCHEDULE AND SECTIONS.</p>
</div>
</div>
</section>
<section id="conference"><div class="class"><center><h5>Join Online Class</h><br><br>
    <button><a href="">Join</a></button></center></div><div class="post">
        <h5>Write Posts</h5>
        <div class="posted">
    <p>Professor name</p>
    <p>Activity/Exam/Quizes or what-----------------------------------------------------------------------</p>
    <p>SCHOOL DAY-TIME SCHEDULE AND SECTIONS.</p>
</div>
<div class="posted">
    <p>Professor name</p>
    <p>Activity/Exam/Quizes or what-----------------------------------------------------------------------</p>
    <p>SCHOOL DAY-TIME SCHEDULE AND SECTIONS.</p>
</div>
<div class="posted">
    <p>Professor name</p>
    <p>Activity/Exam/Quizes or what-----------------------------------------------------------------------</p>
    <p>SCHOOL DAY-TIME SCHEDULE AND SECTIONS.</p>
</div>
<div class="posted">
    <p>Professor name</p>
    <p>Activity/Exam/Quizes or what-----------------------------------------------------------------------</p>
    <p>SCHOOL DAY-TIME SCHEDULE AND SECTIONS.</p>
</div>

    </div>
</section>


</body>
</html>