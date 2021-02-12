
<html>

<head>
<link rel="stylesheet" type="text/css" href="result.css" />
<title>result's here</title>
</head>
<body bgcolor=#66CC33>
<br><hr>
<p id="id1">RESULT</p>
<br><hr>

<p id="id3"><?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$contact = $_POST['contact'];
$rollno = $_POST['rollno'];
$gender = $_POST['gender'];
$stime = $_POST['stime'];
$score=0;
$ques1=$_POST['ques1'];
$ques2=$_POST['ques2'];
$ques3=$_POST['ques3'];
$ques4=$_POST['ques4'];
$ques5=$_POST['ques5'];
$ques6=$_POST['ques6'];
$ques7=$_POST['ques7'];
$ques8=$_POST['ques8'];
$ques9=$_POST['ques9'];
$ques10=$_POST['ques10'];
$ques11=$_POST['ques11'];
$ques12=$_POST['ques12'];
$ques13=$_POST['ques13'];
$ques14=$_POST['ques14'];
$ques15=$_POST['ques15'];
$ques16=$_POST['ques16'];
$ques17=$_POST['ques17'];
$ques18=$_POST['ques18'];
$ques19=$_POST['ques19'];
$ques20=$_POST['ques20'];
$ques21=$_POST['ques21'];
$ques22=$_POST['ques22'];
$ques23=$_POST['ques23'];
$ques24=$_POST['ques24'];
$ques25=$_POST['ques25'];
$ques26=$_POST['ques26'];
$ques27=$_POST['ques27'];
$ques28=$_POST['ques28'];
$ques29=$_POST['ques29'];
$ques30=$_POST['ques30'];
$ques31=$_POST['ques31'];
$ques32=$_POST['ques32'];
$ques33=$_POST['ques33'];
$ques34=$_POST['ques34'];
$ques35=$_POST['ques35'];
$ques36=$_POST['ques36'];
$ques37=$_POST['ques37'];
$ques38=$_POST['ques38'];
$ques39=$_POST['ques39'];
$ques40=$_POST['ques40'];
$ques41=$_POST['ques41'];
$ques42=$_POST['ques42'];
$ques43=$_POST['ques43'];
$ques44=$_POST['ques44'];
$ques45=$_POST['ques45'];
$ques46=$_POST['ques46'];
$ques47=$_POST['ques47'];
$ques48=$_POST['ques48'];
$ques49=$_POST['ques49'];
$ques50=$_POST['ques50'];

$answer=array("b","a","a","d","d","a","c","b","a","c","a","b","c","b","b","a","d","d","d","a","c","b");

$ecorrect=0;
$eincorrect=0;
$acorrect=0;
$aincorrect=0;
$gcorrect=0;
$gincorrect=0;
$eattempt=0;
$aattempt=0;
$gattempt=0;

if($ques1=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques1=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques2=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques2=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques3=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques3=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques4=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques4=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques5=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques5=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques6=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques6=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques7=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques7=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques8=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques8=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques9=="c")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques9=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques10=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques10=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques11=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques11=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques12=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques12=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques13=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques13=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques14=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques14=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques15=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques15=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques16=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques16=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques17=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques17=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques18=="c")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques18=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques19=="c")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques19=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques20=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques20=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques21=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques21=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques22=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques22=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques23=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques23=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques24=="c")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques24=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques25=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques25=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques26=="c")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques26=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques27=="a")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques27=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques28=="b")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques28=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques29=="d")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques29=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques30=="c")
{$score=$score+3;$ecorrect=$ecorrect+1;$eattempt=$eattempt+1;}
else if($ques30=="")
$score=$score;
else
{$score=$score-1;$eincorrect=$eincorrect+1;$eattempt=$eattempt+1;}

if($ques31=="b")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques31=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques32=="a")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques32=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques33=="d")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques33=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques34=="b")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques34=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques35=="b")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques35=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques36=="d")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques36=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques37=="a")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques37=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques38=="c")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques38=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques39=="a")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques39=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques40=="b")
{$score=$score+3;$acorrect=$acorrect+1;$aattempt=$aattempt+1;}
else if($ques40=="")
$score=$score;
else
{$score=$score-1;$aincorrect=$aincorrect+1;$aattempt=$aattempt+1;}

if($ques41=="c")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques41=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques42=="b")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques42=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques43=="d")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques43=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques44=="d")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques44=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques45=="b")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques45=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques46=="b")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques46=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques47=="a")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques47=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques48=="c")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques48=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques49=="d")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques49=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}

if($ques50=="a")
{$score=$score+3;$gcorrect=$gcorrect+1;$gattempt=$gattempt+1;}
else if($ques50=="")
$score=$score;
else
{$score=$score-1;$gincorrect=$gincorrect+1;$gattempt=$gattempt+1;}




/*$rtime = 3600 - $stime;
$rmin = floor($rtime/60);
if($rtime>0)
$score = $score + $rmin*0.25;
else
$score = $score + $rmin*1;
*/


$totalsubmit = $eattempt+$aattempt+$gattempt;
$tcorrect = $ecorrect+$acorrect+$gcorrect;
$taccuracy = ($tcorrect*100)/($totalsubmit);
if($ecorrect!=0){
$eaccuracy = ($ecorrect*100)/($eattempt);}
else
{$eaccuracy=0;}
if($acorrect!=0){
$aaccuracy = ($acorrect*100)/($aattempt);}
else{$aaccuracy=0;}
if($gcorrect!=0){
$gaccuracy = ($gcorrect*100)/($gattempt);}
else{$gaccuracy=0;}
echo "$gender $fname, \n you scored $score points after attempting $totalsubmit questions out of 50 with accuracy $taccuracy % in time $stime seconds. \n In English you attempted $eattempt questions out of 30 with accuracy $eaccuracy %. \n In Aptitude you attempted $aattempt questions out of 10 with accuracy $aaccuracy %. \n In General Awareness you attempted $gattempt questions out of 10 with accuracy $gaccuracy %.";
$info="$fname $lname $email $contact $branch $year $rollno $accuracy %  $correct $incorrect\n";
echo $info;
 $handle = fopen('scoreinfo.txt', 'w' );
 fwrite($handle, "$info");
 fclose($handle);
?></p><br><hr>
<p id="id4">Designed and Developed by Tushar Singh Bohra & Vaibhav Singh Rathore</p>
<br><hr>
</body>
