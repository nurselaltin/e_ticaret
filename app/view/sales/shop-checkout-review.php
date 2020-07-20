<?php require view('static/head');?>


<!-- header-container start -->
<?php require  view('static/header');?>
<!-- header-container end -->
    <!-- ================ -->
    <section class="main-container">

<div class="container">
  <div class="row">

    <!-- main start -->
    <!-- ================ -->
    <div class="main col-12">

      <!-- page-title start -->
      <!-- ================ -->
      <h1 class="page-title">Checkout Review</h1>
      <div class="separator-2"></div>
      <!-- page-title end -->

      <table class="table cart">
        <thead>
          <tr>
            <th>Product </th>
            <th>Price </th>
            <th>Quantity</th>
            <th class="amount">Total </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="product"><a href="shop-product.html">Product Title 1</a> <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</small></td>
            <td class="price">$99.50 </td>
            <td class="quantity">
              <div class="form-group">
                <input type="text" class="form-control" value="2" disabled>
              </div>                      
            </td>
            <td class="amount">$199.00 </td>
          </tr>
          <tr>
            <td class="product"><a href="shop-product.html">Product Title 2</a> <small>Quas inventore modi</small></td>
            <td class="price"> $99.66 </td>
            <td class="quantity">
              <div class="form-group">
                <input type="text" class="form-control" value="3" disabled>
              </div>                      
            </td>
            <td class="amount">$299.00 </td>
          </tr>
          <tr>
            <td class="product"><a href="shop-product.html">Product Title 3</a> <small>Fugiat nemo enim officiis repellendus</small></td>
            <td class="price"> $499.66 </td>
            <td class="quantity">
              <div class="form-group">
                <input type="text" class="form-control" value="3" disabled>
              </div>                      
            </td>
            <td class="amount">$1499.00 </td>
          </tr>
          <tr>
            <td class="total-quantity" colspan="3">Subtotal</td>
            <td class="amount">$1997.00</td>
          </tr>
          <tr>                    
            <td class="total-quantity" colspan="2">Discount Coupon</td>
            <td class="price">TheProject25672</td>
            <td class="amount">-20%</td>
          </tr>
          <tr>
            <td class="total-quantity" colspan="3">Total 8 Items</td>
            <td class="total-amount">$1597.00</td>
          </tr>
        </tbody>
      </table>
      <div class="space-bottom"></div>
      <table class="table">
        <thead>
          <tr>
            <th colspan="2">Billing Information </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Full Name</td>
            <td class="information">John Doe </td>
          </tr>
          <tr>
            <td>Email</td>
            <td class="information">johndoe@mail.com </td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td class="information">+00 123 123 1234</td>
          </tr>
          <tr>
            <td>Address</td>
            <td class="information">One infinity loop, 54100, United States</td>
          </tr>
          <tr>
            <td>Additional Info</td>
            <td class="information">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum accusamus pariatur odit neque.</td>
          </tr>
        </tbody>
      </table>
      <div class="space-bottom"></div>
      <table class="table">
        <thead>
          <tr>
            <th colspan="2">Shipping Information </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Full Name</td>
            <td class="information">John Doe </td>
          </tr>
          <tr>
            <td>Email</td>
            <td class="information">johndoe@mail.com </td>
          </tr>
          <tr>
            <td>Telephone</td>
            <td class="information">+00 123 123 1234</td>
          </tr>
          <tr>
            <td>Address</td>
            <td class="information">One infinity loop, 54100, United States</td>
          </tr>
        </tbody>
      </table>
      <div class="space-bottom"></div>
      <table class="table">
        <thead>
          <tr>
            <th colspan="2">Payment </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Credit Card</td>
            <td class="information">Visa ***917 </td>
          </tr>
        </tbody>
      </table>
      <div class="text-right">  
        <a href="shop-checkout-payment.html" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Go Back</a>
        <a href="<?=base_url('shop-checkout-completed');?>" class="btn btn-group btn-default"><i class="icon-check"></i> Complete Your Order</a>
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

  