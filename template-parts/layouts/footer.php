<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-position-relative uk-visible-toggle item-51px" tabindex="-1"
             uk-slider="center: false; autoplay: false; pauseOnHover: false; autoplayInterval: 3000">

            <div class="uk-slider-items uk-child-width-auto uk-grid uk-grid-small uk-flex-center" uk-grid>
                <?php
                $domains = [
                        'https://document-ld.congnghetht.com.vn/Picture/32d838fa-48d1-40ad-92f7-b935a541a8e8.jpg',
                        'https://document-ld.congnghetht.com.vn/Picture/af82ad4a-f568-492f-9649-f77921770522.png',
                        'https://document-ld.congnghetht.com.vn/Picture/2f8c395d-b061-44fd-8e2b-a6f8e0e7ec7b.png',
                        'https://document-ld.congnghetht.com.vn/Picture/3253395b-b805-4439-99e9-c875a524b3ec.png',
                        'https://document-ld.congnghetht.com.vn/Picture/2f8c395d-b061-44fd-8e2b-a6f8e0e7ec7b.png',
                        'https://document-ld.congnghetht.com.vn/Picture/eabb5e67-3352-4670-969e-ff0149ac6870.png',
                        'https://document-ld.congnghetht.com.vn/Picture/0e957c69-1efb-4ca7-9edf-c7f224647f78.jpeg',
                        'https://document-ld.congnghetht.com.vn/Picture/e07ab2f7-2c74-4235-b391-9897d15f3341.png',
                ];
                foreach ($domains as $domain): ?>
                    <div>
                        <div class="uk-cover-container uk-background-default rounded-10px">
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center padding-10">
                                <img class="uk-responsive-height"
                                     data-src="<?= $domain ?>"
                                     alt="" uk-img>
                            </div>
                            <a href="#" class="uk-position-cover"></a>
                            <canvas width="187" height="83"></canvas>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
</div>
<footer class="footer bgc-C1E0FB uk-background-cover" data-src="images/bg_f.png" uk-img>
    <nav class="footer__navbarContainer uk-navbar-container uk-visible@l uk-light">
        <div class="uk-container">
            <div uk-navbar class="uk-flex-center">

                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">TRANG CHỦ</a></li>
                        <li><a href="#">GIỚI THIỆU</a></li>
                        <li><a href="#">TIN TỨC - SỰ KIỆN</a></li>
                        <li><a href="#">TƯ VẤN PHÁP LUẬT</a></li>
                        <li><a href="#">CƠ SỞ DỮ LIỆU ĐIỆN TỬ</a></li>
                        <li><a href="#">NGHIỆP VỤ PHÒNG - BAN</a></li>
                        <li><a href="#">LIÊN HỆ</a></li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>
    <div class="uk-section-xsmall uk-text-center">
        <div class="uk-container">
            <div class="text-555 lh-125 barlow-bold">TRANG THÔNG TIN ĐIỆN TỬ CÔNG ĐOÀN ĐẤT TỔ - CƠ QUAN CHỦ QUẢN: LIÊN ĐOÀN LAO ĐỘNG TỈNH PHÚ THỌ</div>
            <div class="item-15px fz-14">
                <div class="item-10px lh-142">Trụ sở: Đường Nguyễn Tất Thành, xã Trưng Vương, thành phố Việt Trì, tỉnh Phú Thọ</div>
                <div class="item-10px lh-142"><span class="barlow-medium">Điện thoại/Fax:</span> (0210) 3846 482 - <span class="barlow-medium">Email:</span> congdoandatto@gmail.com - <span class="barlow-medium">Website:</span> http://congdoandatto.org.vn</div>
                <div class="item-10px lh-142">Giấy phép sửa đổi lần thứ 4 số: 05/GPTTĐT - STTTT ngày 22/08/2019 do Sở Thông tin và Truyền thông Phú Thọ cấp</div>
            </div>
            <div class="item-26px fz-14 lh-142">
                <span class="barlow-medium">Chịu trách nhiệm:</span> Ông Hà Đức Quảng - Tỉnh ủy viên - Ủy viên Ban Chấp hành Tổng Liên đoàn Lao động Việt Nam - Chủ tịch Liên đoàn Lao động tỉnh Phú Thọ 
            </div>
        </div>
    </div>
</footer>
</div>
<!--/app-->
</body>
</html>