<?php
        //======================REQUIRED INFORMATION ============================

    	$username = "Enter your username";
    	$password = "Enter your password";
    	$destnum = "Enter your destnum";
        $source_address = "Enter your sourceadd";
        $message = "Enter message";

        //===================== END OF REQUIRED INFORMATION ===========================

        //===============================DO NOT EDIT ANYTHING BELOW ===================

        $destnum = urlencode($destnum);
        $message = urlencode($message);

        $posturl = "https://api.blsmsgw.com:8443/bin/send?USERNAME=".$username."&PASSWORD=".$password."&DESTADDR=".$destnum."&SOURCEADDR=".$source_address."&MESSAGE=".$message;
       // echo $posturl;
       // Setup cURL
        $ch = curl_init();              //passing the $Url variable here was unnecessary
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        curl_setopt($ch, CURLOPT_URL, $posturl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 500); //tim

        $response = curl_exec($ch);
        /* echo $response;
                1. dumping results before verying positivity is illogical - ref ln:35
                2. there is no need to dump the result twice - ref ln:39
        */
        if($response === FALSE){
            echo $response;
            die(curl_error($ch));
        }
        var_dump($response);
?>
