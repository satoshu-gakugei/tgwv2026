<?php

session_start();

$data=
json_decode(
file_get_contents(
"php://input"
),
true
);

$password=
$data[
"password"
]
?? "";

$correct=
"Shirushi";

if(
$password
===
$correct
){

$_SESSION[
"allow_video"
]
=
true;

echo json_encode([
"ok"=>true
]);

}else{

echo json_encode([
"ok"=>false
]);

}
