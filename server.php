<?php

//prendo il file json
$json_string= file_get_contents('todo-list.json');

//lo leggo
$lists = json_decode($json_string, true);

//trasformo l array di array in un file json
header('Content-Type: application/json');

//lo stampo
echo json_encode($lists);
?>