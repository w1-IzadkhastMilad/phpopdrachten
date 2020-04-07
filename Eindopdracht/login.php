<?php
/**
 * User: milad
 * Date: 6-4-2020
 * Time: 10:57
 * File: login.php
 */
?>

<?php
include "../Include/header.php"
?>
<form action="script.php" method="post">
    <label>Username</label><input name="Username" type="text"><br>
    <label>Username</label><input name="Password" type="password"><br>
    <input type="submit" name="verzenden" value="login">
</form>
<?php
include "script.php"
?>


<?php
include "../Include/footer.php"
?>