; (function (window) {

    function sideNav(el, options) {
        this.el = el;
        this._init();
    }

    sideNav.prototype = {
        _init: function () {
            this.trigger = document.querySelector('div.sideNav_trigger');
            this.menu = document.querySelector('div.sideNav');
            this.isMenuOpen = false;            

            var self = this;
            this.bodyClickFn = function (ev) {                
                if (ev.srcElement != document.querySelector('div.sideNav_trigger')) {
                    self._closeMenu();
                    this.removeEventListener('click', self.bodyClickFn);
                }
            };

            this._initEvents();
        },
        _initEvents: function () {
            var self = this;

            this.trigger.addEventListener('mouseover', function (ev) { self._peekMenu(); });
            this.trigger.addEventListener('mouseout', function (ev) { self._hidePeekedMenu(); });

            this.trigger.addEventListener('click', function (ev) {
                document.addEventListener('click', self.bodyClickFn);
                self._hidePeekedMenu();
                self._openMenu();
            });
        },
        _peekMenu: function () {
            document.getElementById("sideNav").className += " menu_peek";
            document.getElementById("sideNav_trigger").className += " active";
        },
        _hidePeekedMenu: function () {
            document.getElementById("sideNav").className =
                document.getElementById("sideNav").className.replace(/(?:^|\s)menu_peek(?!\S)/g, '');
            document.getElementById("sideNav_trigger").className =
                document.getElementById("sideNav_trigger").className.replace(/(?:^|\s)active(?!\S)/g, '');
        },
        _openMenu: function () {
            if (!this.isMenuOpen) {
                document.getElementById("sideNav").className += " menu_open";
                this.isMenuOpen = true;
            }
        },
        _closeMenu: function () {
            if (this.isMenuOpen) {
                document.getElementById("sideNav").className =
                    document.getElementById("sideNav").className.replace(/(?:^|\s)menu_open(?!\S)/g, '');
                this._hidePeekedMenu();
                this.isMenuOpen = false;
            }
        }
    }

    window.sideNav = sideNav;

})(window);