<html>
<head>
<title>Student Services</title>
<link REL="stylesheet" href="styl_shet.css" type="text/css"></link>
<script LANGUAGE="JavaScript" src="verify.js">
    </script>
    
    <script LANGUAGE="JavaScript" >
    
    
 function Vote_page_visit()
        {
            visitCount = getCookie("Vote_page_visit");
            if (visitCount == "") 
            {
            setCookie("Vote_page_visit", 1);
            }
            else 
            {
            visitCount = parseFloat(visitCount)+1;
            setCookie("Vote_page_visit", visitCount);
            }
        }
        </script>
        
</head>
<body bgcolor="#D3D3D3" LINK="#FFFAFA"� VLINK="#87CEEB" ALINK="#FFE4C4"  text="#FFFAFA" onload="Greeting() ; Vote_page_visit() ;" >

<div id="wrapper">
<div id="header">
    <table align="right">
    <form name="Loginform">
        <tr><td><font color="#CCB147">UserName :</font></td><td><font color="#CCB147">Password :</font></td></tr>
        <tr><td><input type="text" name="username"></td><td><input type="password" name="pass" ></td>
        <td><input type="submit" name="submit1" value="Login" onclick="login(Loginform)"></td></tr>
        
            
        <tr><td><h6><input type="checkbox" name="option1"><font color="#CCB147">Keep me logged in</font></h6></td>
            <td><a href="#"><h6><font color="#CCB147">Forgot your password?</font></h6></a></td></tr>
    </form>
    </table>

    <br />
</div>
<div id="left_side">
<table align="center">
</br>
<br><br><br>
<tr><td>
<a href="Home.html"><img src="images/Home1.jpg" width="130" height="40" alt="" border="0" /></a>

</td></tr>


<tr><td>
<a href="Degree_plans.html"><img src="images/Degree1.jpg" width="130" height="40" alt="" border="0" /></a>
</td></tr>
<tr><td>
<a href="Academic_Advisors.php"><img src="images/AA1.jpg" width="130" height="40" alt="" border="0" /></a>
</td></tr>

<tr><td>
<a href="Alumni.html"><img src="images/Alumni1.jpg" width="130" height="40" alt="" border="0" /></a>
</td></tr>

<tr><td>
<a href="Acadmic_Calender.php"><img src="images/AC1.jpg" width="130" height="40" alt="" border="0" /></a>
</td></tr>

<tr><td>
<a href="Events.html"><img src="images/Events1.jpg" width="130" height="40" alt="" border="0" /></a>
</td></tr>

<tr><td>
<a href="About_Us.html"><img src="images/AU1.jpg" width="130" height="40" alt="" border="0" /></a>
</td></tr>

</table>

</div>
<div id="body_section">
</br></br></br>
<?php


	mysql_connect("localhost","root","root");
	mysql_select_db("student_services");

       $res=mysql_query("select * from academic_advisors");

	echo"<table border=1 align=center> 
	<tr><th><font color='#CC9900'><font size= '4'>Name</font></strong></font></th><th><font color='#CC9900'><font size= '4'>Major</font></font></th><th><font color='#CC9900'><font size= '4'>Email</font></font></th><th><font color='#CC9900'><font size= '4'>Phone Number</font></tr>";
	while($row=mysql_fetch_array($res))
	{
	echo "<tr> ";


	echo "<td><font color='#F3E7C2'><center>"; echo $row["adv_name"]; echo "</td>";
	echo "<td><font color='#F3E7C2'><center>"; echo $row["adv_major"]; echo "</td>";
	echo "<td><font color='#F3E7C2'><center>"; echo $row["adv_email"]; echo "</td>";
	echo "<td><font color='#F3E7C2'><center>"; echo $row["adv_num"]; echo "</td>";
	

	
	echo "</tr>";
}
echo "</table>";
?>


</div>


<div id="right_side">
<table>
<tr>
<td>
<font  size="3" color="#FFFFFF" align="center" alt="rtl"><b><marquee direction=up style="height: 151px; width: 138px"  >Spring 2015<br></marquee></b></font>
</td>
</tr>
<tr>
<td>
<img src="images/adv2.jpg" width="135" height="230" />
</tr>


</table>
</div>
<div id="footer" align="center">
<br>
<font size="1" color="#FFFAFA" align="center">CopyRights By HMH Group</font></br>
<font size="1" color="#FFFAFA" align="center"><script type="text/javascript"> document.write("last Modified: " +document.lastModified+".  Site Visits: "+getCookie('visits'));</script> </font></br>
</div>

</div>

</body>
</html>