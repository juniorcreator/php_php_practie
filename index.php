<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require ("head.php");

include('includes/db.php');


//function myfunc($a,$b) {
//  echo $a > $b ? $a : $b."<br>";
//}
//
//myfunc(4,6);
//myfunc(4,20);

//
//$result = mysqli_query($connection, "SELECT * FROM `articles_category` ");
//mysqli_num_rows($result); результат кількісь записів

//$start_date = '2016-12-10 14:00:00';
//$start_date_timestamp = strtotime($start_date);
//
//$diff = time() - $start_date_timestamp;
//
//$days_passed = floor((($diff / 60) / 60 ) / 24);
//
//echo 'Between ' . date('d.m.Y H:i:s', $start_date_timestamp) . ' and ' . date('d.m.Y H:i:s') . ' passed ' . $days_passed . ' day';

?>

<!--<ul>-->
<!--  --><?php
//  while (($cat = mysqli_fetch_assoc($result)))
//  {
//    echo "<li>" .$cat['title'] . "</li>";
//  }
//
//  ?>
<!--</ul>-->


<?php


echo isset($a);

?>


<!--<form method="POST" action="handle.php">-->
<!--  <input type="text" placeholder="login" name="login">-->
<!--  <input type="text" placeholder="password" name="password">-->
<!--  <hr>-->
<!--  <input type="submit" value="Login">-->
<!--</form>-->

<form method="get" action="index.php">
	a:<input type="text" name="a"> <br>
	b:<input type="text" name="b"> <br>
	c:<input type="text" name="c"> <br>
	<hr>
	<input type="submit" value="Submit" name="submit">
</form>
<!-- functions-->
<?php

if(isset($_GET['submit'])) {
	echo 'Form was submited';
	echo '<br>';
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];
  print_r($_GET);
}

function a() {
	$a = 10;
	$b = '10 efeef';
	$c = 'eferf 10';
	$n = $a + $b;
	echo $n;
}
a();




// function f1($name) {
// 	echo "function $name".'<br>';
// }
//f1('serhii');
//f1('Ivan');
//f1('wwefwef');
//$arr3 = '';
//$arr = [1,2,3,4,5,6,7,8];
//$arr2 = array_reverse($arr);
//var_dump(empty($arr3));

//function for work with variables
//isset()
//empty()
//gettype()
//grout: is_*: is_array(), is_int(), is_bool()
//get_defined_vars()

// work with strings
//$city = 'london';
//$percent = 22 / 41 * 100;
//$total = 1000;
//
//$format = 'By dates of %.2f statistics  from %d questioned .... in city %s ';
//printf($format, $percent, $total, $city );

// Math functions ##########

//$arr = [1,2,3,4,5];
//$f = 4.12355;


//work with arrays ##########

//in_array();
//array_values();
//array_keys();
//array_interset();
//array_diff();

//$arr = ['first' => 1, 'second'=> 2, 'third'=> 3];

//var_dump(in_array(10, $arr));
//echo '<hr>';

//$values = array_values($arr);
//
//echo '<pre>';
//print_r($values);
//echo '</pre>';


//$values = array_keys($arr);
//
//echo '<pre>';
//print_r($values);
//echo '</pre>';

//$group1 = ['11'=> 'vasya', '222'=> 'petya', '333'=> 'plya'];
//$group2 = ['44'=> 'vasya', '555'=> 'petya', '666'=> 'plya'];
//$commonGroup = $group1 + $group2;
//print_r($commonGroup);


// prints values that exist in first and second arrays ##########
//
//$arr1 = [1,2,3,4,5,6];
//$arr2 = [7,6,9,4,11,1];
//echo '<pre>';
//print_r(array_intersect($arr1, $arr2));
//echo '</pre>';

// prints values that differant in first and second arrays ###########

//$arr1 = [1,2,3,4,5,6];
//$arr2 = [7,6,9,4,11,1];
//echo '<pre>';
//print_r(array_diff($arr1, $arr2));
//echo '</pre>';

// array sorts ##########
//
//$arr1 = [21,12,44,4,5];
//$arr2 = ['3'=> 'oleg', '2'=> 'vasiliy', '1'=> 'sergey'];
//sort($arr1);
//echo '<pre>';
//print_r($arr1);
//echo '</pre>';

//ksort($arr2);
//echo '<pre>';
//print_r($arr2);
//echo '</pre>'


// data and time #################
// getdate();

//$aa = getdate();
//print_r($aa);


//language constructions

//echo 'test'
//return $value
//die & exit
//echo & print
//isset & unset
//include & include_once
//require & require_once
//empty
//eval
//list
//return

//echo '1';
////die;
//exit('exited');
//
//echo '2';

//$arr1 = ['value1', 'value2'];
//list($var1, $var2) = $arr1;
//
//echo $var1.' ' .$var2;


/// HTTP forms

//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';


?>







<?php
  mysqli_close($connection);
?>
























<?php
require ("footer.php");

?>

