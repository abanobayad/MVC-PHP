<?php

class ProductController 
{
    public function index()
    {
        $db = new Product();
        $data ['products'] = $db->getAllProducts();
        View::load('product/index' , $data);
    }

    public function add()
    {
        
        View::load('product/add');
    }

    public function store()
    {
        
        if (isset($_POST['submit'])) {
            $data['name'] = $_POST['name'];
            $data['desc'] = $_POST['desc'];
            $data['price'] = $_POST['price'];
            $data['qyt'] = $_POST['qyt'];
            
            $db = new Product();
            $insert  = $db->insertProduct($data);
            if ($insert) {
                View::load('product/add' , ["success" => "Product \" " .  $data['name'] . " \" Created Successfully"]);
            } else {
                View::load('product/add' , ["error" => "Proccess Failed"]);
            }
            
        }
    }


    public function edit($id)
    {
        $db = new Product();
        $data ['product'] = $db->getOneProduct($id);
        View::load('product/edit' , $data);
    }

    public function update($id)
    {
        if (isset($_POST['submit'])) {
            $data['name'] = $_POST['name'];
            $data['desc'] = $_POST['desc'];
            $data['price'] = $_POST['price'];
            $data['qyt'] = $_POST['qyt'];
            
            $db = new Product();
            $update  = $db->updateProduct($id , $data);
            if ($update) {


                $data["success"] = "Product \" " .  $data['name'] . " \" Updated Successfully";
                $data['product'] = $db->getOneProduct($id);
                
                View::load('product/edit' , $data );
            } else {


                $data["error"] = "Proccess Failed";
                $data['product'] = $db->getOneProduct($id);
                
                View::load('product/edit' , $data );
            }
            
        }
    }

    public function delete($id)
    {
        $db = new Product();
        if ($db->deleteProduct($id)) {
            $data ['products']  = $db->getAllProducts();
            $data['success']    = "Product Deleted Successfully";
        } else {
            $data ['products']  = $db->getAllProducts();
            $data['error']    = "Delete Failed";
        }
        
        View::load('product/index' , $data );
    }
}