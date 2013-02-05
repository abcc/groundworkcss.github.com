$(document).ready ->

  # navigation menus
  delay = ''
  $('nav > ul > li.menu').on
    mouseenter: (e) ->
      if $(window).width() > 768
        clearTimeout(delay)
        $('nav > ul > li').removeClass('on')
        $('nav > ul > li > ul').hide()
        $(this).addClass('on')
    mouseleave: (e) ->
      if $(window).width() > 768
        delay = setTimeout (->
          $('nav > ul > li').removeClass('on')
          $('nav > ul > li > ul').hide()
        ), 350
    click: (e) ->
      if $(window).width() < 768
        if $(e.target).parent('li.menu').size() > 0
          $this = $(this)
          $(this).children('ul').slideToggle 300, ->
            $this.toggleClass('on')
          e.preventDefault()
          return false
    tap: (e) ->
      if $(e.target).parent('li.menu').size() > 0
        $this = $(this)
        $(this).children('ul').slideToggle 300, ->
          $this.toggleClass('on')
        e.preventDefault()
        return false
 
  # tabs
  $('.tabs > ul > li > a').not('.disabled').click (e) ->
    tabs = $(this).parents('.tabs')
    tabs.find('> ul li a').removeClass('active')
    $(this).addClass('active')
    tabs.children('div').removeClass('active')
    tabs.children($(this).attr('href')).addClass('active')

  # responsive headings
  $('.responsive').each (index, object) ->
    scale = 10
    min = 10
    max = 200
    scale = parseFloat $(this).attr('data-scale') || scale
    min = parseFloat $(this).attr('data-min') || min
    max = parseFloat $(this).attr('data-max') || max
    $(object).responsiveText
      agressiveness: scale,
      minSize: min,
      maxSize: max

  # tooltips
  $('.tooltip[title]').tooltip()
 
  # select all text on invalid input field entries
  $('.error input, .error textarea, 
     .invalid input, .invalid textarea, 
     input.error, textarea.error, 
     input.invalid, textarea.invalid').on
    click: ->
      $(this).focus()
      $(this).select()

  # polyfill select box placeholders
  $('span.select select').each ->
    if $(this).children('option').first().val() == '' and $(this).children('option').first().attr('selected')
      $(this).addClass('unselected')
    else
      $(this).removeClass('unselected')
  $('span.select select').on
    change: ->
      if $(this).children('option').first().val() == '' and $(this).children('option').first().attr('selected')
        $(this).addClass('unselected')
      else
        $(this).removeClass('unselected')
  
  # fallback to PNG if SVG not supported
  if !Modernizr.svg
    $("img[src$='.svg']").each ->
      $(this).attr('src',$(this).attr('src').replace('.svg','.png'))

  # add titles to demo grid cells
  $('.demo > .row > .column, 
     .demo > .row > .columns,
     .demo > .row > .whole, 
     .demo > .row > .wholes, 
     .demo > .row > .half, 
     .demo > .row > .halves, 
     .demo > .row > .third, 
     .demo > .row > .thirds, 
     .demo > .row > .fourth, 
     .demo > .row > .fourths, 
     .demo > .row > .fifth, 
     .demo > .row > .fifths, 
     .demo > .row > .sixth, 
     .demo > .row > .sixths, 
     .demo > .row > .seventh,
     .demo > .row > .sevenths, 
     .demo > .row > .eighth, 
     .demo > .row > .eighths, 
     .demo > .row > .ninth,  
     .demo > .row > .ninths,  
     .demo > .row > .tenth, 
     .demo > .row > .tenths, 
     .demo > .row > .eleventh,
     .demo > .row > .elevenths, 
     .demo > .row > .twelfth,
     .demo > .row > .twelfths').each ->
    $(this).attr('data-title',$(this).attr('class'))
    $(this).attr('data-text',$(this).text())
  $('.demo > .row > .column, 
     .demo > .row > .columns,
     .demo > .row > .whole, 
     .demo > .row > .wholes, 
     .demo > .row > .half, 
     .demo > .row > .halves, 
     .demo > .row > .third, 
     .demo > .row > .thirds, 
     .demo > .row > .fourth, 
     .demo > .row > .fourths, 
     .demo > .row > .fifth, 
     .demo > .row > .fifths, 
     .demo > .row > .sixth, 
     .demo > .row > .sixths, 
     .demo > .row > .seventh,
     .demo > .row > .sevenths, 
     .demo > .row > .eighth, 
     .demo > .row > .eighths, 
     .demo > .row > .ninth,  
     .demo > .row > .ninths,  
     .demo > .row > .tenth, 
     .demo > .row > .tenths, 
     .demo > .row > .eleventh,
     .demo > .row > .elevenths, 
     .demo > .row > .twelfth,
     .demo > .row > .twelfths').hover (->
    $(this).text $(this).attr("data-title")
  ), ->
    $(this).text $(this).attr("data-text")

$(window).load ->
  $('.slider').orbit()