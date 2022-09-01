<?php echo $_GET['username'] ?>
<form>
İsim giriniz : 
<input name="username" id="username">
<input type="submit">
</form>
<?php
if($_GET['username']){
 echo $_GET['username'];
} 
?>
