<?php $data["title"] = "Thư viện Video"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative">
    <div class="uk-position-cover" style="background: linear-gradient(90deg, rgba(198, 226, 255, 0.48) 0%, rgba(171, 207, 242, 0.48) 100%);"></div>
    <div class="uk-position-cover tuvanphapluat__breadcrumb__overlay uk-background-cover" style="--path-to-image: url('images/image.png')"></div>
    <div class="uk-position-relative uk-section-xsmall">
        <div class="uk-container">
            <h1 class="fz-24 text-484554 lh-125 barlow-semibold" style="margin-bottom: 10px;">Thư viện video</h1>
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb uk-margin-remove-bottom tuvanphapluat__breadcrumb">
                    <li><a href=".">Trang chủ</a></li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><span aria-current="page">Thư viện video</span></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-collapse uk-grid-match" uk-grid>
            <div class="uk-width-expand">
                <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?playsinline=1&amp;rel=0&amp;controls=0&amp;loop=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
            </div>
            <div class="uk-width-1-4@l">
                <div class="uk-card uk-card-body bg-068BDB">
                    <div class="fz-29 barlow-bold text-FFF"><a href="" class="uk-link-toggle">Phóng sự Công đoàn Phú Thọ một nhiệm kỳ khởi sắc</a></div>
                    <div class="text-FFCB2A item-20px">07/12/2024</div>
                </div>
            </div>
        </div>
        <div class="uk-child-width-1-3@l uk-grid-small uk-grid-20-l uk-margin-top" uk-grid>
            <?php for ($i = 0; $i < 9; $i++): ?>
                <div>
                <div class="uk-transition-toggle">
                    <div class="uk-cover-container">
                        <img class="uk-transition-scale-up uk-transition-opaque" src="images/slider1.jpeg" alt="" uk-cover="">
                        <canvas width="380" height="221"></canvas>
                        <div class="uk-position-center">
                            <svg class="uk-transition-scale-up uk-transition-opaque" xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none">
                                <circle cx="19.5" cy="19.5" r="19" fill="#C4C4C4" fill-opacity="0.58" stroke="white"/>
                                <path d="M27.6777 19.5001L15.4116 26.5819L15.4116 12.4182L27.6777 19.5001Z" fill="white"/>
                            </svg>
                        </div>
                        <a href="" class="uk-position-cover"></a>
                    </div>
                    <div class="item-15px"><a href="" class="uk-link-toggle">Lễ đón nhận huân chương độc lập hạng nhì và kỷ niệm 85 năm công đoàn Việt Mam</a></div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>