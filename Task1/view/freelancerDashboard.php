<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
uire_once("../controller/authCheck.php");
checkLoggedIn();
?>

<html>
<head>
    
</head>
<body>
<P>Freelancer</P>
</body>
</html>
