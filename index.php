<?php $data["title"] = "Home"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div uk-slideshow="animation: push;ratio: 1366:412;">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <div class="uk-slideshow-items">
            <div>
                <img src="images/image_207.png" alt="" uk-cover>
            </div>
            <div>
                <img src="images/image_207.png" alt="" uk-cover>
            </div>
            <div>
                <img src="images/image_207.png" alt="" uk-cover>
            </div>
        </div>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin uk-position-bottom-center"></ul>
    </div>

</div>

<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid-24" uk-grid>
            <div class="uk-width-expand">
                <div class="home__news__head">
                    <div class="uk-child-width-auto" uk-grid>
                        <div>
                            <div class="home__news__head__line">
                                <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                    <div>
                                        <img src="images/image_254.png" alt="">
                                    </div>
                                    <div>
                                        <h2 class="text-2D2D2D fz-21 playfair-display-900 uk-text-uppercase">TIN TỨC</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="uk-grid-24 item-22px" uk-grid>
                    <div class="uk-width-expand">
                        <div uk-slideshow="animation: push;ratio: 628:392;">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                                <div class="uk-slideshow-items">
                                    <div>
                                        <img src="images/photo.jpg" alt="" uk-cover>
                                    </div>
                                    <div>
                                        <img src="images/dark.jpg" alt="" uk-cover>
                                    </div>
                                    <div>
                                        <img src="images/light.jpg" alt="" uk-cover>
                                    </div>
                                </div>

                                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
                                <ul class="uk-position-bottom-center uk-position-small uk-slideshow-nav uk-dotnav uk-flex-center"></ul>

                            </div>
                        </div>
                        <div class="item-21px">
                            <h3 class="uk-margin-remove lh-136 text-068BDB fz-22 barlow-semibold"><a href="" class="uk-link-toggle">Liên đoàn Lao động huyện Cẩm Khê tổ chức hội nghị sơ kết công tác công đoàn 6 tháng đầu năm 2025, khen thưởng công đoàn năm 2023 - 2025</a></h3>
                        </div>
                        <div class="text-A1A3A5 item-5px">19/06/2025 11:47:10</div>
                        <div class="item-26px">Ngày 18/6, Liên đoàn Lao động huyện Cẩm Khê tổ chức hội nghị sơ kết công tác công đoàn 6 tháng đầu năm 2025, khen thưởng công đoàn năm học 2024-2025. Tới dự và chỉ đạo hội nghị có đồng chí Nguyễn Ngọc Hướng-</div>
                    </div>
                    <div class="uk-width-1-3@l uk-flex-first@l">
                        <?php
                        $news_items = array(
                                array(
                                        'image' => 'https://picsum.photos/800/600?random=1',
                                        'title' => 'Đại hội đại biểu Đảng bộ Liên đoàn Lao động tỉnh nhiệm kỳ 2025 - 2030',
                                        'date' => '19/06/2025'
                                ),
                                array(
                                        'image' => 'https://picsum.photos/800/600?random=2',
                                        'title' => 'Tin tức số 2',
                                        'date' => '20/06/2025'
                                ),
                                array(
                                        'image' => 'https://picsum.photos/800/600?random=3',
                                        'title' => 'Tin tức số 3',
                                        'date' => '21/06/2025'
                                )
                        );
                        foreach ($news_items as $item): ?>
                            <div class="home__news__item">
                                <div class="uk-grid-4-l uk-grid-10" uk-grid>
                                    <div class="uk-width-1-3 uk-width-1-1@l">
                                        <div class="uk-cover-container uk-background-muted">
                                            <img src="<?php echo $item['image']; ?>" alt="" uk-cover="">
                                            <canvas width="267" height="159"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="item-4px">
                                            <h6 class="uk-margin-remove fz-15 text-2D2D2D barlow-semibold uk-text-justify"><a
                                                        href="" class="uk-link-toggle"><?php echo $item['title']; ?></a></h6>
                                        </div>
                                        <div class="fz-13 text-A1A3A5 item-1px"><?php echo $item['date']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="home__box uk-card uk-card-body bg-F3FBFF uk-margin-medium-top padding-20">
                    <div class="uk-flex-middle uk-grid-10" uk-grid>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20" viewBox="0 0 23 20" fill="none">
                                <g clip-path="url(#clip0_4581_1461)">
                                    <path d="M4.41545 0H18.5846C19.7542 0.00425835 20.8747 0.452072 21.7018 1.24583C22.5289 2.03959 22.9956 3.11493 23 4.23747V15.7625C23.001 16.8845 22.5379 17.9609 21.7122 18.7552L21.6711 18.7911C20.8493 19.5644 19.7448 19.9984 18.5939 20H4.41545C3.83589 19.9996 3.26211 19.8895 2.72701 19.6758C2.1919 19.4622 1.70599 19.1494 1.29712 18.7552L1.25968 18.7156C0.452667 17.9278 0.000306074 16.8673 0 15.7625L0 4.23747C0.00345641 3.11464 0.469764 2.03875 1.29707 1.24479C2.12438 0.450829 3.24546 0.00331709 4.41545 0ZM10.1074 8.57374L14.8336 11.7406C14.932 11.8007 15.0134 11.8832 15.0706 11.9807C15.1278 12.0783 15.1591 12.1878 15.1617 12.2997C15.1643 12.4116 15.1381 12.5224 15.0855 12.6223C15.0328 12.7222 14.9553 12.808 14.8598 12.8723L10.1486 15.996C10.0225 16.097 9.86356 16.1523 9.69938 16.1523C9.60575 16.153 9.5129 16.136 9.42618 16.1021C9.33947 16.0682 9.2606 16.0181 9.19413 15.9548C9.12766 15.8916 9.07491 15.8163 9.03891 15.7333C9.00291 15.6504 8.98437 15.5614 8.98438 15.4715V9.12879C8.98262 9.00287 9.01748 8.87897 9.08505 8.77102C9.15262 8.66306 9.25022 8.57533 9.36688 8.51767C9.48354 8.46001 9.61464 8.43471 9.74546 8.44461C9.87628 8.45452 10.0016 8.49924 10.1074 8.57374ZM1.37573 4.75481H3.99618L5.69198 1.32028H4.41545C3.61002 1.32265 2.83829 1.63076 2.26877 2.17732C1.69925 2.72389 1.3782 3.46451 1.37573 4.23747V4.75481ZM6.93481 1.32028L5.24089 4.75481H9.98763L11.6853 1.32567L6.93481 1.32028ZM12.9244 1.32028L11.2155 4.75481H15.8387L17.5382 1.32028H12.9244ZM18.7867 1.32028L17.0815 4.75481H21.6243V4.23747C21.6209 3.49702 21.3257 2.78523 20.7979 2.24509C20.2701 1.70495 19.549 1.37648 18.7792 1.32567L18.7867 1.32028ZM21.6318 6.11281H1.37573V15.7625C1.37884 16.5222 1.69118 17.2506 2.24609 17.7923L2.27791 17.8211C2.84345 18.3684 3.61227 18.6779 4.41545 18.6815H18.5846C19.3748 18.6809 20.1336 18.3845 20.6996 17.8552L20.7296 17.8229C21.0127 17.5533 21.2375 17.2326 21.391 16.8793C21.5446 16.526 21.6238 16.1471 21.6243 15.7643V6.1182L21.6318 6.11281Z" fill="#2D2D2D"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4581_1461">
                                        <rect width="23" height="20" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2D2D2D fz-15 barlow-medium lh-133" style="position: relative;top: 4px;">THƯ VIỆN</div>
                        </div>
                        <div>
                            <div class="text-068BDB fz-28 playfair-display-700">Video hoạt động công đoàn</div>
                        </div>
                    </div>
                    <div class="bg-FFF uk-padding-small item-12px">
                        <div class="uk-child-width-1-3@l uk-grid-small" uk-grid>
                            <?php
                            $video_items = array(
                                    array(
                                            'image' => 'https://picsum.photos/800/600?random=4',
                                            'title' => 'Tổng kết công tác Giỗ Tổ Hùng Vương và Tuần Văn hóa - Du lịch Đất'
                                    ),
                                    array(
                                            'image' => 'https://picsum.photos/800/600?random=5',
                                            'title' => 'Video hoạt động công đoàn số 2'
                                    ),
                                    array(
                                            'image' => 'https://picsum.photos/800/600?random=6',
                                            'title' => 'Video hoạt động công đoàn số 3'
                                    )
                            );
                            foreach ($video_items as $video): ?>
                                <div>
                                <div class="uk-cover-container">
                                    <img src="<?php echo $video['image']; ?>" alt="" uk-cover="">
                                    <canvas width="264" height="160"></canvas>
                                    <div class="uk-position-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                            <path d="M17.6934 0.500061C27.1901 0.500321 34.8857 8.17161 34.8857 17.6309C34.8857 27.0903 27.1902 34.7615 17.6934 34.7618C8.19634 34.7618 0.5 27.0904 0.5 17.6309C0.500039 8.17145 8.19637 0.500061 17.6934 0.500061Z" fill="#555555" stroke="white"/>
                                            <path d="M25.1133 17.6309L13.9839 24.034L13.9839 11.2279L25.1133 17.6309Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <a href="" class="uk-position-cover"></a>
                                </div>
                                    <div class="text-2D2D2D item-15px"><a href=""
                                                                          class="uk-link-toggle"><?php echo $video['title']; ?></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="uk-flex-middle uk-grid-10 uk-margin-top" uk-grid>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="19" viewBox="0 0 23 19" fill="none">
                                <g clip-path="url(#clip0_4581_1463)">
                                    <path d="M1.03602 3.03924H19.4206C19.7065 3.03924 19.9618 3.16122 20.1474 3.3562C20.3327 3.55119 20.449 3.82762 20.449 4.12V17.919C20.449 18.2197 20.3327 18.4879 20.1474 18.683C20.1321 18.6992 20.1164 18.7155 20.0933 18.7316C19.9153 18.9024 19.6759 18.9998 19.413 18.9998H1.02834C0.74234 18.9998 0.487032 18.878 0.301541 18.683C0.116049 18.4881 0 18.2118 0 17.9192V4.12019C0 3.81956 0.116049 3.55138 0.301541 3.3564C0.487032 3.16142 0.750014 3.03943 1.02834 3.03943H1.03602V3.03924ZM5.28173 6.7858C6.0967 6.7858 6.75705 7.47994 6.75705 8.3366C6.75705 9.19326 6.0967 9.8876 5.28173 9.8876C4.46677 9.8876 3.80641 9.19326 3.80641 8.3366C3.80622 7.48014 4.46677 6.7858 5.28173 6.7858ZM11.4905 13.4413L14.4416 8.07827L17.5764 16.4133L2.94578 16.4131V15.3794L4.17552 15.315L5.40471 12.1487L6.01902 14.4105H7.86364L9.46156 10.0812L11.4905 13.4413ZM4.09747 1.28381C3.75737 1.28381 3.48671 0.991436 3.48671 0.641807C3.48671 0.284307 3.76505 0 4.09747 0H22.3894C22.7293 0 23 0.292571 23 0.642004V14.1973C23 14.555 22.7219 14.8395 22.3894 14.8395C22.0491 14.8395 21.7785 14.5469 21.7785 14.1973V1.29207H4.09747V1.28381ZM19.2273 4.32344H1.22918V17.7079H19.2271L19.2273 4.32344Z" fill="black"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4581_1463">
                                        <rect width="23" height="19" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div>
                            <div class="text-2D2D2D fz-15 barlow-medium lh-133" style="position: relative;top: 4px;">THƯ VIỆN</div>
                        </div>
                        <div>
                            <div class="text-068BDB fz-28 playfair-display-700">Hình ảnh</div>
                        </div>
                    </div>
                    <div class="bg-FFF uk-padding-small item-12px">
                        <div class="uk-child-width-1-3@l uk-grid-small" uk-grid>
                            <?php
                            $gallery_items = array(
                                    array(
                                            'image' => 'https://picsum.photos/800/600?random=7',
                                            'title' => 'ĐẠI HỘI CÔNG ĐOÀN TỈNH PHÚ THỌ LẦN THỨ XVII NHIỆM KỲ 2023 - 2028'
                                    ),
                                    array(
                                            'image' => 'https://picsum.photos/800/600?random=8',
                                            'title' => 'Hình ảnh hoạt động công đoàn số 2'
                                    ),
                                    array(
                                            'image' => 'https://picsum.photos/800/600?random=9',
                                            'title' => 'Hình ảnh hoạt động công đoàn số 3'
                                    )
                            );
                            foreach ($gallery_items as $gallery): ?>
                                <div>
                                    <div class="uk-cover-container">
                                        <img src="<?php echo $gallery['image']; ?>" alt="" uk-cover="">
                                        <canvas width="264" height="160"></canvas>
                                        <a href="" class="uk-position-cover"></a>
                                    </div>
                                    <div class="text-2D2D2D item-15px"><a href=""
                                                                          class="uk-link-toggle"><?php echo $gallery['title']; ?></a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="home__news__head">
                        <div class="uk-child-width-auto" uk-grid>
                            <div>
                                <div class="home__news__head__line">
                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_4581_1466)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7219 3.68055V16.4866H18.8781C18.9428 16.4866 18.9964 16.5407 18.9964 16.6071V16.9371H23.3289C23.6992 16.9371 24 17.2431 24 17.6208C24 17.7663 23.955 17.902 23.8788 18.0128C23.384 18.8557 23.1296 19.925 23.1296 21.0003C23.1296 22.0677 23.3806 23.1253 23.8951 23.9531C24.092 24.2713 23.9981 24.6925 23.6853 24.8931C23.5741 24.9644 23.4505 24.998 23.3289 24.998L3.46731 25C2.51784 25 1.66946 24.47 1.04958 23.7047C0.405269 22.9096 0 21.8383 0 20.8655C0 19.8933 0.4 18.8893 1.03904 18.1475C1.66228 17.4246 2.51689 16.9371 3.46731 16.9371H5.2115V16.6071C5.2115 16.5407 5.26467 16.4866 5.32982 16.4866H11.486V3.6864C10.9499 3.49703 10.525 3.0646 10.3382 2.51845H6.44599V3.12171C6.44599 3.1876 6.39234 3.24226 6.32766 3.24226H5.32886C5.26371 3.24226 5.21054 3.1876 5.21054 3.12171V2.51845H4.22036C4.14467 2.51845 4.08287 2.46427 4.08287 2.3979V1.38027C4.08287 1.31389 4.14467 1.25971 4.22036 1.25971H10.3425C10.5993 0.525653 11.2872 0 12.0958 0C12.904 0 13.5919 0.525653 13.8486 1.25971H19.9871C20.0628 1.25971 20.125 1.31389 20.125 1.38027V2.3979C20.125 2.46427 20.0628 2.51845 19.9871 2.51845H18.8709V3.12171C18.8709 3.1876 18.8177 3.24226 18.7526 3.24226H17.7538C17.6886 3.24226 17.6355 3.1876 17.6355 3.12171V2.51845H13.8529C13.7611 2.78568 13.612 3.02868 13.4163 3.22972C13.2207 3.43076 12.9834 3.58478 12.7219 3.68055ZM22.0149 22.8803H16.0158C15.8218 22.8803 15.6642 22.7202 15.6642 22.5225C15.6642 22.3249 15.8218 22.1643 16.0158 22.1643H21.8726C21.8285 21.8666 21.8012 21.5654 21.7916 21.2633H15.8913C15.6972 21.2633 15.5396 21.1028 15.5396 20.9051C15.5396 20.7074 15.6972 20.5468 15.8913 20.5468H21.7998C21.8146 20.2877 21.8414 20.0285 21.8812 19.7728H17.5708C17.3768 19.7728 17.2192 19.6122 17.2192 19.4145C17.2192 19.2168 17.3768 19.0568 17.5708 19.0568H22.0263C22.0915 18.8 22.1691 18.5487 22.2601 18.3046H3.46731C2.92982 18.3046 2.42683 18.6028 2.04599 19.045C1.61341 19.5473 1.34228 20.2198 1.34228 20.8655C1.34228 21.5332 1.62826 22.278 2.08287 22.8388C2.46228 23.3074 2.95281 23.6324 3.46731 23.6324H22.2496C22.1576 23.3884 22.079 23.137 22.0149 22.8803ZM18.605 3.92654L22.5643 11.0538C22.5972 11.1127 22.6137 11.1795 22.6122 11.2471H22.6156C22.616 11.2564 22.6165 11.2652 22.6165 11.274C22.6165 12.9715 20.6549 14.3483 18.2362 14.3483C15.8438 14.3483 13.8989 13.0012 13.8572 11.3291C13.8447 11.278 13.8429 11.2247 13.852 11.1728C13.8611 11.1209 13.8808 11.0716 13.9099 11.028L17.9588 3.91043C18.0604 3.73082 18.286 3.66981 18.4618 3.77377C18.5255 3.81086 18.5739 3.86455 18.605 3.92654ZM18.6204 5.47665V10.863H21.612L18.6204 5.47665ZM17.9143 10.863V5.48495L14.8551 10.863H17.9143ZM6.14275 3.92654L10.102 11.0538C10.135 11.1126 10.1514 11.1795 10.1495 11.2471H10.1533C10.1533 11.2564 10.1538 11.2652 10.1538 11.274C10.1538 12.9715 8.19258 14.3483 5.77341 14.3483C3.38108 14.3483 1.43665 13.0012 1.39449 11.3291C1.38731 11.2996 1.38377 11.2693 1.38395 11.2388C1.38395 11.1607 1.40695 11.0885 1.44719 11.028L5.49605 3.91043C5.52029 3.86776 5.55254 3.83038 5.59096 3.80041C5.62939 3.77045 5.67323 3.7485 5.71999 3.7358C5.76675 3.72311 5.8155 3.71993 5.86346 3.72645C5.91143 3.73296 5.95766 3.74904 5.99952 3.77377C6.06275 3.81086 6.11114 3.86455 6.14275 3.92654ZM6.1576 5.47665V10.863H9.1497L6.1576 5.47665ZM5.45198 10.863V5.48495L2.39281 10.863H5.45198ZM12.0958 1.06936C12.5432 1.06936 12.9063 1.43932 12.9063 1.89567C12.9063 2.35153 12.5432 2.72149 12.0958 2.72149C11.6479 2.72149 11.2848 2.35153 11.2848 1.89567C11.2848 1.43932 11.6479 1.06936 12.0958 1.06936Z" fill="black"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4581_1466">
                                                        <rect width="24" height="25" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="text-2D2D2D fz-21 playfair-display-900 uk-text-uppercase">văn bản pháp luật</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item-24px uk-overflow-auto">
                        <table class="uk-table uk-table-striped uk-table-small home__table uk-table-middle uk-table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <div class="uk-text-nowrap">Số ký hiệu</div>
                                    <div class="uk-text-nowrap">Ngày ban hành</div>
                                </th>
                                <th>
                                    <div class="uk-text-nowrap">Trích yếu</div>
                                </th>
                                <th>
                                    <div class="uk-text-nowrap">Cơ quan ban hành</div>
                                </th>
                                <th>
                                    <div class="uk-text-nowrap">Xem / Tải về</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">01/TL</div>
                                    <div>10/05/2024</div>
                                </td>
                                <td>
                                    <div>Thể lệ giải báo chí toàn quốc về xây dựng Đảng (Giải búa liềm vàng) lần thứ IX
                                        - năm 2024
                                    </div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                             viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                                  fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                                  fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">02/TL</div>
                                    <div>15/05/2024</div>
                                </td>
                                <td>
                                    <div>Hướng dẫn thực hiện chế độ tiền lương năm 2024</div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                             viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                                  fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                                  fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">03/TL</div>
                                    <div>20/05/2024</div>
                                </td>
                                <td>
                                    <div>Quy định về việc tổ chức và hoạt động của tổ chức công đoàn</div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                             viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                                  fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                                  fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">04/TL</div>
                                    <div>25/05/2024</div>
                                </td>
                                <td>
                                    <div>Kế hoạch tổ chức các hoạt động văn hóa văn nghệ năm 2024</div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                             viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                                  fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                                  fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">05/TL</div>
                                    <div>30/05/2024</div>
                                </td>
                                <td>
                                    <div>Hướng dẫn thực hiện chế độ bảo hiểm xã hội năm 2024</div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                             viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                                  fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                                  fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">06/TL</div>
                                    <div>05/06/2024</div>
                                </td>
                                <td>
                                    <div>Thông báo về việc tổ chức Hội nghị người lao động năm 2024</div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                             viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                                  fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                                  fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-181818 barlow-medium">00/TL</div>
                                    <div>10/05/2024</div>
                                </td>
                                <td>
                                    <div>Thể lệ giải báo chí toàn quốc về xây dựng Đảng (Giải búa liềm vàng) lần thứ IX - năm 2024; Thể lệ Cuộc thi trực tuyến “Tìm hiểu Luật Thực ...</div>
                                </td>
                                <td>
                                    <div>Liên đoàn lao động tỉnh</div>
                                </td>
                                <td>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                                            <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z" fill="#3CB919"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z" fill="#068BDB"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="uk-margin-medium-top">
                    <div class="home__news__head">
                        <div class="uk-child-width-auto" uk-grid>
                            <div>
                                <div class="home__news__head__line">
                                    <div class="uk-grid-10 uk-flex-middle" uk-grid>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="26" viewBox="0 0 22 26" fill="none">
                                                <g clip-path="url(#clip0_4585_1083)">
                                                    <path d="M16.3807 23.3625C16.7909 23.3625 17.1712 23.3647 17.5509 23.3625C18.4696 23.3575 18.981 22.8337 18.9832 21.8969C18.9846 21.473 18.9832 21.2611 18.9832 20.7909C19.1413 20.7909 19.2873 20.7909 19.4333 20.7909C19.8421 20.7909 20.2509 20.7938 20.6597 20.7902C21.4318 20.7829 21.9909 20.0422 21.993 19.2653C22.0037 16.2943 22.0002 13.3241 21.9973 10.3538C21.9973 10.024 21.7388 9.79539 21.4653 9.79828C21.1868 9.80118 20.8627 10.0522 20.8627 10.4204C20.862 13.2821 20.8627 16.1446 20.8627 19.0063C20.8627 19.6045 20.7587 19.7087 20.1647 19.7087C15.739 19.7087 11.5852 19.7087 7.15946 19.7087C6.59111 19.7087 6.47501 19.5901 6.47501 19.0085C6.47501 13.1939 6.47501 7.65272 6.47501 1.83813C6.47501 1.25725 6.59039 1.13934 7.15733 1.13934C11.6102 1.13934 15.7895 1.13934 20.2424 1.13934C20.7502 1.13934 20.862 1.25435 20.862 1.77664C20.862 4.09727 20.862 6.14445 20.8634 8.46508C20.8634 8.58082 20.8677 8.70308 20.904 8.81014C20.976 9.02354 21.2901 9.20511 21.5116 9.17183C21.7174 9.14073 21.966 8.93167 21.9902 8.71537C21.998 8.64376 21.9987 8.57142 21.9987 8.49908C21.9994 6.14228 22.0002 3.78621 21.9987 1.43014C21.998 0.690835 21.6512 0.198208 21.0208 0.035446C20.9104 0.00723388 20.7922 0.00144678 20.6783 0.00144678C16.1015 0 11.3032 0 6.72643 0C5.95295 0 5.40596 0.556285 5.39884 1.34695C5.39456 1.81426 5.39812 2.28156 5.39812 2.77925C4.85826 2.77925 4.56624 2.77274 4.05344 2.78287C3.86043 2.78649 3.65957 2.80313 3.47725 2.861C2.92384 3.03533 2.59622 3.52507 2.59123 4.16671C2.58554 4.86189 2.59337 5.55706 2.59337 6.25224C2.59337 11.4346 2.59337 16.6169 2.59551 21.7993C2.59551 22.0055 2.6012 22.2189 2.65106 22.4163C2.78567 22.9553 3.26714 23.33 3.82125 23.3538C3.93663 23.3589 4.16811 23.3582 4.16811 23.3582H14.8124C14.8124 23.3582 15.0374 23.3582 15.1749 23.3582C15.1749 23.8407 15.192 23.989 15.1678 24.4368C15.1549 24.6798 14.9833 24.8173 14.7354 24.8303C14.6735 24.8332 14.6108 24.8317 14.5488 24.8317C10.0789 24.8317 6.24425 24.8317 1.7736 24.8317C1.27931 24.8317 1.16108 24.7124 1.16108 24.2132C1.16108 18.3451 1.16108 6.90835 1.16108 6.90835C1.16108 6.90835 1.21735 6.38245 1.64824 6.28768C1.87687 6.23777 2.12829 6.04463 2.03214 5.66557C1.94667 5.35162 1.66819 5.28652 1.4246 5.28652C0.433184 5.28652 0.0870399 5.93106 0.0179539 6.52713C0.002285 6.66095 0.000862122 6.79767 0.000862122 6.93295C0.000150681 12.7924 0.000150681 18.6518 0.000862122 24.5113C0.000862122 25.3027 0.329199 25.7931 0.975189 25.9617C1.08487 25.9906 1.2031 25.9986 1.31706 25.9986C5.89384 26 10.4706 26.0007 15.0481 25.9993C15.8223 25.9993 16.3728 25.443 16.38 24.6567C16.3835 24.2349 16.38 23.8132 16.38 23.3625H16.3807Z" fill="black"/>
                                                    <path d="M13.7995 13.1996C12.2796 13.1996 10.7597 13.1996 9.24055 13.1996C8.81037 13.1996 8.60026 13.3493 8.61094 13.6423C8.62163 13.923 8.83387 14.0684 9.23842 14.0684C12.2868 14.0684 15.3351 14.0684 18.3834 14.0669C18.4974 14.0669 18.617 14.0626 18.7246 14.0286C18.9283 13.9642 19.0202 13.8058 19.0009 13.5909C18.9817 13.3761 18.8606 13.2444 18.6505 13.2119C18.5458 13.196 18.4376 13.1996 18.3314 13.1996C16.8208 13.1996 15.3094 13.1996 13.7988 13.1996H13.7995Z" fill="black"/>
                                                    <path d="M13.8294 16.0331C15.3564 16.0331 16.8834 16.0331 18.4104 16.0331C18.4902 16.0331 18.5728 16.0432 18.6497 16.0258C18.8748 15.9737 19.008 15.8348 19.0023 15.5889C18.9966 15.3437 18.8577 15.212 18.6298 15.1708C18.5692 15.1599 18.5058 15.1672 18.4439 15.1672C15.3542 15.1672 12.2646 15.1672 9.17495 15.1672C9.12153 15.1672 9.06812 15.1643 9.01541 15.1693C8.78892 15.1918 8.613 15.3798 8.61087 15.5961C8.60944 15.8095 8.78607 16.0048 9.00971 16.0294C9.08022 16.0374 9.15145 16.0323 9.22267 16.0323C10.7589 16.0323 12.2945 16.0323 13.8308 16.0323L13.8294 16.0331Z" fill="black"/>
                                                    <path d="M13.8152 17.9964C15.3329 17.9964 16.8514 17.9964 18.3692 17.9964C18.4582 17.9964 18.5472 18 18.6348 17.9892C18.8464 17.9638 18.9738 17.8387 18.9995 17.6246C19.0258 17.4003 18.9347 17.2325 18.7167 17.1667C18.6085 17.1341 18.4902 17.1283 18.3763 17.1283C15.3315 17.1262 12.2867 17.1269 9.24197 17.1283C9.14511 17.1283 9.04539 17.1298 8.95209 17.1522C8.72204 17.2079 8.5974 17.3728 8.61877 17.605C8.64014 17.8336 8.77831 17.9819 9.02189 17.9928C9.11021 17.9964 9.19924 17.9964 9.28827 17.9964C10.7975 17.9964 12.3067 17.9964 13.8159 17.9964H13.8152Z" fill="black"/>
                                                    <path d="M17.7679 20.5782C17.6497 20.5782 17.5272 20.5782 17.4225 20.5782C13.877 20.5782 10.4341 20.5782 6.88936 20.5782C5.88441 20.5782 5.37801 20.0668 5.37801 19.0512C5.37801 14.0504 5.37801 9.05034 5.37801 4.04956C5.37801 3.93382 5.37801 3.81808 5.37801 3.67702C4.75624 3.67702 4.66365 3.6611 4.06466 3.69149C3.95284 3.69727 3.82393 3.87378 3.752 3.99965C3.70072 4.09007 3.72636 4.22824 3.72636 4.34543C3.72564 10.1673 3.72564 15.7815 3.72636 21.6033C3.72636 21.6937 3.73348 21.7009 3.73348 21.7914C3.73348 22.2066 4.09102 22.2739 4.34386 22.2811C4.60168 22.2876 4.39727 22.2782 4.6551 22.2782C8.92918 22.2782 12.86 22.2782 17.1333 22.2782C17.6682 22.2782 17.7708 22.174 17.7715 21.6329C17.7715 21.2539 17.7701 21.0824 17.7686 20.7034C17.7686 20.6766 17.7686 20.6513 17.7686 20.579L17.7679 20.5782Z" fill="white"/>
                                                    <path d="M16.7268 3.6748C17.1249 4.0799 17.501 4.46257 17.8613 4.82933C16.1783 6.5387 14.4861 8.25674 12.8138 9.95526C12.645 10.1267 12.3715 10.1267 12.2027 9.95526C11.3879 9.12698 10.5553 8.28061 9.7334 7.4451C10.0774 7.09426 10.457 6.70797 10.858 6.29926C11.1963 6.64503 11.5624 6.99805 11.905 7.37421C12.3857 7.90156 12.5859 7.88709 13.0702 7.38578C14.2268 6.18641 15.4042 5.00728 16.5729 3.82021C16.6221 3.77029 16.6755 3.72327 16.726 3.67553L16.7268 3.6748Z" fill="black"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4585_1083">
                                                        <rect width="22" height="26" fill="white" transform="matrix(-1 0 0 1 22 0)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="text-2D2D2D fz-21 playfair-display-900 uk-text-uppercase">TIN CHUYÊN ĐỀ</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="home__box uk-card uk-card-body bg-F3FBFF uk-margin-top padding-20">
                        <div class="uk-child-width-1-3@l uk-grid-small uk-grid-column-small uk-grid-row-medium" uk-grid>
                            <?php
                            $special_topics = array(
                                    array(
                                            'category' => 'CHĂM LO BẢO VỆ',
                                            'image' => 'https://picsum.photos/800/600?random=10',
                                            'title' => 'Công đoàn ngành Dệt May Hà Nội khảo sát an toàn vệ sinh lao động',
                                            'related' => array(
                                                    'Hội nghị người lao động Công ty TNHH May xuất khẩu Đại Nghĩa',
                                                    'Đan Phượng: Tổng kết chương trình phối hợp giữa LĐLĐ...',
                                                    'Giải pháp nâng cao chất lượng đối thoại, thương lượng...'
                                            )
                                    ),
                                    array(
                                            'category' => 'PHÁT TRIỂN ĐOÀN VIÊN',
                                            'image' => 'https://picsum.photos/800/600?random=11',
                                            'title' => 'Công đoàn các khu công nghiệp và chế xuất Hà Nội: Phát triển đoàn viên',
                                            'related' => array(
                                                    'Đẩy mạnh phát triển đoàn viên công đoàn năm 2024',
                                                    'Tập huấn nghiệp vụ công tác phát triển đoàn viên',
                                                    'Kết nạp mới 100 đoàn viên công đoàn'
                                            )
                                    ),
                                    array(
                                            'category' => 'THI ĐUA - KHEN THƯỞNG',
                                            'image' => 'https://picsum.photos/800/600?random=12',
                                            'title' => 'Tổng kết phong trào thi đua và công tác khen thưởng năm 2024',
                                            'related' => array(
                                                    'Phát động phong trào thi đua năm 2024',
                                                    'Khen thưởng các tập thể, cá nhân có thành tích xuất sắc',
                                                    'Đổi mới phong trào thi đua yêu nước'
                                            )
                                    ),
                                    array(
                                            'category' => 'HOẠT ĐỘNG XÃ HỘI',
                                            'image' => 'https://picsum.photos/800/600?random=13',
                                            'title' => 'Tổ chức các hoạt động từ thiện và an sinh xã hội năm 2024',
                                            'related' => array(
                                                    'Thăm hỏi công nhân có hoàn cảnh khó khăn',
                                                    'Tổ chức chương trình "Tết sum vầy"',
                                                    'Hỗ trợ xây dựng nhà tình nghĩa'
                                            )
                                    ),
                                    array(
                                            'category' => 'GIÁO DỤC ĐÀO TẠO',
                                            'image' => 'https://picsum.photos/800/600?random=14',
                                            'title' => 'Đẩy mạnh công tác đào tạo, bồi dưỡng cán bộ công đoàn',
                                            'related' => array(
                                                    'Tập huấn nghiệp vụ công tác công đoàn',
                                                    'Bồi dưỡng kỹ năng hoạt động công đoàn',
                                                    'Nâng cao trình độ cho cán bộ công đoàn'
                                            )
                                    ),
                                    array(
                                            'category' => 'HOẠT ĐỘNG NỮ CÔNG',
                                            'image' => 'https://picsum.photos/800/600?random=15',
                                            'title' => 'Đẩy mạnh các hoạt động vì sự tiến bộ của phụ nữ',
                                            'related' => array(
                                                    'Tổ chức các hoạt động kỷ niệm ngày Phụ nữ Việt Nam',
                                                    'Tuyên dương nữ CNVCLĐ tiêu biểu',
                                                    'Chăm lo đời sống nữ công nhân viên chức lao động'
                                            )
                                    )
                            );
                            foreach ($special_topics as $topic): ?>
                                <div>
                                    <div class="barlow-bold text-068BDB lh-125"><?php echo $topic['category']; ?></div>
                                    <div class="bg-FFF uk-border-rounded padding-12 item-9px">
                                        <div class="uk-cover-container uk-border-rounded">
                                            <img src="<?php echo $topic['image']; ?>" alt="" uk-cover="">
                                            <canvas width="258" height="157"></canvas>
                                        </div>
                                        <div class="item-13px">
                                            <h4 class="text-484554 barlow-medium lh-125 fz-16"><a href=""
                                                                                                  class="uk-link-toggle"><?php echo $topic['title']; ?></a>
                                            </h4>
                                        </div>
                                        <ul class="uk-list uk-list-bullet text-555 fz-14">
                                            <?php foreach ($topic['related'] as $related): ?>
                                                <li><a href="" class="uk-link-toggle"><?php echo $related; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@l">
                <div class="padding-20 uk-border-rounded uk-text-center item-20px home__sidebar__box1" style="--path-to-image: url('images/Rectangle248.png');">
                    <img src="images/logo_31.png" alt="">
                    <div class="uk-text-uppercase barlow-extrabold text-2756A6 item-9px">THÔNG TIN ĐIỆN TỬ LIÊN ĐOÀN LAO ĐỘNG TỈNH PHÚ THỌ</div>
                </div>
                <div class="item-20px home__sidebar__box2 uk-border-rounded padding-12">
                    <h3 class="home__sidebar__title uk-text-center uk-text-uppercase fz-20 playfair-display-900 text-E81C0F">thông báo</h3>
                    <ul class="uk-list home__sidebar__list uk-list-bullet">
                        <?php
                        $notifications = array(
                                'Kế hoạch về "Truyền thông công đoàn" giai đoạn 2023-2028',
                                'Thông báo về việc tổ chức Hội nghị sơ kết 6 tháng đầu năm 2025',
                                'Quyết định về việc ban hành quy chế làm việc của Ban Chấp hành',
                                'Hướng dẫn tổ chức các hoạt động kỷ niệm 96 năm ngày thành lập',
                                'Kế hoạch tổ chức Tháng Công nhân năm 2025',
                                'Thông báo về việc nghỉ lễ Quốc khánh 2/9/2025',
                                'Kế hoạch tổ chức Hội thi An toàn vệ sinh viên giỏi năm 2025',
                                'Thông báo về việc tổ chức Đại hội Công đoàn các cấp',
                                'Hướng dẫn thực hiện chế độ thông tin báo cáo công đoàn'
                        );
                        foreach ($notifications as $notification): ?>
                            <li><a href="" class="uk-link-toggle"><?php echo $notification; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>