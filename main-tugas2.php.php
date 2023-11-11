<?php

class Main {
    static function route() {
        $route = isset($_GET['route']) ? $_GET['route'] : 'home';

        switch ($route) {
            case 'admin':
                admin();
                break;
            case 'dashboard':
                dashboard();
                break;
            case 'login':
                customer_login();
                break;
            case 'register':
                customer_register();
                break;
            case 'profile':
                customer_profile();
                break;
            case 'item':
                item1();
                break;
            case 'cart':
                Cart();
                break;
            case 'order':
                order1();
                break;
            case 'contact':
                Contact();
                break;
            case 'logout':
                logout();
                break;
            default:
                Home();
                break;
        }
    }
}
