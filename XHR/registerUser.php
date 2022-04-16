<?php

$stmt = $dbconn->prepare("SELECT * FROM user WHERE Email = ?");
$stmt->bind_param("si", $_POST['Email']);
$stmt->execute();
//fetching result would go here, but will be covered later
$stmt->close();