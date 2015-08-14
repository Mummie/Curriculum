<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
            <?php
                $monthArray = array(
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                );
                ksort($monthArray);
                foreach($monthArray as $key => $val){
                    echo "$key = $val \n";
                    
                }

            ?>
        </p>
	</body>
</html>