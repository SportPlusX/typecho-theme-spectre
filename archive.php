<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="container container-timeline container-post-list">
    <div class="timeline">
        <?php if ($this->getArchiveType()): ?>
        <div class="timeline-item">
            <div class="timeline-left">
                <div class="timeline-icon icon-lg"></div>
            </div>
            <div class="timeline-content">
                <div class="tile">
                    <div class="tile-content">
                        <span class="tile-subtitle text-gray mb-2">
                        <?php switch ($this->getArchiveType()) {
                            case 'category': echo '分类'; break;
                            case 'search': echo '关键词'; break;
                            case 'tag': echo '标签'; break;
                            case 'author': echo '作者'; break;
                        } ?>
                        </span>&nbsp;&nbsp;<span class="tile-title"><span class="h4"><?php echo $this->getArchiveTitle(); ?></span></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
<?php while ($this->next()): ?>
        <div class="timeline-item">
            <div class="timeline-left">
                <a class="timeline-icon" href="<?php $this->permalink(); ?>"></a>
            </div>
            <div class="timeline-content">
                <div class="tile">
                    <div class="tile-content">
                        <p class="tile-subtitle text-gray mb-1"><?php $this->date(); ?></p>
                        <a href="<?php $this->permalink(); ?>" style="color: #667189;"><p class="tile-title"><?php $this->title() ?></p></a>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile; ?>
    </div>
</div>
<div class="container container-index-nav">
<?php $this->need('particle-page-nav.php'); ?>
</div>
<?php $this->need('footer.php'); ?>