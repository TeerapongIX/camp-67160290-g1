@extends ('template.default')

@section ('title', 'My Page')
@section ('content')
<h1>My Page</h1>
<?php
    echo "My View Content.";
    echo "<br>";
    echo"Line 2";
?>
<br>
<?php
$myval = "Hello PHP";
?>
<br>
<?php
$myval = 1;
echo $myval;
$myarry = Array(1,2,3,4);
$myarry2 = [1,2,3,4];
$myarry3[] = 1;
$myarry3[] = 2;
$myarry3[2] = 3;
$myarry3[] = 4;

echo $myarry[0];
echo "<br>";
print_r($myarry2);
echo "<br>";
var_dump($myarry3);
?>

<?php
$myarry4 = [
    "name" => "John",
    "age" => 30,
    "city" => "New York",
    0,
    1
];
print_r($myarry4);
echo "<br>";
foreach ($myarry4 as $key => $value) {
    echo "<br>key : " . $key . " value : " . $value;
}
foreach ($myarry4 as $value) {
    echo "<br> value : " . $value;
}
echo "<br>";
$myval = "A";
$myval = "F";
for($i=0; $i<10; $i++){
    echo  $myval++;
    echo "<br>";
}
function myFunction(){
    return "My Function Call ";
}

echo Myfunction();

$a = 10;
if ($a < 10){
   echo "a < 10";
}
else if ($a == 10){
    echo "a == 10";
}
else {
    echo "a > 10";
}

?>

@endsection
