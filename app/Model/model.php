<?php 

namespace staditek\OOP\App\Model;
use staditek\OOP\App\config\Database;
class model extends Database{
    public function TampilData(){
        $statement = self::$conn->prepare("SELECT * FROM user");
        $statement->execute();
        // return self::execute($statement);

        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function SaveUser($data){
        $statement = self::$conn->prepare("INSERT INTO user(nama, email, phone, password, created_at, update_at) VALUES(
            :nama,
            :email,
            :phone,
            :password,
            :created_at,
            :update_at
        )");
        return $statement->execute($data);
    }

    public function findById($id){
        $statement = self::$conn->prepare("SELECT * FROM user WHERE id ='$id'");
        $statement->execute();
        // return self::execute($statement);

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function UpdateUser($data){
        $statement = self::$conn->prepare("UPDATE user SET 
            nama = :nama,
            email = :email,
            phone = :phone,
            password = :password,
            created_at = :created_at,
            update_at = :update_at
            WHERE id = :id
        ");
        return $statement->execute($data);
    }

    public function deleteUser($id){
        $statement = self::$conn->prepare("DELETE FROM user WHERE id = $id");
        return $statement->execute();
    }
}