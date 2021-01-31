<?php 
$myIPAddress = $_SERVER['REMOTE_ADDR'];
$remotePort = $_SERVER['REMOTE_PORT'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
$serverProtocol = $_SERVER['SERVER_PROTOCOL'];
$serverHost = $_SERVER['HTTP_HOST'];
$serverHostb = $_SERVER['SERVER_PORT'];
$userAgent = $_SERVER['SERVER_SOFTWARE'];
$timeSpend = $_SERVER['REQUEST_TIME'];

define('PI', 3.1415);
?>
<!DOCTYPE html>
<html>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

/* Divs CSS */
.hero{
    width: 100%;
    height: 100vh;
    background-image: url(https://1.bp.blogspot.com/-zhZbbcKJQWM/YBbcigoFw4I/AAAAAAAAASc/8hyAAIbqIhkBj85d8m37PqJ2s39VjubbQCLcBGAsYHQ/s1920/background.png);
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
}

.navbar{
    width: 85%;
    height: 15%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

button{
    color: #fbfcfd;
    padding: 10px 25px;
    background: transparent;
    border: 1px solid #fff;
    border-radius: 20px;
    outline: none;
    cursor: pointer;
}

.content {
    color: #fbfcfd;
    position: absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    z-index: 2;
}

h1 {
    font-size: 50px;
    margin: 10px 0 30px;
    line-height: 80px;
}
p {
    font-size: 25px;
}
b {
    font-size: 20px;
}

.myInfo{
    width: 900px;
    height: 150px;
    position: absolute;
    right: 80px;
    bottom: 0;
    color: #fbfcfd;
    font-size: 20px;
    text-align: right;
    margin-left: 5px;
}
h2 {
    font-size: 30px;
    margin: 0 0 5px;
    line-height: 80px;
}

/* SideBar CSS */
.side-bar{
    width: 60px;
    height: 100vh;
    background: linear-gradient(#00545d, #000729);
    position: absolute;
    right: 0;
    top: 0;
}

.social-links img, .useful-links img{
    width: 45px;
    margin: 7px auto;
    padding-left: 7px;
    cursor: pointer;
}

.social-links {
    width: 50px;
    text-align: center;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.useful-links {
    width: 50px;
    text-align: center;
    position: absolute;
    bottom: 30px;
}

/* Bubbles animation */
.bubbles img{
    width: 50px;
    animation: bubble 7s linear infinite;
}

.bubbles {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    position: absolute;
    bottom: -100px;
}

@keyframes bubble{
    0%{
        transform: translateY(0);
        opacity: 0;
    }
    50%{
        opacity: 1;
    }
    70%{
        opacity: 1;
    }
    100%{
        transform: translateY(-80vh);
        opacity: 0;
    }
}

.bubbles img:nth-child(1){
    width: 80px;
    animation-delay: 7.5s;
}
.bubbles img:nth-child(2){
    width: 63px;
    animation-delay: 4.5s;
}
.bubbles img:nth-child(3){
    width: 75px;
    animation-delay: 6s;
}
.bubbles img:nth-child(4){
    width: 59px;
    animation-delay: 10s;
}
.bubbles img:nth-child(5){
    width: 70px;
    animation-delay: 2s;
}
.bubbles img:nth-child(6){
    width: 95px;
    animation-delay: 13s;
}
.bubbles img:nth-child(7){
    width: 67;
    animation-delay: 8s;
}

/* List */
ul {
    counter-reset: index;  
    padding: 0;
    max-width: 600px;
}
  
/* List element */
li {
    counter-increment: index; 
    display: flex;
    align-items: center;
    padding: 9px 0;
    box-sizing: border-box;
}
  
  
/* Element counter */
li::before {
    content: counters(index, ".", decimal);
    font-size: 1.5rem;
    text-align: right;
    font-weight: bold;
    min-width: 50px;
    padding-right: 12px;
    font-variant-numeric: tabular-nums;
    align-self: flex-start;
    background-image: linear-gradient(to bottom, #83a1a5, #449aa5);
    background-attachment: fixed;
    -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;
}
  
  
/* Element separation */
li + li {
    border-top: 1px solid rgba(255,255,255,0.2);
}
        
    </style>
    <head>
        <title>Samara's Virtual Machine</title>
    </head>
    <body>
        <div class = "hero">
            <div class="navbar">
                <img style=" width: 300px; cursor: pointer;" src="../../static/info/images/fiu_logo.png">
                <button type="button">Sign Up</button>
            </div>
            <div class="content">
                <p>Hi! Welcome to</p>
                <h1> CEN 4083's Assignment 2</h1>

                <ul>
                    <li><b>IP Address: </b> &nbsp;&nbsp;  <?php echo $myIPAddress?> </li>
                    <li><b>Remote Port: </b> &nbsp;&nbsp; <?php echo $remotePort?></li>
                    <li><b>Request Method: </b> &nbsp;&nbsp; <?php echo $requestMethod?></li>
                    <li><b>Server Protocol:</b> &nbsp;&nbsp; <?php echo $serverProtocol?></li>
                    <li><b>Server Host:</b> &nbsp;&nbsp; <?php echo $serverHost?>:<?php echo $serverHostb ?></li>
                    <li><b>User Agent:</b> &nbsp;&nbsp;<?php echo $userAgent?></li>
                </ul>
                <p><br></p>
                <button type="button">Take a tour</button>
            </div>
            <div class="myInfo">
                <p>Website created by</p>
                <h2> Samara Ruiz Sandoval</h2>
            </div>
            <div class="side-bar">  
                <img style=" display: block; width: 25px; margin: 40px auto 0; cursor: pointer;" src="../../static/info/images/menu.png">
                <div class="social-links">
                    <img src="../../static/info/images/fb.png">
                    <img src="../../static/info/images/ig.png">
                    <img src="../../static/info/images/tw.png">
                </div>
                <div class="useful-links">
                    <img src="../../static/info/images/share.png">
                    <img src="../../static/info/images/info.png">
                </div>
            </div>
            <div class="bubbles">
                <img src="../../static/info/images/bubble.png">
                <img src="../../static/info/images/bubble.png">
                <img src="../../static/info/images/bubble.png">
                <img src="../../static/info/images/bubble.png">
                <img src="../../static/info/images/bubble.png">
                <img src="../../static/info/images/bubble.png">
                <img src="../../static/info/images/bubble.png">
            </div>
        </div>
    </body>
</html>
