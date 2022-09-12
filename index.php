<!--
 ***   ***        ****             *   *          ***   ***
***** *****       *   *            *   *         ***** *****
***********       *   *            ** **         ***********
 *********        ****     *****   * * *          *********                                            
  *******         * *              *   *           *******
   *****          *  *             *   *            *****
    ***           *   *            *   *             ***
     *                                                *
-->
<!DOCTYPE html>
<html>
<body>
<?php
//q1
$co = array('red', 'green', 'white');
echo "The memory of that scene for me is like a frame of film forever frozen at that
moment: the $co[0]  carpet, the $co[1] lawn, the $co[2]house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

//q2
$co = array('white', 'green', 'red');

sort($co);
echo "<ul>";
foreach ($co as $x)
{
echo "<li>$x</li>";
}
echo "</ul>";

//q3
$cities =array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
"Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
"Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities) ;
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital". ;
echo "<br>";
}

//q4
 $color = array (4 => 'white', 6 => 'green', 11=> 'red');
 echo reset($color);

 //q5
 $num = array( '1','2','3','4','5' );

$add = '$';
array_splice( $num, 3, 0, $add ); 
foreach ($num as $x) 
{echo "$x ";}

//q6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c
" => "apple");

asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val";
    echo "<br>";}

//q7
$arraytemp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$arraytemp1 = explode(',', $arraytemp);
$ttemp = 0;
$arraytemp1_length = count($arraytemp1);
foreach($arraytemp1 as $temp)
{
 $ttemp += $temp;
}
 $avgtemp = $ttemp/$$arraytemp1_length;
 echo "Average Temperature is : ".$avgtemp."
"; 
sort($arraytemp1);
echo " List of five lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $arraytemp1[$i].", ";

}
echo "List of five highest temperatures :";
for ($i=($arraytemp1_length-7); $i< ($arraytemp1_length); $i++)
{
echo $arraytemp1[$i].", ";
}

//q8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


//q11
echo implode(",",range(200,250,4))."\n";


//q12
$words = array("abcd","abc","de","hjjj","g","wer");
$array = array_map('strlen', $words);
echo "The shortest array length is " . min($array) .
". The longest array length is " . max($array).'.';


//q13
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x]."\n";
}

//q14
function nzero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(m(array(2,0,10,12,6))."\n");

//q15
for($x=1; $x<=10; $x++)
{
 if($x< 10)
 {
 echo "$x-";
 }
 else
  {
 echo "$x"."\n";
  }
}

//q16

$total =0;
for($x=1; $x<=30; $x++)
{
$total +=$x;
}
echo $total;

//q19
//q20
$n = 5;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "$x";
 //q21
 x,y=0,1

while y<75:
    print(y)
    x,y = y,x+y

    //q22
    
$text="Orange Coding Academy";
$search_char="c";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo $count."\n";

//q23
for ($i = 1; $i <= 100; $i++) {
  if ($i % 15 == 0) {
      echo 'FizzBuzz<br>';
  } elseif ($i % 3 == 0) {
      echo 'Fizz<br>';
  } elseif ($i % 5 == 0) {
      echo 'Buzz<br>';
  } else {
      echo $i . '<br>';
  }
}

//q24

<table border="1" cellpadding="3" cellspacing="0">
<?php
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
?>
</table>

?>

</body>
</html>
