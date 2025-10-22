<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 10 - Simple Grading System</title>
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
        <h1>Task 10: Simple Grading System</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="math">Math Score:</label>
                <input type="text" id="math" name="math" required>
            </div>
            
            <div class="form-group">
                <label for="english">English Score:</label>
                <input type="text" id="english" name="english" required>
            </div>
            
            <div class="form-group">
                <label for="science">Science Score:</label>
                <input type="text" id="science" name="science" required>
            </div>
            
            <button type="submit">Calculate Grade</button>
        </form>
        
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $mathscore = $_POST["math"];
                $englishscore = $_POST["english"];
                $sciencescore = $_POST["science"];
                $average = ($mathscore + $englishscore + $sciencescore) / 3;
                if ($average >= 90) {
                    echo "your average is $average. you get a grade of A";
                } elseif ($average >= 80) {
                    echo "your average is $average. you get a grade of B";
                } elseif ($average >= 70) {
                    echo "your average is $average. you get a grade of C";
                } elseif ($average >= 60) {
                    echo "your average is $average. you get a grade of F";
                } else {
                    echo "your average is $average. you get a grade of A";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>