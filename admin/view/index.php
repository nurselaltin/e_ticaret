<?php require admin_view('static/header');?>



    <!--ÜYELER-->

    <div class="box-">
        <h1>
            ÜYELER
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Kullanıcı Adı</th>
                <th class="hide">Email</th>
                <th class="hide">Telefon</th>
                <th class="hide">Rütbe</th>
                <th class="hide">Kayıt Tarihi</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($customers as $customer){?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?= $customer['user_fullname']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $customer['user_email']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $customer['user_phone']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $customer['user_rank']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $customer['user_date']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="http://localhost:8080/e_ticaret/admin/edit-user?id=" class="btn">Düzenle</a>
                        <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="<?= admin_url('delete-customer?id='.$customer['user_id'])?>" class="btn">Sil</a>
                    </td>
                </tr>
            <?php }?>

            </tbody>
        </table>
    </div>


    <!--ÜRÜNLER-->

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <h1>
            ÜRÜNLER
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Sıralama</th>
                <th>Ürün Adı</th>
                <th class="hide">Ürün Açıklama</th>
                <th class="hide">Ürün Resmi</th>
                <th class="hide">Adet</th>
                <th class="hide">Renk</th>
                <th class="hide">Beden</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php $index=0;?>
            <?php foreach ($products as $product){?>
                <?php $index++;?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?= $index;?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $product['product_title'];?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $product['product_description'];?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $product['product_img'];?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $product['product_count'];?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $product['product_color'];?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $product['product_size'];?>
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

    <!--SİPARİŞLER-->

    <div class="clear" style="height: 10px;"></div>

    <div class="box-">
        <h1>
           SİPARİŞLER
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th>Kullanıcı Adı</th>
                <th class="hide">Email</th>
                <th class="hide">Kayıt Tarihi</th>
                <th class="hide">Rütbe</th>
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
                <td>
                    <a href="#" class="title">
                        dasdds
                    </a>
                </td>
                <td>
                    <a href="#" class="title">
                        dasdds
                    </a>
                </td>
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




<?php require admin_view('static/footer');?>
