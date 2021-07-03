<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styl.css"/>
  <center>
<title>Robot Arm interface</title>
</head>


<body>
<header>

<section id="sec1">
<div id="div1">
<h1>Robot Arm interface</h1>
<div>
</section>
</header>


<section id="sec2">
<form  action="connect.php" method="POST">

 <div>
  <p class="title"><b>servo1 :</b></p>
  <input type="range" min="0" max="180" value="90" class="slider" id="myRange1" name="servo1">
  <div class="value"<p><span id="demo1"></span></p></div>
  </div>


<div>
<p class="title"><b>servo2 :</b></p>
<input type="range" min="0" max="180" value="90" class="slider" id="myRange2" name="servo2">
<div class="value"<p><span id="demo2"></span></p></div>
</div>

<div>
<p class="title"><b>servo3 :</b></p>
<input type="range" min="0" max="180" value="90" class="slider" id="myRange3" name="servo3">
<div class="value"<p><span id="demo3"></span></p></div>
</div>

<div>
<p class="title"><b>servo4:</b></p>
<input type="range" min="0" max="180" value="90" class="slider" id="myRange4" name="servo4">
<div class="value"<p><span id="demo4"></span></p></div>
</div>

<div>
<p class="title"><b>servo5:</b></p>
<input type="range" min="0" max="180" value="90" class="slider" id="myRange5" name="servo5">
<div class="value"<p><span id="demo5"></span></p></div>
</div>

<div>
<p class="title"><b>servo6:</b></p>
<input type="range" min="0" max="180" value="90" class="slider" id="myRange6" name="servo6">
<div class="value"<p><span id="demo6"></span></p></div>
</div>

<div id="buttons">
<input class="button" id="save" type="submit" value="save">
<button class="button" type="button">Run</button> 
</form>
</center>

</section>

<section id="sec3">
<div id="messagecontainer">
<p><span id="message"></span></p>
</div>
</section>

<script>
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.value = slider1.value;
function myFunction1(x){
slider1.value = x.value;
}
slider1.oninput = function(){
  output1.value = this.value;
}



var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.value = slider2.value;
function myFunction2(x){
slider2.value = x.value;
}
slider2.oninput = function(){
  output2.value = this.value;
}


var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.value = slider3.value;
function myFunction3(x){
slider3.value = x.value;
}
slider3.oninput = function(){
  output3.value = this.value;
}


var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.value = slider4.value;
function myFunction4(x){
slider4.value = x.value;
}
slider4.oninput = function(){
  output4.value = this.value;
}


var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.value = slider5.value;
function myFunction5(x){
slider5.value = x.value;
}
slider5.oninput = function(){
  output5.value = this.value;
}


var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.value = slider6.value;
function myFunction6(x){
slider6.value = x.value;
}
slider6.oninput = function(){
  output6.value = this.value;
}


</script>
</body>
</html>