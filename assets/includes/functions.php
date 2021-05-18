<?php
    function openDatabaseConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $dbname = "todo_list";
        
        $conn = new PDO('mysql:host=localhost;dbname=todo_list', $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     // echo "Connected successfully";
            return $conn;
    }

    function getAllLists(){
        $conn = openDataBaseConnection();
        $stmt=$conn->prepare('SELECT * FROM lists');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function insertList($title, $description){
        $conn = openDatabaseConnection();
        $stmt=$conn->prepare("INSERT INTO `lists` (`title`, `description`) Values (:title, :description)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);     
        $stmt->execute();
    }

    function editList($id, $title, $description){
        $conn = openDataBaseConnection(); 
        $stmt = $conn->prepare("UPDATE `lists` SET id = :id, title = :title,  description = :description WHERE id = :id");
            
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        }

    function deleteList($id){
        $conn = openDataBaseConnection();
        $stmt=$conn->prepare("DELETE FROM lists WHERE id = :id");
        $stnt=$conn->prepare("DELETE FROM task WHERE listid = :id");
        $stmt->execute([":id" => $id]);
        $stnt->execute([":id" => $id]);
    }

    function getTasksWithId($id){
        $conn = openDataBaseConnection();
        $stmt = $conn->prepare("SELECT * FROM task WHERE listid = :id");
        $stmt->execute([":id" => $id]);
        return $stmt->fetchAll();
        } 

    function insertTask($listid, $name, $description, $status){
        $conn = openDatabaseConnection();
        $stmt=$conn->prepare("INSERT INTO `task` (`listid`,`name`, `description`, `status`) Values (:listid, :name, :description, :status)");
        $stmt->bindParam(':listid', $listid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);     
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    }

    function editTask($id, $listid, $name, $description, $status){
        $conn = openDataBaseConnection(); 
        $stmt = $conn->prepare("UPDATE `task` SET id = :id, listid = :listid,   name = :name,  description = :description,  status = :status WHERE id = :id");
            
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':listid', $listid);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    }
 
    function deleteTask($id){
        $conn = openDataBaseConnection();
        $stmt=$conn->prepare("DELETE FROM task WHERE id= :id");
        $stmt->execute([":id" => $id]);
    }

    function getAllStatusOrderBy($id){
        $conn = openDataBaseConnection();
        $stmt = $conn->prepare("SELECT * FROM task WHERE listid = :id ORDER BY status" );
        $stmt->execute([":id" => $id]);
        return $stmt->fetchAll();
    }

    function getAllTimeOrderBy($id){
        $conn = openDataBaseConnection();
        $stnt = $conn->prepare("SELECT * FROM task WHERE listid = :id ORDER BY time" );
        $stnt->execute([":id" => $id]);
        return $stnt->fetchAll();
    }