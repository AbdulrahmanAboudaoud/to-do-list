<?php
require(ROOT . "model/ListModel.php");


function index()
{
   
    $getAllLists = getAllLists();
    render("lists/index", array("lists" =>$getAllLists));
    
   
}

function addList(){
 
 render("lists/createList");
}

function createNewList(){
    createList($_POST["ListName"]);
    header("location: index");
}

function editList($id){
   
    $getList = getList($id);
   
    render("lists/updateList", array("list" => $getList));
}

function updateList($id){
    updateL($id, $_POST["ListName"]);
    header("location: ".URL."list/index");
    

}

function deleteList($id){
   
    $getList = getList($id);
    render("lists/deleteList", array("list" =>$getList));
   

}

function destroyList($id){
    
    destroyL($id);
    header("location: ".URL."list/index");
	
    
}
?>