<?php

// add a new blog post

if (isset($_POST['submit'])) {
	$success = true;
	$words = trim($_POST['words']);

	$date_timestamp = strtotime('today');
	if ($success) {
		$query = "INSERT INTO Blog (words, date_post) VALUES ";
		if ($stmt = $conn->prepare($query." (?, NOW())")) {
			$stmt->bind_param('s', $words);
			$stmt->execute();
			$postid = $stmt->insert_id;
			$stmt->close();
		}
		
		$conn->query($query);
	}
}

?>