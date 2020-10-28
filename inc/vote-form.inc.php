<?php
	include 'dbh.inc.php';
	
	if(isset($_POST['voteBtn'])){

		$today = date("j, n, Y");
		$ip =  $_SERVER['REMOTE_ADDR'];

		$isSetIp = false;
		
		$ipcheck = "SELECT * FROM votes WHERE user_ip=?";
		$ipcheckstmt = $conn->prepare($ipcheck);
		$ipcheckstmt->execute([$ip]);
		$iprow = $ipcheckstmt->fetch();

		if(! $iprow) {
			$in = "INSERT INTO votes(user_ip, vote_date) VALUES (?, ?)";
			$prep = $conn->prepare($in);
			$prep->execute([$ip, $today]);
		}
		else {
			$isSetIp = true;
		}
		

		$sql = "SELECT vote_id FROM votes ORDER BY vote_id DESC";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		$voteNum = $result[0]['vote_id']; 
		
	}

?>

<script>
	var voteNum = "<?php echo $voteNum; ?>";
	$(".num-votes").html(voteNum);

	var isSetIp = "<?php echo $isSetIp; ?>";
	if(isSetIp == true) {
		$(".notification-box").html("<p style='padding: 10px 20px;'>You've already voted.</p>");
		setTimeout(function() {
			$(".notification-box").css("opacity", "0");
			$(".notification-box").css("cursor", "default");
		}, 2000)
	}
	else {
		$(".voted").addClass("animateVoted");
	}
</script>