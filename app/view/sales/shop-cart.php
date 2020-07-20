   
   
   <?php require view('static/head');?>


<!-- header-container start -->
<?php require  view('static/header');?>
<!-- header-container end -->

      <!-- main-container start -->
      <!-- ================ -->
      <section class="main-container">

        <div class="container">
          <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">

              <!-- page-title start -->
              <!-- ================ -->
              <h1 class="page-title">Shopping Cart</h1>
              <div class="separator-2"></div>
              <!-- page-title end -->

              <table class="table cart table-hover table-colored">
                <thead>
                  <tr>
                    <th>Ürün </th>
                    <th>Fiyat </th>
                    <th>Miktar</th>
                    <th>Kaldır </th>
                    <th class="amount">Toplam </th>
                  </tr>
                </thead>
                <tbody>
                 <?php foreach($shopping_products as $shopping_product){?>

                  <tr class="remove-data">
                    <td class="product"><a href="shop-product.html"></a> <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</small></td>
                    <td class="price"><?= $shopping_product['product_price']?> TL </td>
                    <td class="quantity">
                      <div class="form-group">
                        <input type="text" class="form-control" value="<?= $shopping_product['product_count']?>">
                      </div>
                    </td>
                    <td class="remove"><a href="#" class="btn btn-remove btn-sm btn-default">Remove</a></td>
                    <td class="amount"><?= $shopping_product['product_count']*$shopping_product['product_price']  ?> TL</td>
                  </tr>
                 <?php }?>
                  <tr>
                    <td class="total-quantity" colspan="4">Total 8 Items</td>
                    <td class="total-amount"></td>
                  </tr>
                </tbody>
              </table>
              <div class="text-right">
                <a href="shop-cart.html" class="btn btn-group btn-default">Update Cart</a>
                <a href="shop-checkout.html" class="btn btn-group btn-default">Checkout</a>
              </div>

            </div>
            <!-- main end -->

          </div>
        </div>
      </section>
      <!-- main-container end -->

    </div>
    <!-- page-wrapper end -->

    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <?php require view('static/includes_scripts');?>

  </body>
</html>
   
