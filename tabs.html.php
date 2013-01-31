<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title>Groundwork CSS</title>
  <!-- Modernizr -->
  <script src="js/libs/modernizr-2.6.2.min.js"></script>
  <!-- jQuery -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script type="text/javascript">window.jQuery || document.write('<script src="./js/libs/jquery-1.8.2.min.js"><\/script>')</script>
  <!-- Groundwork CSS -->
  <link type="text/css" rel="stylesheet" href="./css/groundwork.css">
  <!-- Groundy theme files -->
  <link type="text/css" rel="stylesheet" href="./css/groundy.css">
</head>
<body>

  <header class="white band padded">
    <div class="container">
      <div class="row">
        <div class="one third">
          <h1 class="big responsive heading"><a href="./"><span class="logo"></span> Groundwork<sup>Beta</sup></a></h1>
        </div>
        <div class="two thirds double pad-top">
          <nav class="small-tablet">
              <ul class="row">
                  <li class="one small-tablet half"><a href="./">Home</a></li
                  ><li class="one small-tablet half"><a class="active" href="./components.html">Components <i class="icon-caret-down"></i></a>
                    <ul>
                      <li><a href="./grid.html">Grid</a></li>
                      <li><a href="./media-queries.html">Media Queries</a></li>
                      <li><a href="./typography.html">Typography</a></li>
                      <li><a href="./buttons.html">Buttons</a></li>
                      <li><a href="./forms.html">Forms</a></li>
                      <li><a href="./navigation.html">Navigation</a></li>
                      <li><a class="lt-red" href="./tabs.html">Tabs</a></li>
                      <li><a href="./ui-elements.html">UI Elements</a></li>
                      <li><a href="./icons.html">Icons</a></li>
                      <li><a href="./responsiveText-js.html">ResponsiveText</a></li>
                      <li><a href="./popovers-js.html">Popovers</a></li>
                      <li><a href="./tooltips-js.html">Tooltips</a></li>
                      <li><a href="./orbit-js.html">Orbit</a></li>
                      <li><a href="./colorbox-js.html">ColorBox</a></li>
                    </ul>
                  </li>

                  <!-- <li class="one small-tablet sixth"><a href="./layout-1.html">Layout 1</a></li
                  ><li class="one small-tablet sixth"><a href="./layout-2.html">Layout 2</a></li
                  ><li class="one small-tablet sixth"><a href="./layout-3.html">Layout 3</a></li
                  ><li class="one small-tablet sixth"><a href="./layout-4.html">Layout 4</a></li
                  ><li class="one small-tablet sixth"><a href="./layout-5.html">Layout 5</a></li> -->
              </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="one third padded">
        <h1><i class="icon-folder-close"></i> Tabs</h1>
        <p>Groundwork tabs are clean, simple, easy to use and fully responsive.</p>
      </div>
      <div class="two thirds padded">
        <h2>Tabs</h2>
        <p></p>
        <div class="tabs">
          <ul>
            <li><a href="#tab-1" class="active">Tab 1</a></li>
            <li><a href="#tab-2">Tab 2</a></li>
            <li><a href="#tab-3">Tab 3</a></li>
            <li><a href="#tab-4" class="disabled">Disabled Tab</a></li>
            <li class="pull-right"><a href="#tab-6">Right 2</a></li>
            <li class="pull-right"><a href="#tab-5">Right 1</a></li>
          </ul>
          <div id="tab-1" class="active">
            <h1>Tab 1</h1>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
          </div>
          <div id="tab-2">
            <h1>Tab 2</h1>
            <ul>
              <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
              <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
              <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
              <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
            </ul>
          </div>
          <div id="tab-3">
            <h1>Tab 3</h1>
            <dl>
              <dt>Definition list</dt>
              <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
              <dt>Lorem ipsum dolor sit amet</dt>
              <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
            </dl>
          </div>
          <div id="tab-4">
            <h1>Tab 4</h1>
            <p>You should not be able to get to this content, because the tabs has been disabled.</p>
          </div>
          <div id="tab-5">
            <h1>Tab 5</h1>
            <h3>The tab for this content is aligned to the right.</h3>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
              <li>Aliquam tincidunt mauris eu risus.</li>
              <li>Vestibulum auctor dapibus neque.</li>
            </ul>
          </div>
          <div id="tab-6">
            <h1>Tab 6</h1>
            <h3>The tab for this content is aligned to the right as well.</h3>
            <ul>
              <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
              <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
              <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
              <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  <!-- scripts -->
  <script type="text/javascript" src="./js/plugins/jquery.orbit-1.4.0.js"></script>
  <script type="text/javascript" src="./js/plugins/jquery.responsiveText.js"></script>
  <script type="text/javascript" src="./js/groundwork.js"></script>

  <!-- google analytics -->
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-17121602-5']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>

</body>
</html>