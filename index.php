<!DOCTYPE html>
<html>
<body>

ARRAY PHP TO JSON STRING OBJECT
<BR>
<?php  
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);  
echo json_encode($arr);  

?> 

<br>
<BR><BR><BR><BR>

JSON STRING OBJECT TO ARRAY PHP

<BR>

<?php  
    $json2 = '{
    	"Nama" : "Jurnalcode",
    	"Alamat" : "Riau",
    	"email" : "jurnalcode.com@gmail.com"
    }';    

    $show = json_decode($json2);
	echo $show->Nama;
   
?>  

<BR><BR><BR><BR>

JSON STRING OBJECT TO ARRAY PHP FROM DATA EXSTERNAL JSON

<BR>

<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters[0]->name;

echo "<br><br>";

echo "looping all data json.<br>";

foreach ($characters as $character) {
	echo $character->name . '<br>';
}

?>


<h2>Convert a string written in JSON format, into a JavaScript object.</h2>

<p id="demo"></p>

<script>
var myJSON = '{"name":"John", "age":31, "city":"New York"}';
var myObj = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myObj.name;
</script>

</body>
</html>