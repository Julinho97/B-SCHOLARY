<!--       
✨ name : navbar || sidebar 
✨ created by : Amardeep Kesharwani,
✨ Date : 29-07-2020,
 
✨ contest name : Nab Bar,
✨ hosted by : Akanksha💕 the princess of Sololearn && Danny.  
✨ contest description: Create an awesome Nav Bar,baki ka contest wale code se pd lo 😅
 
✨ tags : #navbar, #sidebar, #dark_theme #simple_and_clear_ui
✨ #aatm_nirbhar_Bharat, #make_in_India, #startup_India, #educated_india,
✨ #educated_girls, #sololearn  #Ram_Rajay 
-->




<!-- 
  ------💕 Radhe Radhe 💕 --------
  
 Appreciation a/c  Dr.
 To Thank you a/c
 (being appreciation received from sl user)
   
 Hello… Hello…
 I feel the world around me go
 Hello… Hello…
 It’s tellin me to hold you close
 Hello…
 
 Thodi manmaaniya ho
 Thodi nadaaniyan ho
 Ho shararatein bhi thodi zara
 
 
 ########
 
 Education is the most powerful weapon
 which you can use to change the world.
 
 No matter what people tell you,
 words and ideas can change the world
 
--> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="author" content="Amardeep Kesharwani" >
<title>Navbar || Sidebar</title>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>
    :root {
 --dark:#262626;
}
*{
margin:0;
padding:0;
box-sizing:border-box;
}
body {
font-family: 'Raleway', sans-serif;
line-height:1.4;
font-size:1rem;
background-color: #000;
color:#fff;
}
a,a:hover {
text-decoration:none;
}
ul {
 list-style:none;
}
img {
 width:100%;
}
.section {
 position:fixed;
 top:0;
 left:0;
 right:0;
 bottom:0;
 width:100%;
 height:100vh;
 background:#000;
 z-index:8;
 text-align:center;
 padding-top:80px;
 border:3px solid #ceffd0;
 animation:border 6s linear infinite;
 transition:300ms;
}
@keyframes border {
 0%{
  border-color:#ceffd0;
 }
 25%{
  border-color:#3cc6d8;;
 }
 50%{
  border-color:#FFFF00;
 }
 75%{
 border-color:#FF00CC;
 }
 100%{
  border-color:#FF3300;
 }
}
.section p {
 margin:30px auto;
 color:#ceffd0;
 text-shadow: 2px 2pxpx 20px #3cc6d8;
 width:300px;
 line-height:1.5;
 }

.start-btn {
 display:inline-block;
 outline:none;
 border:none;
 padding:10px 20px;
 border-radius:25px;
 color:#fff;
 background:#000;
 text-transform:uppercase;
 color: #1c5169;
 box-shadow: 0px 0px 20px 8px #3cc6d8;
 background-color: #d7f3ff;
 animation:startBtn 1s linear infinite;
 }
@keyframes startBtn {
 to {
  filter:hue-rotate(360deg);
 }
} 
.main {
position:relative;
height:100vh;
width:100%;
background:linear-gradient(30deg,rgba(148, 0, 211, 0.04),rgba(148, 0, 211, 0.04)), url("https://fsb.zobj.net/crop.php?r=qKH_22-I_X5xBLbCpr3RWHFJ2iqhFWZBpNb54Sb9fn-e3AuU7S0D6MQ1KA9vV0OTjFXq7z25Kyo2xMPepiiZjGTG4dNvK2QKVyUJbh_ogmBwUMqc9Bej-b2j-5X_-5BRi3WxWolARtJ-k850");
background-size:cover;
background-repeat:no-repeat;
background-position: center center;
padding:15px;
display:none;
animation:fade 0.5s;
}
@keyframes fade {
 0%{
  opacity:0;
 }
 100%{
  opacity:1;
 }
}
/* Amardeep Kesharwani */

