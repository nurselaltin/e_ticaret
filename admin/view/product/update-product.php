
<?php require  admin_view('static/header')?>
<div class="content">

    <div class="box-">
        <h1>
            ÜRÜNÜN BİLGİLERİNİ GİRİNİZ
        </h1>
    </div>
    <div >
        <a class="btn btn-primary" href="<?= admin_url('products')?>" role="button">Ürünleri Göster</a>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action=""  method="post" class="form label">
            <ul>
                <li>
                    <label for="title">Ürün Adı </label>
                    <div class="form-content">
                        <input type="text" id="title" name="title" value="<?= $product['product_title']?>" required>
                </li>
                <li>
                    <label for="title">Ürün Açılama</label>
                    <div class="form-content">
                        <input type="text" id="title" name="description" value="<?= $product['product_description']?>" required>
                    </div>
                </li>

                <li>
                    <label for="title">Ürün Resmi</label>
                    <div class="form-content">
                        <input type="file" id="title" name="img" value="<?= $product['product_img']?>" required>
                    </div>
                </li>

                <div class="box-">
                    <h1>
                        Ürün Özellikleri
                    </h1>
                </div>
                <li>
                    <label for="title">Ürün Adedi</label>
                    <div class="form-content">
                        <input type="text" id="title" name="count" value="<?= $product['product_count']?>" required>
                    </div>
                </li>
                <li>
                    <label for="title">Renk</label>
                    <div class="form-content">
                        <select name="color" id="">
                            <option value="">-Renk seç</option>
                            <?php foreach ($colors as $color):?>
                                <option   <?= ($product['product_color'] == $color['color_name']) ? 'selected' : null ?>  value="<?= $color['color_name'];?>"><?=  $color['color_name'];?></option>
                            <?php endforeach;?>
                        </select>

                    </div>
                </li>
                <li>
                    <label for="title">Beden</label>
                    <div class="form-content">
                        <select name="size" id="">
                            <option value="">-Beden seç</option>
                              <?php foreach ($sizes as $size){?>
                                  <option <?= ($product['product_size'] == $size['size_name']) ? 'selected' : null ?>   value="<?= $size['size_name'] ?>"><?= $size['size_name'] ?></option>
                              <?php }?>
                        </select>

                    </div>
                </li>
            </ul>
            <div class="clear" style="height: 10px;"></div>
          <ul>
              <li class="submit">
                  <input type="hidden" name="submit" value="1">
                  <button type="submit">KAYDET</button>
              </li>
          </ul>
        </form>
    </div>

</div>
<?php require  admin_view('static/footer');?>