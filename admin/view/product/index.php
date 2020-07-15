

<?php require  admin_view('static/header');?>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <h1>
        ÜRÜNLER
    </h1>
</div>
<div >
    <a class="btn btn-primary" href="<?= admin_url('add-product')?>" role="button">Yeni Ürün Ekle</a>
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
                    <a href="<?= admin_url('update-product?id='.$product['id'])?>" class="btn">Düzenle</a>
                    <a onclick="return confirm('Silme işlemini yapıyorsunuz')" href="<?= admin_url('delete-product?id='.$product['id'])?>" class="btn">Sil</a>
                </td>
            </tr>
        <?php }?>

        </tbody>
    </table>
</div>
<?php require  admin_view('static/footer')?>

