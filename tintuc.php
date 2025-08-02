<?php $data["title"] = "Tin tức - Sự kiện"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative">
    <div class="uk-position-cover" style="background: linear-gradient(90deg, rgba(198, 226, 255, 0.48) 0%, rgba(171, 207, 242, 0.48) 100%);"></div>
    <div class="uk-position-cover tuvanphapluat__breadcrumb__overlay uk-background-cover" style="--path-to-image: url('images/image.png')"></div>
    <div class="uk-position-relative uk-section-xsmall">
        <div class="uk-container">
            <h1 class="fz-24 text-484554 lh-125 barlow-semibold" style="margin-bottom: 10px;">Tin tức - Sự kiện</h1>
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb uk-margin-remove-bottom tuvanphapluat__breadcrumb">
                    <li><a href=".">Trang chủ</a></li>
                    <li><span aria-current="page">Tin tức - Sự kiện</span></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-collapse uk-grid-match" uk-grid>
            <div class="uk-width-1-2@l">
                <div class="uk-cover-container">
                    <img src="https://picsum.photos/800/600?random=10" alt="" uk-cover="">
                    <canvas width="567" height="378"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="uk-card uk-card-body bg-068BDB uk-light">
                    <h3 class="fz-29 barlow-bold"><a href="" class="uk-link-toggle">Đồng chí Hà Đức Quảng là Chủ tịch LĐLĐ tỉnh Phú Thọ từ 1.7.2025</a></h3>
                    <div class="item-23px fz-18 text-FFCB2A">04/07/2025</div>
                    <div class="item-28px fz-18">Theo Quyết định của Đoàn Chủ tịch Tổng LĐLĐVN, từ ngày 1.7.2025, đồng chí Hà Đức Quảng được chỉ định làm Chủ tịch LĐLĐ tỉnh Phú Thọ (mới), nhiệm kỳ 2023-2028, từ ngày 1.7.2025.</div>
                </div>
            </div>
        </div>
        <div uk-grid>
            <div class="uk-width-expand">
                <?php
                $news = array(
                        array(
                                'image' => 'https://picsum.photos/330/199?random=1',
                                'title' => 'Kế hoạch quốc gia thích ứng với biến đổi khí hậu giai đoạn 2021 - 2030, tầm nhìn đến năm 2050 (cập nhật)',
                                'date' => '23/06/2025',
                                'desc' => 'Phó Thủ tướng Chính phủ Trần Hồng Hà vừa ký Quyết định số 1422/QĐ-TTg ngày 19/11/2024 về việc ban hành Kế hoạch quốc gia thích ứng với biến đổi khí hậu giai đoạn 2021 - 2030, tầm nhìn đến năm 2050'
                        ),
                        array(
                                'image' => 'https://picsum.photos/330/199?random=2',
                                'title' => 'Tin tức số 2',
                                'date' => '24/06/2025',
                                'desc' => 'Mô tả tin tức số 2'
                        ),
                        array(
                                'image' => 'https://picsum.photos/330/199?random=3',
                                'title' => 'Tin tức số 3',
                                'date' => '25/06/2025',
                                'desc' => 'Mô tả tin tức số 3'
                        ),
                        array(
                                'image' => 'https://picsum.photos/330/199?random=4',
                                'title' => 'Tin tức số 4',
                                'date' => '26/06/2025',
                                'desc' => 'Mô tả tin tức số 4'
                        ),
                        array(
                                'image' => 'https://picsum.photos/330/199?random=5',
                                'title' => 'Tin tức số 5',
                                'date' => '27/06/2025',
                                'desc' => 'Mô tả tin tức số 5'
                        ),
                        array(
                                'image' => 'https://picsum.photos/330/199?random=6',
                                'title' => 'Tin tức số 6',
                                'date' => '28/06/2025',
                                'desc' => 'Mô tả tin tức số 6'
                        )
                );
                ?>
                <?php foreach ($news as $item): ?>
                    <div class="tintuc__item">
                        <div class="uk-grid-small uk-grid-24-l" uk-grid>
                            <div class="uk-width-1-3@l">
                                <div class="uk-cover-container uk-border-rounded">
                                    <img src="<?php echo $item['image']; ?>" alt="" uk-cover="">
                                    <canvas width="330" height="199"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="fz-20 barlow-medium text-555 uk-text-justify"><a href=""
                                                                                            class="uk-link-toggle"><?php echo $item['title']; ?></a>
                                </h3>
                                <div class="text-3777BC"><?php echo $item['date']; ?></div>
                                <div class="text-8A8C8E item-15px"><?php echo $item['desc']; ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <nav aria-label="Pagination">
                    <ul class="uk-pagination uk-flex-center tintuc__pagination" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>…</span></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="uk-active"><span aria-current="page">7</span></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>
                </nav>
            </div>
            <div class="uk-width-1-4@l">
                <div class="padding-20 uk-border-rounded uk-text-center item-20px home__sidebar__box1" style="--path-to-image: url('images/Rectangle248.png');">
                    <img src="images/logo_31.png" alt="">
                    <div class="uk-text-uppercase barlow-extrabold text-2756A6 item-9px">THÔNG TIN ĐIỆN TỬ LIÊN ĐOÀN LAO ĐỘNG TỈNH PHÚ THỌ</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>