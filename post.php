<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container container-post">
    <div class="card post-card col-mx-auto">
        <?php if ($this->fields->thumbnail): ?>
            <div class="card-image" style="background-image: url('<?php $this->fields->thumbnail(); ?>');"></div>
        <?php else: ?>
            <div class="card-no-image"></div>
        <?php endif; ?>
        <div class="card-header">
            <div class="card-header-title">
                <div class="card-title h4"><?php $this->title(); ?></div>
            </div>
            <div class="divider"></div>
            <div>
                <?php if ($this->categories && count($this->categories) > 0): ?>
                <ul class="post-categories-list">
                <?php foreach ($this->categories as $category): ?>
                    <li class="post-categories-list-item">
                        <a class="post-categories-list-link" href="<?php echo $category['permalink']; ?>"><?php echo $category['name']; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                <?php if ($this->tags && count($this->tags) > 0): ?>
                <ul class="post-tags-list">
                <?php foreach ($this->tags as $tag): ?>
                    <li class="post-tags-list-item">
                        <a class="post-tags-list-link" href="<?php echo $tag['permalink']; ?>"><?php echo $tag['name']; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <br />
        <div id="post-content" class="card-body post-content">
            <?php $this->content(); ?>
            <?php if (shouldShowLicense($this)): ?>
            <hr />
            <blockquote>
                <p>
                    <strong>本文作者：</strong><a href="<?php $this->author->permalink(); ?>" target="_blank" rel="noopener"><?php $this->author(); ?></a><br>
                    <strong>本文链接：</strong><a href="<?php $this->permalink(); ?>"><?php $this->permalink(); ?></a><br>
                    <?php echo postLicense($this); ?>
                </p>
            </blockquote>
            <?php endif; ?>
        </div>
        <div class="post-footer-info bg-gray">
            <figure class="avatar centered">
                <img src="<?php echo themeResUrl($this->options->spectreCustomAvatar, 'img/avatar.png'); ?>" />
            </figure>
            <section class="post-footer-date">
                <p class="card-subtitle text-gray mb-0">
                    <span>Publish: <?php $this->date(); ?></span>
                    <?php 
                      $publishDate = date($this->options->postDateFormat, $this->date->timeStamp);
                      $updateDate = date($this->options->postDateFormat, $this->modified);
                      if ($updateDate != $publishDate): ?>
                    <br /><span>Update: <?php echo $updateDate; ?></span>
                    <?php endif; ?>
                </p>
            </section>
            <section class="post-footer-action">
                <?php $this->need('share_menu.php'); ?>
            </section>
        </div>
        <div class="divider m-0"></div>
        <div class="post-nav px-2 bg-gray">
            <ul class="pagination">
                <?php 
                $content = nextPost($this);
                if ($content):
                ?>
                <li class="page-item page-prev">
                    <a href="<?php echo $content['permalink']; ?>" title="<?php echo $content['title']; ?>">
                        <div class="page-item-title h5"><i class="icon material-icons casino-icons">arrow_back</i></div>
                        <div class="page-item-subtitle"><?php echo $content['title']; ?></div>
                    </a>
                </li>
                <?php endif; ?>
                <?php 
                  $content = prevPost($this);
                  if ($content):
                  ?>
                <li class="page-item page-next">
                    <a href="<?php echo $content['permalink']; ?>" title="<?php echo $content['title']; ?>">
                        <div class="page-item-title h5"><i class="icon material-icons casino-icons">arrow_forward</i></div>
                        <div class="page-item-subtitle"><?php echo $content['title']; ?></div>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
            </div>
        <!-- Comment -->
        <div class="card-footer">
            <?php $this->need('comments.php'); ?>
        </div>
        
    </div>
</div>

<?php $this->need('footer.php'); ?>
