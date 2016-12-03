<!DOCTYPE html>
<html>
	<head>
		<title>Thanks</title>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/ico"> 
	</head>
	<?php
	$nl = fopen("nlsignupsheet.txt", "a");
	fputs($nl,$_POST["email"]);
	fputs($nl,", "); 
	
	fclose($fp);
	
	?>
	<body>
		<h1>THanks for Signing up for the NewsLetter...</h1>
		<h1>Redirecting you in <span id = "sec">3</span> seconds...</h1>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
		    // Handler for .ready() called.
		    window.setTimeout(function () {
		        location.href = "index.php";
		    }, 3000);
		});
		  var myTimer = 0;
    function reduceTime(){
    	var second = Number($('#sec').text());
    	var minute = Number($('#min').text());
    	if(second > 0){
    		$('#sec').text(second-1);
    	}else{
    		if(minute > 0){
	    		$('#min').text(minute-1);
	    		$('#sec').text("59");
    		}else{
    			$('#leaderboard').modal({
			    backdrop: 'static',
			    keyboard: false
			});
    			stopTimer();
    		}
    	}
    }
	
	</script>
</html>