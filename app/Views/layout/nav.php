<head>
    <style>
        .logo 
        {
            width: 130px;
            object-fit: cover;
        }

    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <img src="<?php  echo URL."assets/images/logo.png" ?>" alt="logo" class="logo" >
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="navItems"  class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php url("home") ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php url("product") ?>">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php url("product/add/") ?>">Add Product</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>
    </div>
</nav>