<?php
$data = array(
    'name' => 'Agus',
    'phone' => '13123123',
    'gender' => 'male',
    'nationality' => 'AR'
);
$json = json_encode($data);
header ("Content-Type: application/json");
echo $json;