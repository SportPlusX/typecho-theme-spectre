<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
            </main>
            <footer class="centered">
                <div class="footer-content">
                    <div class="footer-sns-list">
                        <?php
                        $snsItems = footerSNSItems();
                        foreach ($snsItems as $snsItem):
                        ?>
                        <a href="<?php echo $snsItem['url']; ?>" target="_blank">
                            <button class="footer-sns-btn footer-sns-<?php echo $snsItem['name']; ?>"></button></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="footer-copyright">Copyright&nbsp;©&nbsp;<?php echo copyrightYearText(); ?>
                        <a href="<?php $this->options->index(); ?>"><?php $this->options->title(); ?></a>
                    </div>
                    <div class="footer-develop">
                        <div>Powered by
                            <a href="http://typecho.org/" target="_blank" class="footer-develop-a">Typecho</a>
                        </div>
                        <div>Theme -
                            <a href="https://github.com/neoFelhz/hexo-theme-spectre" target="_blank" class="footer-develop-a">Spectre</a>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="back-to-top rounded">
                <a href="#"><i class="icon material-icons casino-icons">expand_less</i></a>
            </div>
        </div>
    </div>
    <?php $this->footer(); ?>
    <?php $this->options->spectreCustomFooter(); ?>
    <!-- Import JS -->
    <script>lsloader.js("lazy_js","<?php echo themeFixedResUrl('libs/js/lazyload.min.js'); ?>")</script>
    <script type="text/ls-javascript" id="lazy-load">
    var myLazyLoad = new LazyLoad({
        elements_selector: ".lazy"
    });
    // Start Queue
    window.onload = function() {
        setInterval(function(){
            queue.execNext();
        },200);
    };
    </script>

    <script>
    !function() {
        for (var e = document.querySelectorAll('script[type="text/ls-javascript"]'), r = 0; r < e.length; ++r) {
            var n = e[r];
            lsloader.runInlineScript(n.id, n.id)
        }
    }(),
    console.log(" \n %c Spectre Theme | © neoFelhz | Version <?php echo themeVersionStr(); ?> %c \n %c Hexo Theme    %c https://github.com/neoFelhz/hexo-theme-spectre %c \n %c Typecho Theme %c https://github.com/KeNorizon/typecho-theme-spectre %c\n", "color: #fff; background-image: linear-gradient(90deg, rgb(236, 61, 1213) 0%, rgb(94, 108, 198) 100%); padding:5px 1px;", "", "background-color: #5e97f6; padding:5px 0; color: white;", "background-image: linear-gradient(90deg, rgb(94, 108, 198) 0%, rgb(194, 194, 194) 0%); padding:5px 0;","", "background-color: #5755d9; padding:5px 0; color: white;", "background-image: linear-gradient(90deg, rgb(94, 108, 198) 0%, rgb(194, 194, 194) 0%); padding:5px 0;", "")
    </script>
</body>
</html>