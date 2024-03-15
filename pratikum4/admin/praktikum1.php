<?php
require_once 'navbar.html' ; 
require_once 'sidebar.html' ;
?>

<h1>PRAKTIKUM1</h1>
<?php 

$fruits = ["banana","avocado","melon"];
echo $fruits[1];
echo "<ol>";

foreach ($fruits as $fruits){
    echo "<li>" . $fruits . "</li>";
}
echo "</ol>";
 


?>


