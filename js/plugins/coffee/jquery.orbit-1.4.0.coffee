###
 * jQuery Orbit Plugin 1.4.0
 * www.ZURB.com/playground
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
###

(($) ->
  "use strict"
  $.fn.findFirstImage = ->
    @first().find("img").andSelf().filter("img").first()

  ORBIT =
    defaults:
      animation: "horizontal-push" # fade, horizontal-slide, vertical-slide, horizontal-push, vertical-push
      animationSpeed: 600 # how fast animations are
      timer: true # display timer?
      advanceSpeed: 4000 # if timer is enabled, time between transitions
      pauseOnHover: false # if you hover pauses the slider
      startClockOnMouseOut: false # if clock should start on MouseOut
      startClockOnMouseOutAfter: 1000 # how long after MouseOut should the timer start again
      directionalNav: true # manual advancing directional navs
      directionalNavRightText: "Right" # text of right directional element for accessibility
      directionalNavLeftText: "Left" # text of left directional element for accessibility
      captions: true # do you want captions?
      captionAnimation: "fade" # fade, slideOpen, none
      captionAnimationSpeed: 600 # if so how quickly should they animate in
      resetTimerOnClick: false # true resets the timer instead of pausing slideshow progress on manual navigation
      bullets: false # true or false to activate the bullet navigation
      bulletThumbs: false # thumbnails for the bullets
      bulletThumbLocation: "" # relative path to thumbnails from this file
      bulletThumbsHideOnSmall: true # hide thumbs on small devices
      afterSlideChange: $.noop # callback to execute after slide changes
      afterLoadComplete: $.noop # callback to execute after everything has been loaded
      fluid: true
      centerBullets: true # center bullet nav with js, turn this off if you want to position the bullet nav manually
      singleCycle: false # cycles through orbit slides only once
      slideNumber: false # display slide numbers?
      stackOnSmall: false # stack slides on small devices (i.e. phones)

    activeSlide: 0
    numberSlides: 0
    orbitWidth: null
    orbitHeight: null
    locked: null
    timerRunning: null
    degrees: 0
    wrapperHTML: "<div class=\"orbit-wrapper\" />"
    timerHTML: "<div class=\"timer\"><span class=\"mask\"><span class=\"rotator\"></span></span><span class=\"pause\"></span></div>"
    captionHTML: "<div class=\"orbit-caption\"></div>"
    directionalNavHTML: "<div class=\"slider-nav hide-for-small\"><span class=\"right\"></span><span class=\"left\"></span></div>"
    bulletHTML: "<ul class=\"orbit-bullets\"></ul>"
    slideNumberHTML: "<span class=\"orbit-slide-counter\"></span>"
    init: (element, options) ->
      $imageSlides = undefined
      imagesLoadedCount = 0
      self = this
      
      # Bind functions to correct context
      @clickTimer = $.proxy(@clickTimer, this)
      @addBullet = $.proxy(@addBullet, this)
      @resetAndUnlock = $.proxy(@resetAndUnlock, this)
      @stopClock = $.proxy(@stopClock, this)
      @startTimerAfterMouseLeave = $.proxy(@startTimerAfterMouseLeave, this)
      @clearClockMouseLeaveTimer = $.proxy(@clearClockMouseLeaveTimer, this)
      @rotateTimer = $.proxy(@rotateTimer, this)
      @options = $.extend({}, @defaults, options)
      @options.timer = false  if @options.timer is "false"
      @options.captions = false  if @options.captions is "false"
      @options.directionalNav = false  if @options.directionalNav is "false"
      @$element = $(element)
      @$wrapper = @$element.wrap(@wrapperHTML).parent()
      @$slides = @$element.children("img, a, div, figure, li")
      @$element.on "movestart", (e) ->
        
        # If the movestart is heading off in an upwards or downwards
        # direction, prevent it so that the browser scrolls normally.
        e.preventDefault()  if (e.distX > e.distY and e.distX < -e.distY) or (e.distX < e.distY and e.distX > -e.distY)

      @$element.bind "orbit.next", ->
        self.shift "next"

      @$element.bind "orbit.prev", ->
        self.shift "prev"

      @$element.bind "swipeleft", ->
        $(this).trigger "orbit.next"

      @$element.bind "swiperight", ->
        $(this).trigger "orbit.prev"

      @$element.bind "orbit.goto", (event, index) ->
        self.shift index

      @$element.bind "orbit.start", (event, index) ->
        self.startClock()

      @$element.bind "orbit.stop", (event, index) ->
        self.stopClock()

      $imageSlides = @$slides.filter("img")
      if $imageSlides.length is 0
        @loaded()
      else
        $imageSlides.bind "imageready", ->
          imagesLoadedCount += 1
          self.loaded()  if imagesLoadedCount is $imageSlides.length


    loaded: ->
      @$element.addClass("orbit").css
        width: "1px"
        height: "1px"

      @$element.addClass "orbit-stack-on-small"  if @options.stackOnSmall
      @$slides.addClass("orbit-slide").css opacity: 0
      @setDimentionsFromLargestSlide()
      @updateOptionsIfOnlyOneSlide()
      @setupFirstSlide()
      @notifySlideChange()
      if @options.timer
        @setupTimer()
        @startClock()
      @setupCaptions()  if @options.captions
      @setupDirectionalNav()  if @options.directionalNav
      if @options.bullets
        @setupBulletNav()
        @setActiveBullet()
      @options.afterLoadComplete.call this
      Holder.run()

    currentSlide: ->
      @$slides.eq @activeSlide

    notifySlideChange: ->
      if @options.slideNumber
        txt = (@activeSlide + 1) + " of " + @$slides.length
        @$element.trigger "orbit.change",
          slideIndex: @activeSlide
          slideCount: @$slides.length

        if @$counter is `undefined`
          $counter = $(@slideNumberHTML).html(txt)
          @$counter = $counter
          @$wrapper.append @$counter
        else
          @$counter.html txt

    setDimentionsFromLargestSlide: ->
      
      #Collect all slides and set slider size of largest image
      self = this
      $fluidPlaceholder = undefined
      self.$element.add(self.$wrapper).width @$slides.first().outerWidth()
      self.$element.add(self.$wrapper).height @$slides.first().height()
      self.orbitWidth = @$slides.first().outerWidth()
      self.orbitHeight = @$slides.first().height()
      $fluidPlaceholder = @$slides.first().findFirstImage().clone()
      @$slides.each ->
        slide = $(this)
        slideWidth = slide.outerWidth()
        slideHeight = slide.height()
        if slideWidth > self.$element.outerWidth()
          self.$element.add(self.$wrapper).width slideWidth
          self.orbitWidth = self.$element.outerWidth()
        if slideHeight > self.$element.height()
          self.$element.add(self.$wrapper).height slideHeight
          self.orbitHeight = self.$element.height()
          $fluidPlaceholder = $(this).findFirstImage().clone()
        self.numberSlides += 1

      if @options.fluid
        
        # $fluidPlaceholder = $("<img>").attr("src", "http://placehold.it/" + this.options.fluid);
        $fluidPlaceholder = $("<img>").attr("data-src", "holder.js/" + @options.fluid)  if typeof @options.fluid is "string"
        
        #var inner = $("<div/>").css({"display":"inline-block", "width":"2px", "height":"2px"});
        #$fluidPlaceholder = $("<div/>").css({"float":"left"});
        #$fluidPlaceholder.wrapInner(inner);
        
        #$fluidPlaceholder = $("<div/>").css({"height":"1px", "width":"2px"});
        #$fluidPlaceholder = $("<div style='display:inline-block;width:2px;height:1px;'></div>");
        self.$element.prepend $fluidPlaceholder
        $fluidPlaceholder.addClass "fluid-placeholder"
        self.$element.add(self.$wrapper).css width: "inherit"
        self.$element.add(self.$wrapper).css height: "inherit"
        $(window).bind "resize", ->
          self.orbitWidth = self.$element.outerWidth()
          self.orbitHeight = self.$element.height()


    
    #Animation locking functions
    lock: ->
      @locked = true

    unlock: ->
      @locked = false

    updateOptionsIfOnlyOneSlide: ->
      if @$slides.length is 1
        @options.directionalNav = false
        @options.timer = false
        @options.bullets = false

    setupFirstSlide: ->
      
      #Set initial front photo z-index and fades it in
      self = this
      @$slides.first().css(
        "z-index": 3
        opacity: 1
      ).fadeIn ->
        
        #brings in all other slides IF css declares a display: none
        self.$slides.css display: "block"


    startClock: ->
      self = this
      return false  unless @options.timer
      if @$timer.is(":hidden")
        @clock = setInterval(->
          self.$element.trigger "orbit.next"
        , @options.advanceSpeed)
      else
        @timerRunning = true
        @$pause.removeClass "active"
        @clock = setInterval(@rotateTimer, @options.advanceSpeed / 180, false)

    rotateTimer: (reset) ->
      degreeCSS = "rotate(" + @degrees + "deg)"
      @degrees += 2
      @$rotator.css
        "-webkit-transform": degreeCSS
        "-moz-transform": degreeCSS
        "-o-transform": degreeCSS
        "-ms-transform": degreeCSS

      if reset
        @degrees = 0
        @$rotator.removeClass "move"
        @$mask.removeClass "move"
      if @degrees > 180
        @$rotator.addClass "move"
        @$mask.addClass "move"
      if @degrees > 360
        @$rotator.removeClass "move"
        @$mask.removeClass "move"
        @degrees = 0
        @$element.trigger "orbit.next"

    stopClock: ->
      unless @options.timer
        false
      else
        @timerRunning = false
        clearInterval @clock
        @$pause.addClass "active"

    setupTimer: ->
      @$timer = $(@timerHTML)
      @$wrapper.append @$timer
      @$rotator = @$timer.find(".rotator")
      @$mask = @$timer.find(".mask")
      @$pause = @$timer.find(".pause")
      @$timer.click @clickTimer
      if @options.startClockOnMouseOut
        @$wrapper.mouseleave @startTimerAfterMouseLeave
        @$wrapper.mouseenter @clearClockMouseLeaveTimer
      @$wrapper.mouseenter @stopClock  if @options.pauseOnHover

    startTimerAfterMouseLeave: ->
      self = this
      @outTimer = setTimeout(->
        self.startClock()  unless self.timerRunning
      , @options.startClockOnMouseOutAfter)

    clearClockMouseLeaveTimer: ->
      clearTimeout @outTimer

    clickTimer: ->
      unless @timerRunning
        @startClock()
      else
        @stopClock()

    setupCaptions: ->
      @$caption = $(@captionHTML)
      @$wrapper.append @$caption
      @setCaption()

    setCaption: ->
      captionLocation = @currentSlide().attr("data-caption")
      captionHTML = undefined
      return false  unless @options.captions
      
      #Set HTML for the caption if it exists
      if captionLocation
        
        #if caption text is blank, don't show captions
        return false  if $.trim($(captionLocation).text()).length < 1
        
        # if location selector starts with '#', remove it so we don't see id="#selector"
        captionLocation = captionLocation.substring(1, captionLocation.length)  if captionLocation.charAt(0) is "#"
        captionHTML = $("#" + captionLocation).html() #get HTML from the matching HTML entity
        # Add ID caption TODO why is the id being set?
        @$caption.attr("id", captionLocation).html captionHTML # Change HTML in Caption
        #Animations for Caption entrances
        switch @options.captionAnimation
          when "none"
            @$caption.show()
          when "fade"
            @$caption.fadeIn @options.captionAnimationSpeed
          when "slideOpen"
            @$caption.slideDown @options.captionAnimationSpeed
      else
        
        #Animations for Caption exits
        switch @options.captionAnimation
          when "none"
            @$caption.hide()
          when "fade"
            @$caption.fadeOut @options.captionAnimationSpeed
          when "slideOpen"
            @$caption.slideUp @options.captionAnimationSpeed

    setupDirectionalNav: ->
      self = this
      $directionalNav = $(@directionalNavHTML)
      $directionalNav.find(".right").html @options.directionalNavRightText
      $directionalNav.find(".left").html @options.directionalNavLeftText
      @$wrapper.append $directionalNav
      @$wrapper.find(".left").click ->
        self.stopClock()
        if self.options.resetTimerOnClick
          self.rotateTimer true
          self.startClock()
        self.$element.trigger "orbit.prev"

      @$wrapper.find(".right").click ->
        self.stopClock()
        if self.options.resetTimerOnClick
          self.rotateTimer true
          self.startClock()
        self.$element.trigger "orbit.next"


    setupBulletNav: ->
      @$bullets = $(@bulletHTML)
      @$wrapper.append @$bullets
      @$slides.each @addBullet
      @$element.addClass "with-bullets"
      @$bullets.css "margin-left", -@$bullets.outerWidth() / 2  if @options.centerBullets
      @$bullets.addClass "hide-for-small"  if @options.bulletThumbsHideOnSmall

    addBullet: (index, slide) ->
      position = index + 1
      $li = $("<li>" + (position) + "</li>")
      thumbName = undefined
      self = this
      if @options.bulletThumbs
        thumbName = $(slide).attr("data-thumb")
        $li.addClass("has-thumb").css background: "url(" + @options.bulletThumbLocation + thumbName + ") no-repeat"  if thumbName
      @$bullets.append $li
      $li.data "index", index
      $li.click ->
        self.stopClock()
        if self.options.resetTimerOnClick
          self.rotateTimer true
          self.startClock()
        self.$element.trigger "orbit.goto", [$li.data("index")]


    setActiveBullet: ->
      unless @options.bullets
        false
      else
        @$bullets.find("li").removeClass("active").eq(@activeSlide).addClass "active"

    resetAndUnlock: ->
      @$slides.eq(@prevActiveSlide).css "z-index": 1
      @unlock()
      @options.afterSlideChange.call this, @$slides.eq(@prevActiveSlide), @$slides.eq(@activeSlide)

    shift: (direction) ->
      slideDirection = direction
      
      #remember previous activeSlide
      @prevActiveSlide = @activeSlide
      
      #exit function if bullet clicked is same as the current image
      return false  if @prevActiveSlide is slideDirection
      return false  if @$slides.length is "1"
      unless @locked
        @lock()
        
        #deduce the proper activeImage
        if direction is "next"
          @activeSlide++
          @activeSlide = 0  if @activeSlide is @numberSlides
        else if direction is "prev"
          @activeSlide--
          @activeSlide = @numberSlides - 1  if @activeSlide < 0
        else
          @activeSlide = direction
          if @prevActiveSlide < @activeSlide
            slideDirection = "next"
          else slideDirection = "prev"  if @prevActiveSlide > @activeSlide
        
        #set to correct bullet
        @setActiveBullet()
        @notifySlideChange()
        
        #set previous slide z-index to one below what new activeSlide will be
        @$slides.eq(@prevActiveSlide).css "z-index": 2
        
        #fade
        if @options.animation is "fade"
          @$slides.eq(@activeSlide).css(
            opacity: 0
            "z-index": 3
          ).animate
            opacity: 1
          , @options.animationSpeed, @resetAndUnlock
          @$slides.eq(@prevActiveSlide).animate
            opacity: 0
          , @options.animationSpeed
        
        #horizontal-slide
        if @options.animation is "horizontal-slide"
          if slideDirection is "next"
            @$slides.eq(@activeSlide).css(
              left: @orbitWidth
              "z-index": 3
            ).css("opacity", 1).animate
              left: 0
            , @options.animationSpeed, @resetAndUnlock
          if slideDirection is "prev"
            @$slides.eq(@activeSlide).css(
              left: -@orbitWidth
              "z-index": 3
            ).css("opacity", 1).animate
              left: 0
            , @options.animationSpeed, @resetAndUnlock
          @$slides.eq(@prevActiveSlide).css "opacity", 0
        
        #vertical-slide
        if @options.animation is "vertical-slide"
          if slideDirection is "prev"
            @$slides.eq(@activeSlide).css(
              top: @orbitHeight
              "z-index": 3
            ).css("opacity", 1).animate
              top: 0
            , @options.animationSpeed, @resetAndUnlock
            @$slides.eq(@prevActiveSlide).css "opacity", 0
          if slideDirection is "next"
            @$slides.eq(@activeSlide).css(
              top: -@orbitHeight
              "z-index": 3
            ).css("opacity", 1).animate
              top: 0
            , @options.animationSpeed, @resetAndUnlock
          @$slides.eq(@prevActiveSlide).css "opacity", 0
        
        #horizontal-push
        if @options.animation is "horizontal-push"
          if slideDirection is "next"
            @$slides.eq(@activeSlide).css(
              left: @orbitWidth
              "z-index": 3
            ).animate
              left: 0
              opacity: 1
            , @options.animationSpeed, @resetAndUnlock
            @$slides.eq(@prevActiveSlide).animate
              left: -@orbitWidth
            , @options.animationSpeed, "", ->
              $(this).css opacity: 0

          if slideDirection is "prev"
            @$slides.eq(@activeSlide).css(
              left: -@orbitWidth
              "z-index": 3
            ).animate
              left: 0
              opacity: 1
            , @options.animationSpeed, @resetAndUnlock
            @$slides.eq(@prevActiveSlide).animate
              left: @orbitWidth
            , @options.animationSpeed, "", ->
              $(this).css opacity: 0

        
        #vertical-push
        if @options.animation is "vertical-push"
          if slideDirection is "next"
            @$slides.eq(@activeSlide).css(
              top: -@orbitHeight
              "z-index": 3
            ).css("opacity", 1).animate
              top: 0
              opacity: 1
            , @options.animationSpeed, @resetAndUnlock
            @$slides.eq(@prevActiveSlide).css("opacity", 0).animate
              top: @orbitHeight
            , @options.animationSpeed, ""
          if slideDirection is "prev"
            @$slides.eq(@activeSlide).css(
              top: @orbitHeight
              "z-index": 3
            ).css("opacity", 1).animate
              top: 0
            , @options.animationSpeed, @resetAndUnlock
            @$slides.eq(@prevActiveSlide).css("opacity", 0).animate
              top: -@orbitHeight
            , @options.animationSpeed
        @setCaption()
      
      # if on last slide and singleCycle is true, don't loop through slides again
      # .length is zero based so must minus 1 to match activeSlide index
      @stopClock()  if @activeSlide is @$slides.length - 1 and @options.singleCycle

  $.fn.orbit = (options) ->
    @each ->
      orbit = $.extend({}, ORBIT)
      orbit.init this, options

) jQuery

