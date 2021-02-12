<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$branch = $_POST['branch'];
$year =  $_POST['year'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="quesformat.css" />
<title>questions</title>
<script type="text/javascript">
var seconds = 100;
function secondPassed() 
{
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;       
   // document.getElementById['stime'].value = seconds;
	if(minutes>10)
	{
	if(remainingSeconds<10)
	document.getElementById("countdown").innerHTML = minutes + ":0" + remainingSeconds;
	else
    document.getElementById("countdown").innerHTML = minutes + ":" + remainingSeconds;
    }
	else
	{
	if(remainingSeconds<10)
	document.getElementById("countdown").innerHTML = "0"+minutes + ":0" + remainingSeconds;
	else
    document.getElementById("countdown").innerHTML = "0"+minutes + ":" + remainingSeconds;
    	
	}
	if (seconds == 0) 
    {
        document.getElementById("countdown").innerHTML = "TIME OVER";
    } 
    else
    {
        seconds--;
    }
	
}
  var countdownTimer = setInterval('secondPassed()', 1000);
  
  
  window.onbeforeunload = function() {
        return "End this session?";
    }
var message="NoRightClicking";
function defeatIE() {if (document.all) {(message);return false;}}
function defeatNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
document.oncontextmenu=new Function("return false")
var c=0;
var t;
var timer_is_on=0;

function timedCount()
{
document.getElementById('stime').value=c;


t=setTimeout("timedCount()",1000);c=c+1;
if(c==1500)
{
alert("10 minutes left before time out.....submit your answer for bonus marks");
}
if(c==2055)
{
alert("45 seconds left before time out.....submit your answer before timeout to avoid penalty");
}
if(c==2100)
{
alert("you were unable to submit your response in 10 minutes....please submit your response to avoid penalty");
}
return true;

}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}
</script>
</head>
<body onLoad="return doTimer()">
<form action="result.php" method="POST" name="quesform" >
<table border="0" width="100%">
<tr><td>
<pre class="welcome">GOOD LUCK  <?php echo $_POST['gender']." ".strtoupper($_POST['fname']); ?> ..!!!</pre></td></tr>
<tr><td><hr></tr></td>	
<tr><td>
<div id="countdown" class="timer"></div>
</td></tr>
<tr><td><hr></tr></td>
<tr><td class="line">In question 1 to 5, arrange the lines in logical sequence :</tr></td>
<tr><td><hr></tr></td>
<tr><td><h3 class="ques"> <strong>Ques 1:</strong><br> 
<strong>A.</strong> She was undergoing treatment for pneumonia at the time, when the radiologist had raised an alarm and sent her to a cardiologist.<br>
<strong>B.</strong> Even in my dazed state, I remember wondering how it was possible that a well-built women like Angel could shring to half her size within a day in hospital.<br>
<strong>C.</strong> It was absurd, insane.<br>
<strong>D.</strong> Within an hour, she was in hospital and our carefree, happy little world came crumbling down like a house of cards.<br>
<strong>E.</strong> The bony woman lying helplessly in that sterile hospital room with strange machine blinking around her wasn't my Angel at all.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques1">A :    ADBEC</pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques1">B :    ADBCE   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques1">C :    ADECB  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques1">D :    ADEBC  </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 2:</strong><br>
<strong>A.</strong> The leader should possess high intelligence.<br>
<strong>B.</strong> The reason for his frequent neglect of intelligence as a prerequisite of leadership are complex.<br>
<strong>C.</strong> It is certainly true to say that this is more commonly underrated than any other aspect of leadership.<br>
<strong>D.</strong> There is first, a very general misunderstanding of such a phrase as 'of very high intelligence.'</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques2">A :    ABCD   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques2">B :    ACBD   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques2">C :    DABC  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques2">D :    CABD   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 3:</strong><br>
<strong>A.</strong> They also become spoiled and tyrannical<br>
<strong>B.</strong> But hire a former enemy and he will be more loyal than a friend, because he has more to prove.<br>
<strong>C.</strong> If you have no enemies, find a way to make them.<br>
<strong>D.</strong> In fact, you have more to fear from friends than from enemies.<br>
<strong>E.</strong> Be wary of friends-they will betray you more quickly, for they are easily aroused to envy.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques3">A :    CDBEA   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques3">B :    CEDAB   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques3">C :    ECDAB   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques3">D :    EABDC   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 4:</strong><br>
<strong>A.</strong> The problem is that you often do not know your friend as you imagine.<br>
<strong>B.</strong> It is natural to want to employ your friends when you find yourself in times of need.<br>
<strong>C.</strong> The world is a harsh place, and your friends soften the harshness.<br>
<strong>D.</strong> Why depend on a stranger when you have a friend at hand?<br>
<strong>E.</strong> Besides, you know them.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques4">A :    CBDEA  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques4">B :    BCEDA   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques4">C :    CBADE   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques4">D :    CDBEA   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 5:</strong><br>
<strong>A.</strong> It is red and golden.<br>
<strong>B.</strong> Our leaf falls.<br>
<strong>C.</strong> It detaches itself with a little plopping sound from its place high up in the tree.<br>
<strong>D.</strong> The sun catches it and it glitters with mist and dew.<br>
<strong>E.</strong> It plunges straight down through the tree and then hesitates and hovers for a while just below the lowest branch.<br>
<strong>F.</strong> It now decends in a leisurely arc and lingers for another moment before it finally settles on the ground.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques5">A :    BCAEDF   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques5">B :    CADBEF   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques5">C :    BCAEFD   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques5">D :    AFDEBC   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 6:</strong> What phrase could be used to replace "ethical" in the following sentence?<br>
We can confirm that the bank's investment policy is robust, yet <strong>ethical</strong>.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques6">A :    strictly lawful   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques6">B :    morally correct  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques6">C :    financially correct  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques6">D :    ecologically safe   </pre></td></tr>

