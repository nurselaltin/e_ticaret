<?php require  admin_view('static/header');?>

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
        <?php  foreach ($meta as $key=>$value){?>
            <li class="<?php echo  ($key == 'index' ) ? 'active': null ;?>">
                <a href="<?= admin_url($key)?>" >
                    <span class="fa fa-<?= $value['icon']?>"></span>
                    <span class="title">
                    <?= $value['title'];?>
                </span>
                </a>
                <?php if(isset($value['submenu'])){?>
                    <ul class="sub-menu">
                      <?php foreach ($value['submenu'] as $k=>$submenu){?>
                          <li class="active">
                              <a href="<?= admin_url($k)?>">
                                  <?= $submenu?>
                              </a>
                          </li>
                      <?php }?>
                    </ul>
                <?php }?>
            </li>
            <li class="line">
                <span></span>
            </li>
        <?php  }?>
    </ul>

</div>

<!--content-->
<div class="content">

    <div class="box-container">
        <div class="box" id="div-0">
            <h3>Title was here!</h3>
            <div class="box-content">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>

    <div class="box-container container-25">
        <div class="box" id="div-1">
            <h3>
                Quick Draft
            </h3>
            <div class="box-content">
                <form action="" class="form">
                    <ul>
                        <li>
                            <input type="text" id="input" placeholder="Title">
                        </li>
                        <li>
                            <textarea name="" id="" cols="30" rows="5" placeholder="Whats on your mind?"></textarea>
                        </li>
                        <li>
                            <button type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div class="box-container container-50">
        <div class="box" id="div-2">
            <h3>
                Activity
            </h3>
            <div class="box-content">
                Yaz bir şeyler şenlensin yürekler :)
            </div>
        </div>
    </div>

    <div class="box-container container-25">
        <div class="box" id="div-3">
            <h3>
                Quick Draft
            </h3>
            <div class="box-content">
                <form action="" class="form">
                    <ul>
                        <li>
                            <label for="title" class="title">Title</label>
                            <input type="text" id="title">
                        </li>
                        <li>
                            <label for="message" class="title">Whats on your mind?</label>
                            <textarea name="" id="message" cols="30" rows="5"></textarea>
                        </li>
                        <li>
                            <button type="submit">Submit</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

</div>

<?php require  admin_view('static/footer');?>