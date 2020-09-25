<?php

$hit_count = @file_get_contents('count-ACdata.txt');
$hit_count++;
@file_put_contents('count-ACdata.txt', $hit_count);

header('Location: 20_Datasets_Crossvalidation_sets.zip'); // redirect to the real file to be downloaded

?>
