<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Simple Calculator</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="num1" class="form-label">First Number:</label>
                                <input type="number" class="form-control" id="num1" name="num1" required>
                            </div>
                            <div class="mb-3">
                                <label for="num2" class="form-label">Second Number:</label>
                                <input type="number" class="form-control" id="num2" name="num2" required>
                            </div>
                            <div class="mb-3">
                                <label for="operation" class="form-label">Operation:</label>
                                <select class="form-select" id="operation" name="operation" required>
                                    <option value="add">Addition (+)</option>
                                    <option value="subtract">Subtraction (-)</option>
                                    <option value="multiply">Multiplication (*)</option>
                                    <option value="divide">Division (/)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Calculate</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $num1 = $_POST["num1"];
                            $num2 = $_POST["num2"];
                            $operation = $_POST["operation"];
                            $result = 0;

                            switch ($operation) {
                                case "add":
                                    $result = $num1 + $num2;
                                    $symbol = "+";
                                    break;
                                case "subtract":
                                    $result = $num1 - $num2;
                                    $symbol = "-";
                                    break;
                                case "multiply":
                                    $result = $num1 * $num2;
                                    $symbol = "*";
                                    break;
                                case "divide":
                                    if ($num2 != 0) {
                                        $result = $num1 / $num2;
                                        $symbol = "/";
                                    } else {
                                        echo '<div class="alert alert-danger mt-3">Cannot divide by zero!</div>';
                                        break;
                                    }
                                    break;
                            }

                            if ($num2 != 0 || $operation != "divide") {
                                echo '<div class="alert alert-success mt-3">';
                                echo "Result: $num1 $symbol $num2 = $result";
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
