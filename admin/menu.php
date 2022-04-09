<?php
if(isset($_GET['page'])){
    include '../lib/koneksi.php';
    $page = $_GET['page'];

    switch($page){
        case 'daftar':
            include 'dashboard/datauser/daftar.php';
            break;
        case 'daftar_user':
            include 'dashboard/datauser/store.php';
            break;
        case 'delete_user':
            include 'dashboard/datauser/delete.php';
            break;
        case 'edit_user':
            include 'dashboard/datauser/edit.php';
            break;
        case 'update_user':
            include 'dashboard/datauser/update.php';
            break;
        case 'data':
            include 'dashboard/datauser/datauser.php';
            break;
        case 'dashboard':
            include 'dashboard.php';
            break;
        case 'kategori':
            include 'dashboard/kategori/kategori.php';
            break;
        case 'tambah_kategori':
            include 'dashboard/kategori/create.php';
            break;
        case 'edit_kategori':
            include 'dashboard/kategori/edit.php';
            break;
        case 'delete_kategori':
            include 'dashboard/kategori/delete.php';
            break;
        case 'kategori_store':
            include 'dashboard/kategori/store.php';
            break;
        case 'kategori_update':
            include 'dashboard/kategori/update.php';
            break;
        case 'daftar-akun':
            include 'daftar.php';
            break;
        case 'menu-ds':
            include 'menu-ds.php';
            break;
        default:
            echo"halaman tidak ditemukan";
            break;
    }
}else{
    include 'menu-ds.php';
}
?>