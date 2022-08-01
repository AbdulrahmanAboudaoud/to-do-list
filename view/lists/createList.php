<h1 class="text-center">Add a new List :</h1>
<div class="container">
<form  action="<?=URL?>list/createNewList" method="post">
	<!-- bouw hier je formulier -->
	
	<div class="form-group">
	<label for="" class="lead">List Name</label>
    <input type="text" name="ListName" class="form-control">
	</div>
	

	
    <input type="submit" class="btn text-white-50  bg-dark " value="Add new List">	

</form>
</div>