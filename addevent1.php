<?php
session_start();
require_once('db.php');
require_once('includes/header.php');

?>


	<div class="row">
		<div class="col-md-3 col-md-offset-2 m-auto">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Event</div>
        <hr>
				<div class="panel-body">
					<form role="form" action="addeventpost1.php" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Event Name" name="bandname" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Event Place" name="place" type="text" autofocus="">
							</div>

							<div class="form-group">
								<input class="form-control" placeholder="Event Capacity" name="capacity" type="number" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Event Date" name="date" type="date" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Event Payment" name="payment" type="number" autofocus="">
							</div>


							<input type="submit" name="submit" value="Add Event" class="btn btn-primary btn-block btn-lg">
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<?php
require_once('includes/footer.php');
?>
