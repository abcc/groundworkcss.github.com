$(document).ready ->

  # # open/close dropdown nav
  # delay = ''
  # $('header nav > ul > li').on
  #   mouseenter: ->
  #     clearTimeout(delay)
  #     $(this).addClass('on')
  #   mouseleave: ->
  #     $this = $(this)
  #     delay = setTimeout (->
  #       $this.removeClass('on')
  #     ), 350

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

  # responsive headings
  $('h1.heading.responsive').responsiveText
    agressiveness: 7.75,
    minSize: 20,
    maxSize: 100
  $('h1.responsive').not('.heading').responsiveText
    agressiveness: 4.1,
    minSize: 20,
    maxSize: 170
  $('h3.responsive').responsiveText
    agressiveness: 13.6,
    minSize: 15,
    maxSize: 50

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
  $('#slider').orbit()