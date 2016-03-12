<?php

require_once 'logger.class.php';

// new instance
$obj = new Log();

// write to file
$obj->Write("log.txt", "roger nkosi");

//print out contents
echo "<pre>";

//echo $obj->Read("log.txt");
