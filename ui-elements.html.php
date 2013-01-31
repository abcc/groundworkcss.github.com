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
                      <li><a href="./tabs.html">Tabs</a></li>
                      <li><a class="lt-red" href="./ui-elements.html">UI Elements</a></li>
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
        <h1><i class="icon-comment"></i> UI Elements</h1>
        <p>Common UI elements that provide user feedback or call users to take action.</p>
      </div>
      <div class="two thirds padded">
        <h2>Messages</h2>
        <p>Communicate instructions, success, warnings or errors with Groundwork messages.</p>
        <p class="dismissible message">This is an important message.</p>
        <p class="dismissible success message">This is a success message.</p>
        <h3 class="dismissible warning message">This is a heading 3 warning message.</h3>
        <h1 class="dismissible error message">This is a heading 1 error message.</h1>

        <hr/>

        <h2>Panel Frames</h2>
        <p>Seperate special content with box panel frames.</p>
        <div class="panel">
          <h4>This is a normal panel</h4>
          <p>Use these to seperate or call attention to special content.</p>
        </div>
        <div class="success panel">
          <h4>This is a success panel</h4>
          <p>Use these to communicate special success messages.</p>
        </div>

        <hr/>

        <h2>Tabular Data</h2>
        <p>People love to bash on tables almost as much as they love to hate old versions of IE, but there are times when you actually should use a <code class="inline">&lt;table&gt;</code> to display data. Groundwork includes, easily customizable table styling to help you make your otherwise-boring tabluar data look great and stay clean.</p>
        <table>
          <thead>
            <tr>
              <th>Table Heading</th>
              <th>Table Heading</th>
              <th>Table Heading</th>
              <th>Table Heading</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
            <tr>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
              <td>Table cell</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Footer cell</td>
              <td>Footer cell</td>
              <td>Footer cell</td>
              <td>Footer cell</td>
            </tr>
          </tfoot>
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