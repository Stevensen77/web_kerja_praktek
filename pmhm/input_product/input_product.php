<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Input Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
@media (min-width: 576px) {
.back_button{
	width:100px;
	top:10px;
	left:0;
	position:fixed;
}
}

</style>
</head>

<body>
	
	

	<div class="container-contact100" style="background-image: url('images/header.jpg');">
		<a href="../login/menu_admin/menu_admin.php" ><img class="back_button" src="images/back_button.png" style=""/></a>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Form Input Product
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name of Product *</span>
					<input class="input100" type="text" name="name_product" placeholder="Enter Name of Product">
				</div>
				
				<div class="wrap-input100" >
					<span class="label-input100">Deskripsi </span>
					<input class="input100" type="text" name="description" placeholder="Enter Description">
				</div>

				<div class="wrap-input100 validate-input" data-validate="File is required">
					<span class="label-input100">Select File *</span>
					<input class="input100" type="file" name="myfile">
				</div>
  
				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" class="contact100-form-btn" name="submit1">
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>

		<span class="contact100-more">
				PT.Puncak Menara Hijau Mas
		</span>
	</div>



	<div id="dropDownSelect1"></div>

	
	
<?php
$dbh=new PDO("mysql:host=localhost;dbname=pmhm","root","");
//mysqli_connect("localhost","root","");


if(isset($_POST["submit1"]))
{
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['type'];
	$kategori=$_POST['name_product'];
	$description=$_POST['description'];
	$image = file_get_contents($_FILES['myfile']['tmp_name']);
//you keep your column name setting for insertion. I keep image type Blob.
$query = $dbh->prepare("INSERT INTO produk VALUES('',?,?,?,?,?)");  
$query->bindParam(3,$name);
$query->bindParam(4,$type);
$query->bindParam(2,$image);
$query->bindParam(1,$kategori);
$query->bindParam(5,$description);
$query->execute();
}


if(isset($_POST["submit2"]))
{	
	
$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
$sql = "SELECT * FROM produk WHERE kategori = 1";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'"/>';
}

?>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
