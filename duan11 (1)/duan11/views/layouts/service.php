<style>
    .Service-page {
        width: 90%;
        margin: 0 auto;
        padding: 30px 0;
        font-family: Arial, sans-serif;
    }

    .Service-title {
        background: #D7001B;
        color: #fff;
        display: inline-block;
        padding: 12px 30px;
        border-radius: 4px;
        font-size: 18px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .Service-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 35px 25px;
    }

    .service-item {
        display: flex;
        gap: 15px;
        align-items: flex-start;
    }

    .service-item img {
        width: 150px;
        height: 120px;
        object-fit: cover;
        border-radius: 3px;
    }

    .service-info a.title {
        color: #000;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        line-height: 1.3;
    }

    .service-info a.title:hover {
        color: #D7001B;
    }

    .service-info .desc {
        margin-top: 6px;
        color: #444;
        font-size: 13px;
    }

    .Service-page *,
    .Service-page {
        box-sizing: border-box;
    }

    .service-item {
        align-items: flex-start;
        position: relative;
    }

    .service-item img {
        flex-shrink: 0;
        /* Không cho ảnh bị co hoặc giãn */
    }

    .Service-list {
        position: relative;
    }
</style>

<div class="Service-page">

    <div class="Service-title">Dịch Vụ</div>

    <div class="Service-list">

        <!-- ITEM 1 -->
        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">Bếp Thông Minh cung cấp dịch vụ bảo trì định kỳ 25.06.2025 đến 29.06.2025</a>
            </div>
        </div>

        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">Dịch vụ lắp đặt phụ kiện inox nhà bếp Euromax với ưu đãi 55%</a>
                <div class="desc">Thời gian áp dụng từ 01/09 – 19/09/2025.</div>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">Chào đón các đại lý mới tháng 9 năm 2025 với dịch vụ hỗ trợ</a>
            </div>
        </div>

        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">CasaGo giao hàng phục vụ Khách Hàng ở các tỉnh thành lân cận</a>
                <div class="desc">Sử dụng hệ thống phụ kiện inox 304 cao cấp thương hiệu Euromax của Casago.</div>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">Chương trình bảo trì thiết bị gia dụng áp dụng từ ngày 09.10.2025 đến 30.11.2025</a>
                <div class="desc">Giảm thêm 5% chi phí bảo trì khi đăng ký từ 1 thiết bị trở lên</div>
            </div>
        </div>

        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">
                    Chương trình hỗ trợ khóa điện tử áp dụng từ ngày 09.10.2025 đến 28.11.2025
                </a>
                <div class="desc">Giảm thêm 5% chi phí lắp đặt miễn phí</div>
            </div>
        </div>

        <!-- ITEM 4 -->
        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">Các phụ kiện cơ bản trong tủ bếp – dịch vụ hướng dẫn sử dụng</a>
                <div class="desc">Chương trình hướng dẫn và bảo trì các sản phẩm trong tủ bếp</div>
            </div>
        </div>

        <div class="service-item">
            <img src="public/img/new1.png" alt="">
            <div class="service-info">
                <a href="#" class="title">Giảm giá lên đến 45% Rổ kéo chén đĩa – dịch vụ bảo trì tại nhà</a>
                <div class="desc">Dịch vụ kèm theo ưu đãi đặc biệt</div>
            </div>
        </div>

    </div>

</div>
<?php
include __DIR__ . "/article.php";?>