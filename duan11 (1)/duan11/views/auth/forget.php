<?php if ($_GET['act'] == 'forget'): ?>
    <style>
        .header-top,
        .menu,
        .footer-casago {
            display: none !important;
        }

        body {
            background: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .form-wrapper {
            max-width: 360px !important;
            width: 100%;
            margin: 170px auto;
            background: #fff;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            box-sizing: border-box;
        }

        .form-wrapper h1 {
            text-align: center;
            color: #d40000;
            margin-bottom: 6px;
            font-size: 22px;
            font-weight: bold;
        }

        .desc {
            text-align: center;
            color: #666;
            margin-bottom: 22px;
            font-size: 13px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 13px;
        }

        /* INPUT CƠ BẢN */
        .input-text {
            width: 100%;
            height: 42px;
            padding: 0 12px;
            font-size: 13px;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        /* OTP FLEX – KHÔNG BAO GIỜ TRÀN */
        .otp-container {
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
            margin-bottom: 16px;
        }

        .otp-input {
            flex: 1;
            height: 42px;
            padding: 0 12px;
            font-size: 13px;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .otp-btn {
            white-space: nowrap;
            height: 42px;
            padding: 0 14px;
            background: linear-gradient(90deg, #d40000, #ff1a1a);
            border: none;
            border-radius: 10px;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-row {
            display: flex;
            justify-content: space-between;
            margin-top: 18px;
            gap: 10px;
        }

        .btn-back {
            background: #fff;
            border: 2px solid #d40000;
            color: #d40000;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 13px;
            cursor: pointer;
            width: 100%;
        }

        .btn-next {
            background: linear-gradient(90deg, #d40000, #ff1a1a);
            border: none;
            color: #fff;
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
        }
    </style>
<?php endif; ?>

<div class="form-wrapper">
    <img class="logo" src="public/images/logo.png" alt="CasaGo"
        style="display:block;margin:0 auto 16px;height:50px" />

    <h1>Quên mật khẩu</h1>
    <p class="desc">Nhập số điện thoại và email để khôi phục mật khẩu.</p>

    <form action="index.php?act=forget_action" method="post">
        <label>Số điện thoại</label>
        <input type="text" name="phone" class="input-text" placeholder="Nhập số điện thoại">

        <label>Email đăng nhập</label>
        <input type="text" name="email" class="input-text" placeholder="Nhập Email đăng nhập">

        <label>Nhập mã OTP</label>
        <div class="otp-container">
            <input type="text" name="otp" class="otp-input" placeholder="Nhập mã OTP">
            <button type="button" class="otp-btn">Lấy mã OTP</button>
        </div>

        <div class="btn-row">
            <a href="index.php?act=login" style="width: 100%;">
                <button type="button" class="btn-back">◀ Quay lại</button>
            </a>

            <button class="btn-next">Tiếp tục</button>
        </div>
    </form>
</div>