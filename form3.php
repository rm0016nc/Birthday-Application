<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>


<form action="form3.html">
  <input type="submit" value="back">
</form>


<style>

body {
    background-image: url("https://wonderfulengineering.com/wp-content/uploads/2014/10/simple-wallpaper-4.jpg")
}


h1 {
   color: #6F1135;
   text-align: center;
   font-size: 40px;
}

h2 {
   color: #6F1135;
   font-family: "Comic Sans MS", cursive, sans-serif;
   font-size:  30px;
   text-align: center;
}
h4{
   color: #6F1135;
   text-align: center;
   font-size: 28px;
}

input[type=submit] {

        background-color: #6F1135;
        color: white;
        padding: 5px 10px;
        margin: 3px 20px;
        cursor: pointer;
}

p  {
  text-color: #DE0C75;

}

</style>


<?php

$month=$_REQUEST['month'];
$day=$_REQUEST['day'];
$number=$_REQUEST['number'];
$year=$_REQUEST['year'];

function season($month,$day){
 $task=$_REQUEST['task'];
 $day=$_REQUEST['day'];

if (($task =="3" && $day >=20) or($task =="4") or ($task =="5") or($task =="6" && $day <= 20 ))
   $season="Spring";
 elseif (($task =="6" && $day >=21) or($task =="7") or ($task =="8") or($task =="9" && $day <= 21 ))
   $season="Summer";
 elseif (($task =="9" && $day >=22) or($task =="10") or ($task =="11") or($task =="12" && $day <= 20 ))
   $season="Fall";
 elseif (($task =="12" && $day >=21) or($task =="1") or ($task =="2") or($task =="3" && $day <= 19 ))
   $season="Winter"; 
 return $season;
}

function zodiac($month, $day){
  $task=$_REQUEST['task'];
  $day=$_REQUEST['day'];
 
 if (($task=="3" && $day >= 21) or ($task=="4" && $day <=19))
    $zodiac="Aries";
 elseif (($task=="4" && $day >= 20) or ($task=="5" && $day <=20))
    $zodiac="Taurus";
 elseif (($task=="5" && $day >= 21) or ($task=="6" && $day <=20))
    $zodiac="Gemini";
 elseif (($task=="6" && $day >= 21) or ($task=="7" && $day <=22))
    $zodiac="Cancer";
 elseif (($task=="7" && $day >= 23) or ($task=="8" && $day <=22))
    $zodiac="Leo";
 elseif (($task=="8" && $day >= 23) or ($task=="9" && $day <=22))
    $zodiac="Virgo";
 elseif (($task=="9" && $day >= 23) or ($task=="10"&& $day <=22))
    $zodiac="Libra";
 elseif (($task=="10" && $day >= 23) or ($task=="11" && $day <=21))
    $zodiac="Scorpio";
 elseif (($task=="11" && $day >= 22) or ($task=="12" && $day <=21))
    $zodiac="Sagittarius";
 elseif (($task=="12" && $day >= 22) or ($task=="1" && $day <=19))
    $zodiac="Capricorn";
 elseif (($task=="1" && $day >= 20) or ($task=="2" && $day <=18))
    $zodiac="Aquarius";
 elseif (($task=="2" && $day >= 19) or ($task=="3" && $day <=20))
    $zodiac="Pisces";
  return $zodiac;

}


function chinese($year){

  
  if ($year % 12 == 4)
    $chinese = "Rat";
  elseif ($year % 12 == 5)
    $chinese = "Ox";
  elseif ($year % 12 == 6)
    $chinese = "Tiger";
  elseif ($year % 12 == 7)
    $chinese = "Rabbit";
  elseif ($year % 12 == 8)
    $chinese = "Dragon";
  elseif ($year % 12 == 9)
    $chinese = "Snake";
  elseif ($year % 12 == 10)
    $chinese = "Horse";
  elseif ($year % 12 == 11)
    $chinese = "Sheep";
  elseif ($year % 12 == 0)
    $chinese = "Monkey";
  elseif ($year % 12 == 1)
    $chinese = "Rooster";
  elseif ($year % 12 == 2)
    $chinese = "Dog";
  elseif ($year % 12 == 3)
    $chinese = "Pig";

  return $chinese;
}

function age($month, $day, $year){
  $task =$_REQUEST['task'];
 
  if ($task == "1")
   $m=1;
  elseif ($task == "2")
   $m=2;
  elseif ($task == "3")
   $m=3;
  elseif ($task == "4")
   $m=4;
  elseif ($task == "5")
   $m=5;
  elseif ($task == "6")
   $m=6;
  elseif ($task == "7")
   $m=7;
  elseif ($task == "8")
   $m=8;
  elseif ($task == "9")
   $m=9;
  elseif ($task == "10")
   $m=10;
  elseif ($task =="11")
   $m=11;
  elseif ($task == "12")
   $m=12;
  if (checkdate($m,$day,$year))
{
  $today=time();
  $birthdate=mktime(0,0,0,$m,$day,$year);
  $age=floor(((($today-$birthdate)/86400)+1)/365);  
}
else
  echo"<h1>Can't give you your age, Invalid date for that month</h1>";

return $age;
}

