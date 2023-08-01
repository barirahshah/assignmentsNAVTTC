<!DOCTYPE html>
<html>
<head>
    <title>Change Text on Button Click</title>
    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Change Text on Button Click</h1>
    <button id="changeButton">Click Me</button>
    <p id="message">Original Text</p>

    <script>
        // jQuery code to change the text on button click
        $(document).ready(function() {
            $("#changeButton").click(function() {
                // Define the predefined message
                var newMessage = "Hello, I am Barirah!";

                // Set the text of the paragraph to the new message
                $("#message").text(newMessage);
            });
        });
    </script>
</body>
</html>
