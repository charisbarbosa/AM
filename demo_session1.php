 <?php
// Start the session
// demo tested
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["user"] = "super_admin";
$_SESSION["timeout"] = time();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "This is demo_sesion1.php";
echo "<br>";
echo "<br>";
echo "help";
echo "Session variables are set.";
echo "<br>";
echo "Fave Color: " . $_SESSION["favcolor"];
echo "<br>";
echo "Fave Animal: " . $_SESSION["favanimal"];
echo "<br>";
echo "<a href='demo_session2.php'> Click to open demo_session2</a>";
?>

</body>
</html> 