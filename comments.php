<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <div class="h4 response-title"><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t('%d 条评论')); ?></div>
    
    <?php
    $comments->listComments(); 
    
    ob_start();
    $comments->pageNav(_t('&laquo; 前一页'), _t('后一页 &raquo;'), 3, '...', array(
        'wrapTag'       =>  'ul',
        'wrapClass'     =>  'pagination',
        'itemTag'       =>  "\x00*(li)*\x00",
        'textTag'       =>  'span',
        'currentClass'  =>  'active',
        'prevClass'     =>  'prev',
        'nextClass'     =>  'next'
    )); 
    $pageNav = ob_get_contents();
    ob_end_clean();
    echo str_replace(array("<\x00*(li)*\x00 class=\"", "<\x00*(li)*\x00", "</\x00*(li)*\x00>"), array('<li class="page-item ', '<li class="page-item"', '</li>'), $pageNav);
    
    endif; 

    if($this->allow('comment')): 
    if ($comments->have()): 
    ?>
    <div class="response-division"></div>
    <?php endif; ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="response-title">
            <span class="h4" id="response"><?php _e('添加新评论'); ?></span> 
            <span class="cancel-comment-reply">
            <?php $comments->cancelReply(); ?>
            </span>
        </div>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><?php _e('称呼'); ?></span>
                    <input type="text" size="35" name="author" id="author" class="text form-input" value="<?php $this->remember('author'); ?>" placeholder=" " required />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><?php _e('邮箱'); ?></span>
                    <input type="email" size="35" name="mail" id="mail" class="text form-input" value="<?php $this->remember('mail'); ?>" placeholder=" " <?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                 </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><?php _e('网站'); ?></span>
                    <input type="url" size="35" name="url" id="url" class="text form-input" value="<?php $this->remember('url'); ?>" placeholder="<?php _e('http://'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                </div>
            </div>
            <?php endif; ?>
            <div class="form-group">
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea form-input" required placeholder="<?php _e('加入讨论...'); ?>"><?php $this->remember('text'); ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="submit btn input-group-btn"><?php _e('提交评论'); ?></button>
            </div>
        </form>
    </div>
    <?php else: ?>
    <div class="h4"><?php _e('评论已关闭'); ?></div>
    <?php endif; ?>
</div>
