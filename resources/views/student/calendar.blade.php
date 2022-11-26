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
    padding: 10px 50px;
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
    <li><a href="class-stream">Subjects</a></li>
        <li class="active"><a href="calendar">Calendar</a></li>
        <li><a href="todo">To-Do</a></li>
        <li><a href="aboutus">About us</a></li>
        </h4>
    </ul>
</nav></div><div class="whole">
<div class= "">
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FManila&src=bGVvbWFyLnRhcmlhby5zYW5ndWVuemFAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y2xhc3Nyb29tMTAyMjQ2MjEyMzIyMzEwNzQ3NDgxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y19jbGFzc3Jvb20xNDQ4YTBkMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20zZDljZGM4ZEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21kYmFkMGEwZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb202MWUzMTE1NUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21iNDNmMTljMUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4ucGhpbGlwcGluZXMjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y19jbGFzc3Jvb202YTlkMjYzMkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20xYTIwM2Y4OEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb205ZTZiMDk3NEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21lNGI2NzliY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb202YTYwZDZmZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21kOGYyMGQ1YUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21mODdhY2RlOUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb205NDkyMzAxM0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb202M2IyYzJjMkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb200MWM1MjE4MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20zMTFkMDlmMUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb201NGQxMjY4MkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21lNWMyMmFkNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20yNWM2NjVkY0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20yNjk2NWI4YUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21hZjE5Njc0OUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb204MjJkZjZhZkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb21jOWQwMmI2NkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb203M2VhM2M3ZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb205ZTY5OGVjNkBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y19jbGFzc3Jvb20zMzk4MmY2ZUBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=Y2xhc3Nyb29tMTA1MzkxMjA5NzA5Mjk0Mzg2OTE3QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%2333B679&color=%23007b83&color=%23c26401&color=%23202124&color=%23c26401&color=%23007b83&color=%230047a8&color=%230B8043&color=%23c26401&color=%230047a8&color=%23202124&color=%230047a8&color=%230047a8&color=%230047a8&color=%230047a8&color=%230047a8&color=%230047a8&color=%230047a8&color=%230047a8&color=%23202124&color=%23c26401&color=%23c26401&color=%23202124&color=%230047a8&color=%23c26401&color=%23202124&color=%23c26401&color=%23c26401&color=%23007b83&color=%23202124" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>

</body>
</html>