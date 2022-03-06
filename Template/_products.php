<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['product_submit'])) {
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}

$item_name = $_GET['item_name'];
foreach ($product->getData() as $item) :
    if ($item['item_name'] == $item_name) :
        ?>
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?php echo $item['item_image']?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">MUA</button>
                            </div>
                            <div class="col">
                                <form method="post">
                                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                                    <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                    <?php
                                        if(in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Đã Thêm Vào Giỏ Hàng</button>';
                                        }
                                        else{
                                            echo '<button type="submit" name="product_submit" onclick="myFunction()"
                                            class="btn btn-warning form-control text-white">Thêm
                                        vào giỏ hàng
                                            </button>';
                                        }
                                    ?>

                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <br>
                        <h5 class="text-black display-5"><?php echo $item['item_name']?>
                        </h5>
                        <small class="text-black mb-0 font-size-14 gallerys">Chất liệu:
                            <a href="../assets/material/chat-lieu-vai-cotton-yody.vn4.jpg" class="swipebox"
                               title="Chất liệu">
                                <?php echo $item['item_material']?>
                            </a>
                        </small>
                        <p class="font-roboto"><?php printf('%s / Mã số: %s',$item['item_brand'],$item['item_id'])?></p>

                        <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Giá Gốc</td>
                                <td><strike><?php echo $item['item_price']?>₫</strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Giá Khuyến Mãi</td>
                                <td class="font-size-20 text-danger">: <span>50.000₫</span><small class="text-dark">
                                        <?php printf('(Tiết kiệm -%d₫)', $item['item_price'] - 50000)?> </small></td>
                            </tr>
                        </table>

                        <div class="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-14">Có thể đổi/trả <br> sau 10 ngày</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-14">Giao Hàng Tận Nơi</a>
                                </div>
                            </div>
                        </div>
                        <br>

                        <h6 class="font-baloo">Size:</h6>
                        <div class="row">
                            <div class="col-6">
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="p-2 color-red-bg rounded-circle">
                                            <button
                                                    class="btn font-size-14 text-white">&#120138;
                                            </button>
                                        </div>
                                        <div class="p-2 color-primary-bg rounded-circle">
                                            <button
                                                    class="btn font-size-14 text-white">&Mopf;
                                            </button>
                                        </div>
                                        <div class="p-2 color-second-bg rounded-circle">
                                            <button
                                                    class="btn font-size-14 text-white">&Lopf;
                                            </button>
                                        </div>
                                        <div class="p-2 color-purple-bg rounded-circle">
                                            <button
                                                    class="btn font-size-14 text-white">&Xopf;
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <br>
                        <br>
                        <h6 class="font-roboto">Giới thiệu sản phẩm</h6>
                        <hr>
                        <h5><?php echo $item['item_name']?></h5>
                        <ul>
                            <li>Chất liệu: Vải dù</li>
                            <li>Thành Phần: 100% poly</li>
                            <li>Thấm hút thoát ẩm</li>
                            <li>Mềm mại, ít nhăn</li>
                            <li>Co giãn tối ưu</li>
                            <li>Khô nhanh</li>
                            <li>Họa tiết in chuyển nhiệt</li>
                        </ul>


                    </div>

                </div>
        </section>
    <?php
    endif;
endforeach;
?>