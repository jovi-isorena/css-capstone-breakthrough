
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
.bilog {
  border-radius: 50%;
  border: 5px solid gray;
}
#img1 {
            width: 500px;
            height: 500px;
            position: absolute;
            top: 15%;
            right: 13%;
        }
        #img2 {
            width: 400px;
            height: 400px;
            position: absolute;
            border: 5px solid gray;
            left: 13%;
        }
        .mid2 {
            position: relative;
            font-weight: bold;
            width: 400px;
            height: 350px;
            border: 5px solid gray;
        }
        .headingmid2 {
            padding-left: 37%;
            font-weight: bold;
            font-size: 24px;
        }
        .headingmid3 {
            padding-top: 50%;
            padding-right: 50%;
            font-weight: bold;
            font-size: 24px;
        }
        .headingmid {
            position: center;
            padding-top:50%; 
            padding-left: 45%;
            padding-bottom:15px; 
            font-weight: bold;
            font-size: 24px;
        }
        .headingmid4 {
            padding-left: 10%;
            padding-top:15px; 
            padding-bottom:15px; 
            font-weight: bold;
            width: max-content;
            font-size: 24px;
        }
        .heading1 {
            position: absolute;
padding-bottom:15%; 
            right: 15%;
            font-weight: bold;
            font-size: 48px;

        }
        .heading {
            position: absolute;
            top: 15%;
            left: 15%;
            font-weight: bold;
            font-size: 48px;

        }
        .headingimg {
            position: absolute;
            top: 175%;
            left: 25%;
            font-weight: bold;
            font-size: 48px;

        }
        .headingimg1 {
            position: absolute;
            top: 175%;
            right: 25%;
            font-weight: bold;
            font-size: 48px;

        }
        
        .headingp {
            position: absolute;
            font-weight: bold;
            width: max-content;
            top: 195%;
            left: 21%;
            font-size: 24px;

        }
        .headingp1 {
            position: absolute;
            font-weight: bold;
            width: max-content;
            top: 195%;
            right: 19%;
            font-size: 24px;

        }
        .laman {
            position: absolute;
            top: 35%;
            left: 15%;
            font-weight: bold;
            font-size: 30px;

        }
        .button1 {
            position: absolute;
            top: 75%;
            left: 15%;
            font-weight: bold;
            font-size: 24px;
            background-color: #528dd4;
             border: none;
             color: white;
             padding: 15px 32px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
        }
        .footer {
            position: absolute;
  text-align: center;
  padding: absolute;
  background-color: hsl(213, 6%, 32%);
  color: white;
}
    .mySlides {display:none}
    .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}       
    
        </style>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<img id="img1" src="https://ih0.redbubble.net/image.485923670.1240/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" />
<div class="heading">Inang Buhay <br> Catholic School</div>

<div class="laman">School announcement <br> or simple sub-header taking two <br> or more limits</div>

    <form action="{{ route('login') }}">
        <button class="button1"type="submit">{{ __('Login') }}</button>
     </form>

     <div class="headingmid">Announcement</div>
     <div class="headingmid2">
       <div class="mid2">
        
        <img src="https://ih0.redbubble.net/image.485923670.1240/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" style="height:100%; width:100%"/>
       
        <div class="headingmid4">Announcement description</div>
    </div>
       <div class="headingmid3">
        <div class="headingimg">
        <img class="bilog" src="https://ih0.redbubble.net/image.485923670.1240/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" alt="Avatar" style="width:150px; height:150px;"/>
        </div><div class="headingp">
            &nbsp; &nbsp; &nbsp;&nbsp;  Announcement1
        <br>
        Announcement description
    </div> 
    <div class="headingimg1">
        <img class="bilog" src="https://ih0.redbubble.net/image.485923670.1240/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" alt="Avatar" style="width:150px; height:150px;"/>
        </div><div class="headingp1">
            &nbsp; &nbsp; &nbsp;&nbsp;  Announcement2
        <br>
        Announcement description
    </div>
    
        <div class="w3-content w3-display-container" style="max-width:800px">
          <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
          </div>
        </div>
        <img id="img2" src="https://ih0.redbubble.net/image.485923670.1240/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" />
        <div class="heading1">School Calendar <br><p style="font-size: 24px;">Description of Event in Calendar School</p></div>
    </div></div>
        
<br><br><br><br><br><br><br>
<br><br><br><br><br> 
<br><br><br><br><br><br><br>
        <footer>
            <img src="https://pbs.twimg.com/profile_banners/3127799764/1427670344/1500x500" style="height:20em; width:100%; ">
          </footer>