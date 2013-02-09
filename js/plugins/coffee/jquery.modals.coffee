###
 *
 *  jQuery Modals by Gary Hepting
 *   https://github.com/ghepting/modal  
 *
 *  Based on Avgrund by Hakim El Hattab <3
 *
###

(($) ->
  elems = []
  $.fn.modal = ->

    @each ->
      $(this).appendTo('body').prepend('<i class="close icon-remove"></i>').prepend('<i class="fullscreen icon-resize-full"></i>')
      # bind each modal modal link to modal div
      $('[href=#'+$(this).attr('id')+']').on "click", ->
        modals.open($(this).attr('href'))
      $('.modal .close').on "click", ->
        modals.close()
      $('.modal .fullscreen').on "click", ->
        modals.fullscreen()

  modals = (->

    # ready state
    $('html').addClass('modal-ready')
    
    # create overlay
    if $("#overlay").length < 1
      $('body').append('<div id="overlay"></div>')
    
    # bind overlay to close
    $('#overlay, .modal .close').bind "click", (e) ->
      close()

    open = (elem) ->
      # bind esc key
      $(window).bind "keydown", (e) ->
        keyCode = (if (e.which) then e.which else e.keyCode)
        if keyCode is 27
          close()
      modal = $(elem)
      modal.addClass("active")
      modal.css
        top: '50%',
        left: '50%',
        'margin-top': (modal.outerHeight() / -2) + 'px',
        'margin-left': (modal.outerWidth() / -2) + 'px'
      setTimeout ->
        $('html').addClass("modal-active")
      , 0
      setTimeout ->
        $('html').removeClass('modal-ready')
      , 400

    close = ->
      $(window).unbind "keydown"
      $('html').removeClass("modal-active").addClass('modal-ready')
      $('.modal').css
        top: '10%',
        left: '10%',
        width: 'auto',
        height: 'auto',
        'max-width': '80%',
        'max-height': '80%',
        'margin-top': 0,
        'margin-left': 0
      $('.modal').removeClass("active").removeClass("fullscreen")
      $('.modal i.fullscreen').removeClass('icon-resize-small').addClass('icon-resize-full')

    fullscreen = ->
      if $('.modal.active').hasClass('fullscreen')
        $('.modal i.fullscreen').removeClass('icon-resize-small').addClass('icon-resize-full')
        $('.modal.active').removeClass('fullscreen').css
          width: 'auto',
          height: 'auto',
          'max-width': '80%',
          'max-height': '80%'
        $('.modal.active').delay(100).css
          top: '50%',
          left: '50%',
          'margin-top': ($('.modal.active').outerHeight() / -2) + 'px',
          'margin-left': ($('.modal.active').outerWidth() / -2) + 'px'
      else
        $('.modal i.fullscreen').addClass('icon-resize-small').removeClass('icon-resize-full')
        $('.modal.active').addClass('fullscreen').css
          top: 0,
          left: 0,
          'margin-top': 0,
          'margin-left': 0,
          width: '100%',
          height: '100%',
          'max-width': '100%',
          'max-height': '100%'

    open: open
    close: close
    fullscreen: fullscreen
  )()

  $(window).resize ->
    $('.modal:visible').removeClass('active').css(
      top: '50%',
      left: '50%',
      'margin-top': ($('.modal:visible').outerHeight() / -2) + 'px',
      'margin-left': ($('.modal:visible').outerWidth() / -2) + 'px'
    ).addClass('active')


) jQuery