<?php
/**
 * Modern, Simple & Elegant | 现代，简洁，优雅
 * 
 * @package Spectre
 * @author neoFelhz & KeNorizon
 * @version 1.2
 * @link https://github.com/neoFelhz/hexo-theme-spectre
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');

if ($this->is('index') && $this->getCurrentPage() == 1): ?>
<div class="container container-header">
    <div class="columns">
        <div class="column col-xs-12 col-8 daily_pic">
            <div class="card">
                <div class="card-image" style="background-image:url('<?php echo themeResUrl($this->options->spectreCustomDailyPic, 'img/daily_pic.png'); ?>')">
                    <p><?php $this->options->spectreSlogan(); ?></p>
                </div>
                <div class="card-footer bg-gray hide-xs">
                    <figure class="avatar">
                        <img src="<?php echo themeResUrl($this->options->spectreCustomAvatar, 'img/avatar.png'); ?>" />
                    </figure>
                    <div class="card-title"><?php echo empty($this->options->spectreAuthorName) ? $this->author->screenName : $this->options->spectreAuthorName; ?></div>
                </div>
            </div>
        </div>
        <div class="column col-xs-12 col-4 author_info">
            <div class="card">
                <div class="card-header">
                    <img src="<?php echo themeResUrl($this->options->spectreCustomLogo, 'img/logo.png'); ?>" alt="logo">
                </div>
                <div class="card-footer bg-gray">
                   <div class="card-title show-xs"><?php $this->options->title(); ?></div>
                   <div style="flex-grow: 1;"></div>
                   
                    <div class="dropdown dropdown-right float-right">
                        <a class="btn btn-link btn-gray dropdown-toggle" tabindex="0"><i class="icon material-icons casino-icons">dashboard</i></a>
                        <ul class="menu">
                        <?php if ($this->user->hasLogin()): ?>
                            <li class="menu-item">
                                <a href="<?php $this->options->adminUrl(); ?>" target="_blank"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php $this->options->logoutUrl(); ?>" target="_blank"><?php _e('退出'); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="menu-item">
                                <a href="<?php $this->options->adminUrl('login.php'); ?>" target="_blank"><?php _e('登录'); ?></a>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-right float-right">
                        <a class="btn btn-link btn-gray dropdown-toggle" tabindex="0"><i class="icon material-icons casino-icons">rss_feed</i></a>
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="<?php $this->options->feedUrl(); ?>" target="_blank">RSS 订阅</a>
                            </li>
                          <li class="menu-item">
                                <a href="<?php $this->options->feedAtomUrl(); ?>" target="_blank">Atom 订阅</a>
                            </li>
                        </ul>
                    </div>
                    <?php $this->need('share_menu.php'); ?>
                    <?php if (!empty($this->options->spectreIndex) && in_array('ShowSearchButton', $this->options->spectreIndex)): ?>
                    <div class="dropdown dropdown-right float-right">
                        <a class="btn btn-link btn-gray dropdown-toggle" tabindex="0"><i class="icon material-icons casino-icons">search</i></a>
                        <ul class="menu">
                            <li class="menu-item">
                                <form class="input-group" autocomplete="off" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                                    <input maxlength="80" type="search" id="search-field" name="s" class="form-input" placeholder="<?php _e('请输入关键词'); ?>" required="" />
                                    <button class="btn btn-primary input-group-btn"><?php _e('搜索'); ?></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="container container-post-list">
<?php while ($this->next()): ?>
<?php if ($this->fields->thumbnail):?>
    <div class="card with-thumbnail">
        <a href="<?php $this->permalink() ?>" class="card-image lazy" data-src="<?php $this->fields->thumbnail(); ?>"></a>
<?php else: ?>
    <div class="card no-thumbnail">
<?php endif; ?>
        <div class="card-header">
            <a class="card-title h5" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            <div class="card-subtitle text-gray"><?php $this->date(); ?></div>
        </div>
        <div class="card-body post-content">
            <?php $this->content(); ?>
        </div>
        <div class="card-footer">
            <div class="divider mt-0"></div>
            <a href="<?php $this->permalink(); ?>" class="btn btn-link float-left">阅读全文 &raquo;</a>
            
            <?php foreach ($this->categories as $category): ?>
            <a class="btn float-right btn-link" href="<?php echo $category['permalink']; ?>"><?php echo $category['name']; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
<?php endwhile; ?>
</div>
<div class="container container-index-nav">
<?php $this->need('footer_switch_page.php'); ?>
</div>
<?php $this->need('footer.php'); ?>
