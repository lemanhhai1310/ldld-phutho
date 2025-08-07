<?php $data["title"] = "Đăng nhập"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-1-3@l">
                <form>
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend uk-text-center">Đăng nhập</legend>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input" type="text" aria-label="Email" placeholder="Email">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-inline uk-width">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input" type="text" aria-label="Mật khẩu" placeholder="Mật khẩu">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-width">Đăng nhập</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>