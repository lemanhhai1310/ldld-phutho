<?php $data["title"] = "Thư viện hình ảnh"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative">
    <div class="uk-position-cover" style="background: linear-gradient(90deg, rgba(198, 226, 255, 0.48) 0%, rgba(171, 207, 242, 0.48) 100%);"></div>
    <div class="uk-position-cover tuvanphapluat__breadcrumb__overlay uk-background-cover" style="--path-to-image: url('images/image.png')"></div>
    <div class="uk-position-relative uk-section-xsmall">
        <div class="uk-container">
            <h1 class="fz-24 text-484554 lh-125 barlow-semibold" style="margin-bottom: 10px;">Thư viện hình ảnh</h1>
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb uk-margin-remove-bottom tuvanphapluat__breadcrumb">
                    <li><a href=".">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><span aria-current="page">Thư viện hình ảnh</span></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-cover-container uk-transition-toggle">
                    <img class="uk-transition-scale-up uk-transition-opaque" src="images/photo.jpg" alt="" uk-cover="">
                    <canvas width="861" height="500"></canvas>
                    <div class="uk-position-cover thuvienhinhanh__overlay1"></div>
                    <div class="uk-position-bottom uk-position-small fz-24 barlow-semibold text-FFF">ĐẠI HỘI CÔNG ĐOÀN TỈNH PHÚ THỌ LẦN THỨ XVII NHIỆM KỲ 2023 - 2028</div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
            <div class="uk-width-1-4@l">
                <div class="uk-cover-container uk-transition-toggle">
                    <img class="uk-transition-scale-up uk-transition-opaque" src="images/image.png" alt="" uk-cover="">
                    <canvas width="322" height="500"></canvas>
                    <div class="uk-position-cover thuvienhinhanh__overlay1"></div>
                    <div class="uk-position-bottom uk-position-small fz-24 barlow-semibold text-FFF">HỘI DIỄN LIÊN HOAN TIẾNG HÁT CHÀO MỪNG 85 NĂM NGÀY THÀNH LẬP CÔNG ĐOÀN VIỆT NAM</div>
                    <a href="" class="uk-position-cover"></a>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-3@l" uk-grid>
            <?php for ($i = 0; $i < 9; $i++): ?>
                <div>
                    <div class=" uk-transition-toggle">
                        <div class="uk-cover-container uk-border-rounded">
                            <img class="uk-transition-scale-up uk-transition-opaque" src="images/dark.jpg" alt=""
                                 uk-cover="">
                            <canvas width="380" height="221"></canvas>
                            <a href="" class="uk-position-cover"></a>
                        </div>
                        <div class="item-15px"><a href="" class="uk-link-toggle">Lễ đón nhận huân chương độc lập hạng
                                nhì và kỷ niệm 85 năm công đoàn Việt Mam</a></div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>