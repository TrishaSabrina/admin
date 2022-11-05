<?php
ini_set('display_errors','Off');
//include('../src/Controller/ProductController.php');
include('../../vendor/autoload.php');
$pCont=new App\Controller\ProductController;
$inserted=$pCont->addProduct($_POST);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Page</title>
    <!-- <link rel="stylesheet" href="../assets/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <!-- <link rel="stylesheet" href="../../assets/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
</head>
<body>
    <div class="container-fluid">
<div class="row">


<div style ="min-height-:100h" class="col-md-3 bg-dark">

<a href= "" class="txt-white">Menus</a>


</div>

<div class="col-md-6">
    <hr>

<div class="card card-success">
    <div class="card-header">
        <h6>Create product     </h6>


        <?php if($inserted)//{ 
         : ?>
        <p class="text-success"> Data inserted Successfully</p>
      <?php //}
       endif;?>

    </div>

    <div class="card-body">

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Name </label>
            <input name="product_name" class="form-control" type="text">
            
        </div>
        <div class=" form-group">
            <label>Product Price </label>
        <input name="product_price" class="form-control" type="text">
        </div>

        <div class="form-group">
            <label>Image</label>
<input type="file" class="form-control" name="image">
        </div>

        <input type="submit" class="btn btn-sm btn-warning" value="Save">    </form>
    


</div>
</div>
</div>



</div>

    </div>
</body>
</html>