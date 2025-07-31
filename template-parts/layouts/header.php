<?php $projectName = "Liên đoàn lao động  - Phú Thọ"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="assets/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="assets/dist/js/uikit.min.js"></script>
    <script src="assets/dist/js/uikit-icons.min.js"></script>

    <style>
        .barlow-thin {
            font-family: "Barlow", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .barlow-extralight {
            font-family: "Barlow", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .barlow-light {
            font-family: "Barlow", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .barlow-regular {
            font-family: "Barlow", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .barlow-medium {
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .barlow-semibold {
            font-family: "Barlow", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .barlow-bold {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .barlow-extrabold {
            font-family: "Barlow", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .barlow-black {
            font-family: "Barlow", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .barlow-thin-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .barlow-extralight-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .barlow-light-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .barlow-regular-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .barlow-medium-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .barlow-semibold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .barlow-bold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .barlow-extrabold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .barlow-black-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 900;
            font-style: italic;
        }
    </style>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <header class="header">

    </header>