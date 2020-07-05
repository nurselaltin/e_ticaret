<?php require admin_view('static/header');?>



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
                <th>Sipariş Veren Ad Soyad</th>
                <th class="hide">Sipariş No</th>
                <th class="hide">Ödeme</th>
                <th class="hide">Durum</th>
                <th class="hide">Kargo</th>
                <th class="hide">Kargo No</th>
                <th class="hide">Fiyat</th>
                <th class="hide">Sipariş Tarihi</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($orders as $order){?>
                <tr>
                    <td>
                        <a href="#" class="title">
                            <?= $order['customer_fullname']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['order_no']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['payment_type']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['state']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['cargo']?> Kargo
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['cargo_no']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['price']?>
                        </a>
                    </td>
                    <td>
                        <a href="#" class="title">
                            <?= $order['ordered_date']?>
                        </a>
                    </td>
                    <td class="hide">
                        <a href="http://localhost:8080/e_ticaret/admin/edit-user?id=" class="btn">Düzenle</a>
                        <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="<?= admin_url('delete-customer?id='.$order['user_id'])?>" class="btn">Sil</a>
                    </td>
                </tr>
            <?php }?>

            </tbody>
        </table>
    </div>





<?php require admin_view('static/footer');?>