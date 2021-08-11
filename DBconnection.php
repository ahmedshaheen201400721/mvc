<?php
// $file=require("./env.php");


var_export(
    parse_ini_file('./env.php',true)['servername']
);
