<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html style="display:none">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <link rel="icon shortcut" type="image/ico" href="<?php echo themeResUrl($this->options->spectreFavicon, 'img/logo.png'); ?>">
    <link rel="icon" href="<?php echo themeResUrl($this->options->spectreFavicon, 'img/logo.png'); ?>">
    
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <meta name="format-detection" content="telephone=no"/>
<?php if (!empty($this->options->spectreAndroidChromeColor)): ?>
    <meta name="theme-color" content="<?php $this->options->spectreAndroidChromeColor(); ?>">
<?php endif; ?>

    <?php $this->header("generator=0"); ?>

    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <!--
        © neoFelhz
        GitHub: https://github.com/neoFelhz/hexo-theme-spectre
        Version: <?php echo themeVersionStr(); ?>
    -->
    <script>
        window.materialVersion = <?php echo json_encode(themeVersionStr()); ?>;
        window.oldVersion = <?php echo json_encode(themeOldVersions()); ?>;
    </script>
    
    <script>!function(){window.lsloader={jsRunSequence:[],jsnamemap:{},cssnamemap:{}},lsloader.removeLS=function(a){try{localStorage.removeItem(a)}catch(b){}},lsloader.setLS=function(a,b){try{localStorage.setItem(a,b)}catch(c){}},lsloader.getLS=function(a){var b="";try{b=localStorage.getItem(a)}catch(c){b=""}return b},versionString="/*"+(window.materialVersion||"unknownVersion")+"*/",lsloader.clean=function(){var a,b;try{for(a=[],b=0;b<localStorage.length;b++)a.push(localStorage.key(b));a.forEach(function(a){var c,b=lsloader.getLS(a);window.oldVersion&&(c=window.oldVersion.reduce(function(a,c){return a||-1!==b.indexOf("/*"+c+"*/")},!1),c&&lsloader.removeLS(a))})}catch(c){}},lsloader.clean(),lsloader.load=function(a,b,c,d){var e,f;if("boolean"==typeof c&&(d=c,c=void 0),d=d||!1,c=c||function(){},e=this.getLS(a),e&&-1===e.indexOf(versionString))return this.removeLS(a),this.requestResource(a,b,c,d),void 0;if(e){if(f=e.split(versionString)[0],f!=b)return console.log("reload:"+b),this.removeLS(a),this.requestResource(a,b,c,d),void 0;e=e.split(versionString)[1],d?(this.jsRunSequence.push({name:a,code:e}),this.runjs(b,a,e)):(document.getElementById(a).appendChild(document.createTextNode(e)),c())}else this.requestResource(a,b,c,d)},lsloader.requestResource=function(a,b,c,d){var e=this;d?this.iojs(b,a,function(a,b,c){e.setLS(b,a+versionString+c),e.runjs(a,b,c)}):this.iocss(b,a,function(c){document.getElementById(a).appendChild(document.createTextNode(c)),e.setLS(a,b+versionString+c)},c)},lsloader.iojs=function(a,b,c){var e,d=this;d.jsRunSequence.push({name:b,code:""});try{e=new XMLHttpRequest,e.open("get",a,!0),e.onreadystatechange=function(){if(4==e.readyState){if((e.status>=200&&e.status<300||304==e.status)&&""!=e.response)return c(a,b,e.response),void 0;d.jsfallback(a,b)}},e.send(null)}catch(f){d.jsfallback(a,b)}},lsloader.iocss=function(a,b,c,d){var f,e=this;try{f=new XMLHttpRequest,f.open("get",a,!0),f.onreadystatechange=function(){if(4==f.readyState){if((f.status>=200&&f.status<300||304==f.status)&&""!=f.response)return c(f.response),d(),void 0;e.cssfallback(a,b,d)}},f.send(null)}catch(g){e.cssfallback(a,b,d)}},lsloader.iofonts=function(a,b,c,d){var f,e=this;try{f=new XMLHttpRequest,f.open("get",a,!0),f.onreadystatechange=function(){if(4==f.readyState){if((f.status>=200&&f.status<300||304==f.status)&&""!=f.response)return c(f.response),d(),void 0;e.cssfallback(a,b,d)}},f.send(null)}catch(g){e.cssfallback(a,b,d)}},lsloader.runjs=function(a,b,c){var d,e,f;if(b&&c)for(d in this.jsRunSequence)this.jsRunSequence[d].name==b&&(this.jsRunSequence[d].code=c);this.jsRunSequence[0]&&this.jsRunSequence[0].code&&"failed"!=this.jsRunSequence[0].status?(e=document.createElement("script"),e.appendChild(document.createTextNode(this.jsRunSequence[0].code)),e.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(e),this.jsRunSequence.shift(),this.jsRunSequence.length>0&&this.runjs()):this.jsRunSequence[0]&&"failed"==this.jsRunSequence[0].status&&(f=this,e=document.createElement("script"),e.src=this.jsRunSequence[0].path,e.type="text/javascript",this.jsRunSequence[0].status="loading",e.onload=function(){f.jsRunSequence.shift(),f.jsRunSequence.length>0&&f.runjs()},document.body.appendChild(e))},lsloader.tagLoad=function(a,b){this.jsRunSequence.push({name:b,code:"",path:a,status:"failed"}),this.runjs()},lsloader.jsfallback=function(a,b){if(!this.jsnamemap[b]){this.jsnamemap[b]=b;for(var c in this.jsRunSequence)this.jsRunSequence[c].name==b&&(this.jsRunSequence[c].code="",this.jsRunSequence[c].status="failed",this.jsRunSequence[c].path=a);this.runjs()}},lsloader.cssfallback=function(a,b,c){var d,e;this.cssnamemap[b]||(this.cssnamemap[b]=1,d=document.createElement("link"),d.type="text/css",d.href=a,d.rel="stylesheet",d.onload=d.onerror=c,e=document.getElementsByTagName("script")[0],e.parentNode.insertBefore(d,e))},lsloader.runInlineScript=function(a,b){var c=document.getElementById(b).innerText;this.jsRunSequence.push({name:a,code:c}),this.runjs()},lsloader.css=function(a,b){lsloader.load(a,b,function(){"undefined"==typeof window.lsLoadCSSNums&&(window.lsLoadCSSNums=0),window.lsLoadCSSNums++,window.lsLoadCSSNums==window.lsLoadCSSMaxNums&&(document.documentElement.style.display="")},!1)},lsloader.js=function(a,b){lsloader.load(a,b,!0)}}();</script>
    <script>function Queue(){this.dataStore=[];this.offer=b;this.poll=d;this.execNext=a;this.debug=false;this.startDebug=c;function b(e){if(this.debug){console.log("Offered a Queued Function.")}if(typeof e==="function"){this.dataStore.push(e)}else{console.log("You must offer a function.")}}function d(){if(this.debug){console.log("Polled a Queued Function.")}return this.dataStore.shift()}function a(){var e=this.poll();if(e!==undefined){if(this.debug){console.log("Run a Queued Function.")}e()}}function c(){this.debug=true}}var queue=new Queue();</script>
    <style id="spectre_css"></style>
    <style id="spectre_exp_css"></style>
    <style id="style_css"></style>
    <script>
        window.lsLoadCSSMaxNums = 3;
        lsloader.css("spectre_css","<?php $this->options->themeUrl('libs/spectre/spectre.min.css'); ?>");
        lsloader.css("spectre_exp_css","<?php $this->options->themeUrl('libs/spectre/spectre-exp.min.css'); ?>");
        lsloader.css("style_css","<?php $this->options->themeUrl('style.css'); ?>");
    </script>
    <?php $this->options->spectreCustomHead(); ?>
</head>
<body>
    <div class="off-canvas off-canvas-sidebar-show">
        <!-- off-screen toggle button -->
        <a class="off-canvas-toggle btn btn-link btn-action sidebar-show-btn" href="#sidebar">
            <i class="icon material-icons casino-icons">menu</i>
        </a>

        <div id="sidebar" class="off-canvas-sidebar">
            <div id="sidebar-content">
                <?php $this->need('sidebar.php'); ?>
            </div>
        </div>

        <a class="off-canvas-overlay" href="#close"></a>

        <div class="off-canvas-content">
            <main>