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
                      <li><a class="lt-red" href="./media-queries.html">Media Queries</a></li>
                      <li><a href="./typography.html">Typography</a></li>
                      <li><a href="./buttons.html">Buttons</a></li>
                      <li><a href="./forms.html">Forms</a></li>
                      <li><a href="./navigation.html">Navigation</a></li>
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
        <h1><i class="icon-tablet"></i> Media Queries</h1>
        <p>Groundwork's adaptive grid is mobile-friendly and fully responsive.</p>
        <h6>Example:</h6>
        <code>
<pre>@media only screen and (<span class="key">max-width</span>:<span>767px</span>) {</pre>
<pre>  <comment>// styles when below 768 pixels</comment></pre>
<pre>}</pre>
        </code>
      </div>
      <div class="two thirds padded">
        <h2>Overview</h2>
        <p>Groundwork has been built to help you make websites that look great on any screen, big ones, small ones, and ones in sizes that have yet to be invented. Groundwork columns, by default, expand to full-width rows when the viewport drops below 768 pixels.</p>
        <h2>Mobile and Tablet Layouts</h2>
        <p>In cases where you want columns for smaller widths, you simply add one of these classes:</p>
        <dl>
          <dt><code class="inline">small-tablet</code></dt>
          <dd>Grid structure remains intact until 480 pixel viewport widths</dd>
          <dt><code class="inline">mobile</code></dt>
          <dd>Grid structure remains intact at all sizes.</dd>
        </dl>
        <h6>Example usage:</h6>
        <code>
<pre>&lt;div class="<span>row</span>"&gt;</pre>
<pre>  &lt;div class="<span>two thirds</span>"&gt;<content>Normal</content>&lt;/div&gt;</pre>
<pre>  &lt;div class="<span>one third</span>"&gt;<content>Normal</content>&lt;/div&gt;</pre>
<pre>&lt;/div&gt;</pre>
<pre>&lt;div class="<span>row</span>"&gt;</pre>
<pre>  &lt;div class="<span>two small-tablet thirds</span>"&gt;<content>Small Tablet</content>&lt;/div&gt;</pre>
<pre>  &lt;div class="<span>one small-tablet third</span>"&gt;<content>Small Tablet</content>&lt;/div&gt;</pre>
<pre>&lt;/div&gt;</pre>
<pre>&lt;div class="<span>row</span>"&gt;</pre>
<pre>  &lt;div class="<span>two mobile thirds</span>"&gt;<content>Mobile</content>&lt;/div&gt;</pre>
<pre>  &lt;div class="<span>one mobile third</span>"&gt;<content>Mobile</content>&lt;/div&gt;</pre>
<pre>&lt;/div&gt;</pre>
        </code>
        <hr/>
        <h6>Result:</h6>
        <div class="demo">
          <div class="row">
            <div class="two thirds">Normal</div>
            <div class="one third">Normal</div>
          </div>
          <div class="row">
            <div class="two small-tablet thirds">Small Tablet</div>
            <div class="one small-tablet third">Small Tablet</div>
          </div>
          <div class="row">
            <div class="two mobile thirds">Mobile</div>
            <div class="one mobile third">Mobile</div>
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