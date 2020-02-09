<?php
        //======================REQUIRED INFORMATION ============================

    	$username = "Enter your username";
    	$password = "Enter your password";
    	$destnum = "Enter your destnum";
        $source_address = "Enter your sourceadd";
        $message = "Enter message";

        //===================== END OF OPTIONAL REQUIREMENT ===========================

        //===============================DO NOT EDIT ANYTHING BELOW ===================

        $destnum = urlencode($destnum);
        $message = urlencode($message);

        $posturl = "http://api.blsmsgw.com:8080/bin/send?USERNAME=".$username."&PASSWORD=".$password."&DESTADDR=".$destnum."&SOURCEADDR=".$source_address."&MESSAGE=".$message;
echo $posturl;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $posturl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 500); //tim

        $response = curl_exec($ch);

        echo $response;
?>