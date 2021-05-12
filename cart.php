<?php 
  //page controller
  $pageUi='index';
  include_once 'config.php';
?>
<!doctype html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
    
    
    

    

    <title>فلورا</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="">
    <!-- Fontawesome kit -->
    <script src="https://kit.fontawesome.com/2370aca281.js" crossorigin="anonymous"></script>
  </head>
  <body class="">
    <!----------------------------- headers ------------------------------------>
    <header>

        <div class="container-fluid">
          <!----------------------------- fisrt header ------------------------------------>
          <div class="row">

            <div class="d-flex flex-row justify-content-between align-items-end bg-light p-3 pb-2">
              <div class="col-md-4 ms-2">
                <a href="#"><img src="assets/images/logo/flora.png" alt="" width="200px"></a>
              </div>
              <div class="d-flex align-items-center">
              <button class="btn btn-outline-dark rounded-pill me-2">وارد شوید<i class="fas fa-user ms-1"></i></button> 
              </a> <i class="me-2">|</i>
              <a href="#"><i class="fas fa-shopping-cart cart-cart"></i></a>
              
              </div>
            </div>

          </div>
          <!----------------------------- first header ------------------------------------>

          <!----------------------------- second header ------------------------------------>
          <div class="row bg-warning" >
            <div class="p-3">categories</div>
          </div>
          <!----------------------------- second header ------------------------------------>

        </div>
    
    </header>
    <!----------------------------- headers ------------------------------------>
    <!----------------------------- cart items + summary ------------------------------------>
    <main>
      <!-- heading -->
      <div class="container ms-0">
        <div class="row p-3">
          <div class="col-md-12 border-bottom border-3">
            <div class="d-flex flex-row align-items-center mb-3">
              <i class="fas fa-shopping-cart cart-cart me-2"></i><p class="h4">سبد خرید</p>
            </div>
          </div>
        </div>
      </div>
      <!-- heading -->

      <!-- cart items -->
      <div class="container">
        <!-- Item in cart -->
        <div class="col-12 col-md-10 p-2 my-3 rounded" style="background-color:#ffcdda;">
          <div class="d-flex flex-row align-items-center flex-start">
            <div class="p-2 me-3">
              <img src="assets/images/product-sample.jpg" style="height: 9rem;" alt="" class="img-thumbnail">
            </div>    
            <div class="d-flex flex-column mt-2 align-self-start justify-content-between" style="height: 9rem">
              <p class="h5 mb-4">نام محصول</p>
              <div class="d-flex flex-row align-items-center">
                <p class="m-0">تعداد:</p>
                <input type="email" class="form-control mx-1 ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" size="2" value="1">
                <button class="btn p-1" type="button"><i class="fas fa-plus"></i></button>
                <button class="btn p-1" type="button"><i class="fas fa-minus"></i></button>
              </div>
              <div class="d-flex flex-row align-items-center">
              <i class="fas fa-trash-alt me-2"></i>
              <p class="m-0">حذف از سبد خرید</p>
              </div>
            </div>
            <div class="ms-auto align-self-end rounded bg-info p-2 text-nowrap">
              <p class="m-0">17000 تومان</p>
            </div>
          </div>
        </div>
        <!-- Item in cart -->
        <!-- Item in cart -->
        <div class="col-12 col-md-10 p-2 my-3 rounded" style="background-color:#ffcdda;">
          <div class="d-flex flex-row align-items-center flex-start">
            <div class="p-2 me-3">
              <img src="assets/images/product-sample.jpg" style="height: 9rem;" alt="" class="img-thumbnail">
            </div>    
            <div class="d-flex flex-column mt-2 align-self-start justify-content-between" style="height: 9rem">
              <p class="h5 mb-4">نام محصول</p>
              <div class="d-flex flex-row align-items-center">
                <p class="m-0">تعداد:</p>
                <input type="email" class="form-control mx-1 ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" size="2" value="1">
                <button class="btn p-1" type="button"><i class="fas fa-plus"></i></button>
                <button class="btn p-1" type="button"><i class="fas fa-minus"></i></button>
              </div>
              <div class="d-flex flex-row align-items-center">
              <i class="fas fa-trash-alt me-2"></i>
              <p class="m-0">حذف از سبد خرید</p>
              </div>
            </div>
            <div class="ms-auto align-self-end rounded bg-info p-2 text-nowrap">
              <p class="m-0">17000 تومان</p>
            </div>
          </div>
        </div>
        <!-- Item in cart -->
        <!-- Item in cart -->
        <div class="col-12 col-md-10 p-2 my-3 rounded" style="background-color:#ffcdda;">
          <div class="d-flex flex-row align-items-center flex-start">
            <div class="p-2 me-3">
              <img src="assets/images/product-sample.jpg" style="height: 9rem;" alt="" class="img-thumbnail">
            </div>    
            <div class="d-flex flex-column mt-2 align-self-start justify-content-between" style="height: 9rem">
              <p class="h5 mb-4">نام محصول</p>
              <div class="d-flex flex-row align-items-center">
                <p class="m-0">تعداد:</p>
                <input type="email" class="form-control mx-1 ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" size="2" value="1">
                <button class="btn p-1" type="button"><i class="fas fa-plus"></i></button>
                <button class="btn p-1" type="button"><i class="fas fa-minus"></i></button>
              </div>
              <div class="d-flex flex-row align-items-center">
              <i class="fas fa-trash-alt me-2"></i>
              <p class="m-0">حذف از سبد خرید</p>
              </div>
            </div>
            <div class="ms-auto align-self-end rounded bg-info p-2 text-nowrap">
              <p class="m-0">17000 تومان</p>
            </div>
          </div>
        </div>
        <!-- Item in cart -->
        
      </div>
      <!-- cart items -->

      <!-- summary -->

      <!-- summary -->
  
    </main>
    <!----------------------------- cart items + summary ------------------------------------>

    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
  </body>
</html>