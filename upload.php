<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && isset($_FILES['file'])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 800000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
 //Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf" && $imageFileType != "doc" 
&& $imageFileType != "docx" && $imageFileType != "odt") {
    echo "Sorry, only JPG, JPEG, PDF, DOC, DOCX, ODT, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	$success=1;
	$fn=$_FILES["fileToUpload"]["name"];
	
}

	include 'db.php';
	
	if($uploadOk == 1)
	{
		$sql = "INSERT INTO filename(fn) VALUES ('$fn')";

if (mysqli_query($conn,$sql) === TRUE) {
    echo "<br>File Name is stored in the database";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}

	
?>
<html>
<body>
<form action="display1.php">
<button type=submit value=submit>Back</button>
</center>
</form>
</body>
</html>


