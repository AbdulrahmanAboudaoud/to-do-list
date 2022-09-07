<?php 
     
    
?>



<h1 class="text-center">Add a new List :</h1>
<div class="container">
<form  action="<?=URL?>task/createNewTask" method="post">
	<!-- bouw hier je formulier -->
	

	<div class="form-group">
	<label for="" class="lead">Task Description</label>
    <input type="text" name="TaskDescription" class="form-control">
	</div>
    
    <div class="form-group">
	<label for="" class="lead">Task Duration</label>
    <input type="time" name="TaskDuration" class="form-control">
	</div>
    
    <div class="form-group">
	<label for="" class="lead">Task Status</label>
	<select name="TaskStatus">
	
        <option value="open">Open</option>
		<option value="In Progress">In Progress</option>
		<option value="Closed">Closed</option>
  
    
        </select>
	</div>


    <div class="form-group">
	<label for="" class="lead">List ID </label>
    <input type="hidden" name="list_id" value = "<?php echo  $_GET['listid'];  ?>" class="form-control">
	</div>
	

	
    <input type="submit" class="btn text-white-50  bg-dark " value="Add new Task">	

</form>
</div>