<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .quiz-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 450px;
            max-width: 90%;
            text-align: left;
        }
        
        .quiz-title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .question {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        
        .options label {
            display: block;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
            margin-bottom: 8px;
            cursor: pointer;
        }
        
        .options label:hover {
            background-color: #f2f2f2;
        }
        
        input[type="radio"] {
            margin-right: 10px;
        }
        
        .correct-answer {
            background-color: #d6f5d6; /* Light green */
        }
        
        .incorrect-answer {
            background-color: #f8d7da; /* Light red */
        }
        
        .score {
            font-weight: bold;
            font-size: 18px;
            margin-top: 20px;
        }
        
        .correct-response {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
        <h2 class="quiz-title">Quiz Results</h2>
        <?php
        $questions = [
            'q1' => 'What is the capital of France?',
            'q2' => 'Which planet is known as the Red Planet?'
        ];

        $correctAnswers = [
            'q1' => 'a',
            'q2' => 'a'
        ];
        
        $score = 0;
        $incorrectQuestions = [];
        
        foreach ($questions as $questionKey => $questionText) {
            $userAnswer = isset($_POST[$questionKey]) ? $_POST[$questionKey] : '';
            $correctAnswer = $correctAnswers[$questionKey];
            
            $answerClass = $userAnswer === $correctAnswer ? 'correct-answer' : 'incorrect-answer';
            
            echo "<div class=\"question $answerClass\">";
            echo "<p>$questionText</p>";
            
            echo "<div class='options'>";
            for ($i = 'a'; $i <= 'c'; $i++) {
                echo "<label><input type='radio' disabled";
                if ($userAnswer === $i) {
                    echo " checked";
                }
                echo "> ";
                switch ($i) {
                    case 'a':
                        echo "Paris";
                        break;
                    case 'b':
                        echo "Rome";
                        break;
                    case 'c':
                        echo "London";
                        break;
                }
                echo "</label>";
            }
            echo "</div>";
            
            if ($userAnswer !== $correctAnswer) {
                $incorrectQuestions[$questionKey] = $correctAnswer;
            }
            
            echo "</div>";
        }
        
        echo "<p class=\"score\">Your Score: $score / " . count($questions) . "</p>";
        
        if (!empty($incorrectQuestions)) {
            echo "<div class='correct-response'>";
            echo "<h3>Correct Answers</h3>";
            foreach ($incorrectQuestions as $questionKey => $correctAnswer) {
                echo "<p><strong>Question: {$questions[$questionKey]}</strong><br>";
                echo "Correct Answer: ";
                
                switch ($correctAnswer) {
                    case 'a':
                        echo "Paris";
                        break;
                    case 'b':
                        echo "Rome";
                        break;
                    case 'c':
                        echo "London";
                        break;
                }
                
                echo "</p>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
