<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Restriction</title>
</head>
<body>
<label for="from-date">From Date:</label>
  <input type="date" id="from-date" required>
  <br>
  <label for="to-date">To Date:</label>
  <input type="date" id="to-date" required>

</body>
<style>
     body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
</style>
<script>
    var currentDate = new Date().toISOString().split("T")[0];

// Set the minimum date for the "From Date" input field
document.getElementById("from-date").min = currentDate;
document.getElementById("to-date").min = currentDate;
</script>
</html>