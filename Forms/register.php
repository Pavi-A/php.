<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
   
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $num=$_POST['num'];
    $role=$_POST['role'];
    $interview=$_POST['interview'];
    $location=$_POST['location'];



    
    echo "<html>";
    echo "<head>";
    echo "<style>";
    echo "body {";
    echo "    font-family: Arial, sans-serif;";
    echo "    background-pink ";
    echo   "margin-top:40px";
    echo "}";
    echo "h2 {";
    echo "    color: #007bff;";
    echo "}";
    echo ".output-container {";
    echo "    background-color: #f7f7f7;";
    echo "    border: 1px solid #ccc;";
    echo "    border-radius: 5px;";
    echo "    padding: 20px;";
    echo "    width: 300px;";
    echo "    margin: 0 auto;";
    echo   "margin-top:60px";
    echo "}";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<div class='output-container'>";
    
    echo "<h2>Registration Details</h2>";
    echo "Name: " . $name . "<br><br>";
    echo "Email: " . $mail . "<br><br>";
    echo "Password: " . $password . "<br><br>";
    echo "DOB: " . $dob . "<br><br>";
    echo "Mobile Number: " . $num . "<br><br>";
    echo "Job Role: " . $role . "<br><br>";
    echo "Interview Date: " . $interview . "<br><br>";
    echo "Preferred Location: " . $location . "<br><br>";
    
    echo "</div>";
    echo "</body>";
    echo "</html>";
}
    

?>