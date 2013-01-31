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
          <h1 class="big responsive heading" data-scale="7.75" data-min="20" data-max="100"><a href="./"><span class="logo"></span> Groundwork<sup>Beta</sup></a></h1>
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
                      <li><a class="lt-red" href="./navigation.html">Navigation</a></li>
                      <li><a href="./tabs.html">Tabs</a></li>
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
        <h1><i class="icon-reorder"></i> Navigation</h1>
        <p>Common navigation styles to help you build faster, better products and stay focused on what's important.</p>
        <h6>Example usage:</h6>
        <code>
<pre>&lt;<tag>nav</tag>&gt;</pre>
<pre>  &lt;<tag>ul</tag>&gt;</pre>
<pre>    &lt;<tag>li</tag>&gt;&lt;<tag>a</tag> href=&quot;<span>#</span>&quot;&gt;<content>Example Link</content>&lt;/<tag>a</tag>&gt;&lt;/<tag>li</tag>&gt;</pre>
<pre>    &lt;<tag>li</tag>&gt;&lt;<tag>a</tag> href=&quot;<span>#</span>&quot;&gt;<content>Example Link</content>&lt;/<tag>a</tag>&gt;&lt;/<tag>li</tag>&gt;</pre>
<pre>  &lt;/<tag>ul</tag>&gt;</pre>
<pre>&lt;/<tag>nav</tag>&gt;</pre>
        </code>
        <hr/>
        <h6>Result:</h6>
        <nav>
          <ul>
            <li><a href="#">Example Link</a></li>
            <li><a href="#">Example Link</a></li>
          </ul>
        </nav>
      </div>
      <div class="two thirds padded">
        <h2>Navigation</h2>
        <p>Much like form fields in Groundwork, unordered list items within <code class="inline">&lt;nav&gt;</code> elements are set by default to 100% the width of their container and can utilize the grid properties in order to achieve scalable horizontal sizing.</p>
        <h2>Horizontal Navigation (with grid)</h2>
        <nav class="small-tablet">
          <ul class="row">
            <li class="one small-tablet fourth"><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
            <li class="one small-tablet fourth"><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam <i class="icon-caret-down"></i></a>
              <ul>
                <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
                <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
              </ul>
            </li>
            <li class="one small-tablet fourth"><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent</a></li>
            <li class="one small-tablet fourth"><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
          </ul>
        </nav>

        <hr/>

        <h2>Horizontal Navigation (inline)</h2>
        <nav class="inline">
          <ul>
            <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
            <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
            <li><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent <i class="icon-caret-down"></i></a>
              <ul>
                <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
                <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
              </ul>
            </li>
            <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
          </ul>
        </nav>

        <hr/>

        <h2>Vertical Navigation</h2>
        <p></p>
        <nav class="small-tablet">
          <ul class="one small-tablet fourth">
            <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
            <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
            <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
            <li><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Praesent <i class="icon-caret-down"></i></a>
              <ul>
                <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
                <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
              </ul>
            </li>
            <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
          </ul>
        </nav>
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