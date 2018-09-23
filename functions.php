<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    Typecho_Widget::widget('Widget_Options')->to($options);
    
    // Head
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>头部</h2>"));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreFavicon', NULL, NULL, 
        _t('Favicon URL'), 
        _t('设置 Favicon. 若留空则为主题默认 Favicon.')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreAndroidChromeColor', NULL, '#455A64', 
        _t('Android Chrome Toolbar 颜色'), 
        _t('设定本站点在 Android Chrome 的 Toolbar 上的颜色. 主题默认颜色为 #455A64 (需要自行填入).')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Textarea(
        'spectreCustomHead', NULL, NULL, 
        _t('自定义 &lt;head&gt;'), 
        _t('添加自定义内容至 &lt;head&gt; 标签内.')
    ));
    
    // 首页
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>首页</h2>"));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreAuthorName', NULL, Typecho_Widget::widget('Widget_User')->screenName, 
        _t('作者名称'), 
        _t('将会显示在站点首页头像旁.')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreSlogan', NULL, NULL, 
        _t('Slogan'), 
        _t('将会显示在站点首页 Daily Pic 处.')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreCustomDailyPic', NULL, NULL, 
        _t('自定义 Daily Pic'), 
        _t('设置 Daily Pic URL, 若留空则为主题默认 Daily Pic (img/daily_pic.png).')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreCustomLogo', NULL, NULL, 
        _t('自定义 Logo'), 
        _t('设置 Logo URL, 若留空则为主题默认 Logo (img/logo.png).')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreCustomAvatar', NULL, NULL, 
        _t('自定义头像'), 
        _t('设置头像 URL, 若留空则为主题默认头像 (img/avatar.png).')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Checkbox(
        'spectreIndex', 
        array(
            'ShowSearchButton' => _t('显示搜索')
        ),
        array(
            'ShowSearchButton'
        ), 
        _t('搜索设置')
    ));
    
    // Sidebar
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>侧边栏</h2>"));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Checkbox(
        'spectreSidebar', 
        array(
            'ArticleCount' => _t('文章计数'),
            'ArchiveLink' => _t('归档页面链接'),
            'TagsLink' => _t('标签页面链接'),
            'FriendsLink' => _t('友情链接页面链接'),
        ),
        array(
            'ArticleCount',
            'ArchiveLink',
            'TagsLink'
        ),
        _t('侧边栏设置'),
        _t('若要开启归档页面，需要新建一个独立页面，模板选择 archive. <br/>若要开启标签页面，需要新建一个独立页面，模板选择 tags. <br/>若要开启友情链接页面，需要安装 Links 插件并新建一个独立页面，模板选择 links. ')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Textarea(
        'spectreCustomSidebarLink', NULL, NULL, 
        _t('自定义链接'), 
        _t('添加自定义链接至侧边栏, 可以输入多行, 格式错误无法识别的行将被忽略.<br />格式: <b>链接文本|链接图标|URL</b><br />例如: 关于|person|about.html<br />图标名称参考: <a rel="noreferer" href="https://material.io/tools/icons/?style=round">https://material.io/tools/icons/?style=round</a>')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Textarea(
        'spectreCustomSidebarFooter', NULL, NULL, 
        _t('自定义侧边栏底部'), 
        _t('添加自定义 html 代码至侧边栏底部')
    ));
    
    // Footer
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>页脚</h2>"));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreCopyrightSince', NULL, NULL, 
        _t('Copyright Since'), 
        _t('指定站点建立的年份。例如，如果设置为2015，则页脚将显示 " © 2015 - 2018 "')
    ));
    
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Textarea(
        'spectreCustomFooter', NULL, NULL, 
        _t('自定义页脚'), 
        _t('添加自定义 html 至页脚处.')
    ));
    
    // Footer SNS
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>页脚 SNS 链接</h2><span>社交网络链接, 若留空则不显示.</span>"));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_twitter', NULL, NULL, _t('Twitter')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_facebook', NULL, NULL, _t('Facebook')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_googleplus', NULL, NULL, _t('Google +')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_weibo', NULL, NULL, _t('微博')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_instagram', NULL, NULL, _t('Instagram')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_tumblr', NULL, NULL, _t('Tumblr')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_github', NULL, NULL, _t('Github')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_linkedin', NULL, NULL, _t('LinkedIn')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_zhihu', NULL, NULL, _t('知乎')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_bilibili', NULL, NULL, _t('bilibili')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_telegram', NULL, NULL, _t('Telegram')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_v2ex', NULL, NULL, _t('V2EX')));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('spectreSNS_segmentfault', NULL, NULL, _t('Segmentfault')));
    
    // Post
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>文章</h2>"));
    $licenseEnable = new Typecho_Widget_Helper_Form_Element_Radio('spectreLicenseEnable', 
        array(
            '1' => _t('开'),
            '0' => _t('关')
        ),
        '1', 
        _t('默认文章许可协议显示'),
        _t('指定是否默认在文章结尾处显示许可协议。')
    );
    $form->addInput($licenseEnable);
    $form->addInput(new Typecho_Widget_Helper_Form_Element_TextArea(
        'spectreMainLicense', NULL, NULL, 
        _t('默认文章许可协议'), 
        _t('指定默认的文章许可协议 (支持 HTML). 留空则为 <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh">CC BY-NC-SA 3.0 Unported</a>')
    ));
    
    // Share
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>分享链接</h2><span>控制首页和文章页的分享链接显示, 若都不勾选则同时隐藏分享按钮.</span>"));
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Checkbox(
        'spectreShareLink', 
        array(
            'weibo' => _t('微博'),
            'twitter' => _t('Twitter'),
            'facebook' => _t('Facebook'),
            'googleplus' => _t('Google+'),
            'linkedin' => _t('LinkedIn'),
            'qq' => _t('QQ'),
            'telegram' => _t('Telegram')
        ),
        array(), 
        _t('分享链接显示')
    ));
    
    // CDN
    $form->addItem((new Typecho_Widget_Helper_Layout())->html("<h2>CDN</h2>"));
    $cdnSelect = new Typecho_Widget_Helper_Form_Element_Radio('spectreCDNMode', 
        array(
            'None' => _t('本站点'),
            'Custom' => _t('自定义'),
        ),
        'None', 
        _t('CDN 选择'),
        _t('指定从何处加载本主题资源.')
    );
    $form->addInput($cdnSelect);
    $form->addInput(new Typecho_Widget_Helper_Form_Element_Text(
        'spectreCustomCDN', NULL, NULL, 
        _t('自定义 CDN URL'), 
        _t('包括到 /usr/themes/spectre<br /> 参考: <ul><li>(本站) ' . $options->themeUrl . '</li><li>(JsDelivr) https://cdn.jsdelivr.net/gh/KeNorizon/typecho-theme-spectre@' . themeVersionStr() .'</li></ul>')
    ));
}

