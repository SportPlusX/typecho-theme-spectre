<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<ul class="nav">
    <a class="off-canvas-toggle btn btn-link btn-action" href="#close">
        <i class="icon material-icons casino-icons">arrow_back</i>
    </a>
    <div class="sidebar-top"></div>
    <span class="h4 text-center"><?php $this->options->title(); ?></span>
    <div class="divider"></div>
<?php 
$items = sidebarNavItems();
foreach ($items as $item):
?>
    <li class="nav-item">
        <a href="<?php echo $item['url']; ?>">
            <i class="icon material-icons sidebar-icons"><?php echo $item['icon']; ?></i><?php echo $item['text']; ?>
        </a>
    </li>
<?php endforeach; ?>
    <div class="divider"></div>
<?php if (!empty($this->options->spectreSidebar) && in_array('ArticleCount', $this->options->spectreSidebar)): ?>
    <li class="nav-item">
        <a href="<?php echo Typecho_Common::url(Typecho_Router::url('page', array('slug' => 'archive')), $this->options->index); ?>" style="display: flex">
            <?php _e('文章总数'); ?>
            <div style="flex-grow: 1;padding-left: 1rem!important"></div>
            <span class="sidebar-badge"><?php Typecho_Widget::widget('Widget_Stat')->to($stat); $stat->publishedPostsNum(); ?></span>
        </a>
    </li>
<?php endif; ?>
</ul>
<?php
if (!empty($this->options->spectreCustomSidebarFooter)):
    echo $this->options->spectreCustomSidebarFooter;
endif;
?>
