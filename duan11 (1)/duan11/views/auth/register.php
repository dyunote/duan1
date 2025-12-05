<link rel="stylesheet" href="public/css/style.css">
<div class="auth-container">
    <img src="public/img/logo.png" alt="CasaGo" />
    <h3>Đăng Ký</h3>

    <form action="index.php?act=register_action" method="post">
        <input type="text" name="fullname" placeholder="Họ và Tên" />
        <input type="text" name="phone" placeholder="Số điện thoại" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="pass" placeholder="Password" />
        <input type="password" name="repass" placeholder="Nhập lại Password" />
        <button class="auth-btn">Đăng Ký</button>

        <div class="link">
            Đã có tài khoản? <a href="index.php?act=login">Đăng nhập</a>
        </div>
    </form>
</div>
