<?php
require_once('config/conn.php');

class Students {    

    static function selectById($id) {
        global $conn;

      
        $sql ="SELECT * FROM Students WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param(':id', $id);

        $stmt->execute();
    
        $result = $stmt->affected_rows > 0 ? true : false;
    
        return $result;
    } 
    

    static function selectWhere($clause) {
  
        global $conn;
    
        $sql ="SELECT * FROM Students WHERE $clause";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;

        return $result;
    } 

    static function updateById($id, $name, $email, $role_fk) {
      
        global $conn; 
       
        $sql ="UPDATE Students SET name = :name, email = :email, role_fk = :role_fk WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bind_param(':id', $id);
        $stmt->bind_param(':name', $name);
        $stmt->bind_param(':email', $email);
        $stmt->bind_param(':role_fk', $role_fk);

        $stmt->execute();

        $result = $stmt->affected_rows > 0 ? true : false;

        return $result;          
    } 
    
    static function updateWhere($clause, $name, $email, $role_fk) {
        global $conn;


        $sql = "UPDATE Students SET name = ?, email = ?, role_fk = ? WHERE $clause";
        $stmt = $conn->prepare($sql);
        
        $stmt->bind_param('ssi', $name, $email, $role_fk);
        
        $stmt->execute();
        
        $result = $stmt->affected_rows > 0 ? true : false;
        
        return $result;
    
    } 
    
    static function deleteById($id) {
        global $conn;

        $sql = "DELETE FROM Students WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bind_Param(':id', $id);

        if ($stmt->execute()) {
            $rowsAffected = $stmt->affected_rows > 0 ? true : false;
            return ($rowsAffected !== false && $rowsAffected > 0);
        } else {
            echo "Error during deletion.";
            return false;
        }

    } 
    static function deleteWhere($clause) {  
        global $conn;  

        $sql = "DELETE FROM Students WHERE $clause;";
        $stmt = $conn->prepare($sql);

        $result = $conn->affected_rows > 0 ? true : false;
        return $result;
    


    } 
}

