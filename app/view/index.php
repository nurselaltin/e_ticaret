

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
                    <!-- pills start -->
                    <!-- ================ -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item"><a class="nav-link active" href="<?= public_url();?>#pill-1" role="tab" data-toggle="tab" title="Latest Arrivals"><i class="icon-star"></i> Latest Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= public_url();?>#pill-2" role="tab" data-toggle="tab" title="Featured"><i class="icon-heart"></i> Featured</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= public_url();?>#pill-3" role="tab" data-toggle="tab" title="Top Sellers"><i class=" icon-up-1"></i> Top Sellers</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content clear-style">
                        <div class="tab-pane active" id="pill-1">
                               <div class="row masonry-grid-fitrows grid-space-10">
                                   <?php foreach ($products as $product){?>
                                       <div class="col-lg-3 col-md-6 masonry-grid-item">
                                       <div class="listing-item white-bg bordered mb-20">
                                           <div class="overlay-container">
                                               <img src="<?= public_url();?>images/product-1.jpg" alt="">
                                               <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                               <span class="badge">30% OFF</span>
                                               <div class="overlay-to-top links">
                                                    <span class="small">
                                                   <!--   <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                                                      <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>-->
                                                    </span>
                                               </div>
                                           </div>
                                           <div class="body">
                                               <h3><a  href="<?= base_url('product?id='.$product['id'])?>"><?= $product['product_title']?></a></h3>
                                               <p class="small"><?= $product['product_description']?></p>
                                               <div class="elements-list clearfix">
                                                   <span class="price"><del></del> $<?= $product['product_price']?></span>
                                                   <a href="<?= base_url('?id='.$product['id']);?>" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <?php }?>
                               </div>
                        </div>
                    </div>
                    <!-- pills end -->

                    <!-- pagination start -->
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="<?= public_url();?>#" aria-label="Previous">
                                    <i aria-hidden="true" class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="<?= public_url();?>#">1</a></li>
                            <li class="page-item"><a class="page-link" href="<?= public_url();?>#">2</a></li>
                            <li class="page-item"><a class="page-link" href="<?= public_url();?>#">3</a></li>
                            <li class="page-item"><a class="page-link" href="<?= public_url();?>#">4</a></li>
                            <li class="page-item"><a class="page-link" href="<?= public_url();?>#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="<?= public_url();?>#" aria-label="Next">
                                    <i aria-hidden="true" class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- pagination end -->
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

