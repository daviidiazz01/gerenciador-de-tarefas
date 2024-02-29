<?php
session_start()
    if()

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https: //fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de tarefas- DD</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador de tarefas</h1>
        </div>
        <div class="form">
            <form action="" method="get">
           <label for="task_name">Tarefa:</label>
            <input type="text" name="task_name" placeholder="Digite a tarefa">
            </form>
            <button type="submit">Cadastrar tarefa</button>
        </div>
        <div class="separator">
        </div>
        <div class="list_tasks">
            <ul>
                <li>Tarefa 1</li>
                <li>Tarefa 2</li>
                <li>Tarefa 3</li>
            </ul>
        </div>
        <div class="footer">
            <p>Desenvolvido por @davidiaz</p>
        </div>
       

    </div>
</body>

</html>