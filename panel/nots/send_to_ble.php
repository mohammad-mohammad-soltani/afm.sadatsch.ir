<?php 
require_once(dirname(__DIR__)."/config/db_config.php");
require_once(dirname(__DIR__)."/config/config.php");

$botToken = BLE_TOKEN;

$conn = new mysqli(server, username, password, db);

$username = $_REQUEST["username"];
$text = $_REQUEST["text"];
$sql = "SELECT * FROM users_db WHERE username = '".$username."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$chatID = $row["chat_id"];

$TEXT = "نام یادداشت : ".$_REQUEST["name"]."\n
...................................................................................................\n
متن یادداشت :$text
";
        $messageJSON = json_encode([
            'chat_id' => $chatID,
            'text' => $TEXT,
            
        ]);

        $url = "https://tapi.bale.ai/bot$botToken/sendMessage";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $messageJSON);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;

