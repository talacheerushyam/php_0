<html>
<head>
</head>
<body>
<?php
$Y=date('Y');
if( (0 == $Y% 4) and (0 != $Y%100) or (0 ==$Y%400) )
		{
			echo "<b>$Y is a leap year";  
		}
		else
		{
			echo "<b>$Y is not a leap year";  
		}
?>
</body>
</html>

