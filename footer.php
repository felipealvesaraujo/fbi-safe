                <footer class="mdl-mini-footer">
                    <div class="mdl-mini-footer--left-section">
                        <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
                            <span class="visuallyhidden">Twitter</span>
                        </button>

                        <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
                            <span class="visuallyhidden">Facebook</span>
                        </button>
                    
                        <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
                            <span class="visuallyhidden">Google Plus</span>
                        </button>
                    </div>

                    <div class="mdl-mini-footer--right-section">
                        <button class="mdl-mini-footer--social-btn social-btn__share">
                            <i class="material-icons" role="presentation">share</i>
                            <span class="visuallyhidden">share</span>
                        </button>
                    </div>
                </footer>
            </main>
            <div class="mdl-layout__obfuscator"></div>
        </div>

        <a href="https://github.com/google/material-design-lite/blob/master/templates/blog/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>
        <script src="../../material.min.js"></script>
    </body>

    <script>
        Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
                var link = el.querySelector('a');
                if(!link) {
                    return;
                }

                var target = link.getAttribute('href');
                if(!target) {
                    return;
                }
                el.addEventListener('click', function() {
                location.href = target;
            });
        });
    </script>
</html>	