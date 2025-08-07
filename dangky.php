<?php $data["title"] = "Đăng ký"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-1-3@l">
                <form>
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend uk-text-center">Đăng ký</legend>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input" type="text" aria-label="Họ và tên" placeholder="Họ và tên">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input" type="text" aria-label="Email" placeholder="Email">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: receiver"></span>
                                <input class="uk-input" type="text" aria-label="Số điện thoại" placeholder="Số điện thoại">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input" type="text" aria-label="Mật khẩu" placeholder="Mật khẩu">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input" type="text" aria-label="Nhập lại mật khẩu" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-width">Đăng ký</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>