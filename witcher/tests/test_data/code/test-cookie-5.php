<?php
include('./config.php');
// nv == necessary value to reach vul
// vul == vulnerable variable

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Testing Trace</title>
	</head>
	<body>
	<?php
	    // needs to keep nv1; add nv2 and nv3; and keep vul1
	    echo "Starting EVAL <BR>\n";
	    if(isset($_COOKIE['nv1'])) {
		    if(isset($_COOKIE['nv2'])) {
		        if(isset($_COOKIE['nv3'])) {
		            if(isset($_COOKIE['nv4'])) {
		                if(isset($_COOKIE['nv5'])) {
                            $vul1=$_COOKIE['vul1'];
                            $ret=mysqli_query($con,"select * from user where id=0'");
                            echo "<BR>MADE it to query with `". $vul1 . "`\n<BR>";
                        } else {
                          echo "<BR>MISSING nv5\n<BR>";
                        }
                    } else {
                        echo "<BR>MISSING nv4\n<BR>";
                    }
                } else {
                    echo "<BR>MISSING nv3\n<BR>";
                }
            } else {
                echo "<BR>MISSING nv2\n<BR>";
            }
        }  else {
            echo "<BR>MISSING nv1\n<BR>";
        }
    ?>
	</body>
</html>
