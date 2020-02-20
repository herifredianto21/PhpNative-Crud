<?php
	include('conn.php');
	if(isset($_POST['show'])){
		?>
		<table class="table table-bordered">
			<thead>
				<th>nim</th>
				<th>nama</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"select * from `user`");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><?php echo $urow['nim']; ?></td>
									<td><?php echo $urow['nama']; ?></td>
									<td><button class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('Viewedit.php'); ?>
									</td>
								</tr>
							<?php
						}

					?>
				</tbody>
			</table>
		<?php
	}

?>