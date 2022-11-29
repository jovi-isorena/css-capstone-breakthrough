 <link rel="stylesheet" href="/system-admin-css.css">
 <link rel="Script" href="/system-admin-js.js">
<x-app-layout>
<div class="me">
<div class="pid2">
                <img id="pimg2" src="https://ih0.redbubble.net/image.485923670.1240/flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg" />
               <div class="helading1"><div>{{ Auth::user()->name }}</div></div>
            <p>AGE: </p> <p> ADDRESS: </p> <p>EMAIL: </p> <p> PHONE: </p>
            <p id="p1">22</p> <p id="p1">SAMPLE ADDRESS OF THE STUDENT </p><p id="p1">{{ Auth::user()->email }} </p><p id="p1">09257851684</p>
                </div>
                
                </div>
            
      <div class="footers">
             <div class="texts">
            footer
          </div>
          </div>
</x-app-layout>
