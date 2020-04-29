<?php
/**
 * User: milad
 * Date: 24-4-2020
 * Time: 12:18
 * File: Opdracht_6.1.php
 */
?>

<?php
include "../Include/header.php"
?>

    <form action="checklogin.php" method="post">
        <label>Username: </label>
        <input type="text" name="username"><br>
        <label>Password: </label>
        <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
<?php
echo $message;
?>
<?php
include "../Include/footer.php"
?>