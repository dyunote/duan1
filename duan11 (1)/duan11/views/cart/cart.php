<?php
// giữ nguyên toàn bộ code PHP cũ của bạn
?>

<!-- GIỮ GIAO DIỆN CŨ - CHỈ BỎ <html> <head> <body> -->
<style>
    body {
        font-family: Arial, sans-serif;
        background: #fff;
        margin: 0;
        padding: 0;
    }

    .cart-container {
        width: 80%;
        margin: 30px auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .cart-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }

    .update-btn {
        margin-top: 15px;
        padding: 10px 20px;
        background: #2196F3;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .total-box {
        text-align: right;
        margin-top: 20px;
        font-size: 20px;
        font-weight: bold;
    }
</style>

<div class="cart-container">

    <h2 class="cart-title">Giỏ hàng</h2>

    <?php if (empty($cart)) : ?>
        <p>Giỏ hàng của bạn đang trống</p>
    <?php else : ?>

        <!-- GIỮ NGUYÊN FORM CŨ -->
        <form method="post" action="index.php?act=update_cart">

            <table>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>

                <?php foreach ($cart as $item) : ?>
                    <tr>
                        <td><img src="public/images/<?= $item['image']; ?>" width="70"></td>
                        <td><?= $item['name']; ?></td>
                        <td><?= number_format($item['price']); ?> đ</td>

                        <td>
                            <input
                                type="number"
                                name="qty[<?= $item['id']; ?>]"
                                value="<?= $item['qty']; ?>"
                                min="1"
                                style="width: 60px;">
                        </td>

                        <td><?= number_format($item['price'] * $item['qty']); ?> đ</td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <?php if (!empty($cart)) : ?>
                <button type="submit" class="update-btn">Cập nhật giỏ hàng</button>
            <?php endif; ?>

        </form>

        <div class="total-box">
            Tổng giá: <?= number_format($total); ?> đ
        </div>

    <?php endif; ?>

</div>