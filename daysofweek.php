<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the Week Activity</title>
    
</head>
<body>
    <div class="container mt-5">
        <h2>Days of the Week Activity</h2>
        <form method="POST">
            <button class="btn btn-primary" name="day" value="Monday">Monday</button>
            <button class="btn btn-primary" name="day" value="Tuesday">Tuesday</button>
            <button class="btn btn-primary" name="day" value="Wednesday">Wednesday</button>
            <button class="btn btn-primary" name="day" value="Thursday">Thursday</button>
            <button class="btn btn-primary" name="day" value="Friday">Friday</button>
        </form>

        <?php
        if (isset($_POST['day'])) {
            $day = $_POST['day'];
            echo "<h3 class='mt-4'> $day</h3>";
        }
        ?>
    </div>
</body>
</html>