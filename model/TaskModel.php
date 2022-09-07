<?php 
 


function getAllTasks(){
   
   $sort = "";
   if(isset($_GET['sort_alphabet'])){
            if($_GET['sort_alphabet'] == "a-z"){


               $sort = "ASC";


            }
            elseif($_GET['sort_alphabet'] == "z-a" ){
               
                $sort = "DESC";


            }  

        }
     $filter = "";
     
     if(isset($_GET['filter'])){
        if($_GET['filter'] == "open"){


           $filter = "open";


        }
        elseif($_GET['filter'] == "closed" ){
           
            $filter = "closed";


        } 
        elseif($_GET['filter'] == "in progress" ){
           
            $filter = "In Progress";


        }   

    }


    try {
       
        $conn=openDatabaseConnection();
        if(isset($_GET['sort_alphabet'])){
        $stmt = $conn->prepare("SELECT * FROM tasks ORDER BY TaskDuration $sort");

        }
        elseif(isset($_GET['filter'])){
            $stmt = $conn->prepare("SELECT * FROM tasks WHERE TaskStatus = '$filter'");
        }
        elseif(isset($_GET['sort_alphabet']) && isset($_GET['filter'])){
            $stmt = $conn->prepare("SELECT * FROM tasks WHERE TaskStatus = '$filter' ORDER BY TaskDuration $sort");   

        }
        else{
        $stmt = $conn->prepare("SELECT * FROM tasks");
    }
        $stmt->execute();
        $result = $stmt->fetchAll();
 
    }
    
    catch(PDOException $e){
       
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function getAllTasksAsc($id){
    try {
       
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM tasks WHERE list_id = :id  ORDER BY TaskDescription ASC");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
 
    }
    
    catch(PDOException $e){
       
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function getAllTasksDesc($id){
    try {
       
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM tasks  WHERE list_id = :id ORDER BY TaskDescription DESC");
        $stmt->bindParam(":id", $id);
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