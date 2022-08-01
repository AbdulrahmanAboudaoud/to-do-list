<?php
require(ROOT . "model/TaskModel.php");
require(ROOT . "model/ListModel.php");


function index()
{
   
    $getAllTasks = getAllTasks();
    render("lists/index", array("tasks" =>$getAllTasks, "lists" =>getAllLists()));
    
   
}

function addTask(){
 
 render("lists/createTask");
}

function createNewTask(){
    createTask($_POST["TaskDescription"],$_POST["TaskDuration"],$_POST["TaskStatus"],$_POST["list_id"]);
    header("location: index");
}

function editTask($id){
   
    $getTask = getTask($id);
   
    render("lists/updateTask", array("task" => $getTask, "lists" =>getAllLists()));
}

function updateTask($id){
    updateT($id,$_POST["TaskDescription"],$_POST["TaskDuration"],$_POST["TaskStatus"],$_POST["list_id"]);
    header("location: ".URL."task/index");
    

}

function deleteTask($id){
   
    $getTask = getTask($id);
    render("lists/deleteTask", array("task" =>$getTask, "lists" =>getAllLists()));
   

}

function destroyTask($id){
    
    destroyT($id);
    header("location: ".URL."task/index");
	
    
}
?>