.nav-toggler {
 height:30px;
 width:30px;
 cursor:pointer;
 padding-top:2px;
}
.nav-toggler span {
 display:block;
 width:26px;
 height:2px;
 border-radius:1px;
 background:#fff;
 margin:5px 2px;
}
.sidebar {
 position:fixed;
 top:0;
 left:0;
 bottom:0;
 width:280px;
 height:100vh;
 background:#111;
 z-index:5;
 overflow:auto;
 transition:0.3s ease-in;
 box-shadow:0 2px 5px rgba(255,255,255,0.5);
 transform:translateX(-100%);
 padding:10px;
}
.sidebar.show {
transform:translateX(0);
}
.overlay {
position:fixed;
 top:0;
 left:0;
 right:0;
 bottom:0;
 width:100%;
 height:100vh;
 background:rgba(255,255,255,0.2);
 z-index:4;
 display:none;
}
.sidebar.show ~ .overlay {
 display:block;
}
.sidebar_header {
 display:flex;
 align-items:center;
 padding:10px 0;
 border-bottom:1px solid #444;
}
.img {
 height:70px;
 width:70px;
 border-radius:35px;
 overflow:hidden;
 margin-right:10px;
 box-shadow:0 0px 5px rgba(255,255,255,0.5);
}
.sidebar_header h3 {
font-size:17px;
}
.search-box {
 margin:20px 0 25px;
}
.search {
 width:100%;
 outline:none;
 border:none;
 background:rgba(255,255,255,0.1);
 height:50px;
 padding:5px 15px;
 color:#fff;
 font-size:16px;
 border-radius:2px;
} 
.search::-webkit-input-placeholder {
 color:#ccc;
}
.menu a {
 display:block;
 width:100%;
 display:flex;
 align-items: center;
 color:#ccc;
 font-size:18px;
 padding:12px 5px;
 background:none;
 transition:300ms ease;
}
.menu a .material-icons {
 color:#fff;
 margin-right:40px;
}
.menu a:hover ,
.menu a:active {
 background:rgba(255,255,255,0.1);
}
.dropdown {
 margin-left:20px;
 height:0;
 border-left:2px solid #fff;
 padding-left:20px;
 margin:0 10px;
 transition:300ms ease;
 overflow:hidden;
}
.drop-down .carrot {
 margin-left:70px;
}
.dropdown.active {
 height:170px;
 margin-top:10px;
}
.dropdown a {
 font-size:16px;
 padding:10px 10px;
 background:rgba(255,255,255,0.1);
}
.dropdown a:hover ,
.dropdown a:active {
 background:none;
}
.sidebar.show .menu li{
 animation:fadeIn .5s ease-out;
 animation-fill-mode:both;
}

.sidebar.show .menu li:nth-child(2){
 animation-delay:0.3s;
}
.sidebar.show .menu li:nth-child(3) {
 animation-delay:0.6s;
}
.sidebar.show .menu li:nth-child(4) {
 animation-delay:0.9s;
}
.sidebar.show .menu li:nth-child(5) {
 animation-delay:1.2s;
}
.sidebar.show .menu li:nth-child(6) {
 animation-delay:1.5s;
}
.content {
 
 position:absolute;
 top:12%;
 left: 74vh;
 padding-left:20px;
 transform:translateY(-45%);
 line-height:1.5;font-size:2rem;
 font-family:cursive;
 text-shadow:2px 2px 5px rgba(255,255,255,0.5);
 animation:fadeLeft 1s ease;
 animation-fill-mode:both

}
.content h1 {
 font-size:6rem;
 font-family:cursive;
 text-shadow:2px 2px 5px rgba(255,255,255,0.5);
 animation:fadeLeft 1s ease;
 animation-fill-mode:both;
}
.content h2 {
 color:#ffba3b;
 animation:fadeLeft 1s ease 0.7s;
 animation-fill-mode:both;
 font-size:3rem;
}
.content p {
 font-size:34px;
 animation:fadeIn 1s ease 1.2s;
 animation-fill-mode:both;
}
.action-btn-group {
 position:absolute;
 bottom:20px;
 right:20px;
}
.action-btn-group button {
 display:block;
 height:50px;
 width:50px;
 border-radius:50%;
 border:none;
 outline:none;
 margin:10px 0;
 color:#fff;
 box-shadow:2px 2px 5px rgba(255,255,255,0.2);
 transition:0.5s ease-out;
}
.action-btn {
 background:#ffba3b;
 z-index:4;
}

.btn-1{
 transform:translateY(60px);
 background:#f33449;
 transition-delay:1s;
}
.btn-2 {
 background:#0a89ff;
 transform:translateY(60px);
 transition-delay:0.5s;
}
.btn-3 {
 background:#9900ff;
 transform:translateY(20px);
}

.btn-1 ,.btn-2, .btn-3{
 opacity:0;
}
.action-btn-group.active .btn-1 {
 transform:translateY(0) scale(1.1);
 opacity:1;
}
.action-btn-group.active .btn-2 {
 transform:translateY(0);
 opacity:1;
}
.action-btn-group.active .btn-3 {
 transform:translateY(0) scale(0.9);
 opacity:1;
}
@keyframes fadeIn {
 0%{
  transform:translateY(30px);
  opacity:0;
 }
 100%{
 transform:translateY(0);
 opacity:1;
 }
}
@keyframes fadeLeft {
 0%{
  transform:translateX(-30px);
  opacity:0;
 }
 100%{
 transform:translateX(0);
 opacity:1;
 }
}
</style>




