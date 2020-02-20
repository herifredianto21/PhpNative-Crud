<div class="modal fade" id="edit<?php echo $urow['userid']; ?>">
	<?php
		$n=mysqli_query($conn,"select * from `user` where userid='".$urow['userid']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog">
    <div>
		<div>
			<button type="button" class="close"></button>
		</div>
		<form>
		<div>
			nim: <input type="text" value="<?php echo $nrow['nim']; ?>" id="unim<?php echo $urow['userid']; ?>" class="form-control">
			nama: <input type="text" value="<?php echo $nrow['nama']; ?>" id="unama<?php echo $urow['userid']; ?>" class="form-control">
		</div>
		<div>
			<button class="btn btn-secondary" data-dismiss="modal" type="button">Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['userid']; ?>"> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>