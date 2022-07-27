<?php 

function getAllLists(){
    try {
        
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM lists");
        $stmt->execute();
        $result = $stmt->fetchAll();
 
    }
    
    catch(PDOException $e){
       
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    return $result;
}

function getList($id){
    try {
        
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("SELECT * FROM lists  WHERE id = :id");
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

function createList($ListName){
    // Maak hier de code om een medewerker toe te voegen
  try{
    $conn=openDatabaseConnection();
    $sql = "INSERT INTO lists(ListName) VALUES(:ListName)";
    $query = $conn->prepare($sql);
    $query->bindParam(":ListName", $ListName);
 
    $query->execute();
  }

  catch(PDOException $e){

    echo "Connection failed: " . $e->getMessage();
}
    $conn = null;
 }

 function updateL($id,$ListName){
    // Maak hier de code om een medewerker te bewerken
    try{
        $conn=openDatabaseConnection();
        $sql = "UPDATE lists SET  ListName = :ListName WHERE id = :id";
        $query = $conn->prepare($sql);
        $query->bindParam(":id", $id);
        $query->bindParam(":ListName", $ListName);

        $query->execute();
      }
    
      catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
        $conn = null;
 }

 function destroyL($id){
    // Maak hier de code om een medewerker te verwijderen
    try{
        $conn=openDatabaseConnection();
        $sql = "DELETE FROM lists WHERE id = :id";
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