<?php

// var_dump($_POST['task']);

// var_dump($tasks);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    body {
        background-color: #001632;
    }
    </style>
</head>

<body>
    <div id="app">
        <div class="container d-flex flex-column align-items-center">
            <h1 class="text-center text-secondary my-4">Todo List</h1>
            <div class="col-4  ">

                <ul class="list-group list-group-flush bg-light rounded-1 py-2 my-4">
                    <li class=" py-2 list-group-item" v-for="task in tasks">{{task}}</li>
                </ul>


                <div>
                    <div class=" d-flex ">
                        <input type="text" v-model="newTask" name="task" id="task" class="form-control rounded-1  "
                            placeholder="Add a new task" aria-describedby="taskHelper">

                        <button @click="writeTask"
                            class="p-3 btn btn-prymary text-warning bg-dark border border-warning">Inserisci</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./app.js"></script>
</body>

</html>