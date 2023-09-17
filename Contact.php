<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $comment = $_POST["comment"];

        // Check if all required fields are set
        if (!empty($name) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($comment)) {
            // Generate a unique filename based on timestamp
            $filename = "form_data_" . date("Y-m-d_H-i-s") . ".txt";

            // Write the form data to the file
            $fileContent = "Name: $name\nLast Name: $lastname\nEmail: $email\nPhone: $phone\nComment: $comment\n";
            file_put_contents($filename, $fileContent);

            echo "Form data saved successfully. <a href='$filename' download>Download</a>";
        } else {
            echo "All fields are required.";
        }
    }
?>
