<?php 
session_start();
include("dbconnect.php");
	extract($_POST);

 $jid=$_SESSION['jid']; 
	$uid=$_SESSION['uid'];
$score=$_GET['score'];
$correct=$_GET['mark'];
$total=$_GET['tq'];


$qry5=mysqli_query($conn,"select * from register where id ='$uid'");
$row5=mysqli_fetch_array($qry5);
echo $mobile=$row5['phone'];

$qry=mysqli_query($conn,"insert into results values('','$jid','$uid','$total','$score','')")
?>





<!DOCTYPE html>
<html lang="en">


  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Circular Progress Bar</title>
    <!-- Gooogle Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->

<style>


body {
  
 background-image: linear-gradient(to right, #fc5c7d, #6a82fb);
}

.circular-progress {
  position: relative;
  margin:0 auto;
  height: 250px;
  width: 250px;
  border-radius: 50%;
  display: grid;
  place-items: center;
}
.circular-progress:before {
  content: "";
  position: absolute;
  height: 84%;
  width: 84%;
  background-color: #ffffff;
  border-radius: 50%;
}
.value-container {
  position: relative;
 
  font-family: "Poppins", sans-serif;
  font-size: 50px;
  color: #231c3d;
}
h1{
color:#FFFFFF;

}




canvas {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}
</style>
  </head>
  <body>
  <h1 style="width:40%;margin:20px auto;">YOUR SCORE PERCENTAGE</h1>
    <div class="container">
      <div class="circular-progress">
        <div class="value-container">0%</div>
		
      </div>
    </div>
	<h1 style="width:40%;margin:20px auto;">Correct answers are <?php echo $correct; ?> Out Of <?php echo $total; ?> Questions.</h1>
	
	<?php 
	
	if($score<70){
	
	$msg="you passed the test.";
	
	?>
	
	
	
	<iframe src="http://smsserver9.creativepoint.in/api.php?username=fantasy&password=596692&to=<?php echo $mobile;?>&from=FSSMSS&message=Dear User your msg is <?php echo $msg;?> Sent By FSMSG FSSMSS&PEID=1501563800000030506&templateid=1507162882948811640"style="display:send sucess" class="iframe"></iframe>
	
	
	
	<h2 style="color:red;margin:200px auto">Note: You Need to Score You  Above 69%</h2>
	<?php }else{
$msg="you Failed The test.";
	 ?>
	 
	 
	 
	<iframe src="http://smsserver9.creativepoint.in/api.php?username=fantasy&password=596692&to=<?php echo $mobile;?>&from=FSSMSS&message=Dear User your msg is <?php echo $msg;?> Sent By FSMSG FSSMSS&PEID=1501563800000030506&templateid=1507162882948811640"style="display:send sucess" class="iframe"></iframe>
	 <marquee><h1 style="color:white;">WINNNEEERRRR!!!!!!!!!!!!!!</h1></marquee>
	
	   <canvas id="Canvas"></canvas>
	 
	 <?php }

	 ?>
    <!-- Script -->
	<script>
  let progressBar = document.querySelector(".circular-progress");
let valueContainer = document.querySelector(".value-container");

let progressValue = 0;
let progressEndValue = <?php if($score<1){
echo 1;
}else{
echo $score;
} ?>;
let speed = 100;

let progress = setInterval(() => {
  progressValue++;
  valueContainer.textContent = `${progressValue}%`;
  progressBar.style.background = `conic-gradient(
      #4d5bf9 ${progressValue * 3.6}deg,
      #cadcff ${progressValue * 3.6}deg
  )`;
  if (progressValue == progressEndValue) {
    clearInterval(progress);
  }
}, speed);



var c = document.getElementById("Canvas");
var ctx = c.getContext("2d");

var cwidth, cheight;
var shells = [];
var pass= [];

var colors = ['#FF5252', '#FF4081', '#E040FB', '#7C4DFF', '#536DFE', '#448AFF', '#40C4FF', '#18FFFF', '#64FFDA', '#69F0AE', '#B2FF59', '#EEFF41', '#FFFF00', '#FFD740', '#FFAB40', '#FF6E40'];

window.onresize = function() { reset(); }
reset();
function reset() {

  cwidth = window.innerWidth;
	cheight = window.innerHeight;
	c.width = cwidth;
	c.height = cheight;
}

function newShell() {

  var left = (Math.random() > 0.5);
  var shell = {};
  shell.x = (1*left);
  shell.y = 1;
  shell.xoff = (0.01 + Math.random() * 0.007) * (left ? 1 : -1);
  shell.yoff = 0.01 + Math.random() * 0.007;
  shell.size = Math.random() * 6 + 3;
  shell.color = colors[Math.floor(Math.random() * colors.length)];

  shells.push(shell);
}

function newPass(shell) {

  var pasCount = Math.ceil(Math.pow(shell.size, 2) * Math.PI);

  for (i = 0; i < pasCount; i++) {

    var pas = {};
    pas.x = shell.x * cwidth;
    pas.y = shell.y * cheight;

    var a = Math.random() * 4;
    var s = Math.random() * 10;

		pas.xoff = s *  Math.sin((5 - a) * (Math.PI / 2));
  	pas.yoff = s *  Math.sin(a * (Math.PI / 2));

    pas.color = shell.color;
    pas.size = Math.sqrt(shell.size);

    if (pass.length < 1000) { pass.push(pas); }
  }
}

var lastRun = 0;
Run();
function Run() {

  var dt = 1;
  if (lastRun != 0) { dt = Math.min(50, (performance.now() - lastRun)); }
	lastRun = performance.now();

  //ctx.clearRect(0, 0, cwidth, cheight);
	ctx.fillStyle = "rgba(0,0,0,0.25)";
	ctx.fillRect(0, 0, cwidth, cheight);

  if ((shells.length < 10) && (Math.random() > 0.96)) { newShell(); }

  for (let ix in shells) {

    var shell = shells[ix];

    ctx.beginPath();
    ctx.arc(shell.x * cwidth, shell.y * cheight, shell.size, 0, 2 * Math.PI);
    ctx.fillStyle = shell.color;
    ctx.fill();

    shell.x -= shell.xoff;
    shell.y -= shell.yoff;
    shell.xoff -= (shell.xoff * dt * 0.001);
    shell.yoff -= ((shell.yoff + 0.2) * dt * 0.00005);

    if (shell.yoff < -0.005) {
      newPass(shell);
      shells.splice(ix, 1);
    }
  }

  for (let ix in pass) {

    var pas = pass[ix];

    ctx.beginPath();
    ctx.arc(pas.x, pas.y, pas.size, 0, 2 * Math.PI);
    ctx.fillStyle = pas.color;
    ctx.fill();

    pas.x -= pas.xoff;
    pas.y -= pas.yoff;
    pas.xoff -= (pas.xoff * dt * 0.001);
    pas.yoff -= ((pas.yoff + 5) * dt * 0.0005);
    pas.size -= (dt * 0.002 * Math.random())

    if ((pas.y > cheight)  || (pas.y < -50) || (pas.size <= 0)) {
        pass.splice(ix, 1);
    }
  }
  requestAnimationFrame(Run);
}
</script>
  </body>
</html>
