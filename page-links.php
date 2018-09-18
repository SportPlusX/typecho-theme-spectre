<?php
/**  
* links
* @package custom   
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="container container-links">
    <ul class="link-list">
        <?php if (hasLinksPlugin()):
         Links_Plugin::output('
                <li class="link-item">
                <a href="{url}" title="{title}" target="_blank">
                    <div class="card">
                        <div class="tile">
                            <div class="tile-avatar">
                                <img src="{image}" >
                            </div>
                            <div class="tile-content">
                                <p class="tile-title mb-1 text-center h5">{title}</p>
                                <p class="tile-subtitle mb-0 text-gray text-center">
                                    <small>{description}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
                </li>
');
         else: ?>
        <h3><?php _e('请先安装并启用Links插件.'); ?></h3>
        <?php endif; ?>
    </ul>
</div>

<?php $this->need('footer.php'); ?>