<?php


function redirect($url)
{
    header("Location: $url");
    exit();
}

function display_error($message)
{
    echo '<div class="error-message">' . $message . '</div>';
}

function display_success($message)
{
    echo '<div class="success-message">' . $message . '</div>';
}

function get_data_from_database($table, $id)
{
}

function save_data_to_database($table, $data)
{
}

function validate_input($input)
{
}

function get_customer_data($customer_id)
{
}

function get_item_data($item_id)
{
}

function admin()
{
    echo "Halaman Admin";
}

function dashboard()
{
    echo "Halaman Dashboard Admin";
}

function customer_login()
{
    echo "Halaman Login Customer";
}

function customer_login_save()
{
    echo "Proses Login Customer";
}

function customer_register()
{
    echo "Halaman Register Customer";
}

function customer_register_save()
{
    echo "Proses Register Customer";
}

function customer_profile()
{
    echo "Halaman Profil Customer";
}

function customer_profile_edited()
{
    echo "Proses Edit Profil Customer";
}

function item($id)
{
    echo "Halaman Detail Item dengan ID $id";
}

function item1()
{
    echo "Halaman Detail Item";
}

function cart()
{
    echo "Halaman Keranjang Belanja";
}

function order($id)
{
    echo "Halaman Detail Pesanan dengan ID $id";
}

function order1()
{
    echo "Halaman Detail Pesanan dengan ID ";
}

function contact()
{
    echo "Halaman Kontak";
}

function logout()
{
    echo "Proses Logout";
}

function home()
{
    echo "go to home";
}