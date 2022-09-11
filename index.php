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
$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year This year is not a leap yea";    
}

//q2
$temp = 27;  

if ($temp > "20") {
    echo "It is summertime!";
  }
//q3
function test($f, $sc) 
{
    return $f == $sc ? ($f + $sc)*3 :  false;
}
echo test(2, 2);

//q4
function test($f, $sc) 
{
    return $f + $sc ==30 ? ($f + $sc) :  false;
}
echo test(10, 10);

//q5
function test($num) 
{
   return $num % 3 == 0 || $num % 7 == 0;
}

var_dump(test(20));

//q6
function test($num) 
{
   return $num >= 20 && $num <=50;
}

var_dump(test(50));

//q7
$num1=1;
$num2=5;
$num3=9;
if($num1>$num2 && $num1>$num3){
  echo $num1;
}
else{
  if($num2>$num1 && $num2>$num3){
    echo $num2;
  }
  else
    echo $num3;
}

//q8
function calculateBill(units)
{
     
  
    if (units <= 100)
    {
        return units * 10;
    }
    else if (units <= 200)
    {
        return (100 * 10)
            + (units - 100)
                  * 15;
    }
    else if (units <= 300)
    {
        return (100 * 10)
            + (100 * 15)
            + (units - 200)
                  * 20;
    }
    else if (units > 300)
    {
        return (100 * 10)
            + (100 * 15)
            + (100 * 20)
            + (units - 300)
                  * 25;
    }
    return 0;
}
     


//q9 
function test($n1, $n2, $result) {
        switch($result) {            
            case '+':
                $result = $n1 + $n2;
                break;
            case '-':
                $result = $n1 - $n2;
                break;
            case '*':
                $result = $n1 * $n2;
                break;
            case '/':
                $result = $n1 / $n2;
                break;       
        }
        return $result;
    }

//q10
$age = 15;  

if ($age > "18") {
    echo "is no eligible to vote";
  }

  //q11

  function test($x) {
    if ($x > 0)
      echo "Positive ";
    if ($x == 0)
      echo "Zero";
    if ($x < 0)
     echo "Negative ";

  }
  
  test(-60);

//q12

$array = array(60,86,95,63,55,74,79,62,50);
$avg = array_sum($array) / count($array);
function test($x) {
  if ($x < 60)
   echo "F ";
   else if ($x < 70)
   echo "D ";
  else if ($x < 80)
   echo "C ";
  else if ($x < 90)
   echo "B ";
  else if($x < 100)
   echo "A ";

}

test($avg);



?> 
 
</body>
</html>