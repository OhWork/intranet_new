<?php
$usrinput = $_GET['password'];
/* =================================================================== */
$output = strlen($usrinput); // check the length of the password.
/* =================================================================== */ 
function CheckForUPcase($text, $limit = .1)// check if it has uppercase
{
$len = strlen($text);
$upperCaseCount = 0;

for($i = 0; $i < $len; $i++)
{
$chr = $text[$i];
$intVal = ord($chr);

if($intVal >= 65 && $intVal <= 90)
{
if(++$upperCaseCount / $len >= $limit)
{
return true;
}
}
}
return false;
} 
/* =================================================================== */
function CheckSPCHAR($usrinput){ // check for special characters
if(!eregi("^([a-z0-9])*$",$usrinput))
{return true;}
else {
return false;
}

}
/* =================================================================== */
function CheckNum($usrinput){ // check for numebers
if(eregi("[0-9]",$usrinput))

{
return true;

}
else {
return false;
}
}


//CheckForUPcase($usrinput);
if(CheckNum($usrinput)==true&&CheckForUPcase($usrinput)==true&&CheckSPCHAR($usrinput)==true&&$output>='8') // If all the 4 conditions return true
{
echo '<img src="jquery/passajax/images/usecure.gif"/><br/><font color="#63dc39"><b>ยากมาก(ระวังลืม)</b></font>';

}elseif((CheckForUPcase($usrinput)==true&&CheckSPCHAR($usrinput)==true&&$output>='8')||(CheckNum($usrinput)==true&&CheckSPCHAR($usrinput)==true&&$output>='8')||(CheckNum($usrinput)==true&&CheckForUPcase($usrinput)==true&&$output>='8')||(CheckNum($usrinput)==true&&CheckForUPcase($usrinput)==true&&CheckSPCHAR($usrinput)==true))
// if any of the 3 conditions returned true
{
echo '<img src="jquery/passajax/images/secure.gif"/><br/><font color="#c0f813"><b>ยาก(ระวังลืม)</b></font>';
}elseif((CheckNum($usrinput)==true&&CheckForUPcase($usrinput)==true)||(CheckForUPcase($usrinput)==true&&CheckSPCHAR($usrinput)==true)||(CheckSPCHAR($usrinput)==true&&$output>='8')||(CheckNum($usrinput)==true&&$output>='8')||(CheckNum($usrinput)==true&&CheckSPCHAR($usrinput)==true)||(CheckForUPcase($usrinput)==true&&$output>='8'))
//if any 2 condtion is true
{
echo '<img src="jquery/passajax/images/good.gif"/><br/><font color="#f87a13"><b>ปานกลาง</b></font>';
}elseif((CheckNum($usrinput)==true)||(CheckForUPcase($usrinput)==true)||(CheckSPCHAR($usrinput)==true)||($output>='8'))
//if any 1 condition is true
{
echo '<img src="jquery/passajax/images/weak.gif"/><br/><font color="#f01212"><b>ง่าย</b></font>';
}else{
// if none of the condtions return true
echo '<img src="jquery/passajax/images/pweak.gif"/><br/><b>ง่ายมาก</b>';
}

?>