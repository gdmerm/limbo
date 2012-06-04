(function() {
  var GameSlider, exports;

  GameSlider = (function() {

    var timeout = null;

    function GameSlider(containerSelector, noOfAssets, cycle) {
      var _this = this;
      this.containerSelector = containerSelector;
      this.noOfAssets = noOfAssets;
      $(this.containerSelector).css({
        'width': this.noOfAssets * 620
      });

      if (cycle) {
          timeout = setInterval(function() {
            _this.slideLeft()
          }, 6000);
      }
    }

    GameSlider.prototype.slideLeft = function() {
      var offset, animate;
      offset = parseInt($(this.containerSelector).css("left"), 10);
      offset = Math.abs(offset);
      animate = '-=620px';
      if (offset >= 3*620) animate = '0px';
      return $(this.containerSelector).animate({
          'left': animate
      }, 500);
    };

    GameSlider.prototype.slideRight = function() {
      var offset, animate;
      offset = parseInt($(this.containerSelector).css("left"), 10);
      offset = Math.abs(offset);
      animate = '+=620px';
      if (offset === 0) animate = '-1860px';
      return $(this.containerSelector).animate({
        'left': animate
      }, 500);
    };

    return GameSlider;

  })();

  exports = this;

  exports.GameSlider = GameSlider;

}).call(this);
