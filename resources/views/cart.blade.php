@extends('app')
@section('content')

<section class="container section-features text-center bg-faded">
    <h4>Shopping Cart</h4>
    <div class="container">
        <div>
            <table id="dtBasicExample" style="text-align:left" class="table table-bordered" width="100%">
                <thead>
                    <tr>
                        <th style="width:5%">No.
                        </th>
                        <th class="" style="width:20%;text-align:center">Product
                        </th>
                        <th class="">Product Details
                        </th>
                        <th class="">Price
                        </th>
                        <th class="" style="width:10%">Quantity
                        </th>
                        <th class="">Total Price
                        </th>
                        <th class="" style="width:2%;font-size:12px">Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!isset($_SESSION['cart'])){
                        echo '<h5>Anda belum melakukan transaksi</h5>';
                    }else{
                        // prx($_SESSION['cart']);
                        $no = 0;
                        $total_price = 0;
                        foreach($_SESSION['cart'] as $key=>$val) {
                            // $productArr = get_product($con,'','',$key);
                            // $pname = $productArr[0]['PRODUCT_NAME'];
                            // $category = $productArr[0]['CATEGORY_NAME'];
                            // $subcategory = $productArr[0]['SUBCATEGORY_NAME'];
                            // $short_desc = $productArr[0]['SHORT_DESC'];
                            // $price = $productArr[0]['PRICE'];
                            // $image = $productArr[0]['IMAGE'];
                            // $qty = $val['qty'];
                            // $total_price_item = $price * $qty;
                            // $total_price += $total_price_item ;
                            $no++
                    ?>
                <tr stlye="text-align:left">
                    <td stlye=""><?=$no?></td>
                    {{-- <td stlye=""><?=$no?></td>
                    <td style="text-align:center"><img style="width:40%;"
                            src="<?= PRODUCT_IMAGE_SITE_PATH.$image ?>" alt="product img" /></td>
                    <td><b><?= $pname ?></b><br><?= $category. ' - ' .$subcategory ?></td>
                    <td>Rp. <?= number_format($price) ?></td>
                    <td style="text-align:left">
                        <input style="width:35px;margin-bottom:-30px" class="form-control"
                            id="<?php echo $key ?>qty" type="number" value="<?= $qty ?>">
                        <br>
                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>', 'update')"
                            style="color:#9090ff">Update</a> </td>
                    <td>Rp. <?= number_format($price * $qty) ?></td>
                    <td style="text-align:center">
                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>', 'remove')">
                            <i class="fas fa-trash" style="color:#ff7272"></i> </a>
                    </td> --}}
                </tr>
                <?php  } 
                    }?>
                   
                </tbody>
            </table>

            {{-- <?php
                 if(isset($_SESSION['cart'])){                
                    $total_price = $total_price;                 
                 ?>
            <div style="display:flex">
                <h5>Total Transaction :
                </h5>
                <h5>Rp. <?=number_format($total_price)?>
                </h5>
            </div>
            <?php }
            ?> --}}
        </div>
        <div style="display:flex;justify-content:space-between;margin-top:30px">
            <button class="btn btn-danger btn-lg float-left">Continue Shopping</button>
            <a href="checkout" class="btn btn-danger btn-lg float-right">Checkout</a>
        </div>
    </div>
</section>
@endsection
