<?php

namespace staditek\OOP\App\Controller;

use staditek\OOP\App\Core\View;
use staditek\OOP\App\Core\Router;
use staditek\OOP\App\Model\ModelUser;

class UserController
{

    public static $model;
    // public static $tampildata;

    public function __construct()
    {
        self::$model = new ModelUser();
    }
    public function tampilData()
    {
        $tampildata = self::$model->TampilData();
        View::ViewUser('header');
        View::ViewUser('tampil_user', $tampildata);
        View::ViewUser('footer');
    }

    public function tambahData()
    {
        View::ViewUser('header');
        View::ViewUser('tambah_user');
        View::ViewUser('footer');
    }

    public function Savee()
    {
        $insertUser = array(
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'created_at' => null,
            'update_at' => null
        );
        // var_dump($insertUser);
        if (!self::$model->SaveUser($insertUser)) {
            echo "<script>alert('TAMBAH USER GAGAL');
            window.location.href = '".Router::url('/tambah')."';
            </script>";
        } else {
            echo "<script>alert('TAMBAH USER BERHASIL');
            window.location.href = '".Router::url('/tampil')."';
            </script>";
        }
    }

    public function edit($id){
        $id_user = self::$model->findById($id);
        View::ViewUser('header');
        View::ViewUser('edit_user', $id_user);
        View::ViewUser('footer');
    }

    public function update(){
        $updateUser = array(
            'id' => $_POST['id'],
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'created_at' => $_POST['create'],
            'update_at' => $_POST['update']
        );
        if (!self::$model->UpdateUser($updateUser)) {
            echo "<script>alert('UPDATE USER GAGAL');
            window.location.href = '".Router::url('/edit_user')."';
            </script>";
        } else {
            echo "<script>alert('UPDATE USER BERHASIL');
            window.location.href = '".Router::url('/tampil')."';</script>";
        }
    }

    public function delete($id){
        // self::$model->deleteUser($id);
        if (!self::$model->deleteUser($id)) {
            echo "<script>alert('DELETE USER GAGAL');
            window.location.href = '".Router::url('/tampil')."';
            </script>";
        }else {
            echo "<script>alert('DELETE USER BERHASIL');
            window.location.href = '".Router::url('/tampil')."';</script>";
        }
    }
}
