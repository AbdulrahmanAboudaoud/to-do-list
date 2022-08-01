	
	
	<h1 class= "text-center">Edit a List</h1>
	<div class="container">
	
	<form  action="<?=URL?>List/updateList/<?php echo $list['id'] ?>" method="post">
			
		<div class="form-group">
			<label class="lead" for="">List Name</label>
            <input class="form-control" name="ListName"  type="text" required value="<?php echo $list["ListName"]; ?>">
		</div>	
	
	    <!--  Bouw hier de rest van je formulier   -->

		<input type="submit" name="submit" class="btn text-white-50  bg-dark" value="Update">
	</form>

</div>