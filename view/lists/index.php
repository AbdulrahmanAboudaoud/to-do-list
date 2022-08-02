

<div class ="col-md-12 text-center">
		<a class="btn text-white-50  bg-dark border" href="<?=URL?>List/addList"> Add New List</a>
</div>





    <?php foreach($lists as $list ){ ?>

    <div class=" mt-3 d-inline-block border" style="">
        <h1 class = " bg-danger text-capitalize text-white " style="color: blck;">
        &nbsp; 
        <?php echo $list["ListName"]; ?>
        
        <a class="btn text-primary  " href= "<?= URL ?>list/editList/<?= $list['id'] ?>"><i class="far fa-edit text-white"></i></a>
        <a class="btn text-primary " href= "<?= URL ?>list/deleteList/<?= $list['id'] ?>"><i class="far fa-trash-alt text-white"></i> </a>
        </h1>

        <a class="btn text-white-50  bg-dark border d-block" href="<?=URL?>Task/addTask?listid=<?php echo $list["id"];?>"> Add New Task</a>
        <table class= "table-bordered" width = 100%;>

        <thead>
        <tr>

        <th>Task  </th>
        <th>Duration  </th>
        <th>Status </th>
        <th>Edit/Delete </th>



        </tr>
        </thead>
        <tbody>
        
        <?php foreach($tasks as $task){
            if ($task["list_id"] == $list["id"]) {
            ?>
        
            <tr>
               <td> <?php echo $task["TaskDescription"];?> </td>
               <td> <?php echo $task["TaskDuration"];?> </td>
               <td> <?php echo $task["TaskStatus"];?> </td>
               <td> <a class="btn text-primary " href= "<?= URL ?>Task/deleteTask/<?= $task['TaskID'] ?>"><i class="far fa-trash-alt text-danger"></i> </a> </td>
                
            </tr>
            <?php }} ?>
            </tbody>
	</table>
    </div>
    <?php } ?>

	




