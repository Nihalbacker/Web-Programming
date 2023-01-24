<html>
<center>
<body bgcolor="lightblue">
<h4></h4>
<?php
$name=["HARI","VYSHNAV(c)	","KARTHIK","ASWIN","MAANAS","MINHAJ","NIHAL","AKSHAY","NILEENA","SREYA","VISHNU"];
$role=["BALL BOY","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","MEDICAL","KEEPER","COACH"];
echo "<h1><b>KMCT CRICKET LEGENDS</b></h1><br>";
echo "<br>
<table border='2px'>
<tr><th>SL NO.</th>
<th>PLAYER</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</center>
</html>
