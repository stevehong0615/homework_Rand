<html>
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <form method="post">
        <p>請輸入數字1~49</p>
        <input type="text" name="txtNumber">
        <input type="submit" name="btnOK" value="OK">
    </form>
    <HR>
    <?php

        function ShowRand($iCount)
        {
	        if ($iCount <= 0)
	        {
	            echo "請輸入大於0的數字";
	            return;
	        }
	        
	        if($iCount > 49)
	        {
	            echo "請輸入小於或等於49的數字";
	            return;
	        }
	        
	        $Rand = Array();
	        
	        while($iCount >0)
	        {
		        $randval = mt_rand(1, 49);
		        
		        if (!in_array($randval, $Rand))
		        {
		            $iCount--;
		            $Rand[] = $randval;
		            echo $randval, "<br>";
		        }
		        
            }
            
        }

        ShowRand($_POST['txtNumber']);

    ?>
    
</body>

</html>