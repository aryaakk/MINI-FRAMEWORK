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

    public function SaveData($data){
        $statement = self::$conn->prepare("INSERT INTO user(nama, email, phone, password) VALUES(
            :nama, 
            :email,
            :phone,
            :password
        )");
        return $statement->execute($data);
    }
}