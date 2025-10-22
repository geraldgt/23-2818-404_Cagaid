<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning Tasks</title>
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
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        
        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5em;
        }
        
        .tasks-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .task-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 25px;
            border-radius: 15px;
            text-decoration: none;
            color: white;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .task-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.3);
        }
        
        .task-number {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
            opacity: 0.9;
        }
        
        .task-title {
            font-size: 1.2em;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 PHP Learning Tasks</h1>
        <div class="tasks-grid">
            <a href="task1.php" class="task-card">
                <div class="task-number">01</div>
                <div class="task-title">Introduce Yourself</div>
            </a>
            <a href="task2.php" class="task-card">
                <div class="task-number">02</div>
                <div class="task-title">Simple Math</div>
            </a>
            <a href="task3.php" class="task-card">
                <div class="task-number">03</div>
                <div class="task-title">Rectangle Area</div>
            </a>
            <a href="task4.php" class="task-card">
                <div class="task-number">04</div>
                <div class="task-title">Temp Converter</div>
            </a>
            <a href="task5.php" class="task-card">
                <div class="task-number">05</div>
                <div class="task-title">Swap Variables</div>
            </a>
            <a href="task6.php" class="task-card">
                <div class="task-number">06</div>
                <div class="task-title">Salary Calculator</div>
            </a>
            <a href="task7.php" class="task-card">
                <div class="task-number">07</div>
                <div class="task-title">BMI Calculator</div>
            </a>
            <a href="task8.php" class="task-card">
                <div class="task-number">08</div>
                <div class="task-title">String Tools</div>
            </a>
            <a href="task9.php" class="task-card">
                <div class="task-number">09</div>
                <div class="task-title">Bank Account</div>
            </a>
            <a href="task10.php" class="task-card">
                <div class="task-number">10</div>
                <div class="task-title">Grading System</div>
            </a>
            <a href="task11.php" class="task-card">
                <div class="task-number">11</div>
                <div class="task-title">Currency Converter</div>
            </a>
            <a href="task12.php" class="task-card">
                <div class="task-number">12</div>
                <div class="task-title">Travel Cost</div>
            </a>
        </div>
    </div>
</body>
</html>