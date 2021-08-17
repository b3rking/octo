<?php

$data = [
    "name" => "b3rking",
    "app" => "octo",
    "message" => "first test ok!"
];

function index($data) {
    return json_encode($data);
}

echo index($data);