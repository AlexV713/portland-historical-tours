<!DOCTYPE html>

<html lang="en">

<head>
    <title>Portland Historical Tours</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
    <div id="wrapper">
        <?php include 'includes/header.html.php'?>
        <?php include 'includes/navigation.html.php'?>
        <main>
            <h2>Contact us</h2>
            <form action="http://webdevbasics.net/scripts/demo.php" method="post">
                <label for="name">Name:</label>
                <input type="text" name="myName" id="name" required>
                <label for="email">Email address:</label>
                <input type="email" name="myEmail" id="email" required>
                <label for="comments">Subject:</label>
                <textarea name="subject" rows="1" cols="20" id="subject" required></textarea>
                <label for="comments">Message:</label>
                <textarea name="myComments" rows="10" cols="20" id="comments" required></textarea>
                <input type="submit" id="mySubmit" value="Submit">
            </form>
        </main>
        <?php include 'includes/footer.html.php'?>
    </div>
</body>

</html>
