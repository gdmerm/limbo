(function () {
    var Tabber, exports;

    Tabber = (function () {

        function Tabber(container, pagesContainer) {
            var _this = this;
            this.elements = {
                tabs: null,
                tabPages: null
            }
            this.elements.tabs = $(container).children();
            this.elements.tabPages = $(pagesContainer).find(".scroll-page,.tab-page");

            //listen for events
            this.elements.tabs.on("click", function (e) {
                _this.showTab($(e.target));
            });
        }

        Tabber.prototype.showTab = function (tab) {
            var tabIndex;
                tabIndex = this.elements.tabs.index(tab);
            this.elements.tabs.removeClass("tab-active").addClass("tab");
            tab.removeClass("tab").addClass("tab-active");

            this.elements.tabPages.hide();
            this.elements.tabPages.eq(tabIndex).show();
        };

        return Tabber;
    })();


    exports = this;
    exports.Tabber = Tabber;

}).call(this);
