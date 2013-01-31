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
                      <li><a class="lt-red" href="./typography.html">Typography</a></li>
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
        <h1><i class="icon-font"></i> Typography</h1>
        <p>Keeping the typography consistent throughout a website is important. Groundwork helps with that.</p>
        <h6>Example usage:</h6>
        <code>
<pre>&lt;<tag>h1</tag>&gt;<content>Heading 1</content> &lt;<tag>sup</tag>&gt;&lt;<tag>small</tag>&gt;<content>w/small superscript</content>&lt;/<tag>small</tag>&gt;&lt;/<tag>sup</tag>&gt;&lt;/<tag>h1</tag>&gt;</pre>
<pre>&lt;<tag>p</tag>&gt;<content>Paragraph text with</content> &lt;<tag>big</tag>&gt;<content>big text</content>&lt;/<tag>big</tag>&gt; <content>and</content> &lt;<tag>small</tag>&gt;<content>small text</content>&lt;/<tag>small</tag>&gt;&lt;/<tag>p</tag>&gt;</pre>
<pre>&lt;<tag>p</tag> class="<span>small</span>"&gt;<content>Small paragraph text&lt;/<tag>p</tag>&gt;</pre>
        </code>
        <hr/>
        <h6>Result:</h6>
        <h1>Heading 1 <sup><small>w/small superscript</small></sup></h1>
        <p>Paragraph text with <big>big text</big> and <small>small text</small></p>
        <p class="small">Small paragraph text</p>
      </div>
      <div class="two thirds padded">
        <h2>Headings</h2>
        <div class="row">
          <div class="one mobile half">
            <h1>&lt;h1&gt; Heading 1</h1>
            <h2>&lt;h2&gt; Heading 2</h2>
            <h3>&lt;h3&gt; Heading 3</h3>
            <h4>&lt;h4&gt; Heading 4</h4>
            <h5>&lt;h5&gt; Heading 5</h5>
            <h6>&lt;h6&gt; Heading 6</h6>
          </div>
          <div class="one mobile half">
            <h1><small>&lt;small&gt; Heading 1</small></h1>
            <h2><small>&lt;small&gt; Heading 2</small></h2>
            <h3><small>&lt;small&gt; Heading 3</small></h3>
            <h4><small>&lt;small&gt; Heading 4</small></h4>
            <h5><small>&lt;small&gt; Heading 5</small></h5>
            <h6><small>&lt;small&gt; Heading 6</small></h6>
          </div>
        </div>

        <hr/>

        <h2>Paragraphs</h2>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>


        <hr/>

        <h2>Adjusters</h2>
        <p>Paragraph with <sup>superscript</sup></p>
        <p>Paragraph with <sub>subscript</sub></p>
        <p>Paragraph with <small>small text</small></p>
        <p>Paragraph with <big>large text</big></p>
        <p>Paragraph with <em>emphasized text</em></p>
        <p>Paragraph with <b>bold text</b></p>

        <hr/>

        <h2>Lists</h2>
        <div class="row">
          <div class="one mobile half">
            <ul>
              <li>Default unordered list item</li>
              <li>Default unordered list item</li>
              <li>Default unordered list item</li>
            </ul>
            <ul class="list">
              <li>Styled unordered list item</li>
              <li>Styled unordered list item</li>
              <li>Styled unordered list item</li>
            </ul>
          </div>
          <div class="one mobile half">
            <ol>
              <li>Default ordered list item</li>
              <li>Default ordered list item</li>
              <li>Default ordered list item</li>
            </ol>
            <ol class="list">
              <li>Styled ordered list item</li>
              <li>Styled ordered list item</li>
              <li>Styled ordered list item</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="one mobile half">
            <dl>
              <dt>Definition list term</dt>
              <dd>Definition list description</dd>
              <dt>Definition list term #2</dt>
              <dd>Definition list description #2</dd>
            </dl>
          </div>
        </div>

        <hr/>

        <h2>Links</h2>
        <h1><a href="#">Link in a Heading 1</a></h1>
        <h2><a href="#">Link in a Heading 2</a></h2>
        <h3><a href="#">Link in a Heading 3</a></h3>
        <h4><a href="#">Link in a Heading 4</a></h4>
        <h5><a href="#">Link in a Heading 5</a></h5>
        <h6><a href="#">Link in a Heading 6</a></h6>
        <p><a href="#">Link in a paragraph</a></p>
        <ul>
          <li><a href="#">Link in an unordered list</a></li>
        </ul>
        <ol>
          <li><a href="#">Link in an ordered list</a></li>
        </ol>

        <hr/>

        <h2>Quotes</h2>
        <blockquote>
          A computer once beat me at chess, but it was no match for me at kick boxing.
          <cite>Emo Philips</cite>
        </blockquote>

        <hr/>

        <h2>Code Blocks</h2>
        <code>
<pre>&lt;<tag>div</tag> class="<span>example</span>"&gt;<content>This is a code snippet</content>&lt;/<tag>div</tag>&gt;</pre>
<pre>&lt;<tag>div</tag> class="<span>example</span>"&gt;<content>Line numbering increments with each contained <em>&lt;pre&gt;</em> element</content>&lt;/<tag>div</tag>&gt;</pre>
        </code>
        <br/>
        <p>As well as <code class="inline">inline code</code> snippets.</p>

        <hr/>

        <h2>Buttons</h2>
        <p>Buttons are so awesome, that they get a whole <a href="./buttons.html">page of their own</a>.</p>
        <p><a class="button" href="./buttons.html">Read More <i class="icon-chevron-right"></i></a></p>

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