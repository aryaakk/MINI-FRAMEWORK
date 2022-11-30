<?php 

namespace staditek\OOP\App\Controller;

use staditek\OOP\App\Core\View;
use staditek\OOP\App\Model\model;

class HomeController{

    public static $model;
    // public static $tampildata;

    public function __construct(){
        self::$model = new model();
    }
    public function tampilData(){
        $tampildata = self::$model->TampilData();
        View::renderView('header');
        View::renderView('tampil_user', $tampildata);
        View::renderView('footer');
    }

    public function tambahData(){
        View::renderView('header');
        View::renderView('tambah_user');
        View::renderView('footer');
    }

    public function Save($data = array()){
        $save = array(
            'nama' => $data['nama'],
            'email' => $data['email'],
            'phone'=>$data['phone'],
            'password' => $data['password']
        );
        self::$model->SaveData($save);
        View::renderView('header');
        View::renderView('tambah_user');
        View::renderView('footer');
    }
}