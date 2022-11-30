<?php

// $tasks = [
//     "HTML",
//     "CSS",
//     "Responsive Design",
//     "Javascript",
//     "PHP",
//     "Laravel"
// ];

$tasks_string = file_get_contents('tasks.json');

$tasks = json_decode($tasks_string);

header('Content-Type: application/json');
echo json_encode($tasks);