#!
# * jQuery imageready Plugin
# * http://www.zurb.com/playground/
# *
# * Copyright 2011, ZURB
# * Released under the MIT License
# 
(($) ->
  bindToLoad = (element, callback) ->
    $this = $(element)
    $this.bind "load.imageready", ->
      callback.apply element, arguments_
      $this.unbind "load.imageready"

  options = {}
  $.event.special.imageready =
    setup: (data, namespaces, eventHandle) ->
      options = data or options

    add: (handleObj) ->
      $this = $(this)
      src = undefined
      if @nodeType is 1 and @tagName.toLowerCase() is "img" and @src isnt ""
        if options.forceLoad
          src = $this.attr("src")
          $this.attr "src", ""
          bindToLoad this, handleObj.handler
          $this.attr "src", src
        else if @complete or @readyState is 4
          handleObj.handler.apply this, arguments_
        else
          bindToLoad this, handleObj.handler

    teardown: (namespaces) ->
      $(this).unbind ".imageready"
) jQuery

#
#
#Holder - 1.3 - client side image placeholders
#(c) 2012 Ivan Malopinsky / http://imsky.co
#
#Provided under the Apache 2.0 License: http://www.apache.org/licenses/LICENSE-2.0
#Commercial use requires attribution.
#
#
Holder = Holder or {}
((app, win) ->
  
  #http://javascript.nwbox.com/ContentLoaded by Diego Perini with modifications
  contentLoaded = (n, t) ->
    l = "complete"
    s = "readystatechange"
    u = not 1
    h = u
    c = not 0
    i = n.document
    a = i.documentElement
    e = (if i.addEventListener then "addEventListener" else "attachEvent")
    v = (if i.addEventListener then "removeEventListener" else "detachEvent")
    f = (if i.addEventListener then "" else "on")
    r = (e) ->
      (e.type isnt s or i.readyState is l) and (((if e.type is "load" then n else i))[v](f + e.type, r, u)
      not h and (h = not 0) and t.call(n, null)
      )

    o = ->
      try
        a.doScroll "left"
      catch n
        setTimeout o, 50
        return
      r "poll"

    unless i.readyState is l
      if i.createEventObject and a.doScroll
        try
          c = not n.frameElement
        c and o()
      i[e](f + "DOMContentLoaded", r, u)
      i[e](f + s, r, u)
      n[e](f + "load", r, u)
  
  #https://gist.github.com/991057 by Jed Schmidt with modifications
  selector = (a) ->
    a = a.match(/^(\W)?(.*)/)
    b = document["getElement" + ((if a[1] then (if a[1] is "#" then "ById" else "sByClassName") else "sByTagName"))](a[2])
    ret = []
    b? and ((if b.length then ret = b else (if b.length is 0 then ret = b else ret = [b])))
    ret
  
  #shallow object property extend
  extend = (a, b) ->
    c = {}
    for d of a
      c[d] = a[d]
    for e of b
      c[e] = b[e]
    c
  draw = (ctx, dimensions, template) ->
    dimension_arr = [dimensions.height, dimensions.width].sort()
    maxFactor = Math.round(dimension_arr[1] / 16)
    minFactor = Math.round(dimension_arr[0] / 16)
    text_height = Math.max(template.size, maxFactor)
    canvas.width = dimensions.width
    canvas.height = dimensions.height
    ctx.textAlign = "center"
    ctx.textBaseline = "middle"
    ctx.fillStyle = template.background
    ctx.fillRect 0, 0, dimensions.width, dimensions.height
    ctx.fillStyle = template.foreground
    ctx.font = "bold " + text_height + "px sans-serif"
    text = (if template.text then template.text else (dimensions.width + "x" + dimensions.height))
    text_height = Math.max(minFactor, template.size)  if Math.round(ctx.measureText(text).width) / dimensions.width > 1
    ctx.font = "bold " + text_height + "px sans-serif"
    ctx.fillText text, (dimensions.width / 2), (dimensions.height / 2), dimensions.width
    canvas.toDataURL "image/png"
  preempted = false
  fallback = false
  canvas = document.createElement("canvas")
  unless canvas.getContext
    fallback = true
  else
    if canvas.toDataURL("image/png").indexOf("data:image/png") < 0
      
      #Android doesn't support data URI
      fallback = true
    else
      ctx = canvas.getContext("2d")
  settings =
    domain: "holder.js"
    images: "img"
    themes:
      gray:
        background: "#eee"
        foreground: "#aaa"
        size: 12

      social:
        background: "#3a5a97"
        foreground: "#fff"
        size: 12

      industrial:
        background: "#434A52"
        foreground: "#C2F200"
        size: 12

  app.flags =
    dimensions:
      regex: /([0-9]+)x([0-9]+)/
      output: (val) ->
        exec = @regex.exec(val)
        width: +exec[1]
        height: +exec[2]

    colors:
      regex: /#([0-9a-f]{3,})\:#([0-9a-f]{3,})/i
      output: (val) ->
        exec = @regex.exec(val)
        size: settings.themes.gray.size
        foreground: "#" + exec[2]
        background: "#" + exec[1]

    text:
      regex: /text\:(.*)/
      output: (val) ->
        @regex.exec(val)[1]

  for flag of app.flags
    app.flags[flag].match = (val) ->
      val.match @regex
  app.add_theme = (name, theme) ->
    name? and theme? and (settings.themes[name] = theme)
    app

  app.add_image = (src, el) ->
    node = selector(el)
    if node.length
      i = 0
      l = node.length

      while i < l
        img = document.createElement("img")
        img.setAttribute "data-src", src
        node[i].appendChild img
        i++
    app

  app.run = (o) ->
    options = extend(settings, o)
    images = selector(options.images)
    preempted = true
    l = images.length
    i = 0

    while i < l
      theme = settings.themes.gray
      src = images[i].getAttribute("data-src") or images[i].getAttribute("src")
      if src and !!~src.indexOf(options.domain)
        render = false
        dimensions = null
        text = null
        flags = src.substr(src.indexOf(options.domain) + options.domain.length + 1).split("/")
        sl = flags.length
        j = 0

        while j < sl
          if app.flags.dimensions.match(flags[j])
            render = true
            dimensions = app.flags.dimensions.output(flags[j])
          else if app.flags.colors.match(flags[j])
            theme = app.flags.colors.output(flags[j])
          else if options.themes[flags[j]]
            
            #If a theme is specified, it will override custom colors
            theme = options.themes[flags[j]]
          else text = app.flags.text.output(flags[j])  if app.flags.text.match(flags[j])
          j++
        if render
          images[i].setAttribute "data-src", src
          dimensions_caption = dimensions.width + "x" + dimensions.height
          images[i].setAttribute "alt", (if text then text else (if theme.text then theme.text + " [" + dimensions_caption + "]" else dimensions_caption))
          
          # Fallback
          # images[i].style.width = dimensions.width + "px";
          # images[i].style.height = dimensions.height + "px";
          images[i].style.backgroundColor = theme.background
          theme = ((if text then extend(theme,
            text: text
          ) else theme))
          images[i].setAttribute "src", draw(ctx, dimensions, theme)  unless fallback
      i++
    app

  contentLoaded win, ->
    preempted or app.run()

) Holder, window