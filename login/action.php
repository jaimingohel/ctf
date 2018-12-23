<?php

include("flag.php");

if (isset($_POST["passwd"])) {
        if (hash("md5", $_POST["passwd"]) == "0e514198428367523082236389979035")        {
                echo $flag;
        } 
} else {
	// Location('header: /ctf/login');
	header('Location: /ctf/login');
}