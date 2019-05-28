<?
$type = $_POST[type];

$types = explode(',', $type);
$types1 = array_pop($types);
print_r($types);
$file = "txt.php";
$dat = '<?
session_start();

require "header.php";
$ids = array();
$sqr = mysqli_query($conn, "SELECT * FROM pagr1 WHERE ab_pagename = ' . "'" . '$page' . "'" . '");

while($ro = mysqli_fetch_assoc($sqr) ) { 
$ids[] = $ro[ab_id];
}

?>';
$dat .= "<div class='container-fluid'>";
$fpa = fopen($file, "w");
fwrite($fpa, $dat);

function renderCol($elements) { 
$file = "txt.php";

switch ($elements) { 

    case "full":
        $el = "<div class='row'>
<div class='col-12'>full
</div>
</div>";
$fp = fopen($file, "a+");
fwrite($fp, $el);
        break;
    case "two":
        $el = "<div class='row'>
<div class='col-6'></div>
<div class='col-6'>
</div>
</div>";
$fp1 = fopen($file, "a+");
fwrite($fp1, $el);
        break;
    case "three":
        $el = "<div class='row'>
<div class='col-4'></div>
<div class='col-4'></div>
<div class='col-4'></div>
</div>";
$fp2 = fopen($file, "a+");
fwrite($fp2, $el);
        break;
    case "four":
        $el = "<div class='row'>
<div class='col-3'></div>
<div class='col-3'></div>
<div class='col-3'></div>
<div class='col-3'></div>
</div>";
$fp3 = fopen($file, "a+");
fwrite($fp3, $el);
        break;
    case "six":
        $el = "<div class='row'>
<div class='col-2'></div>
<div class='col-2'></div>
<div class='col-2'></div>
<div class='col-2'></div>
<div class='col-2'></div>
<div class='col-2'></div>
</div>";
$fp4 = fopen($file, "a+");
fwrite($fp4, $el);
        break;
            case "right":
        $el = "<div class='row'>
<div class='col-4'></div>
<div class='col-8'></div></div>";
$fp5 = fopen($file, "a+");
fwrite($fp5, $el);
        break;
            case "left":
        $el = "<div class='row'>
<div class='col-8'></div>
<div class='col-4'></div></div>";
$fp6 = fopen($file, "a+");
fwrite($fp6, $el);
        break;
    default:
        $el = " ";
} 
return $el;
} 

foreach($types as $ty) { 
$elements = $ty;
echo "$elements<br>";
$x = renderCol($elements);
echo "$x"; } 
$datw = '<? 
require "footer.php";
?>




</div><!container>

<?
require "bootstrapbottom.php";
?>';
$fpw = fopen($file, "a+");
fwrite($fpw, $datw);
?>