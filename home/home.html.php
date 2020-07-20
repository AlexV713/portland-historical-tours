<!DOCTYPE html>

<html lang="en">

<head>
    <title>Portland Historical Tours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/grid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/header.html.php'?>
        <?php include 'includes/navigation.html.php'?>
        <main>
            <?php foreach ($contents as $content): ?>
            <h2>
                <?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?>
            </h2>
            <div class="section-group">
                <div class="col span_1_of_3 col span_1_of_2">
                    <h4>Albina</h4>
                    <a href="albina.php">
                    <img src="<?php echo $link; ?>ablina_tour_small.png" class="albina_small" alt="albina">
                    </a>
                </div>
                <div class="col span_1_of_3 col span_1_of_2">
                    <h4>Downtown</h4>
                    <a href="downtown.php">
                    <img src="<?php echo $link; ?>downtown_tour_small.png" class="downtown_small" alt="downtown">
                    </a>
                </div>
                <div class="col span_1_of_3 col span_1_of_2">
                    <h4>Landmarks</h4>
                    <a href="landmarks.php">
                    <img src="<?php echo $link; ?>landmarks_tour_small.png" class="downtown_small" alt="landmarks">
                    </a>
                </div>
            </div>
            <div class="botton">
                <a href="reserve.php">
                    <img src="<?php echo $link; ?>button.jpg" alt="sign">
                </a>
            </div>
            <?php echo $content['description']; ?>
            <?php echo $content['comments']; ?>
            <?php endforeach; ?>
        </main>
        <?php include 'includes/footer.html.php'?>
    </div>
</body>

</html>
