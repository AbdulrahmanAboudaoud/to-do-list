

<div class ="col-md-12 text-center">
		<a class="btn text-white-50  bg-dark border" href="<?=URL?>List/addList"> Add New List</a>
</div>

<form action = "" method = "GET" class="col-md-12 text-center">
        
        <div class="mb-3">  

          
        <select name = "sort_alphabet" class = "pb-1" value = "">
        
            <option disabled>ORDER LIST BY DURATION</option>
            <option value="a-z"<?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "a-z"){ echo "selected";} ?> >short - long</option>
            <option value="z-a"<?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet'] == "z-a"){ echo "selected";} ?> >long - short</option>
    
        </select>
        
        
        
        <input type="submit" name="button1"value="sort" class=" pb-1 text-white bg-danger "/>  
        </div>

</form>
<form action = "" method = "GET" class="col-md-12 text-center">
        
        <div class="mb-3">  

          
        <select name = "filter" class = "pb-1" value = "">
        
            <option disabled>filter the tasks by status</option>
            <option value="open"<?php if(isset($_GET['filter']) && $_GET['filter'] == "open"){ echo "selected";}else{echo "choose";} ?> >open</option>
            <option value="in progress"<?php if(isset($_GET['filter']) && $_GET['filter'] == "in progress"){ echo "selected";} ?> >in progress</option>
            <option value="closed"<?php if(isset($_GET['filter']) && $_GET['filter'] == "closed"){ echo "selected";} ?> >closed</option>
        </select>
        
        
        
        <input type="submit" name="button1"value="filter" class=" pb-1 text-white bg-danger "/>  
        </div>

</form>


    <?php foreach($lists as $list ){ ?>

    <div class=" mt-3 d-inline-block border">
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

      
                
                
        
        <?php
       
      
            
            foreach($tasks as $task){



            if ($task["list_id"] == $list["id"]) { 
                
            ?>
        
            <tr>
               <td> <?php echo $task["TaskDescription"];?> </td>
               <td> <?php echo $task["TaskDuration"];?> </td>
               <td> <?php echo $task["TaskStatus"];?> </td>
               <td> <a class="btn text-primary " href= "<?= URL ?>Task/deleteTask/<?= $task['TaskID'] ?>"><i class="far fa-trash-alt text-danger"></i> </a> 
                    <a class="btn text-primary  " href= "<?= URL ?>Task/editTask/<?= $task['TaskID'] ?>"><i class="far fa-edit text-danger"></i> </a>  
               </td>
            </tr>
            <?php } }  ?>
            </tbody>
	</table>
    </div>
    <?php } ?>

	




