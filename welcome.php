<!DOCTYPE html>
<html>
<head>
    <title>Generated Report</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ict.css"> <!-- Reuse your CSS -->
</head>
<body>
    <h1>Generated Report</h1>
    <div>
        <?php
        // Check if form data is received
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve and sanitize form data
            $idnum = htmlspecialchars($_POST['idnum']);
            $fullname = htmlspecialchars($_POST['fullname']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : 'Not specified';
            $contact = htmlspecialchars($_POST['contact']);
            $email = htmlspecialchars($_POST['email']);
            $confirm = isset($_POST['confirm']) ? 'Yes' : 'No';

            // Generate the report
            echo "<h2>Report Details</h2>";
            echo "<pre>";
            echo "ID Number: $idnum\n";
            echo "Full Name: $fullname\n";
            echo "Birth Date: " . date('Y-m-d H:i', strtotime($birthday)) . "\n";
            echo "Gender: $gender\n";
            echo "Contact: $contact\n";
            echo "Email: $email\n";
            echo "Confirmed: $confirm\n";
            echo "Generated On: " . date('Y-m-d H:i:s') . "\n";
            echo "</pre>";
        } else {
            echo "<p>No data submitted. Please use the form.</p>";
        }
        ?>
    </div>
    <a href="index.html">Back to Form</a> <!-- Adjust filename as needed -->
</body>
</html>
