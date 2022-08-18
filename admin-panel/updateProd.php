<?php
include "../dbconn.php";
extract($_POST);
if (isset($update)) {
	mysqli_query($mysqli, "UPDATE products set price='$price',shortdescription='$shortdescription', description='$description' where productid='" . $_GET['pid'] . "'");
	$err = "<font color='blue'>Product updated </font>";
}

//select old notice

$q = mysqli_query($mysqli, "select * from products where productid='" . $_GET['pid'] . "'");
$res = mysqli_fetch_array($q);

?>
<h2>UPDATE PRODUCT</h2>
<form method="post">

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err; ?></div>
	</div>



	<div class="row">
		<div class="col-sm-4">Enter Price</div>
		<div class="col-sm-5">
			<input type="text" name="price" value="<?php echo $res['price']; ?>" class="form-control" />
		</div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		</div>

		<div class="row">
			<div class="col-sm-4">Enter Short Description</div>
			<div class="col-sm-5">
				<textarea name="shortdescription" class="form-control"><?php echo $res['shortdescription']; ?></textarea>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		</div>

		<div class="row">
			<div class="col-sm-4">Enter Description</div>
			<div class="col-sm-5">
				<textarea name="description" class="form-control"><?php echo $res['description']; ?></textarea>
			</div>
		</div>
	</div>


	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		</div>

		<div class="row">
			<div class="col-sm-4">Select Product</div>
			<div class="col-sm-5">
				<select name="products[]" multiple="single" class="form-control">
					<?php
					$sql = mysqli_query($mysqli, "select name,description from products");
					while ($r = mysqli_fetch_array($sql)) {
						echo "<option value='" . $r['email'] . "'>" . $r['name'] . "</option>";
					}
					?>
				</select>
			</div>
		</div>

		<div class="row" style="margin-top:10px">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
			</div>

			<div class="row" style="margin-top:10px">
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<input type="submit" value="Update Product" name="update" class="btn btn-dark" />
					<input type="reset" class="btn btn-secondary" />
				</div>
			</div>
		</div>
	</div>
	</div>
</form>