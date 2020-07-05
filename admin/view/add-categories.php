
<?php require  admin_view('static/header')?>
<div class="content">


    <div class="clear" style="height: 70px;"></div>
    <div class="box-">
        <h1>
            KAYEGORİ EKLE
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <form action=""  method="post" class="form label">
            <ul>
                <li>
                    <label for="title">Renk </label>
                    <div class="form-content">
                        <input type="text" id="title" name="color" value="">
                </li>
                <li>
                    <label for="title">Beden </label>
                    <div class="form-content">
                        <input type="text" id="title" name="size" value="">
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

    <!--EKLENEN RENKLER-->
    <div class="box-">
        <h1>
            EKLİ OLAN RENKLER
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>


    <div class="table col-md-6">
        <table>
            <thead>
            <tr>
                <th>Renk Adı</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($colors as $color){?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?= $color['color_name']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="http://localhost:8080/e_ticaret/admin/edit-user?id=" class="btn">Düzenle</a>
                        <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="" class="btn">Sil</a>
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>

    <!-- EKLENEN BEDENLER-->
    <div class="box-">
        <h1>
            EKLİ OLAN BEDENLER
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table col-md-6">
        <table>
            <thead>
            <tr>
                <th>Beden Adı</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach ($sizes as $size){?>
                  <tr>
                      <td>
                          <a href="#" class="title">
                            <?= $size['size_name']?>
                          </a>
                      </td>
                      <td class="hide">
                          <a href="http://localhost:8080/e_ticaret/admin/edit-user?id=" class="btn">Düzenle</a>
                          <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="" class="btn">Sil</a>
                      </td>
                  </tr>
              <?php }?>
            </tbody>
        </table>
    </div>






</div>
<?php require  admin_view('static/footer');?>