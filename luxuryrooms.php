<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maid Availability Check</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #availability-result {
            margin-top: 20px;
            font-weight: bold;
        }

        #datetime-picker {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Maid Availability Check</h1>

    <div id="datetime-picker">
        <label for="datetime">Select Date and Time:</label>
        <input type="datetime-local" id="datetime" required>
        <button onclick="checkAvailability()">Check Availability</button>
    </div>

    <div id="availability-result"></div>

    <script>
        function checkAvailability() {
            var selectedDateTime = new Date(document.getElementById("datetime").value);
            
            // Replace this with actual logic to check maid availability based on the selected date and time
            var isAvailable = isMaidAvailable(selectedDateTime);

            var resultElement = document.getElementById("availability-result");
            resultElement.innerHTML = isAvailable ? "Maid is available for hire!" : "Maid is not available at the selected time.";
        }

        // Replace this function with actual logic to determine maid availability
        function isMaidAvailable(selectedDateTime) {
            // For demonstration, let's assume the maid is available if the selected time is during business hours
            var businessHoursStart = 9; // 9 AM
            var businessHoursEnd = 17; // 5 PM

            var selectedHour = selectedDateTime.getHours();

            return selectedHour >= businessHoursStart && selectedHour < businessHoursEnd;
        }
    </script>

</body>
</html>
