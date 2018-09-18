<?php
/**  
* archive
* @package custom   
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');

$this->widget('Widget_Stat')->to($stat); 
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives); 
$year = -1;
?>
<div class="container container-timeline container-post-list">
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-left">
                <div class="timeline-icon"></div>
            </div>
            <div class="timeline-content">
                <div class="tile">
                    <div class="tile-content">
                        <p class="tile-title">
                            目前共计 <?php $stat->publishedPostsNum(); ?> 篇文章
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        while($archives->next()): 
        $year_tmp = date('Y',$archives->created);
        if ($year_tmp != $year):
            $year = $year_tmp;
        ?>
        <div class="timeline-item">
            <div class="timeline-left">
                <div class="timeline-icon icon-lg"></div>
            </div>
            <div class="timeline-content">
                <div class="tile">
                    <div class="tile-content">
                        <p class="tile-title"><span class="h4"><?php echo $year; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <div class="timeline-item">
            <div class="timeline-left">
                <a class="timeline-icon" href="<?php $archives->permalink(); ?>"></a>
            </div>
            <div class="timeline-content">
                <div class="tile">
                    <div class="tile-content">
                        <p class="tile-subtitle text-gray mb-1"><?php $archives->date(); ?></p>
                        <a href="<?php $archives->permalink(); ?>" style="color: #667189;"><p class="tile-title"><?php $archives->title() ?></p></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php $this->need('footer.php'); ?>