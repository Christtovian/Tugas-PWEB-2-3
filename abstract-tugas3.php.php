<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';


abstract class Model {
    abstract static function select(); 
    abstract static function selectById($id); 
    abstract static function insert($data); 
    abstract static function update($id, $data); 
    abstract static function delete($id); 
}

class Student extends Model {
    
    static function select() {
        global $conn;  

        $sql = "SELECT * FROM Students;";
        $result = $conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    static function selectById($id) {
        global $conn;

        $sql = "SELECT * FROM Students WHERE id = $id;";
        $result = $conn->query($sql);

        return $result->fetch_assoc();
    }

    static function insert($data) {
        global $conn;

        $name = $data['name'];
        $email = $data['email'];
        $role_fk = $data['role_fk'];

        $sql = "INSERT INTO students (name, email, role_fk) VALUES ('$name', '$email', $role_fk);";
        $conn->query($sql);

        return $conn->insert_id;  
    }

    static function update($id, $data) {
        global $conn;

        $name = $data['name'];
        $email = $data['email'];
        $role_fk = $data['role_fk'];

        $sql = "UPDATE students SET name='$name', email='$email', role_fk=$role_fk WHERE id=$id;";
        $conn->query($sql);

        return $conn->affected_rows > 0;  
    }

    static function delete($id) {
        global $conn;

        $sql = "DELETE FROM students WHERE id=$id;";
        $conn->query($sql);

        return $conn->affected_rows > 0; 
    }
}
