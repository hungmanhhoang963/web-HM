<?php
    $product_shuffle = $product->getData();
?>

<section id="top-hot" data-aos="fade-up">
    <div class="container py-5">
        <h4 class="font-roboto font-size-20" style="text-align:center"> Top Sản Phẩm HOT</h4>
        <h3 class="font-roboto font-size-16" style="text-align:center"> Những sản phẩm thời trang mới nhất</h3>
        <hr>

        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>
            <div class="item py-2" data-aos="fade-up">
                <div class="product">
                    <a href="<?php printf('%s?item_name=%s','product.php',$item['item_name'])?>"><img src="<?php echo $item["item_image"]; ?>" alt="product1" class="img-fluid"></a>
                </div>


                <div class="image-wrapper">
                    <a href="<?php printf('%s?item_name=%s','product.php',$item['item_name'])?>"><img src="<?php
                        if($item["image_hover"] == "NULL"){
                        echo $item["item_image"];
                     }
                        else{
                            echo $item["image_hover"];
                        }
                     ?>" alt="product1.1"></a>
                </div>
                <div class="text-center font-roboto">
                    <h6><?php echo $item["item_name"]; ?></h6>
                    <div class="price py-2">
                                <span><?php echo $item["item_price"] ?? '0'; ?>
                                </span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>