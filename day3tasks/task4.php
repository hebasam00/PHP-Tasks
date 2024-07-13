<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>To-Do List</h2>

    <h3>Add a New Task</h3>
    <form action="index.php" method="post">
        <input type="text" name="task" placeholder="Enter task description" required>
        <button type="submit">Add Task</button>
    </form>

    <h3>Current Tasks</h3>
    <ul>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $task = $_POST['task'];

            if (!empty($task)) {
                $tasks = file_get_contents('tasks.json');
                $tasksArray = json_decode($tasks, true);
                
                $tasksArray[] = $task;
                
                file_put_contents('tasks.json', json_encode($tasksArray));
            }
        }

        $tasks = file_get_contents('tasks.json');
        $tasksArray = json_decode($tasks, true);

        if (!empty($tasksArray)) {
            foreach ($tasksArray as $task) {
                echo "<li>$task <a href='delete_task.php?task=$task'>[Delete]</a></li>";
            }
        } else {
            echo "<li>No tasks found.</li>";
        }
        ?>
    </ul>
</body>
</html>
