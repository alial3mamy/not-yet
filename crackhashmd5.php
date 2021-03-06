#!/usr/bin/php

<?php

$file_name   = "$argv[4]";
$target_hash = "$argv[2]";
$words = file("$file_name");
$soa = count($words);


for($i=0; $i< $soa ; $i++){
    
    $word = str_replace("\n", "", $words[$i]);

    if(md5($word) === $target_hash){
        echo "The password is: " . $word;
        exit;
    }elseif($i == $soa-1){
            echo " Sorry (⌣_⌣”) ==> The password is not in the word list.";
    }

}

?>
