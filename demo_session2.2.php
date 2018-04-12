 <?php
session_start();

if(!isset($_SESSION['user']) )     // if there is no valid session
{
    header("Location: demo_session1.php");
    
}
else
{
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "This is demo_session2.php";
echo "<br>";
echo "Welcome ". $_SESSION["user"] . " user.";
echo "<br>";
echo "<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "<br>";
echo "<br>";
echo "Another way of displaying the content of session variables ";
echo "<br>";
print_r($_SESSION);
echo "<br>";
echo "<br>";
echo "<a href='demo_session3.php'> Click to open demo_session3 and unset session variables</a>";
?>

</body>
</html> 
<?php
}
?>