function themeFields($layout) {
    $thumbnail = new Typecho_Widget_Helper_Form_Element_Text('thumbnail', NULL, NULL, _t('文章缩略图'), _t('指定文章缩略图的URL. 缩略图会显示在文章列表和文章页中.'));
    $thumbnail->inputs[0]->setAttribute("style", "width:100%;");
    $layout->addItem($thumbnail);
    
    $licenseType = new Typecho_Widget_Helper_Form_Element_Radio('licenseType', 
        array(
            '0' => _t('默认协议'),
            '1' => _t('无协议'),
            '2' => _t('指定协议'),
        ),
        '0', 
        _t('许可协议类型'),
        _t('您可以指定要在文章末尾显示何种许可协议。')
    );
    $layout->addItem($licenseType);
    
    $customLicense = new Typecho_Widget_Helper_Form_Element_Textarea('customLicense', NULL, NULL, _t('指定协议内容'), _t('您可以指定要在文章末尾显示的许可协议, 支持 HTML. (仅在 许可协议类型 中选择 指定协议 时生效).'));
    $customLicense->inputs[0]->setAttribute("style", "width:100%;");
    $layout->addItem($customLicense);
}

function themeVersionStr() {
    return '0.1.2';
}

function themeOldVersions() {
    return array('0.1.1', '0.1.0');
}

