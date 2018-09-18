<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>404 Not Found - <?php $this->options->title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('libs/spectre/spectre.min.css'); ?>">
    <style>
        .valign {
            display: -webkit-box!important;
            display: -webkit-flex!important;
            display: -ms-flexbox!important;
            display: flex!important;
            -webkit-box-align: center!important;
            -webkit-align-items: center!important;
            -ms-flex-align: center!important;
            align-items: center!important
        }

        .section-footer {
            color: #acb3c2;
            padding: 2rem .5rem 0 .5rem;
            position: relative;
            z-index: 200
        }

        .section-footer a {
            color: #667189
        }
    </style>
</head>
<body>
    <div class="empty valign" style="height:100vh">
        <div class="centered">
            <p class="empty-title h1">404 Not Found</p>
            <p class="empty-subtitle">The requested resources is not available</p>
            <p class="empty-title h4">您访问的页面不存在</p>
            <div class="divider"></div>
            <div class="empty-action">
                <div>
                    <a href="<?php $this->options->index(); ?>" class="btn btn-sm"><?php _e('返回首页'); ?></a>
                </div>
            </div>
            <footer class="section section-footer">
                <div id="copyright" class="grid-footer container grid-lg">
                    Copyright&nbsp;©&nbsp;<?php echo copyrightYearText(); ?>
                        <a href="<?php $this->options->index(); ?>"><?php $this->options->title(); ?></a>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
