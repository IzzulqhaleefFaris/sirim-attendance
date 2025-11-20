<?php
// Start the session
session_start();

// Include database connection if you need to record logout time (optional)
// include 'config.php';

// Optional: if you track login/logout times in a table, update here
/*
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $logoutTime = date('Y-m-d H:i:s');
    $sql = "UPDATE useraccess SET tarikhKeluar = '$logoutTime' WHERE userId = '$userId' AND tarikhKeluar IS NULL";
    mysqli_query($conn, $sql);
}
*/

// Clear all session variables
$_SESSION = [];

// Destroy the session cookie if exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destroy session completely
session_destroy();

// Redirect to login page (index.php at root)
header('Location: /attendance/index.php');
exit;
?>
