<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
    
</head>
<body>
    <div class="container mt-5">
        <h2>Arithmetic Operations</h2>
        <form method="POST">
            <input type="number" class="form-control mb-3" name="num1" placeholder="Enter First Number" required>
            <input type="number" class="form-control mb-3" name="num2" placeholder="Enter Second Number" required>
            <button type="submit" class="btn btn-primary" name="submit">Calculate</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo "<h4 class='mt-4'>Results:</h4>";
            echo "Sum: " . ($num1 + $num2) . "<br>";
            echo "Difference: " . ($num1 - $num2) . "<br>";
            echo "Product: " . ($num1 * $num2) . "<br>";
            echo "Quotient: " . ($num2 != 0 ? $num1 / $num2 : 'undefined') . "<br>";
        }
        ?>
    </div>
</body>
</html>