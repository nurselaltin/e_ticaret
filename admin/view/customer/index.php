<?php require admin_view('static/header');?>


<!--content-->
<div class="content">

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
                    <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="<?= admin_url('delete-customer?id='.$customer['user_id'])?>" class="btn">Sil</a>
                </td>
            </tr>
            <?php }?>

            </tbody>
        </table>
    </div>

</div>



<?php require admin_view('static/footer');?>
