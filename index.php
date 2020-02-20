<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<title>PHP CRUD </title>
	</head>
<body>
	<div style="height:30px;"></div>
	<div class = "row">
		<div class = "col-md-3">
		</div>
		<div>
			<div>
                <div>
                    <center><h1>FORM NAMA</h1></center>
					<hr>
				<div>
					<form>
						<div>
							<label>nim:</label>
							<input type  = "text" id = "nim">
						</div>
						<div>
							<label>nama:</label>
							<input type  = "text" id = "nama">
						</div>
						<div >
							<button class="btn btn-primary" type = "button" id="addnew"> Add</button>
						</div>
					</form>
				</div>
                </div>
            </div><br>

			<div id="userTable"></div>

		</div>
	</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		showUser();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#nim').val()=="" || $('#nama').val()==""){
				alert('Please input data first');
			}
			else{
			$nim=$('#nim').val();
			$nama=$('#nama').val();
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						nim: $nim,
						nama: $nama,
						add: 1,
					},
					success: function(){
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$unim=$('#unim'+$uid).val();
			$unama=$('#unama'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						nim: $unim,
						nama: $unama,
						edit: 1,
					},
					success: function(){
						showUser();
					}
				});
		});

	});

	//Show Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}

</script>
</html>