<?php $data["title"] = "Tư vấn pháp luật"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-position-relative">
    <div class="uk-position-cover" style="background: linear-gradient(90deg, rgba(198, 226, 255, 0.48) 0%, rgba(171, 207, 242, 0.48) 100%);"></div>
    <div class="uk-position-cover tuvanphapluat__breadcrumb__overlay uk-background-cover" style="--path-to-image: url('images/image.png')"></div>
    <div class="uk-position-relative uk-section-xsmall">
        <div class="uk-container">
            <h1 class="fz-24 text-484554 lh-125 barlow-semibold" style="margin-bottom: 10px;">Tư vấn pháp luật</h1>
            <nav aria-label="Breadcrumb">
                <ul class="uk-breadcrumb uk-margin-remove-bottom tuvanphapluat__breadcrumb">
                    <li><a href=".">Trang chủ</a></li>
                    <li><span aria-current="page">Tư vấn pháp luật</span></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">

    </div>
</div>
<div class="uk-section-small bg-F3FBFF">
    <div class="uk-container">
        <div class="home__news__head">
            <div class="uk-child-width-auto" uk-grid>
                <div>
                    <div class="home__news__head__line">
                        <div class="uk-grid-10 uk-flex-middle" uk-grid>
                            <div>
                                <h2 class="text-2D2D2D fz-21 playfair-display-900 uk-text-uppercase">Văn bản mới</h2>
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
                        <div class="uk-text-nowrap">Người ký</div>
                    </th>
                    <th>
                        <div class="uk-text-nowrap">Tình trạng</div>
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
                <?php
                $items = array();
                for ($i = 1; $i <= 6; $i++) {
                    $items[] = array(
                            'code' => sprintf('%02d/TL', $i),
                            'date' => '10/05/2024',
                            'title' => 'Thể lệ giải báo chí toàn quốc về xây dựng Đảng (Giải búa liềm vàng) lần thứ IX - năm 2024',
                            'signer' => 'Phạm Văn Bàng',
                            'status' => 'Còn hiệu lực',
                            'department' => 'Liên đoàn lao động tỉnh'
                    );
                }
                foreach ($items as $item): ?>
                    <tr>
                        <td>
                            <div class="text-181818 barlow-medium"><?= $item['code'] ?></div>
                            <div><?= $item['date'] ?></div>
                        </td>
                        <td>
                            <div class="fz-16 barlow-medium"><?= $item['title'] ?></div>
                        </td>
                        <td>
                            <div class="uk-text-nowrap"><?= $item['signer'] ?></div>
                        </td>
                        <td>
                            <div class="uk-text-nowrap"><?= $item['status'] ?></div>
                        </td>
                        <td>
                            <div><?= $item['department'] ?></div>
                        </td>
                        <td>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27"
                                     fill="none">
                                    <path d="M13.5 5.0625C19.125 5.0625 23.9287 8.56125 25.875 13.5C23.9287 18.4387 19.125 21.9375 13.5 21.9375C7.875 21.9375 3.07125 18.4387 1.125 13.5C3.07125 8.56125 7.875 5.0625 13.5 5.0625ZM13.5 7.875C10.395 7.875 7.875 10.395 7.875 13.5C7.875 16.605 10.395 19.125 13.5 19.125C16.605 19.125 19.125 16.605 19.125 13.5C19.125 10.395 16.605 7.875 13.5 7.875ZM13.5 10.125C15.3675 10.125 16.875 11.6325 16.875 13.5C16.875 15.3675 15.3675 16.875 13.5 16.875C11.6325 16.875 10.125 15.3675 10.125 13.5C10.125 11.6325 11.6325 10.125 13.5 10.125Z"
                                          fill="#3CB919"/>
                                </svg>
                            </a>
                            <a href="" class="uk-margin-small-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <path d="M12 4C15.64 4 18.6696 6.59006 19.3496 10.04C21.9496 10.22 24 12.36 24 15C24 17.76 21.76 20 19 20H6C2.69 20 0 17.31 0 14C0 10.9101 2.3398 8.36022 5.34961 8.04004C6.59961 5.64004 9.11 4 12 4ZM10 9V13H7L11.6396 17.6504C11.8395 17.8502 12.1496 17.85 12.3496 17.6504L17 13H14V9H10Z"
                                          fill="#068BDB"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>