<div class="uk-section-small">
    <div class="uk-container uk-container-expand">
        <div class="uk-position-relative uk-visible-toggle item-51px" tabindex="-1"
             uk-slider="center: true; autoplay: true; pauseOnHover: false; autoplayInterval: 3000">

            <div class="uk-slider-items uk-child-width-auto uk-grid uk-grid-small" uk-grid>
                <?php
                $domains = [
                        'amazon.com',
                        'google.com',
                        'facebook.com',
                        'microsoft.com',
                        'apple.com',
                        'netflix.com',
                        'twitter.com',
                        'instagram.com',
                        'linkedin.com',
                        'spotify.com',
                        'adobe.com',
                        'salesforce.com',
                        'intel.com',
                        'ibm.com',
                        'oracle.com',
                        'samsung.com',
                        'sony.com',
                        'nvidia.com',
                        'cisco.com',
                        'hp.com'
                ];
                foreach ($domains as $domain): ?>
                    <div>
                        <div class="uk-cover-container uk-background-default rounded-10px">
                            <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center padding-10">
                                <img class="uk-responsive-height"
                                     data-src="https://img.logo.dev/<?= $domain ?>?token=pk_MSCFV2IwQtS8u3CVawIOqA&retina=true"
                                     alt="" uk-img>
                            </div>
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