<body>
<section class="section">

 <img style="height: 14vh; width:15vh;" src="https://i.pinimg.com/originals/26/82/03/268203daaaec11ae176d5b51016166a3.gif"alt="" >
 <p>Bienvenue sur la plat-forme BAMSACHINE DESIGN   ! Si vous êtes nouveau ici, vous voudrez sans doute Click sur la button Welcome </p>
 <button class="start-btn" >WELCOME</button>
</section>
<main class="main" >
  <div class="nav-toggler">
   <span></span>
   <span></span>
   <span></span>
  </div>
  <div class="content">
    
   <h1>Hello friends</h1>
   <h2>I'm <i>Bamsasin Design</i></h2>
   <p>I'm   <span id="profession"></span> </p>
   
     <!-------------E U D I A N T--------->
    


  <div class="action-btn-group" >
    <button class="btn-1" ><span class="material-icons" >favorite</span></button>
    <button class="btn-2" ><span class="material-icons" >web</span></button>
    <button class="btn-3" ><span class="material-icons" >visibility</span></button>
    
    <button class="action-btn" ><span class="material-icons" >edit</span></button>
  </div>
</main>
<aside class="sidebar">
  <div class="sidebar_header" onclick="hideSidebar()">
    <div class="img">
      <img src="../img/jjn.jpg" alt="" >
    </div>
    <div>
      <h3>Souleymane Ndiaye</h3>
      <small>julinhondiaye097@gmail.com</small>
    </div>
  </div>
  <div class="search-box" >
    <input type="text" class="search" placeholder="Search here..."/>
  </div>
  <ul class="menu" >
    <li>
      <a href="index.php" ><span class="material-icons" >home</span> <p>Home</p></a>
    </li>
    <li>
      <a href="https://julinhondiaye097.wixsite.com/julinho" ><span class="material-icons" >person</span> <p>My Profile</p></a>
    </li>
    <li>
      <a href="#" ><span class="material-icons" >chat</span> <p>Message</p></a>
    </li>
    <li>
      <a href="#" class="drop-down" ><span class="material-icons" >web</span> <p>Projects</p> <span class="material-icons carrot" >expand_more</span> </a>
      <ul class="dropdown">
        <li><a href="menue.php" > IG L2</a></li>
        <li><a href="http://localhost/php/Bamsasin/authenti/login.php" >BAMSA</a></li>
        <li><a href="#" >LARAVEL</a></li> 
        <li><a href="#" >SAMANE</a></li>   
      </ul>
    </li>
    <li>
      <a href="#" ><span class="material-icons" >group_add</span> <p>Contact Us</p></a>
    </li>
    <li>
      <a href="#" ><span class="material-icons" >info</span> <p>About Us</p></a>
    </li>
  </ul>
</aside>
<div class="overlay" onclick="hideSidebar()"></div>
<audio src="https://mobcup.net/d/fdtbw5i8/mp3" id="music" ></audio>

<!-- script Amardeep kesharwani-->

   
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
  const startBtn = document.querySelector(".start-btn");
  const section = document.querySelector(".section");
  const navToggler = document.querySelector(".nav-toggler");
  const sidebar = document.querySelector(".sidebar");
  const dropdownBtn = document.querySelector(".drop-down");
  const actionBtn = document.querySelector(".action-btn");
  const dropdown = document.querySelector(".dropdown");
  const profession = document.querySelector("#profession");
  const music = document.querySelector("#music");
        music.load()
  startBtn.addEventListener("click", () => {
    section.style.display = "none";
    document.querySelector(".main").style.display = "block";
    new Typed(profession, options);
  });
  dropdownBtn.addEventListener("click", e => {
    e.preventDefault();
    dropdown.classList.toggle("active");
  })
  navToggler.addEventListener("click", () => {
   sidebar.classList.add("show");
   navigator.vibrate([50,100,50]);
   if(music.pause) {
    music.play();
    music.volume = 0.5;
   }
  })
  const hideSidebar = () => {
   sidebar.classList.remove("show");
  }
  // Amardeep Kesharwani
  const options = {
  strings: ["???????????","Souleymane NDIAYE ","Etudiant en licence 2 L'informati de Gestion","Good boy","Web Designer","Web Developer","full stack web developer","Accountant","Good Advisor","good boy 😍😍😍😍😍"],
  typeSpeed: 100,
   loop: true,
  };  
  actionBtn.addEventListener("click", () => {
   document.querySelector(".action-btn-group").classList.toggle("active");  
  });
</script>
</body>
</html>