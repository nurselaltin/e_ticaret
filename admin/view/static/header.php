<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta charset="UTF-8">
    <title>Document</title>

    <!--styles-->
    <link rel="stylesheet" href="<?php echo admin_public_url('styles/main.css?v='.time());?>">

    <!--scripts-->
    <script src="<?php echo admin_public_url('scripts/jquery-1.12.2.min.js');?>"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>-->
    <script src="<?php echo admin_public_url('scripts/admin.js');?>"></script>
    <!--styles-->
    <link rel="stylesheet" href="<?= admin_public_url('styles/main.css');?>">

    <!--scripts-->
    <script src="<?php echo admin_public_url('scripts/jquery-1.12.2.min.js')?>"></script>
    <script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>
    <script src="<?php echo admin_public_url('scripts/admin.js')?>;"></script>



</head>
<body>

<?php if(route(1) != 'login' && route(1) != 'sign_up'){?>


    <!--navbar-->
    <div class="navbar">
        <ul dropdown>
            <li>
                <a href="#">
                    <span class="fa fa-home"></span>
                    <span class="title">
                    ANOTHER WORDPRESS SITE
                </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fa fa-comment"></span>
                    1
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="fa fa-plus"></span>
                    <span class="title">New</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            New Post
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            New Page
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            New Category
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!--sidebar-->
    <div class="sidebar">

        <ul>

            <?php foreach ($meta as $key=>$menu){?>
                <li class="<?= ($key == 'index') ? 'active': null ?>">
                    <a href="<?= admin_url($key)?>" >
                        <span class="fa fa-<?=$menu['icon']?>"></span>
                        <span class="title">
                      <?= $menu['title'];?>
                    </span>
                    </a>
                    <?php if(isset($menu['submenu'])){?>
                        <ul class="sub-menu">
                            <?php foreach ($menu['submenu'] as $k=>$submenu){?>
                                <li class="active">
                                    <a href="<?= $k;?>">
                                        <?= $submenu;?>
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                    <?php }?>
                </li>
            <?php }?>

        </ul>

    </div>
<?php }?>
