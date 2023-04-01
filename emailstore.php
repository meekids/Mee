<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $igHandle = $_POST['igHandle'];

    // separate email and igHandle into separate lists
    $email_list = array($email);
    $igHandle_list = array($igHandle);

    // write the data to a file
    $file = fopen("emailstore.txt","a");
    fwrite($file, "$email, $igHandle\n");
    fclose($file);

    // display a success message
    echo "<p>Successfully submitted:</p>";
    echo "<ul>";
    echo "<li>Email: $email</li>";
    echo "<li>Instagram Handle: $igHandle</li>";
    echo "</ul>";
}
?>
