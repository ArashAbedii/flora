<?php
    $pageUi="userorders";
    include_once 'config.php';
?>
<?php include 'upcommonheader.php'; ?>

    <!----------------------------- ordrs ------------------------------------>
    <main>
        <div class="p-3">
          <nav>
            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
              <a href="userprofile.php" class="text-decoration-none"><button class="nav-link" aria-selected="false"><i class="fas fa-user me-1"></i>اطلاعات شخصی</button></a>
              <a href="userorders.php" class="text-decoration-none"><button class="nav-link active" aria-selected="true"><i class="fas fa-box-open me-1"></i>سفارسشات من</button></a>
              <a href="useraddress.php" class="text-decoration-none"><button class="nav-link" aria-selected="false"><i class="fas fa-map-signs me-1"></i>آدرس های من</button></a>
            </div>
          </nav>
            <div class="tab-content" id="nav-tabContent">
        
                <div class="tab-pane fade active show" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
                <div class="table-responsive">
                <table class="table table-striped table-sm text-nowrap">
                  <?php if($orders): ?>
                    <thead>
                          <tr>
                          <th>#شماره سفارش</th>
                          <th>مبلغ</th>
                          <th>تاریخ سفارش</th>
                          <th>وضعیت</th>
                          <th>جزئیات/فاکتور</th>
                          </tr>
                    </thead>
                    <?php foreach($orders as $order): 
                        //order Object
                        $orderObj=new Order($order['id']);
                    ?>
                   

                    <tbody>


                          <tr>
                            <td><?php echo $orderObj->getCode(); ?></td>
                            <td><?php echo number_format($orderObj->getSumPrice()); ?>تومان</td>
                            <td>1400/03/12</td>
                            <td><i class="far fa-question-circle me-1"></i><?php echo getOrderStatus($orderObj->getStatus()); ?></td>
                            <td>
                                <div class="d-flex flex-row">
                                <a href="userorderdetails.php?id=<?php echo $orderObj->getId(); ?>" class="btn btn-outline-primary me-1">جزئیات</a>
                                <a href="orderreceipt.php?id=<?php echo $orderObj->getId(); ?>" class="btn btn-outline-danger">فاکتور</a>
                                </div>
                            </td>
                          </tr>


                            <?php endforeach; ?>

                    </tbody>
                  </table>
                  <?php else: ?>
                      <p>سفارش های شما خالی است</p>
                  <?php endif; ?>
                </div>
                </div>
            </div>
        </div>
    </main>
    <!----------------------------- ordrs ------------------------------------>


    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- slick carousel needed files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
    <!-- slick carousel script TEMPORARY -->
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 7,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ]
          });
                  });
      </script>
  </body>
</html>