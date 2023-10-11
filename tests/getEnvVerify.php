<?php

$env = parse_ini_file('../.env');
$server = $env["DB_SERVER"];

echo $server;