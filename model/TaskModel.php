<?php 

function getAllTasks(){
    try {
        
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM tasks");
        $stmt->execute();
        $result = $stmt->fetchAll();
 
    }
    
    catch(PDOException $e){
       
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function getTask($id){
    try {
        
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM tasks  WHERE TaskID = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch();
 
    }
    
    catch(PDOException $e){
       
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
  
}

function createTask($TaskDescription,$TaskDuration,$TaskStatus,$list_id){
    // Maak hier de code om een medewerker toe te voegen
 
    
    try{
    $conn=openDatabaseConnection();
    $sql = "INSERT INTO tasks(TaskDescription, TaskDuration, TaskStatus, list_id) VALUES(:TaskDescription, :TaskDuration, :TaskStatus, :list_id)";
    $query = $conn->prepare($sql);
    $query->bindParam(":TaskDescription", $TaskDescription);
    $query->bindParam(":TaskDuration", $TaskDuration);
    $query->bindParam(":TaskStatus", $TaskStatus);
    $query->bindParam(":list_id", $list_id);
 
    $query->execute();
  }

  catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}
    $conn = null;
 }

 function updateT($id,$TaskDescription,$TaskDuration,$TaskStatus){
    // Maak hier de code om een medewerker te bewerken
    try{
        $conn=openDatabaseConnection();
        $sql = "UPDATE tasks SET  TaskDescription = :TaskDescription, TaskDuration = :TaskDuration, TaskStatus = :TaskStatus WHERE TaskID = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":TaskDescription", $TaskDescription);
        $query->bindParam(":TaskDuration", $TaskDuration);
        $query->bindParam(":TaskStatus", $TaskStatus);
        $query->bindParam(":list_id", $list_id);

        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
 }

 function destroyT($id){
    // Maak hier de code om een medewerker te verwijderen
    try{
        $conn=openDatabaseConnection();
        $sql = "DELETE FROM tasks WHERE TaskID = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
       
        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
     }
    

















?>