function dayofweek($month, $day, $year){
  $task=$_REQUEST['task'];

  if ($task == "1")
   $m=1;
  elseif ($task == "2")
   $m=2;
  elseif ($task == "3")
   $m=3;
  elseif ($task == "4")
   $m=4;
  elseif ($task == "5")
   $m=5;
  elseif ($task == "6")
   $m=6;
  elseif ($task == "7")
   $m=7;
  elseif ($task == "8")
   $m=8;
  elseif ($task == "9")
   $m=9;
  elseif ($task == "10")
   $m=10;
  elseif ($task =="11")
   $m=11;
  elseif ($task == "12")
   $m=12;

 if (checkdate($m, $day, $year)){
 $birthdate=mktime(0,0,0,$m,$day,$year);
 $bornday=date("l",$birthdate);
}
 else
  echo"<h1> Can't give the day of the week, the date entered is invalid for that month</h1>";

 return $bornday;

}

function nextyear($month, $day){
  $task=$_REQUEST['task'];
  $month=$_REQUEST['month'];
  $day=$_REQUEST['day'];
   if ($task == "1")
   $m=1;
  elseif ($task == "2")
   $m=2;
  elseif ($task == "3")
   $m=3;
  elseif ($task == "4")
   $m=4;
  elseif ($task == "5")
   $m=5;
  elseif ($task == "6")
   $m=6;
  elseif ($task == "7")
   $m=7;
  elseif ($task == "8")
   $m=8;
  elseif ($task == "9")
   $m=9;
  elseif ($task == "10")
   $m=10;
  elseif ($task =="11")
   $m=11;
  elseif ($task == "12")
   $m=12;
  $today=time();
  $Month=date("n",$today);
  $Date=date("j",$today);

  if (($m < $Month) or ($m ==  $Month && $day <= $Date))
    $year=2019;
  elseif (($m > $Month) or ($m == $Month && $day > $Date))
    $year=2018;
  $date=mktime(0,0,0, $m, $day, $year);
  $nextday=date("l",$date);
  return $nextday;
}

function noofdays($month, $day){
  $task=$_REQUEST['task'];
  $month=$_REQUEST['month'];
  $day=$_REQUEST['day'];
   if ($task == "1")
   $m=1;
  elseif ($task == "2")
   $m=2;
  elseif ($task == "3")
   $m=3;
  elseif ($task == "4")
   $m=4;
  elseif ($task == "5")
   $m=5;
  elseif ($task == "6")
   $m=6;
  elseif ($task == "7")
   $m=7;
  elseif ($task == "8")
   $m=8;
  elseif ($task == "9")
   $m=9;
  elseif ($task == "10")
   $m=10;
  elseif ($task =="11")
   $m=11;
  elseif ($task == "12")
   $m=12;
  $today=time();
  $Month=date("n",$today);
  $Date=date("j",$today);

  if (($m < $Month) or ($m ==  $Month && $day <= $Date))
    $year=2019;
  elseif (($m > $Month) or ($m == $Month && $day > $Date))
    $year=2018;
  $date=mktime(0,0,0, $m, $day, $year);
  $nextbday=floor((($date-$today)/86400)+1);
  return $nextbday;
}
function month($month){

 $task=$_REQUEST['task'];
if ($task == "1")
   $m=1;
  elseif ($task == "2")
   $m=2;
  elseif ($task == "3")
   $m=3;
  elseif ($task == "4")
   $m=4;
  elseif ($task == "5")
   $m=5;
  elseif ($task == "6")
   $m=6;
  elseif ($task == "7")
   $m=7;
  elseif ($task == "8")
   $m=8;
  elseif ($task == "9")
   $m=9;
  elseif ($task == "10")
   $m=10;
  elseif ($task =="11")
   $m=11;
  elseif ($task == "12")
  $m=12;
return $m;
}

$today=time();
$mo=month($month);
$Date=mktime(0,0,0,$mo,$day,$year);
echo"<h4> Today's date ".date("l F jS,Y",$today)."</h4>";
echo"<h1>______________________________________________</h1>";
echo"<h1>Information about your ".date("F jS, Y",$Date)." birthday</h1>";
if (isset($_REQUEST['1']))
    echo "<h1>You were born in ".season($month, $day)."</h1>";
if (isset($_REQUEST['2']))
  echo "<h1> Your Zodiac sign is  ".zodiac($month, $day)."</h1>";
if (isset($_REQUEST['3']))
  echo "<h1> You were born in the Chinese year of the ".chinese($year)."</h1>";
if (isset($_REQUEST['4']))
  echo "<h1> Your age is ".age($month,$day, $year)."</h1>";
if (isset($_REQUEST['5']))
  echo "<h1> You were born on a ".dayofweek($month,$day, $year)."</h1>";
if (isset($_REQUEST['6']))
  echo "<h1>You next birthday is on a ".nextyear($month,$day)."</h1>";
if (isset($_REQUEST['7']))
  echo "<h1> The number of days until your next birthday is ".noofdays($month,$day)."</h1>";

echo"<h2>__________</h2>";
echo"<h2>Thank you!</h2>";

echo "<HR>"; highlight_file("form3.php");

?>

<form action="form3.html">
  <input type="submit" value="back">
</form>
</body>
</html>
