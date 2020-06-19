
<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">


<?php require view('static/head');?>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body class=" ">

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
    <!-- header-container start -->
    <?php require  view('static/header');?>
    <!-- header-container end -->
    <!-- banner start -->
    <!-- ================ -->
    <div class="banner dark-translucent-bg padding-bottom-clear" style="background-image:url('images/shop-banner.jpg');background-position: 50% 32%;">
        <!-- breadcrumb start -->
        <!-- ================ -->
        <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="<?= public_url();?>index.html">Home</a></li>
                    <li class="breadcrumb-item active">Shop 4 Columns</li>
                </ol>
            </div>
        </div>

        <!-- section start -->
        <!-- ================ -->
        <div class="dark-translucent-bg section">
            <div class="container-fluid">
                <!-- filters start -->
                <div class="sorting-filters text-center mb-20 d-flex justify-content-center">
                    <form class="form-inline">
                        <div class="form-group">
                            <label>Sort by</label>
                            <select class="form-control">
                                <option selected="selected">Date</option>
                                <option>Price</option>
                                <option>Model</option>
                            </select>
                        </div>
                        <div class="form-group ml-1">
                            <label>Order</label>
                            <select class="form-control">
                                <option selected="selected">Acs</option>
                                <option>Desc</option>
                            </select>
                        </div>
                        <div class="form-group ml-1">
                            <label>Price $ (min/max)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group ml-1">
                            <label class="invisible">Price $ (max)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group ml-1">
                            <label>Category</label>
                            <select class="form-control">
                                <option selected="selected">Smartphones</option>
                                <option>Tablets</option>
                                <option>Smart Watches</option>
                                <option>Desktops</option>
                                <option>Software</option>
                                <option>Accessories</option>
                            </select>
                        </div>
                        <div class="form-group ml-1">
                            <a href="<?= public_url();?>#" class="btn btn-default">Submit</a>
                        </div>
                    </form>
                </div>
                <!-- filters end -->
            </div>
        </div>
        <!-- section end -->
    </div>
    <!-- banner end -->

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
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-1.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <span class="badge">30% OFF</span>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Suscipit consequatur velit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$100.00</del> $70.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-2.jpg" alt="">
                                            <span class="badge">25% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Consectetur adipisicing elit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$199.00</del> $150.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-3.jpg" alt="">
                                            <span class="badge">33% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-3.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Quas inventore modi</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$9.99</del> $6.66</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-4.jpg" alt="">
                                            <span class="badge">20% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-4.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Lorem ipsum dolor sit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$86.25</del> $69.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-5.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Velit Suscipit consequatur</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$12.00</del> $8.40</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-6.jpg" alt="">
                                            <span class="badge">50% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-6.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Reprehenderit a reiciendis</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$158.00</del> $129.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-7.jpg" alt="">
                                            <span class="badge">40% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Cumque sequi repellat</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$49.99</del> $29.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-8.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-8.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Soluta suscipit dolore</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$11.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-2">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-2.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Consectetur adipisicing elit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$199.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-1.jpg" alt="">
                                            <span class="badge">New</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Suscipit consequatur velit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$70.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-4.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-4.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Lorem ipsum dolor sit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$99.00</del> $69.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-3.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-3.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Quas inventore modi</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$9.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-6.jpg" alt="">
                                            <span class="badge">20% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-6.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Reprehenderit a reiciendis</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$161.25</del> $129.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-5.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Velit Suscipit consequatur</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$12.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-8.jpg" alt="">
                                            <span class="badge">Offer</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-8.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Soluta suscipit dolore</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$11.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-7.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Cumque sequi repellat</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$29.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="pill-3">
                            <div class="row masonry-grid-fitrows grid-space-10">
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-4.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-4.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Lorem ipsum dolor sit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$99.00</del> $69.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-3.jpg" alt="">
                                            <span class="badge">New</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-3.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Quas inventore modi</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$9.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-2.jpg" alt="">
                                            <span class="badge">30% OFF</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Consectetur adipisicing elit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price"><del>$199.00</del> $140.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-1.jpg" alt="">
                                            <span class="badge">Last 3 Pieces</span>
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Suscipit consequatur velit</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$70.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-8.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-8.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Soluta suscipit dolore</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$11.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-7.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-7.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Cumque sequi repellat</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$29.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-6.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-6.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Reprehenderit a reiciendis</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$129.00</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 masonry-grid-item">
                                    <div class="listing-item white-bg bordered mb-20">
                                        <div class="overlay-container">
                                            <img src="<?= public_url();?>images/product-5.jpg" alt="">
                                            <a class="overlay-link popup-img-single" href="<?= public_url();?>images/product-5.jpg"><i class="fa fa-search-plus"></i></a>
                                            <div class="overlay-to-top links">
                            <span class="small">
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="fa fa-heart-o pr-10"></i>Add to Wishlist</a>
                              <a href="<?= public_url();?>#" class="btn-sm-link"><i class="icon-link pr-1"></i>View Details</a>
                            </span>
                                            </div>
                                        </div>
                                        <div class="body">
                                            <h3><a href="<?= public_url();?>shop-product.html">Velit Suscipit consequatur</a></h3>
                                            <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</p>
                                            <div class="elements-list clearfix">
                                                <span class="price">$12.99</span>
                                                <a href="<?= public_url();?>#" class="pull-right margin-clear btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
</div>
<!-- page-wrapper end -->

  <?php require view('static/includes_scripts');?>

</body>
</html>