<tr><td><hr></tr></td>
<tr><td class="line">In question 7 to 11, select the word which is <strong>not</strong> a synonym for the given word-</tr></td>
<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 7:</strong> Stingy</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques7">A :    amicable   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques7">B :    penurious   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques7">C :    parsimonious   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques7">D :    frugal   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 8:</strong> Fester</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques8">A :    putrefy   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques8">B :    ulcerate   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques8">C :    rot   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques8">D :    retrieve   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 9:</strong> Abandon</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques9">A :    cast away   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques9">B :    forsake  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques9">C :    butch   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques9">D :    maroon   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 10:</strong> Speckled</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques10">A :    blotchy   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques10">B :    rocky   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques10">C :    flecked  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques10">D :    mottled   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 11:</strong> Aureate</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques11">A :    brilliant   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques11">B :    gilded   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques11">C :    resplendent   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques11">D :    archaic  </pre></td></tr>

<tr><td><hr></tr></td>
<tr><td class="line">In question 12 to 16, select the word which the antonym for the word mentioned :</tr></td>
<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 12:</strong> Scanty</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques12">A :    ample   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques12">B :    sample   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques12">C :    adore   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques12">D :    afore   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 13:</strong> Amnesty</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques13">A :    loyalty   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques13">B :    punishment   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques13">C :    depth   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques13">D :    dearth   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 14:</strong> Affluence</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques14">A :    poverty   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques14">B :    influence   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques14">C :    affinity   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques14">D :    prosperity   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 15:</strong> Oblivion</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques15">A :    memory   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques15">B :    comely   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques15">C :    comfrey   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques15">D :    bijou   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 16:</strong> Jaded</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques16">A :    excited   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques16">B :    deployed   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques16">C :    employed   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques16">D :    exploit   </pre></td></tr>

<tr><td><hr></tr></td>
<tr><td class="line">In question 17 to 21, choose the best option to fill the blank :</tr></td>
<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 17:</strong> Slaves were freed from .......... only after they died.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques17">A :    ablution   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques17">B :    pilferage   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques17">C :    agreement   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques17">D :    bondage  </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 18:</strong> Jaya knew that to apologoise would be .......... to admitting she had failed.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques18">A :    equate   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques18">B :    assumed  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques18">C :    tantamount  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques18">D :    abrogate   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 19:</strong> Early .......... of maladjustment to college culture is .......... by the tendency to develop friendship networks outside college which mask signals of maladjustment.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques1">A :     treatment, compounded   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques1">B :     detection, facilitated   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques1">C :     identification, complicated  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques1">D :     prevention, helped   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 20:</strong> Because of his indecisive nature, Mr Bhushan has a reputation for ..........</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques20">A :    impartiality   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques20">B :    tenacity   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques20">C :    wandering   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques20">D :    vacillation   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 21:</strong> The goodwill of its clients is a genuine .......... asset for any bussiness.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques21">A :    redolent   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques21">B :    intangible  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques21">C :    dismissive   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques21">D :    indolent  </pre></td></tr>

<tr><td><hr></tr></td>
<tr><td class="line">In question 22 to 25, you are required to identify the best way of writing the sentence in the context of correct usage of standard written English.</tr></td>
<tr><td><hr></tr></td>


