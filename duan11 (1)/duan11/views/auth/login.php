<link rel="stylesheet" href="public/css/style.css">
<div class="auth-container">
    <div class="auth-title">
        <img src="public/img/logo.png" alt="CasaGo" />
        <h3>Đăng Nhập</h3>
    </div>

    <form action="index.php?act=login_action" method="post">
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />

        <div class="link" style="text-align:right;margin-right:20px">
            <a href="index.php?act=forget">Quên mật khẩu?</a>
        </div>

        <button class="auth-btn">Đăng Nhập</button>

        <div class="link">
            Chưa có tài khoản?
            <a href="index.php?act=register">Đăng ký</a>
        </div>
    </form>
</div>