function copyrightYearText() {
    Typecho_Widget::widget('Widget_Options')->to($options);
    $from = $options->spectreCopyrightSince;
    $to = date('Y');
    if (empty($from) || $from == $to) {
        return $to;
    }
    else {
        return $from . ' - ' . $to;
    }
}

function sidebarNavItems() {
    Typecho_Widget::widget('Widget_Options')->to($options);
    $sidebarEnabledLinks = !empty($options->spectreSidebar) ? $options->spectreSidebar : array();
    
    $items = array();
    $items[] = array(
        'url' => $options->index,
        'icon' => 'home',
        'text' => _t('首页'),
    );
    
    if (in_array('ArchiveLink', $sidebarEnabledLinks)) {
        $items[] = array(
            'url' => Typecho_Common::url(Typecho_Router::url('page', array('slug' => 'archive')), $options->index),
            'icon' => 'inbox',
            'text' => _t('归档'),
        );
    }
    
    if (in_array('TagsLink', $sidebarEnabledLinks)) {
        $items[] = array(
            'url' => Typecho_Common::url(Typecho_Router::url('page', array('slug' => 'tags')), $options->index),
            'icon' => 'bookmark',
            'text' => _t('标签'),
        );
    }
    
    if (in_array('FriendsLink', $sidebarEnabledLinks)) {
        $items[] = array(
            'url' => Typecho_Common::url(Typecho_Router::url('page', array('slug' => 'links')), $options->index),
            'icon' => 'people',
            'text' => _t('友链'),
        );
    }
    if (!empty($options->spectreCustomSidebarLink)) {
        $customLinks = explode("\n", $options->spectreCustomSidebarLink);
        foreach ($customLinks as $customLink) {
            $linkData = explode('|', $customLink);
            if (count($linkData) == 3) {
                $items[] = array(
                    'url' => $linkData[2],
                    'icon' => $linkData[1],
                    'text' => $linkData[0],
                );
            }
        }
    }

    return $items;
}

function footerSNSItems() {
    Typecho_Widget::widget('Widget_Options')->to($options);
    
    $items = array();
    $itemKeys = array('twitter', 'facebook', 'googleplus', 'weibo', 'instagram', 'tumblr', 'github', 'linkedin', 'zhihu', 'bilibili', 'telegram', 'v2ex', 'segmentfault');
    
    foreach ($itemKeys as $key) {
        $optionKey = 'spectreSNS_' . $key;
        if (!empty($options->$optionKey)) {
            $items[] = array('url' => $options->$optionKey, 'name' => $key);
        }
    }

    return $items;
}

function themeResUrl($customUrl, $relativePath) {
    Typecho_Widget::widget('Widget_Options')->to($options);
    if (!empty($customUrl) && $customUrl != '@') {
        return $customUrl;
    }
    if ($options->spectreCDNMode == 'Custom' && $customUrl != '@' && !empty($options->spectreCustomCDN)) {
        return Typecho_Common::url($relativePath, $options->spectreCustomCDN);
    }
    else {
        return Typecho_Common::url($relativePath, $options->themeUrl);
    }
}

function themeFixedResUrl($relativePath) {
    Typecho_Widget::widget('Widget_Options')->to($options);
    if ($options->spectreCDNMode == 'Custom' && !empty($options->spectreCustomCDN)) {
        return Typecho_Common::url($relativePath, $options->spectreCustomCDN);
    }
    else {
        return Typecho_Common::url($relativePath, $options->themeUrl);
    }
}

function prevPost($post) {
    $content = Typecho_Db::get()->fetchRow($post->select()->where('table.contents.created < ?', $post->created)
            ->where('table.contents.status = ?', 'publish')
            ->where('table.contents.type = ?', $post->type)
            ->where("table.contents.password IS NULL OR table.contents.password = ''")
            ->order('table.contents.created', Typecho_Db::SORT_DESC)
            ->limit(1));

    if ($content) 
        return $post->filter($content);
    else
        return NULL;
}

