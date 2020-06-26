
<?php require  admin_view('static/header')?>
<div class="content">


    <!--EKLENEN RENKLER-->
    <div class="box-">
        <h1>
            EKLİ OLAN RENKLER
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Renk Adı</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <tr>
             <?php foreach ($categories as $category){?>

                 <td>
                     <a href="#" class="title">
                           <?= $category;?>
                     </a>
                 </td>
             <?php }?>
                <td class="hide">
                    <a href="http://localhost:8080/e_ticaret/admin/edit-user?id=" class="btn">Düzenle</a>
                    <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="" class="btn">Sil</a>
                </td>
            </tr>

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

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Beden Adı</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <a href="#" class="title">
                        dasdds
                    </a>
                </td>
                <td class="hide">
                    <a href="http://localhost:8080/e_ticaret/admin/edit-user?id=" class="btn">Düzenle</a>
                    <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="" class="btn">Sil</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

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
                        <input type="text" id="title" name="categories[color]" value="">
                </li>
                <li>
                    <label for="title">Beden </label>
                    <div class="form-content">
                        <input type="text" id="title" name="categories[size]" value="">
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