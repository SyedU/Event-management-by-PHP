<?php
session_start();
require_once('db.php');
require_once('includes/header.php');

$id = $_GET['id'];
$query_string ="SELECT * FROM event1 WHERE id=$id";
$db_return = mysqli_query($db_connection, $query_string);
$after_assoc = mysqli_fetch_assoc($db_return);

?>

<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">

        </div>
				<div class="panel-body">
					<form role="form" action="editeventpost1.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Event Name" name="bandname" type="text" value="<?=$after_assoc['bandname']?>">
								<input class="form-control" name="event1_id" type="hidden" value="<?=$id?>">
								<input class="form-control" placeholder="Event Place" name="place" type="text" value="<?=$after_assoc['place']?>">
								<input class="form-control" placeholder="Event Capacity" name="capacity" type="text" value="<?=$after_assoc['capacity']?>">
								<input class="form-control" placeholder="Event Date" name="date" type="date" value="<?=$after_assoc['date']?>">
								<input class="form-control" placeholder="Event Payment" name="payment" type="number" value="<?=$after_assoc['payment']?>">


							</div>

							<input type="submit" name="submit" value="Edit Event" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<?php
require_once('includes/footer.php');
?>
