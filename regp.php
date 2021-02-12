<html>
<head>
<link rel="stylesheet" type="text/css" href="regp.css" />
<title>Verbal Apti</title>
<script type="text/javascript">
 function validate() {

  var str1 = /[^a-z]/gi;
  var str2 = /[^0-9]/gi
 
  if(document.regform.vname.value=="--none--")  {
  alert("PLEASE SELECT YOUR GENDER");
  
  return false;
  }
  
  else if(document.regform.fname.value.match(str1)) {
  alert("FIRST NAME MUST CONTAIN ALPHABETS ONLY");
  return false;
  }
   
   else if(document.regform.lname.value.match(str1)) {
  alert("LAST NAME MUST CONTAIN ALPHABETS ONLY");
  return false;
  }
  
 else if(document.regform.branch.value=="--none--") {
 alert("SELECT YOUR BRANCH");
 return false;
 }
 
else if(document.regform.year.value=="--none--") {
 alert("SELECT YOUR YEAR");
 return false;
 }
 
  else if(document.regform.rollno.value.match(str2)) {
 alert("ENTER NUMBERS ONLY IN ROLL NUMBER");
 return false;
 }
 
 else if(document.regform.contact.value.match(str2)) {
 alert("ENTER NUMBERS ONLY IN CONTACT NUMBER");
 return false;
 }
 
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

</script>
</head>
<body>
<form action="quesformat.php" method="POST" name="regform" onsubmit="return validate();">
<h1>Read the rules carefully and then fill up the form :</h1>
<hr>
<br>
<pre id="pre1" class="pre1">
This test is being organized by ACM Student Chapter and IEEE Student Branch

This would be a 1 hour test.

Fill in your personal information before starting test.

Please submit your responses before completion of time.

This paper consists of 50 questions.

30 questions of general English, 10 of aptitude and 10 of General Knowledge.

A popup will be displayed before 10 minutes of completion of time and before 45 seconds of completion of time.

The timer is shown at the top of next page.

For every correct answer you would be awarded 3 marks and for wrong answer you would be awarded -1.

<strong><u>Bonus Marks</u></strong> of 0.25 for every minute early submission.

<strong><u>Penalty</strong></u> of 1 marks for every minute late submission.

Enter your credentials below-
	

</pre>
<table border="1" width="60%" height="50%" align="center">
<tr><th class="class1">First Name</th>
<td><select name="gender" >
<option>--none--</option>
<option>Mr.</option>
<option>Ms.</option>
</select>
<input type="text" name="fname" placeholder="first name" id="fname" maxlength="15" size="11" required="required" style="width:150px;height:40px;font-size:20px;resize:horizontal;"/></td></tr>
<tr><th class="class2">Last Name</th>
<td><input type="text" name="lname" class="type2" placeholder="last name" id="lname" maxlength="15" required="required" /></td></tr>
<tr><th class="class1">Branch</th>
<td>
<select name="branch">
<option class="branch">--none--</option>
<option>CSE</option>
<option>ME</option>
<option>ECE</option>
<option>EE</option>
<option>CE</option>
<option>CHE</option>
</select>

</td>
<tr><th class="class2">Year</th>
<td>
<select name="year">
<option>--none--</option>
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
</select>

</td>
</tr>
<tr><th class="class1">Roll No.</th>
<td><input type="text" class="type2" name="rollno" placeholder="roll number" id="rollno" required="required"  /></td></tr>
<tr><th class="class2">Email</th>
<td><input type="text" name="email" class="type2" placeholder="email id" id="email" required="required"  /></td></tr>
<tr><th class="class1">Contact number</th>
<td><input type="text" value="+91" size="1" maxlength="3" style="width:35px;height:40px;font-size:20px;"/><input type="text" name="contact" placeholder="contact number" id="contact" maxlength="10" size="13" required="required" style="width:215px;height:40px;font-size:20px;resize:horizontal;" /></td></tr>


</table>
<br><br><br><br>

<center><input type="submit" value="ENTER THE QUIZ" style="height:60px;width:400px;font-size:30px;"></center>

</form>
<br><br>
</body>
</html>