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
              <h1 class="page-title">Checkout Payment</h1>
              <div class="separator-2"></div>
              <!-- page-title end -->

              <fieldset>
                <legend>Payment</legend>
                <form class="form-horizontal" id="payment-information">
                  <div class="row">
                    <div class="col-xl-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Credit Card<i class="fa fa-cc-visa pl-10"></i><i class="fa fa-cc-amex pl-10"></i><i class="fa fa-cc-mastercard pl-10"></i>
                        </label>
                      </div>
                      <div class="space-bottom"></div>
                    </div>
                    <div class="col-xl-9">
                      <div class="form-group row">
                        <label for="paymentFirstName" class="col-lg-3 control-label text-lg-right col-form-label">First Name<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="paymentFirstName" value="First Name">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="paymentLastName" class="col-lg-3 control-label text-lg-right col-form-label">Last Name<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-lg-4">
                              <input type="text" class="form-control" id="paymentLastName" value="Last Name">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right col-form-label">Credit Card<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-lg-4">
                              <select class="form-control">
                                <option value="visa" selected="selected">VISA</option>
                                <option value="master-card">Master Card</option>
                                <option value="american-express">American Express</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right col-form-label">Card Number<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-6 col-md-2 mb-4 mb-md-0">
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-2 mb-4 mb-md-0">
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-2 mb-4 mb-md-0">
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col-md-2 mb-4 mb-md-0">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right col-form-label">Expiration Date<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-6 col-md-2">
                              <select class="form-control">
                                <option value="01" selected="selected">01</option>
                                <option value="03">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                              </select>
                            </div>
                            <div class="col-6 col-md-2">
                              <select class="form-control">
                                <option value="2018" selected="selected">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-lg-3 control-label text-lg-right col-form-label">CVS<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-6 col-md-2">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Paypal<i class="fa fa-cc-paypal pl-10"></i>
                        </label>
                      </div>
                      <div class="space-bottom"></div>
                    </div>
                    <div class="col-xl-9">
                      <div class="form-group row">
                        <label for="paymentEmail" class="col-lg-3 control-label text-lg-right col-form-label">Email<small class="text-default">*</small></label>
                        <div class="col-lg-9">
                          <div class="row">
                            <div class="col-lg-8">
                              <input type="email" class="form-control" id="paymentEmail" value="Email">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                          Cash On Delivery
                        </label>
                      </div>
                      <div class="space-bottom"></div>
                    </div>
                    <div class="col-xl-9">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quo, non sint nisi, corrupti fuga qui quod autem totam, molestias reiciendis ex unde. Molestias, nostrum numquam, beatae totam esse ab.</p>
                    </div>
                  </div>
                </form>
              </fieldset>
              <div class="text-right">
                <a href="shop-checkout.html" class="btn btn-group btn-default"><i class="icon-left-open-big"></i> Go Back</a>
                <a href="<?=base_url('shop-checkout-review');?>" class="btn btn-group btn-default">Review and Complete Your Order <i class="icon-right-open-big"></i></a>
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