function nextPost($post) {
    $content = Typecho_Db::get()->fetchRow($post->select()->where('table.contents.created > ? AND table.contents.created < ?',
            $post->created, Typecho_Widget::widget('Widget_Options')->time)
            ->where('table.contents.status = ?', 'publish')
            ->where('table.contents.type = ?', $post->type)
            ->where("table.contents.password IS NULL OR table.contents.password = ''")
            ->order('table.contents.created', Typecho_Db::SORT_ASC)
            ->limit(1));

    if ($content) 
        return $post->filter($content);
    else
        return NULL;
}

function postLicense($post) {
    Typecho_Widget::widget('Widget_Options')->to($options);
    if ($post->fields->licenseType == 2) {
        return $post->fields->customLicense;
    }
    else if (!empty($options->spectreMainLicense)) {
        return $options->spectreMainLicense;
    }
    else {
        return '<strong>本文采用</strong> <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.zh" target="_blank" rel="noopener">CC BY-NC-SA 3.0 Unported</a> <strong>协议进行许可。</strong>';
    }
}

function shouldShowLicense($post) {
    Typecho_Widget::widget('Widget_Options')->to($options);
    switch ($post->fields->licenseType) {
        case 0:
            return $options->spectreLicenseEnable == 1;
        break;
        case 1:
            return false;
        break;
        case 2:
        default:
            return true;
        break;
    }
}

function requestUrl() {
    return Typecho_Request::getInstance()->getRequestUrl();
}

function threadedComments($thiz, $singleCommentOptions)
{
    $commentClass = '';
    if ($thiz->authorId) {
        if ($thiz->authorId == $thiz->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }
?>
<li itemscope itemtype="http://schema.org/UserComments"  class=" comment-body<?php
    if ($thiz->levels > 0) {
        echo ' comment-child';
        $thiz->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $thiz->alt(' comment-odd', ' comment-even');
    echo $commentClass;
?>">
    <div class="comment-container clearfix" id="<?php $thiz->theId(); ?>">
        <div class="comment-avator" itemprop="creator" itemscope itemtype="http://schema.org/Person">
            <span itemprop="image"><?php $thiz->gravatar(48, $singleCommentOptions->defaultAvatar); ?></span>
        </div>
        <div class="comment-main">
            <div class="comment-meta">
                <cite itemprop="name"><?php $singleCommentOptions->beforeAuthor();$thiz->author();$singleCommentOptions->afterAuthor(); ?></cite>
                <?php if ($thiz->authorId && $thiz->authorId == $thiz->ownerId) { ?>
                <span class="label label-primary">&thinsp;<?php _e('作者'); ?>&thinsp;</span>
                <?php } ?>
                <a class="comment-meta-element comment-time" href="<?php $thiz->permalink(); ?>"><time itemprop="commentTime" datetime="<?php $thiz->date('c'); ?>"><?php $singleCommentOptions->beforeDate();
                $thiz->date('Y-m-d H:i');
                $singleCommentOptions->afterDate(); ?></time></a>
                <?php if ('waiting' == $thiz->status) { ?>
                <span class="label label-warning comment-meta-element">&thinsp;<?php _e('待审核'); ?>&thinsp;</span>
                <?php } ?>
                <span class="comment-meta-element">
                <?php $thiz->reply($singleCommentOptions->replyWord); ?>
                </span>
            </div>
            <div class="comment-content" itemprop="commentText">
            <?php $thiz->content(); ?>
            </div>
        </div>
    </div>
    <?php if ($thiz->children) { ?>
    <div class="comment-children" itemprop="discusses">
        <?php $thiz->threadedComments(); ?>
    </div>
    <?php } ?>
    
</li>
<?php
}

function hasLinksPlugin() {
    $plugins = Typecho_Plugin::export();
    $activatedPlugins = $plugins['activated'];
    return isset($activatedPlugins['Links']);
}