<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Faker Name</title>
    <script>
        function fetchName() {
            fetch('generate_name.php')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('name').innerText = data.name;
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
</head>
<body>
    <h1>Generate Random Name</h1>
    <button onclick="fetchName()">Generate New Name</button>
    <p id="name">Click the button to generate a new name.</p>
    <br>
    <a href="form.php">Generate PDF</a>
</body>
</html>
