<?php
/*
    session_start();

    if(!isset($_SESSION['login'])){
        header('Location:index.html');
        die();
    }

    $username = $_SESSION["username"];
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tracker</title>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>

</head>
<body>
<div class="row main-wrapper">
    <div class="col-3 section"></div>
    <div class="col-6 section form">
        <form>
            <button type="submit" id="start-tracking" class="btn btn-primary">Start tracking</button>
        </form>
    </div>
    <div class="col-3 section console"></div>
</div>
<script>

    // Call API/sender.php every 5 seconds
    const btn = document.querySelector('button');

    function sendData(data) {

        console.log('Sending data');

        const XHR = new XMLHttpRequest();

        const urlEncodedDataPairs = [];

        // Turn the data object into an array of URL-encoded key/value pairs.
        for (const [name, value] of Object.entries(data)) {
            urlEncodedDataPairs.push(`${encodeURIComponent(name)}=${encodeURIComponent(value)}`);
        }

        // Combine the pairs into a single string and replace all %-encoded spaces to
        // the '+' character; matches the behavior of browser form submissions.
        const urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');

        // Define what happens on successful data submission
        XHR.addEventListener('load', (event) => {
            alert('Yeah! Data sent and response loaded.');
        });

        // Define what happens in case of error
        XHR.addEventListener('error', (event) => {
            alert('Oops! Something went wrong.');
        });

        // Set up our request
        XHR.open('POST', 'http://localhost/API/sender.php');

        // Add the required HTTP header for form data POST requests
        XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Add tracking information

        // Finally, send our data.
        XHR.send(urlEncodedData);
    }

    btn.addEventListener('click', () => {
        sendData({ test: 'ok' });
    })



</script>
</body>
</html>