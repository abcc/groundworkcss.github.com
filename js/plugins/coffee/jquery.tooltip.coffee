###
 *
 *  jQuery Tooltips by Gary Hepting - https://github.com/ghepting/jquery-tooltips
 *  
 *  Open source under the BSD License. 
 *
 *  Copyright © 2013 Gary Hepting. All rights reserved.
 *
###

(($) ->
  $.fn.tooltip = (options) ->
    defaults =
      topOffset: 0
      delay: 100                    # delay before showing (ms)
      speed: 100                    # animation speed (ms)

    options = $.extend(defaults, options)

    tooltip = $('#tooltip')         # tooltip element
    delayShow = ''                  # delayed open
    trigger = ''                    # store trigger
    
    getElementPosition = (el) ->    # get element position
      offset = el.offset()
      win = $(window)
      top: top = offset.top - win.scrollTop()
      left: left = offset.left - win.scrollLeft()
      bottom: bottom = win.height() - top - el.outerHeight()
      right: right = win.width() - left - el.outerWidth()

    closetooltip = ->
      tooltip.remove()              # remove tooltip

    setPosition = (trigger) ->
      # get trigger element coordinates
      coords = getElementPosition(trigger)
      # tooltip dimensions
      if tooltip.outerWidth() > ($(window).width() - 20)
        tooltip.css('width',$(window).width() - 20)
      attrs = {}
      # adjust max width of tooltip
      tooltip.css('max-width', 
        Math.min(
          ($(window).width()-parseInt($('body').css('padding-left'))-parseInt($('body').css('padding-right'))),
          parseInt(tooltip.css('max-width'))
        )
      )
      width = tooltip.outerWidth()
      height = tooltip.outerHeight()
      # horizontal positioning
      if coords.left <= coords.right        # default position
        tooltip.addClass('left')
        attrs.left = coords.left
      else                                  # pin from right side
        tooltip.addClass('right')
        attrs.right = coords.right
      # veritcal positioning
      if (coords.top-options.topOffset) > (height+20) # top positioned tooltip
        tooltip.addClass('top')
        attrs.top = (trigger.offset().top - height) - 20
      else # bottom positioned tooltip
        tooltip.addClass('bottom')
        attrs.top = trigger.offset().top + 15
      tooltip.css attrs

    showtooltip = (e) ->
      closetooltip()                  # close tooltip
      clearTimeout(delayShow)         # cancel previous timeout
      delayShow = setTimeout ->
        trigger = $(e.target)         # set trigger element
        # create tooltip DOM element
        tooltip = $("<div id=\"tooltip\"></div>")
        # add tooltip element to DOM
        tooltip.css("opacity", 0).html(trigger.attr('data-title')).appendTo "body"
        # initialize tooltip
        setPosition(trigger)
        tooltip.animate
          top: "+=10"
          opacity: 1
        , options.speed
      , options.delay

    @each ->
      $this = $(this)

      $this.attr('role','tooltip').attr('data-title',$this.attr('title'))
      $this.removeAttr "title"        # remove title attribute
        
      if $this.is('input') || $this.is('select') || $this.is('textarea')
        # focus behavior
        $this.bind
          focus: (e) ->
            showtooltip(e)                    # show tooltip
            $this.bind                        # bind mouseenter
              mouseenter: (e) ->
                showtooltip(e)                # show tooltip
          blur: (e) ->
            clearTimeout(delayShow)           # cancel delay show
            closetooltip()                    # close tooltip
            $this.unbind('mouseenter')        # unbind mouseenter
      else
        # hover and focus behavior
        $this.bind
          mouseenter: (e) ->
            showtooltip(e)                    # show tooltip
          mouseleave: ->
            clearTimeout(delayShow)           # cancel delay show
            closetooltip()                    # close tooltip
          focus: (e) ->
            showtooltip(e)                    # show tooltip
          blur: (e) ->
            clearTimeout(delayShow)           # cancel delay show
            closetooltip()                    # close tooltip

) jQuery