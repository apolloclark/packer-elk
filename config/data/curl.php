<?php 

    // run shell_exec()
    $output = shell_exec('curl example.com');
    print($output);
    
    // run exec()
    $output = array();
    $return_var = -1;
    exec ("curl example.com", $output, $return_var);
    print_r($output);
    print_r($return_var);
    exit();
    
    // create curl resource 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "example.com");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    print($output);
    curl_close($ch);      
?>