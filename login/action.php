<?php

include("flag.php");

print_r($_POST["passwd"]);

if (isset($_POST["passwd"])) {
        if (hash("md5", $_POST["passwd"]) == "0e514198428367523082236389979035")        {
                echo $flag;
        } 
         else {
			header('Location: http://35.237.220.198/ctf/login');
		}
} else {
	header('Location: http://35.237.220.198/ctf/login');
}