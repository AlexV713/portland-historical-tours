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
            <h2>Book a Reservation</h2>
            <h5>Required fileds are marked with an asterisk (*).</h5>
            <form action="http://webdevbasics.net/scripts/demo.php" method="post">
                <label for="choosetour">* Choose a tour:</label>
                <select size="3" name="choosetour" id="choosetour" required>
                    <option value="albina">Albina Tour $80</option>
                    <option value="downtown">Downtown Tour $50</option>
                    <option value="landmarks">Landmarks Tour $110</option>
                </select>
                <label for="first">* First name:</label>
                <input type="text" name="myFname" id="first" required>
                <label for="last">* Last name:</label>
                <input type="text" name="myLName" id="last" required>
                <label for="email">Email address:</label>
                <input type="email" name="myEmail" id="email">
                <label for="phone">* Phone number</label>
                <input type="tel" name="myPhone" id="phone" required>
                <label for="arrival">Tour date:</label>
                <input type="date" id="arrival" required>
                <label for="participants">* Total participants:</label>
                <input type="number" min="1" max="20" id="participants" required>
                <label for="comments">Does anyone in your party have food or drink sensitivities? If so, what are they?:</label>
                <textarea name="myComments" rows="7" cols="20" id="comments"></textarea>
                <input type="submit" id="mySubmit" value="Submit">
            </form>
            <h3>General Information</h3>
            <p>The tours leave daily on the hour between the hours of 9:00 AM and 3:00 PM. The last tour leaves at 3:00 PM.<br><br>We accept cash, credit card. VISA and MasterCard but no American Express. <strong>No payment accepted online.<br><br>We offer online
                reservations. Pay in person when you show up for the tour. Arrive 30 minutes in advance to pay.</strong></p>
        </main>
        <?php include 'includes/footer.html.php'?>
    </div>
</body>

</html>
