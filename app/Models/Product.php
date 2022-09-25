<?php

class Product extends DB
{
    private $table = "products";
    private $conn ;

    public function __construct()
    {
        $this->conn =  $this->connect();
    }
    
    public function getOneProduct($id)
    {
        $db =  $this->conn->where('id' , $id);
        $product = $db->getOne($this->table);
        return $product;
    }

    public function getAllProducts()
    {
        return $this->conn->get($this->table);
    }

    public function insertProduct($data)
    {
        return $this->conn->insert($this->table , $data);
    }

    public function updateProduct($id , $data)
    {
        $db = $this->conn->where('id' , $id);
        $update =  $db->update($this->table , $data);
        return $update;
    }

    public function deleteProduct($id)
    {
        $db =  $this->conn->where('id' , $id);
        return $db->delete($this->table);
    }


}