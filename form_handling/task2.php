<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 - Simple Math</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        
        .back-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        
        .back-link:hover {
            transform: translateX(-5px);
        }
        
        h1 {
            color: #667eea;
            margin-bottom: 30px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        
        label {
            font-weight: 600;
            color: #333;
        }
        
        input[type="text"] {
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #667eea;
        }
        
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .result {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php" class="back-link">← Back to Tasks</a>
        <h1>Task 2: Simple Math</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="number_1">a:</label>
                <input type="text" id="number_1" name="number_1" required>
            </div>
            
            <div class="form-group">
                <label for="number_2">b:</label>
                <input type="text" id="number_2" name="number_2" required>
            </div>
            
            <button type="submit">Calculate</button>
        </form>
        
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $a = $_POST["number_1"];
                $b = $_POST["number_2"];
                $sum = $a + $b;
                $difference = $a - $b;
                $product = ($a * $b);
                $quotient = $a / $b;
                echo "<p>The sum of $a and $b is: $sum. the difference is $difference. The product is $product. and the quotient is $quotient</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>