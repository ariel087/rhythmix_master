<?php
include('./PHP/db_connection.php');
session_start();
$userLrn = $_SESSION['user_lrn'];

    $sqlRead = "SELECT * FROM `stage1_level1` WHERE `LRN` = ?";
    $stmtRead = $connection->prepare($sqlRead);
    $stmtRead->bind_param("s", $userLrn);
    $stmtRead->execute();
    $resultRead = $stmtRead->get_result();
    $data = $resultRead->fetch_assoc();
    $parts = $data['PART1'] + $data['PART2'] + $data['PART3'] +$data['PART4'];

    $sqlRead1 = "SELECT * FROM `stage1_level2` WHERE `LRN` = ?";
    $stmtRead1 = $connection->prepare($sqlRead1);
    $stmtRead1->bind_param("s", $userLrn);
    $stmtRead1->execute();
    $resultRead1 = $stmtRead1->get_result();
    $data1 = $resultRead1->fetch_assoc();
    $parts1 = $data1['PART1'] + $data1['PART2'] + $data1['PART3'] +$data1['PART4'];

    $sqlRead2 = "SELECT * FROM `stage1_level3` WHERE `LRN` = ?";
    $stmtRead2 = $connection->prepare($sqlRead2);
    $stmtRead2->bind_param("s", $userLrn);
    $stmtRead2->execute();
    $resultRead2 = $stmtRead2->get_result();
    $data2 = $resultRead2->fetch_assoc();
    $parts2 = $data2['PART1'] + $data2['PART2'] + $data2['PART3'] +$data2['PART4'];

    $sqlRead3 = "SELECT * FROM `stage1_level4` WHERE `LRN` = ?";
    $stmtRead3 = $connection->prepare($sqlRead3);
    $stmtRead3->bind_param("s", $userLrn);
    $stmtRead3->execute();
    $resultRead3 = $stmtRead3->get_result();
    $data3 = $resultRead3->fetch_assoc();
    $parts3 = $data3['PART1'] + $data3['PART2'] + $data3['PART3'] +$data3['PART4'];

    $total_score = $parts + $parts1 + $parts2 + $parts3;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RHYTHMIX MASTER</title>
    <link rel="stylesheet" href="./stages.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="hero">
        <div class="stage_title">
            <h2>STAGE 1 - Result</h2>
        </div>
        
        <div class="stage_container">
            <style>
                .stage-container {
                    background: white;
                    border-radius: 8px;
                    padding: 20px;
                    margin-bottom: 20px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }

                .stage-title {
                    font-size: 24px;
                    margin-bottom: 20px;
                    color: #333;
                }

                .part-container {
                    margin-bottom: 25px;
                }

                .part-title {
                    font-size: 18px;
                    margin-bottom: 15px;
                    color: #444;
                }

                .poll-item {
                    margin-bottom: 15px;
                }

                .poll-header {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 5px;
                    font-size: 14px;
                    color: #666;
                }

                .progress-bar {
                    width: 100%;
                    background-color: #eee;
                    border-radius: 10px;
                    overflow: hidden;
                }

                .progress {
                    height: 10px;
                    background: linear-gradient(45deg, #2196F3, #1976D2);
                    transition: width 0.3s ease;
                    border-radius: 10px;
                }
                .result_container{
                    width: 100%;
                    height: 20%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    margin-top: 10%;
                }
                
            </style>

            <?php
// Assuming total_score is already calculated in your PHP code
$maximum_score = 16; // Adjust this based on your system
$percentage = ($total_score / $maximum_score) * 100;

// Full circumference of the circle
$circumference = 2 * pi() * 135; // 135 is the radius from the SVG
$filled_dash = ($percentage / 100) * $circumference;
$remaining_dash = $circumference - $filled_dash;
?>
<div class="result_container">

    <svg width="250" height="250" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
        <!-- Background circle -->
        <circle cx="150" cy="150" r="135" fill="none" stroke="#f0f0f0" stroke-width="28"/>
        
        <!-- Donut chart (dynamic fill based on score) -->
        <circle cx="150" cy="150" r="135" fill="none" stroke="#4285F4" stroke-width="28"
        stroke-dasharray="<?php echo $filled_dash; ?> <?php echo $remaining_dash; ?>" 
        stroke-dashoffset="0"/>
        
        <!-- Optional: center hole -->
        <circle cx="150" cy="150" r="105" fill="white"/>
        
        <!-- Text labels -->
        <text x="150" y="140" text-anchor="middle" font-family="Arial, sans-serif" font-size="36" font-weight="bold">
            <?php echo $total_score; ?>/<?php echo $maximum_score; ?>
        </text>
        <text x="150" y="175" text-anchor="middle" font-family="Arial, sans-serif" font-size="24" fill="#666">
            <?php echo round($percentage, 2); ?>%
        </text>
    </svg>
</div>
    <div id="pollContainer"></div>
    
            <script>
                const pollData = {
                    '': {
                        'Level 1': [
                            { label: '2/4 Rhythmic Pattern', correct: <?php echo $parts?> },
                            { label: '3/4 Rhythmic Pattern', correct: <?php echo $parts1?> },
                            { label: '4/4 Rhythmic Pattern', correct: <?php echo $parts2?> },
                            { label: '6/8 Rhythmic Pattern', correct: <?php echo $parts3?> },
                        ]
                    }
                };

                function calculatePercentage(correctAnswers) {
                    return (correctAnswers / 4) * 100;
                }

                function createPollItem(item) {
                    const percentage = calculatePercentage(item.correct);
                    return `
                        <div class="poll-item">
                            <div class="poll-header">
                                <span>${item.label}</span>
                                <span>${percentage}% (${item.correct} correct answers)</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: ${percentage}%"></div>
                            </div>
                        </div>
                    `;
                }

                function renderPolls() {
                    const container = document.getElementById('pollContainer');
                    let html = '';

                    for (const [stage, parts] of Object.entries(pollData)) {
                        html += `
                            <div class="stage-container">
                                <h2 class="stage-title">${stage}</h2>
                        `;

                        for (const [part, options] of Object.entries(parts)) {
                            html += `
                                <div class="part-container">
                                    <h3 class="part-title">${part}</h3>
                                    ${options.map(createPollItem).join('')}
                                </div>
                            `;
                        }

                        html += '</div>';
                    }

                    container.innerHTML = html;
                }

                // Initial render
                renderPolls();
            </script>

        </div>
    </div>
    <?php
    include("./assets/__settings.php");
    ?>
</body>

</html>
