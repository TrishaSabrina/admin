<?php
ini_set('display_errors','Off');
//include('../src/Controller/ProductController.php');
include('../../vendor/autoload.php');
$pCont=new App\Controller\ProductController;
//$inserted=$pCont->addProduct($_POST);
$products=$pCont->getAllProducts();



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
        <h6>Product List</h6>


    </div>

    <div class="card-body">
        <table class ="table">

      <tr>
<th>Product Name</th>
<th>Product Price</th>
<th>Action</th>
         </tr>
  <tbody>
      <?php foreach($products as $data){?>
      <tr>
          <td><?= $data['name'] ?></td>
          <td><?= $singleP['price']?>Taka</td>
          <td>

          <a href="/txt1/phpapp/views/admin/product-edit.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-info">Edit</a>
          </td>
</tr>

<?php  }?>
</tbody>
        </table>

</div>
</div>
</div>



</div>

    </div>
</body>
</html>