	
	
	<h1 class= "text-center">Edit a Task</h1>
	<div class="container">
	
	<form  action="<?=URL?>Task/updateTask/<?php echo $task['id'] ?>" method="post">
			
		<div class="form-group">
			<label class="lead" for="">Task Description</label>
            <input class="form-control" name="TaskDescription"  type="text" required value="<?php echo $task["TaskDescription"]; ?>">
		</div>	
        <div class="form-group">
			<label class="lead" for="">Task Duration</label>
            <input class="form-control" name="TaskDuration"  type="time" required value="<?php echo $list["TaskDuration"]; ?>">
		</div>	
        <div class="form-group">
			<label class="lead" for="">Task Status</label>
            <input class="form-control" name="TaskStatus"  type="text" required value="<?php echo $list["TaskStatus"]; ?>">
		</div>	
	
	    <!--  Bouw hier de rest van je formulier   -->

		<input type="submit" name="submit" class="btn text-white-50  bg-dark" value="Update">
	</form>

</div>