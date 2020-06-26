
<?php require  admin_view('static/header')?>
<div class="content">

    <div class="box-">
        <h1>
            ÜRÜNÜN BİLGİLERİNİ GİRİNİZ
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action=""  method="post" class="form label">
            <ul>
                <li>
                    <label for="title">Ürün Adı </label>
                    <div class="form-content">
                        <input type="text" id="title" name="product[title]" value="">
                </li>
                <li>
                    <label for="title">Ürün Açılama</label>
                    <div class="form-content">
                        <input type="text" id="title" name="product[description]" value="">
                    </div>
                </li>

                <li>
                    <label for="title">Ürün Resmi</label>
                    <div class="form-content">
                        <input type="file" id="title" name="product[img]" value="">
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
                        <input type="text" id="title" name="settings[keywords]" value="">
                    </div>
                </li>
                <li>
                    <label for="title">Renk</label>
                    <div class="form-content">
                        <select name="settings[theme]" id="">
                            <option value="">-Renk seç</option>
                            <?php foreach ($colors as $color):?>
                                <option value="<?php echo $color;?>"><?php echo  $color;?></option>
                            <?php endforeach;?>
                        </select>

                    </div>
                </li>
                <li>
                    <label for="title">Beden</label>
                    <div class="form-content">
                        <select name="settings[theme]" id="">
                            <option value="">-Beden seç</option>
                            <?php foreach ($sizes as $size):?>
                                <option  value="<?php echo $size;?>"><?php echo  $size;?></option>
                            <?php endforeach;?>
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