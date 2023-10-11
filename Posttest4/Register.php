
<?php
session_start();

if($_POST['Password'] == $_POST['Password']){


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $noHp = $_POST["Telephone"];
    
        $_SESSION['Email'] = $email;
        $_SESSION['Password'] = $password;
        $_SESSION['Telephone'] = $noHp;
        
    }
    
    header('location:./Register.html');
}

?>