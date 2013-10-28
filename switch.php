<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
     $time = 12;
        switch($time) {
            case 6:
                echo "Eat supper";
                break;
            case 7:
                echo "do homework";
                break;
            case 8:
            case 9:
                echo "take your time";
                break;
            case 10:
                echo "Go to bed";
                break;
            case 11:
            case 12:    
                echo "Why are you still up?!";
                break;
        }
    ?>
	</body>
</html>