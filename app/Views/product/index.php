<?php include(VIEWS . "layout/header.php") ?>

<div class="container">

    <div class="text-center m-auto">
        <h2 class="my-3">Products</h1>
        <hr class="col-3 m-auto mb-3">

        <?php if(isset($success)): ?>
                <h5 class="alert alert-success col-6 m-auto"> <?php echo  $success  ?> </h5>    
            <?php endif ?>            

            <?php if(isset($error)): ?>
                <h5 class="alert alert-danger col-6 m-auto"><?php echo $error  ?></h5>    
            <?php endif ?>  
        <div class="col-10 m-auto">
                <table class="table table-warning mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Qyt</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($products as $prod) : ?>
                            <tr>
                                <td><?php echo $i;
                                    $i++; ?> </td>
                                <td><?php echo $prod["name"]; ?> </td>
                                <td><?php echo $prod["price"]; ?> $ </td>
                                <td><?php echo $prod["desc"]; ?> </td>
                                <td><?php echo $prod["qyt"]; ?> </td>
                                <td>
                                    <a class="btn btn-primary btn-sm p-1" href="<?php url('product/edit/' . $prod["id"]) ?>">Edit</a>
                                    <a class="btn btn-danger btn-sm p-1" href="<?php url('product/delete/' . $prod["id"]) ?>">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<?php include(VIEWS . "layout/footer.php") ?>