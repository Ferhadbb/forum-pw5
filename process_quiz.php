<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #333;
        }
        pre {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 15px;
            overflow-x: auto;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Quiz Results</h1>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Submitted Data:</h2>
        <pre><?php print_r($_POST); ?></pre>
        
        <p><a href="index.html">← Back to Quiz</a></p>
    <?php else: ?>
        <p>No data submitted.</p>
        <p><a href="index.html">Go to Quiz</a></p>
    <?php endif; ?>
</body>
</html>
