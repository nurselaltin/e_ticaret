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
                <h1 class="page-title">Shop Product</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->

                <div class="row">
                    <div class="col-lg-4">
                        <!-- pills start -->
                        <!-- ================ -->
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#pill-1" data-toggle="tab" title="images"><i class="fa fa-camera pr-1"></i> Photo</a></li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content clear-style">
                            <div class="tab-pane active" id="pill-1">
                                <div class="owl-carousel content-slider-with-large-controls">
                                    <div class="overlay-container overlay-visible">
                                        <img src="<?= public_url();?>/images/product-1.jpg" alt="">
                                        <a href="images/product-1.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                                    </div>
                                    <div class="overlay-container overlay-visible">
                                        <img src="<?= public_url();?>/images/product-1-2.jpg" alt="">
                                        <a href="images/product-1-2.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pill-2">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="<?= public_url();?>///player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
                                    <p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- pills end -->
                    </div>
                    <div class="col-lg-8 pv-30">
                        <h2 class="mt-4"><?= $product['product_title']?></h2>
                         <p><?= $product['product_description']?></p>
                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non sint beatae delectus obcaecati eveniet nulla voluptate odio est laborum veniam? Natus nemo provident, voluptate molestias sint, nam dolor blanditiis minus!</p>
                        <hr class="mb-10">
                        <div class="clearfix mb-20">
                    <span>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star text-default"></i>
                      <i class="fa fa-star"></i>
                    </span>
                            <a href="#" class="wishlist"><i class="fa fa-heart-o pl-10 pr-1"></i>Wishlist</a>
                            <ul class="pl-20 pull-right social-links circle small clearfix margin-clear animated-effect-1">
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                        </div>
                        <form class="clearfix row grid-space-10">
                            <div class="form-group col-lg-4">
                                <label>Quantity</label>
                                <input type="text" class="form-control" value="1">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Color</label>
                                <select class="form-control">
                                    <option>Red</option>
                                    <option>White</option>
                                    <option>Black</option>
                                    <option>Blue</option>
                                    <option>Orange</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Size</label>
                                <select class="form-control">
                                    <option>5.3"</option>
                                    <option>5.7"</option>
                                </select>
                            </div>
                        </form>
                        <div class="light-gray-bg p-20 bordered clearfix">
                            <span class="product price"><i class="icon-tag pr-10"></i>$99.00</span>
                            <div class="product elements-list pull-right clearfix">
                                <input type="submit" value="Add to Cart" class="margin-clear btn btn-default">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main end -->

        </div>
    </div>
</section>
<!-- main-container end -->


</div>
<!-- page-wrapper end -->

<?php require view('static/includes_scripts');?>

</body>
</html>
