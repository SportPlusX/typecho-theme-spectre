<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!empty($this->options->spectreShareLink)): 
ob_start();
$this->archiveTitle(array(
    'category'  =>  _t('分类 %s 下的文章'),
    'search'    =>  _t('包含关键字 %s 的文章'),
    'tag'       =>  _t('标签 %s 下的文章'),
    'author'    =>  _t('%s 发布的文章')
), '', ' - '); 
$this->options->title();
$title = urlencode(ob_get_contents());
ob_end_clean();
$siteTitle = urlencode($this->options->title);
$url = urlencode(htmlspecialchars(requestUrl()));
$favicon = urlencode(htmlspecialchars(themeResUrl($this->options->spectreFavicon, 'img/logo.png')));
$author = urlencode(htmlspecialchars($this->author->screenName));
$desc = urlencode(htmlspecialchars($this->getDescription()));
?>
<div class="dropdown dropdown-right float-right">
<a class="btn btn-link btn-gray dropdown-toggle" tabindex="0"><i class="icon material-icons casino-icons">share</i></a>
<ul class="menu">
    <!-- Share Weibo -->
    <?php if (in_array('weibo', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="http://service.weibo.com/share/share.php?appkey=&title=<?php echo $title; ?>&url=<?php echo $url; ?>&pic=<?php echo $favicon; ?>&searchPic=false&style=simple" target="_blank"><?php _e('分享到微博'); ?></a>
    </li>
    <?php endif; ?>

    <!-- Share Twitter -->
    <?php if (in_array('twitter', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&url=<?php echo $url; ?>&via=<?php echo $author; ?>" target="_blank"><?php _e('分享到 Twitter'); ?></a>
    </li>
    <?php endif; ?>

    <!-- Share Facebook -->
    <?php if (in_array('facebook', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank"><?php _e('分享到 Facebook'); ?></a>
    </li>
    <?php endif; ?>

    <!-- Share Google+ -->
    <?php if (in_array('googleplus', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank"><?php _e('分享到 Google+'); ?></a>
    </li>
    <?php endif; ?>

    <!-- Share LinkedIn -->
    <?php if (in_array('linkedin', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>&title=<?php echo $title; ?>" target="_blank"><?php _e('分享到 LinkedIn'); ?></a>
    </li>
    <?php endif; ?>

    <!-- Share QQ -->
    <?php if (in_array('qq', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="http://connect.qq.com/widget/shareqq/index.html?site=<?php echo $siteTitle; ?>&title=<?php echo $title; ?>&summary=<?php echo $desc; ?>&pics=<?php echo $favicon; ?>&url=<?php echo $url; ?>" target="_blank"><?php _e('分享到 QQ'); ?></a>
    </li>
    <?php endif; ?>

    <!-- Share Telegram -->
    <?php if (in_array('telegram', $this->options->spectreShareLink)): ?>
    <li class="menu-item">
        <a href="https://telegram.me/share/url?url=<?php echo $url; ?>&text=<?php echo $title; ?>" target="_blank"><?php _e('分享到 Telegram'); ?></a>
    </li>
    <?php endif; ?>

</ul>
</div>
<?php endif; ?>