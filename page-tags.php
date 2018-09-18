<?php
/**  
* tags
* @package custom   
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=100')->to($tags);
?>
<style>
.tagscloud {
    margin: 4rem 1.2rem 3rem;
    padding: 0 1rem;
    text-align: center;
}
@media screen and (max-width: 480px) {
    .tagscloud {
        padding: 0;
    }
}
</style>
<div class="tagscloud">
    <h3>标签</h3>
    <?php while ($tags->next()): ?>
    <a class="btn" href="<?php $tags->permalink(); ?>" title="<?php $tags->count(); _e(" 篇文章") ?>"><?php $tags->name(); ?></a>
    <?php endwhile; ?>
</div>
<?php $this->need('footer.php'); ?>