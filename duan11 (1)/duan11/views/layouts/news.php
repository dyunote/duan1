<style>
    .News-page {
        width: 90%;
        margin: 0 auto;
        padding: 30px 0;
        font-family: Arial, sans-serif;
    }

    .News-title {
        background: #D7001B;
        color: #fff;
        display: inline-block;
        padding: 12px 30px;
        border-radius: 4px;
        font-size: 18px;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .News-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 35px 25px;
    }

    .news-item {
        display: flex;
        gap: 15px;
        align-items: flex-start;
    }

    .news-item img {
        width: 150px;
        height: 120px;
        object-fit: cover;
        border-radius: 3px;
    }

    .news-info a.title {
        color: #000;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        line-height: 1.3;
    }

    .news-info a.title:hover {
        color: #D7001B;
    }

    .news-info .desc {
        margin-top: 6px;
        color: #444;
        font-size: 13px;
    }

    /* Giữ toàn bộ layout đứng yên – không giật, không dịch */
    .news-page *,
    .news-page {
        box-sizing: border-box;
    }

    .news-item {
        align-items: flex-start;
        position: relative;
    }

    .news-item img {
        flex-shrink: 0;
        /* Không cho ảnh bị co hoặc giãn */
    }

    .news-list {
        position: relative;
    }
</style>
<div class="News-page">

    <div class="News-title">Tin Tức</div>

    <div class="News-list">
        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">Bếp Thông Minh tham gia triển lãm Vietbuild 25.06.2025 đến 29.06.2025</a>
            </div>
        </div>

        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">Giảm giá lên đến 55% các mặt hàng phụ kiện inox nhà bếp Euromax</a>
                <div class="desc">Thời gian áp dụng từ 01/9 – 19/09/2025.</div>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">Chào Đón Các Đại Lý mới tháng 9 Năm 2025</a>
            </div>
        </div>

        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">CasaGo giao hàng phục vụ Khách Hàng ở các tỉnh thành lân cận</a>
                <div class="desc">Sử dụng hệ thống phụ kiện inox 304 cao cấp thương hiệu Euromax của Casago.</div>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">Chương Trình Khuyến Mãi Thiết Bị Gia Dụng Áp Dụng từ ngày 09.10.2025 đến 30.11.2025</a>
                <div class="desc">Giảm thêm 5% chiếc khấu cơ bản khi mua từ số lượng 1 cái trở lên</div>
            </div>
        </div>

        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">
                    Chương Trình Khuyến Mãi Khóa Điện Tử Áp dụng từ ngày 09.10.2025 đến 28.11.2025
                </a>
                <div class="desc">Giảm thêm 5% chiết khấu Miễn Phí lắp đặt</div>
            </div>
        </div>

        <!-- ITEM 4 -->
        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">Những món phụ kiện cơ bản trong tủ bếp</a>
                <div class="desc">Chương trình giảm giá các sản phẩm trong tủ bếp</div>
            </div>
        </div>

        <div class="news-item">
            <img src="public/img/new1.png" alt="">
            <div class="news-info">
                <a href="#" class="title">Giảm giá lên đến 45% Rổ kéo chén đĩa – xoong nồi inox 304 cao cấp</a>
                <div class="desc">Chương trình mua Đã tặng Vời</div>
            </div>
        </div>

    </div>

</div>