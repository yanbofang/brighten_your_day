<?php

include_once "global.php";

// add a new blog post

if (isset($_POST['submit'])) {
	$success = true;
	$words = trim($_POST['words']);
	$title = $_POST['title'];

	if ($success) {
		$query = "INSERT INTO Blog (words, date_post, title, mood) VALUES ";
		if ($stmt = $conn->prepare($query." (?, NOW(), ?, ".'happy'.")")) {
			$stmt->bind_param('ss', $words, $title);
			$stmt->execute();
			$postid = $stmt->insert_id;
			$stmt->close();
		}
	}
}

?>