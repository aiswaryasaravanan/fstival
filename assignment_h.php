<html>
<body>

<h1>Uploading Assignment</h1>
<?php session_start(); ?>
<form method=post action="assignment_p.php" enctype="multipart/form-data">
	Enter RegNo:<br />
	<input type="text" name="regNo" /><br /><br /><br />
  	<label id="upload">Select file to upload:<br />
        <input type="file" id="uploadedimg" name="uploadedimg"/></label>
	<input type="submit" name="upload" value="upload" />
   
</form>
<?php if(isset($_SESSION["im"])){
	echo $_SESSION["a"];
echo $_SESSION["b"];
$v=$_SESSION['a'];
?>
 <a href="download.php?file=<?php $v; ?>">Download CV</a>
     <iframe src="<?php $rimgname ?>" width=300 height=300 />  
<?php }?>

<?php unset($_SESSION["im"])?>
</body>
</html>
