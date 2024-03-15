<?php
require_once(dirname(__DIR__).'/config/config.php');
require_once(dirname(__DIR__).'/config/db_config.php');
$conn = new mysqli(server,username,password,db);
if(isset($_REQUEST["text"])){
    $name = "answer";
$text = $_REQUEST["text"];
$id = $_REQUEST["id"];
$username = math_ai_init()["username"]; 
$sql = "INSERT INTO `queztions`(`id`, `username`, `time`, `q_type`, `for_id`, `title`, `text`,`active`) VALUES ('','".$username."','".time()."','answer','$id','".$name."','".$text."','ni')";
$conn->query($sql);
$conn->close();


}
