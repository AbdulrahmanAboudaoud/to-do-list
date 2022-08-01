

<div class ="col-md-12 text-center">
		<a class="btn text-white-50  bg-dark border" href="<?=URL?>List/addList"> Add New List</a>
</div>





    <?php foreach($lists as $list ){ ?>

    <div class=" mt-3 d-inline-block border" style="">
        <h1 class = "d-inline  bg-danger text-capitalize text-white " style="color: blck;">
        &nbsp; 
        <?php echo $list["ListName"]; ?>
        <a class="btn text-primary  " href= "<?= URL ?>list/editList/<?= $list['id'] ?>"><i class="far fa-edit text-white"></i></a>
        <a class="btn text-primary " href= "<?= URL ?>list/deleteList/<?= $list['id'] ?>"><i class="far fa-trash-alt text-white"></i> </a>
        </h1>
        
        <ul class="list-group">
            <li class="list-group-item">
                Data Structure
            </li>
            
        </ul>
    </div>
    <?php } ?>

	



