<?php

include '../clases/Env.php';

$env = Env::getEnvData();

echo '<pre>';
print_r($env);
echo '</pre>';