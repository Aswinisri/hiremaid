<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Maid Availability Checker</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    text-align: center;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin: 10px 0 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

#result {
    margin-top: 20px;
}

      </style>
</head>
<body>
<div class="container">

        <label for="date">Date:</label>
        <input type="date" id="date">

        <label for="time">Time:</label>
        <input type="time" id="time">

        <button onclick="checkAvailability()">Check Availability</button>

        <div id="result"></div>
    </div>

    <script>
    function checkAvailability() {
    
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const resultContainer = document.getElementById('result');

    // You can implement your logic to check availability here
    // For demonstration purposes, let's assume the maid is available if the time is after 9 AM and before 5 PM.
    const available = isAvailableTime(time);

    resultContainer.innerHTML = `${available ? 'available' : 'not available'} on ${date} at ${time}.`;
}

function isAvailableTime(time) {
    const startTime = '09:00';
    const endTime = '17:00';
    return time >= startTime && time <= endTime;
}

    </script>
</body>
</html>
