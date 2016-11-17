<?php
$j=$_GET['https://api.vk.com/method/audio.search?q=hardwell&access_token=a07e8b9b7002976d310532c2412ce8729802254b676a6bcabd10d7a67050978b3fa822aa7d09556931526&expires_in=0&user_id=395427483'];

$yummy = json_decode($j, true);

echo $yummy['artist']; 
?>