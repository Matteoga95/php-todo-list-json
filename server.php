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


//cerco di recuperare il dato dalla scrittura axios
// echo json_encode([$_POST['newTask']]);

//se la variabile che mi passo con il post non è vuota la aggiungo all'array 
if (empty($_POST['newTask']) == false) {
    array_push($tasks, $_POST['newTask']);
    //scrivo il dato con un file_put_content dentro json?


    file_put_contents('tasks.json', json_encode($tasks));
    echo json_encode($tasks);
}