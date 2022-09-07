	 
	 
	<h1 class= "text-center">Edit a Task</h1> 
	<div class="container"> 
	 
	<form  action="<?=URL?>Task/updateTask/<?php echo $task['TaskID'] ?>" method="post"> 
			 
		<div class="form-group"> 
			<label class="lead" for="">Task Description</label> 
            <input class="form-control" name="TaskDescription"  type="text" required value="<?php echo $task["TaskDescription"]; ?>"> 
		</div>	 
        <div class="form-group"> 
			<label class="lead" for="">Task Duration</label> 
            <input class="form-control" name="TaskDuration"  type="time" required value="<?php echo $task["TaskDuration"]; ?>"> 
		</div>	 
		<div class="form-group">
		<label for="" class="lead">Task Status</label>
		<select name="TaskStatus">
	
        <option value="open">Open</option>
		<option value="In Progress">In Progress</option>
		<option value="Closed">Closed</option>
  
    
        </select>
	</div>
	 
	    <!--  Bouw hier de rest van je formulier   --> 
 
		<input type="submit" name="submit" class="btn text-white-50  bg-dark" value="Update"> 
	</form> 
 
</div>