<tr><td><h3 class="ques"><strong>Ques 22:</strong> If she were to win the Olympic medal, I for one would be surprized.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques22">A :    If she were to win the Olympic medal, I for one would be surprized.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques22">B :    If she goes to win the Olympic medal, I for one would be surprized.  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques22">C :    If she becomes the winner of the Olympic medal, I for one would be surprized.  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques22">D :    In the event that she would win the Olympic medal, I for one would be surprized.   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 23:</strong> Not only was he efficient, but also welcoming in nature.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques23">A :    Not only was he competent but also friendly in nature.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques23">B :    He not only was competent but friendly too in nature.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques23">C :    He, not only was competent but friendly also in nature.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques23">D :    He was not only competent but also friendly in nature.   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 24:</strong> I am not to eager to go to this movie because it did not get good reviews.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques24">A :    I am not to eager to go to this movie because it did not get good reviews.  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques24">B :    Because of its poor review, I am not too eager to go to this movie.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques24">C :    I am not too eager to go to this movie because of its poor reviews.  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques24">D :    I am not too eager to go to this movie because the critics did not give it good reviews.   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 25:</strong> Most students like to read these kind of books for using their spare time.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques25">A :    Most students like to read this kind of book for using their spare time.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques25">B :    Most students like to read these kind of books for using their spare time.    </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques25">C :    Most students like to read these kind of book for using their spare time.   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques25">D :    Most students like to read this kind of books for using their spare time.   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 26:</strong> WHEEL:SPOKE::</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques26">A :    tea:sugar   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques26">B :    pen:cap   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques26">C :    ladder:rung   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques26">D :    lever:balance   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 27:</strong> HAND:ARM::</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques27">A :    nose:head   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques27">B :    foot:toe   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques27">C :    eye:lid   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques27">D :    wrist:finger   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 28:</strong> PARROT:CROW::</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques28">A :    eagle:ant  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques28">B :    goldfish:trout  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques28">C :    goat:butterfly  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques28">D :    sheep:mouse   </pre></td></tr>

<tr><td><hr></tr></td>
<tr><td class="line">In question 29 and 30, choose the option closest in meaning to the word given :</tr></td>
<tr><td><hr></tr></td>
<tr><td><h3 class="ques"><strong>Ques 29:</strong> Ludicrous</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques29">A :    profitable   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques29">B :    excessive   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques29">C :    disordered  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques29">D :    ridiculous   </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 30:</strong> Louse</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques30">A :    lukewarm   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques30">B :    beast   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques30">C :    parasitic insect   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques30">D :    infant  </pre></td></tr>


<tr><td><hr></tr></td>
<tr><td class="line"><center>APTITUDE</center></tr></td>
<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 31:</strong> In a group if 60% of people drink tea and 70% drink coffee, what is the maximum percentage of people drinking either tea or coffee but not both.</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques31">A :    100%   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques31">B :    70%   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques31">C :    30%   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques31">D :    10%  </pre></td></tr>

<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 32:</strong> The cost function for a product in a firm is given by 5q<sup>2</sup>, where q is the amount of production. The firm can sell the product at a market price of 50rs. per unit. The number of units to be produced by the firm such that the profit is maximized is</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques32">A :    5   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques32">B :    10   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques32">C :    15   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques32">D :    25  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 33:</strong> A sphere of iron of radius R/2 fixed to one end of a string was lowered into water in a cylinder container of base radius R to keep exactly half the sphere dipped. The rise in the level of water in the conatiner would be</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques33">A :    R/3   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques33">B :    R/4   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques33">C :    R/8   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques33">D :    R/12  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 34:</strong> A jar full of whiskey contain 40% alcohol. A part of this whiskey is replaced by another contaning 19% alcohol and now the percentage of alcohol was found to be 26%. The quantity of whiskey replaced is:</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques34">A :    1/3   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques34">B :    2/3   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques34">C :    2/5   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques34">D :    3/5  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 35:</strong> In any year, if April 1 is Wednesday, then so is</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques35">A :    January 1   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques35">B :    July 1   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques35">C :    October 1   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques35">D :    December 1  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 36:</strong> If a<sup>x</sup>=b<sup>y</sup>=c<sup>z</sup> and b<sup>2</sup>=ac, then y equals to</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques36">A :    (xz)/(x+z)   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques36">B :    (xz)/2(x-z)   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques36">C :    (xz)/2(z-x)   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques36">D :    2(xz)/(x+z)  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 37:</strong> A contractor employed 30 men to do a piece of work in 35 days. After 25 days, he employed 5 more men and the work was finished one day earlier. How many days he would have been behind, if he had not employed additional men?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques37">A :    1   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques37">B :    1(1/4)   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques37">C :    1(3/4)   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques37">D :    1(1/2)  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 38:</strong> A cricketer's average in his first 18 innings was 16.5 runs. After a further 8 innings his average had increased to 32.5 runs. What was his average for the last 8 innings?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques38">A :    120   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques38">B :    80.5   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques38">C :    68.5   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques38">D :    65.5  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 39:</strong> Introducing a boy, a girl said, "He is the son of the daughter of the father of my uncle." How is the boy related to the girl?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques39">A :    Brother   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques39">B :    Nephew   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques39">C :    Uncle   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques39">D :    Son-in-law   </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 40:</strong> A, P, R, X, S and Z are sitting in a row. S and Z are in the centre. A and P are at the ends. R is sitting to the left of A. Who is to the right of P ?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques40">A :    A   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques40">B :    X   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques40">C :    S   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques40">D :    Z   </pre></td></tr>


