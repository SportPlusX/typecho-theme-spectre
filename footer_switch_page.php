<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
if ($this->getTotalPage() > 1): ?>
    <ul class="pagination">
    <?php if ($this->getCurrentPage() > 1): ?>
        <li class="page-item page-prev"><?php $this->pageLink('<div class="page-item-title h5"><i class="icon material-icons casino-icons">arrow_back</i></div><div class="page-item-subtitle">上一页</div>', 'prev'); ?></li>
    <?php endif; ?>
    <?php if ($this->getCurrentPage() < $this->getTotalPage()): ?>
        <li class="page-item page-next"><?php $this->pageLink('<div class="page-item-title h5"><i class="icon material-icons casino-icons">arrow_forward</i></div><div class="page-item-subtitle">下一页</div>', 'next'); ?></li>
    <?php endif; ?>
    </ul>
<?php endif; ?>