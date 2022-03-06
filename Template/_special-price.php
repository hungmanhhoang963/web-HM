<?php
$type = array_map(function ($pro){ return $pro['type']; }, $product_shuffle);
$item_type = array_map(function ($pro){ return $pro['item_type']; }, $product_shuffle);

$unique = array_unique($type);
$unique_type = array_unique($item_type);

?>
<section id="special-price">
    <div class="container">
        <h4 class="font-roboto font-size-20" style="text-align:center">Special Price</h4>
        <div id="fillter" class="button-group text-right">
            <button class="btn is-checked" data-filter="*">All</button>
            <?php
            array_map(function ($item_type,$type){
                printf('<button class="btn" data-filter=".%s">%s</button>', $item_type, $type);

            }, $unique_type, $unique);
            ?>
        </div>

        <div class="grid" data-aos="fade-up">
            <?php array_map(function ($item) { ?>
                <div class="grid-item border <?php echo $item["item_type"]; ?>">
                    <div class="item py-2" style="width:200px;" >
                        <div class="product">
                            <a href="<?php printf('%s?item_name=%s','product.php',$item['item_name'])?>"><img src="<?php echo $item["item_image"]; ?>" alt="product1"
                                             class="img-fluid"></a>
                        </div>
                        <div class="image-wrapper">
                            <a href="<?php printf('%s?item_name=%s','product.php',$item['item_name'])?>"><img src="<?php
                                if ($item["image_hover"] == "NULL") {
                                    echo $item["item_image"];
                                } else {
                                    echo $item["image_hover"];
                                }
                                ?>" alt="x"></a>
                        </div>
                        <div class="text-center font-roboto">
                            <h6><?php echo $item["item_name"]; ?></h6>
                            <div class="price py-2">
                                    <span><?php echo $item["item_price"]; ?>₫
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>