<?
require "bootstraptop.php";
?><script src="jquery-1.7.2.min.js"></script><script src="jquery-ui.min.js"></script><script src="jquery.ui.touch-punch.min.js"></script>
<style>


.sampleblock{
background:skyblue;
color:gray;
height:60px;
border: 1px solid gray;
font-size:10px;
}
.sampleblock h4{
color:white;}
.widget{
position:absolute;
top:10px;
left:15px; 
width:100%;} 
.widget1{
position:absolute;
top:90px;
left:15px; 
width:100%;} 
.widget2{
position:absolute;
top:180px;
left:15px; 
width:100%;} 
.widget3{ 
position:absolute;
top:290px;
left:15px; 
width:100%;} 
.widget4{ 
position:absolute;
top:390px;
left:15px; 
width:100%;} 
.widget5{ 
position:absolute;
top:490px;
left:15px; 
width:100%;} 
.widget6{ 
position:absolute;
top:590px;
left:15px; 
width:100%;} 
</style>
<div style='height:2500px;' class='container'>

<div  class='row'>
<div class='col-6'>
<?
for($i=0;$i<10;$i++) {
$gid = 'full';
echo "<div class='row text-center widget sampleblock'>
<div class='col-12'><h4>1</h4><p id='$gid' onclick='coro(this.id);'>Full width block</p>
</div>
</div>";
} 

?>
<?
for($i=0;$i<10;$i++) {
$pid = 'two';
echo "<div id='widget1' class='row text-center widget1 sampleblock'>
<div class='col-6'><h4>2</h4><p id='$pid' onclick='coro(this.id);'>Two Columns <br> Click here</p></div><div class='col-6 sampleblock'><h4>2</h4><p class='coro1'>Two Columns</p>
</div>
</div>"; 
} 


for($i=0;$i<10;$i++) {
$sid = 'three';
echo "<div class='row text-center sampleblock widget2'>
<div class='col-4 sampleblock'><h4>3</h4><p id='$sid' onclick='coro(this.id);'>Three Columns<br>Click here</p></div>
<div class='col-4 sampleblock'><h4>3</h4><p>Three Columns</p></div>
<div class='col-4 sampleblock'><h4>3</h4><p>Three Columns</p></div>
</div>"; } 




for($i=0;$i<10;$i++) { 
$hid = 'four';
echo "<div class='row text-center sampleblock widget3'>
<div class='col-3 sampleblock'><h4>4</h4><p id='$hid' onclick='coro(this.id);'>Four Columns<br>Click here</p></div>
<div class='col-3 sampleblock'><h4>4</h4><p>Four Columns</p></div>
<div class='col-3 sampleblock'><h4>4</h4><p>Four Columns</p></div>
<div class='col-3 sampleblock'><h4>4</h4><p>Four Columns</p></div>
</div>";
} 
for($i=0;$i<10;$i++) { 
$hid = 'six';
echo "<div class='row text-center sampleblock widget4'>
<div class='col-2 sampleblock'><h4>6</h4><p id='$hid' onclick='coro(this.id);'>Six Columns<br>Click here</p></div>
<div class='col-2 sampleblock'><h4>6</h4><p>Six Columns</p></div>
<div class='col-2 sampleblock'><h4>6</h4><p>Six Columns</p></div>
<div class='col-2 sampleblock'><h4>6</h4><p>Six Columns</p></div>
<div class='col-2 sampleblock'><h4>6</h4><p>Six Columns</p></div>
<div class='col-2 sampleblock'><h4>6</h4><p>Six Columns</p></div>
</div>";
} 
for($i=0;$i<10;$i++) {
$pid = 'right';
echo "<div id='widget5' class='row text-center widget5 sampleblock'>
<div class='col-4'><h4>4</h4><p id='$pid' onclick='coro(this.id);'>Two Columns <br> Click here</p></div><div class='col-8 sampleblock'><h4>8</h4><p class='coro1'>Two Columns</p>
</div>
</div>"; 
} 
for($i=0;$i<10;$i++) {
$pid = 'left';
echo "<div id='widget6' class='row text-center widget6 sampleblock'>
<div class='col-8'><h4>8</h4><p id='$pid' onclick='coro(this.id);'>Two Columns <br> Click here</p></div><div class='col-4 sampleblock'><h4>2</h4><p class='coro1'>Two Columns</p>
</div>
</div>"; 
} 
?> 

</div>
<div class='col-6'>

<div id='ss'><form name='ss'><textarea rows='5' cols='30' id='add_type' name='layout'></textarea></form><button id='add_em' class='btn btn-primary' type='button'> 
                    Make Layout! 
                  </button><div id='resultsx'>here</div>

</div></div></div>
<script>
$('.widget').draggable();
$('.widget1').draggable();
$('.widget2').draggable();
$('.widget3').draggable();

$('.widget4').draggable();
$('.widget5').draggable();
$('.widget6').draggable();
</script>




<script>
var gett;
function coro(gett) { 
document.ss.layout.value = document.ss.layout.value + gett + ",";
}
</script>
<script>
$(document).ready(function(){ 

$("#resultsx").slideUp(); 

    $("#add_em").click(function(e){ 
        e.preventDefault(); 

        ajax_sear(); 
    }); 
     




}); 


function ajax_sear(){ 

  $("#resultsx").show(); 
  
var typename = document.ss.layout.value;


  $.post("addlayout.php", {type : typename }, function(data){
   if (data.length>0){ 

   $("#resultsx").html(data); 
   } 
  }) 
} 




</script>