<?php include(VIEWS . "layout/header.php") ?>

<div class="container">

    <div class="text-center m-auto">
        <h2 class="my-3">Edit <span class="brand"> <?php echo $product['name'] ?> </span> Product</h2>
            <hr class="col-3 mb-5 m-auto">


            <?php if(isset($success)): ?>
                <h5 class="alert alert-success col-6 m-auto"> <?php echo  $success  ?> </h5>    
            <?php endif ?>            

            <?php if(isset($error)): ?>
                <h5 class="alert alert-danger col-6 m-auto"><?php echo $error  ?></h5>    
            <?php endif ?>            

            <div class="col-6 my-5 m-auto p-2 " style="background-color: #EEFFFF;">
                    <form  action="<?php url('product/update/'.$product['id']) ?>" method="POST">
                        <div class="form-group my-2">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Product Name" value="<?php echo $product['name'] ?>">
                        </div>

                        <div class="form-group my-2">
                            <label>Description</label>
                            <textarea name="desc"  placeholder="Enter Product Description" class="form-control" rows="3"><?php echo $product['desc'] ?></textarea>
                        </div>

                        <div class="form-group my-2">
                            <label for="exampleFormControlInput1">Price</label>
                            <input type="number" name="price" min="0"  class="form-control" placeholder="Enter Product Price" value="<?php echo $product['price'] ?>">
                        </div>

                        <div class="form-group my-2">
                            <label for="exampleFormControlInput1">Quantity</label>
                            <input type="number" name="qyt"  min="1"  class="form-control" placeholder="Enter Product Quantity" value="<?php echo $product['qyt'] ?>">
                        </div>

                        <div class="form-group my-2">
                            <input type="submit" name="submit" class="form-control btn btn-sm btn-primary" value="EDIT">
                        </div>
                    </form>
            </div>

    </div>
</div>
<?php include(VIEWS . "layout/footer.php") ?>