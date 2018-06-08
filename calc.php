<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php 
$p=$_GET["a"];



if($p==true){
if(empty($_GET["valA"])  || empty($_GET["valB"])  ){
echo "<div> I cannot calcute without values</div>";



}

else
{

$a=$_GET["valA"];
$b=$_GET["valB"];

$v=$a+$b;
if($_GET["radio"]==1){
echo "<div>Result:".$a."+".$b."=".$v."</div>";

$v=$a-$b;
echo "<div>Result:".$a."-".$b."=".$v."</div>";
}
if($_GET["radio"]==2){
$v=$a*$b;

echo "<div>Result:".$a."*".$b."=".$v."</div>";
if($b<"0"){

echo "<div> B cannot be lower than 0</div>";


}
else
{

$v=$a-$b;
echo "<div>Result:".$a."/".$b."=".$v."</div>";
}
}
}
}
else
echo  "<div> You need check checkbox!</div>";

?>
</body>

</html>