<?php
$q=$_POST['txt1'];
$url="https://api.vk.com/method/audio.search?".$q."&access_token=a07e8b9b7002976d310532c2412ce8729802254b676a6bcabd10d7a67050978b3fa822aa7d09556931526&expires_in=86400&user_id=395427483&performer_only=0&count=400";
$json = file_get_contents($url,true);

$obj = json_decode($json,true);

/*foreach($obj['response'] as $item) {
        echo $item['title'];
		echo "<br>";
		
		
    }
*/
//$obj = preg_replace('/.+?({.+}).+/', "$1", $obj);
//$obj = preg_replace('/\{\"response\"\:\[([0-9]{1,20})\]\}/', '{"response":[]}', $obj);
print_r($obj);
?>