

<?php
  
    $myfile = fopen($argv[1], "r") or die("Unable to open file!");
    $text_array = preg_split("/[\s,]+/",fread($myfile,filesize($argv[1])));
    $count = array_count_values($text_array);
    $number_count = array();
    foreach ($count as $key=>$value){
        if($value >= 3){
            array_push($number_count,$key);
        }
    }
    $output = implode(',',$number_count);
    echo 'Các chuỗi lặp lại hơn 3 lần:'.$output;
    echo "\n";
?>
