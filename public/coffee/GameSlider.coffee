class GameSlider

  @timeout = null

  constructor: (@containerSelector, @noOfAssets) ->
    $(@containerSelector).css
      'width' : @noOfAssets * 620

  slideLeft: ->
    offset = $(@containerSelector).css("left")
    $(@containerSelector).animate
      'left' : "-=#{animate}px'",
      500



exports = this
exports.GameSlider = GameSlider
