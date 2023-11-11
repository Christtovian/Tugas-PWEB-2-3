<?php
require_once 'controller/controllers.php';

class RoleController{
    static function index() {
        view('subview/roles', [
            'roles' => Roles::select(),
            'header' => titleheader('Read data scr AJAX dgn jQuery', 'h1', 'text-center mb-3')
        ]);
    }


  

    static function getRoles($id) {

        $result = Roles::selectById($id);


        header('Content-Type: application/json');


        echo json_encode($result);
    }
}

class Roles {

    static function selectById($id) {
        global $conn; 

        $sql = "SELECT * FROM roles WHERE id = $id;";
        $result = $conn->query($sql);

        if ($result) {
            return $result->fetch_assoc();
        } else {
            return null; 
        }
    }
}
