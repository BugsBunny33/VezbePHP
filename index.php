<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<script src="test.js" type="text/javascript"></script>
<title>Insert title here</title>
</head>
    <body>
    <!--  <p>This page uses frames. The current browser you are using does not support frames.</p> -->
    <?php
        $my_first_variable = "<p> hello world </p>";
        echo $my_first_variable;
        echo "alo bre ljakse";
        echo "<br></br>";
		echo "Ova linija: ".__LINE__."<br>"."Ovog fajla: ".__FILE__;
		function vraca_datum($timestamp)
		{
			return date("l F jS Y", $timestamp);
		}
		echo "<br>".vraca_datum(4);
		echo "<br>".vraca_datum(time());
		//echo "<br>".phpinfo();
		class prva_klasa{
			
			
		}
	?>
    </body>
</html>