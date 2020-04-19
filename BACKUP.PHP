<?php

if(isset($_POST['submit']))
{
	//echo '<script src="main.js"></script> ';
	
$name=$_POST['name'];

$age=$_POST['age'];

$weight=$_POST['weight'];

$height=$_POST['height'];

$gender=$_POST['gender'];

$activity=$_POST['activity'];
echo $activity;

$heightm=$height*0.30;
//BMI
$bmi=($weight)/($heightm*$heightm);

echo $bmi;
echo"<br><br>";

//BMR
if(strtolower($gender)=="male")
{
$bmr=66+(13.7*$weight)+(5*$heightm*100)-(6.8*$age);
echo $bmr;
}
else
{
$bmr=655 + (9.6*$weight) + (1.8 *height*100) - (4.7 *$age);
echo $bmr;
}
//Calories Needed
if(strtolower($activity)=='little or no exercise')
{
$cn=$bmr*1.2;
echo $cn;
}

if(strtolower($activity)=='light exercise/sports 1-3 days/week')
{
$cn=$bmr*1.375;
echo $cn;
}

if(strtolower($activity)=='hard exercise/sports 6-7 days a week')
{
$cn=$bmr*1.55;
echo $cn;
}

if(strtolower($activity)=='hard exercise/sports 6-7 days a week')
{
$cn=$bmr*1.725;
echo $cn;
}

if(strtolower($activity)=='very hard exercise/sports & physical job or 2x training')
{
$cn=$bmr*1.9;
echo $cn;
}

if($bmi<18.5)
{
echo("under weight.Your diet plan is ");
}


else if($bmi>=18.5 && $bmi<24.9)
{
echo("normal weight.Your diet plan is ");
}


else if($bmi>=25 && $bmi<29.9)
{
echo("overweight.Your diet plan is ");
}

else if($bmi>=30 && $bmi<39.9)
{
echo("obesity.Your diet plan is ");
}


else if($bmi>40)
{
echo("Morbid obesity.Your diet plan is ");
}

*/
?>