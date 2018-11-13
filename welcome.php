if(time() - $_SESSION['loggedAt'] > 10000) { 
    echo"<script>alert('Your are logged out');</script>";
    unset($_SESSION['username'], $_SESSION['loggedAt']);
    header('Location:Login.php');
    exit;
} else {
    $_SESSION['loggedAt'] = time();
}