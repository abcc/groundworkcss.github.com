<?php require_once("_doctype.php"); ?>
  <title>Groundwork CSS &hearts;</title>
<?php require_once("_head.php"); ?>
<?php require_once("_header.php"); ?>
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
<?php require_once("_scripts.php"); ?>