<?php require_once("_doctype.php"); ?>
  <title>Groundwork CSS &hearts;</title>
<?php require_once("_head.php"); ?>
<?php require_once("_header.php"); ?>
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
<?php require_once("_scripts.php"); ?>