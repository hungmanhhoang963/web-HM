<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
}
?>

<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('cart') as $item):
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item) {
                        ?>
                        <h5 class="font-roboto font-size-20">Chi tiết đơn hàng</h5>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?>" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5><?php echo $item['item_name'] ?></h5>
                                <p class="mb-0">
                                    Trắng Xanh, S /
                                    <span class="text-black"><?php echo $item['item_price'] ?></span>
                                    <span style="color:red" class="font-size-14"> (Tiết kiệm: 77,000) </span>
                                </p>
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']?>"><i
                                                    class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id']?>" class="qty_input border px-2 w-100 bg-light"
                                               disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id']?>" class="qty-down border bg-light"><i
                                                    class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id']; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit"
                                                class="btn font-baloo text-danger px-3 border-right">Delete
                                        </button>
                                    </form>
                                    <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="font-size-20 text-danger">
                                    đ<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                    }, $cart);
                endforeach;

                ?>
            </div>
            <div class="col-sm-3">
                <h5 class="font-roboto font-size-20">Người mua/nhận hàng</h5>
                <hr>
                <div class="form-group">
                    <label for="txtCustomerName">Tên</label>
                    <input type="text" class="required form-control" id="txtCustomerName" name="txtCustomerName"
                           placeholder="Tên người nhận">
                </div>
                <div class="form-group">
                    <label for="txtCustomerName">Điện thoại liên lạc</label>
                    <input type="text" class="required form-control" id="txtCustomerPhone"
                           name="txtCustomerPhone" placeholder="Số điện thoại">
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="chosePickupAddress" checked="checked" value="shipToHome">
                        Nhận hàng tại nhà/công ty/bưu điện

                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="chosePickupAddress" value="pickFromShop">
                        Nhận hàng tại cửa hàng YaMe gần nhất
                    </label>
                </div>
                <div class="form-group">
                    <label for="txtNote">
                        Ghi Chú
                    </label>
                    <textarea name="txtNote" id="txtNote" cols="30" class="form-control" rows="2"></textarea>
                </div>
                <button class="js-btnPlaceOrder btn btn-info fw" style="width:100%">Đặt hàng</button>

            </div>
            <div class="col-sm-12">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Cảm ơn bạn đã đến
                        shop HM.</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Tổng Tiền
                            (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span
                                    class="text-danger">đ<span class="text-danger"
                                                               id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span>
                        </h5>
                        <button type="submit" class="btn btn-warning mt-3">MUA</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>