<tr><td><hr></tr></td>
<tr><td class="line"><center>GENERAL AWARENESS</center></tr></td>
<tr><td><hr></tr></td>


<tr><td><h3 class="ques"><strong>Ques 41:</strong> Wadia Institute of Himalayan Geology is located at</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques41">A :    Delhi   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques41">B :    Shimla   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques41">C :    Dehradun   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques41">D :    Kulu  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 42:</strong> Who won the Golden Glove award in 2014 FIFA world cup?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques42">A :    Guillermo Ochoa   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques42">B :    Manuel Neuer  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques42">C :    Keylor Navas   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques42">D :    Thibaut Courtois  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 43:</strong> Which of the following route will get India's first bullet train</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques43">A :    Mumbai-New Delhi   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques43">B :    Ahmedabad-Jaipur   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques43">C :    Jaipur-New Delhi   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques43">D :    Mumbai-Ahmedabad  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 44:</strong> Brussels is the capital city of which of the following country</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques44">A :    Belarus   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques44">B :    Bulgaria   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques44">C :    Romania   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques44">D :    Belgium  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 45:</strong> Kamla Beniwal has been removed as the Governer of which of the following state</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques45">A :    Gujrat   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques45">B :    Mizoram   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques45">C :    Rajasthan   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques45">D :    Karnataka  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 46:</strong> Which of the  following films received ten Academy Awards nominations but did'nt win in any category</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques46">A :    Frozen   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques46">B :    American Hustle   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques46">C :    Gravity   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques46">D :    Wolf of Wall Street </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 47:</strong> Who is the author of the book "One life is not enough"</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques47">A :    K. Natwar Singh   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques47">B :    Shashi Tharoor   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques47">C :    Kapil Sibal   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques47">D :    Mani Shankar Iyer  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 48:</strong> What does the letter 'M' denote in name 'MFI' as used in financial sector?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques48">A :    Mini   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques48">B :    Monetary  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques48">C :    Micro   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques48">D :    Mega  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 49:</strong> What is the name of actress who played the role of 'Skylar White' in famous telivison drama series 'Breaking Bad'?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques49">A :    Brtsy Brandt   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques49">B :    Una Stubbs  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques49">C :    Louise Brealey   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques49">D :    Anna Gunn  </pre></td></tr>


<tr><td><hr></tr></td>

<tr><td><h3 class="ques"><strong>Ques 50:</strong> Which of the following submarine met with a disaster on 2014 Feburary 26, in which two officers were killed?</h2></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="a" name="ques50">A :    INS Sindhuratna  </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="b" name="ques50">B :    INS Sindhurakshak   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="c" name="ques50">C :    INS Sindhughosh   </pre></td></tr>
<tr><td><pre id="id3" class="ques"><input type="Radio" value="d" name="ques50">D :    INS Sindhuvijay  </pre></td></tr>
</table><input type="hidden" name="stime" id="stime"/>
<hr><hr>
<center><input type="submit" value="SUBMIT FOR EVALUATION" style="height:60px;width:450px;font-size:30px;"></center>
<hr><hr>
<input type="hidden" name="fname" value="<?php echo $_POST['fname']; ?>" />
<input type="hidden" name="lname" value="<?php echo $_POST['lname']; ?>" />
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
<input type="hidden" name="year" value="<?php echo $_POST['year']; ?>" />
<input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>" />
<input type="hidden" name="branch" value="<?php echo $_POST['branch']; ?>" />
<input type="hidden" name="rollno" value="<?php echo $_POST['rollno']; ?>" />
<input type="hidden" name="contact" value="<?php echo $_POST['contact']; ?>" />

</form>
</body>

</html>

