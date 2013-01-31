<?php require_once("_doctype.php"); ?>
  <title>Groundwork CSS &hearts;</title>
<?php require_once("_head.php"); ?>
<?php require_once("_header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="one third padded">
        <h1><i class="icon-comment"></i> UI Elements</h1>
        <p>Common UI elements that provide user feedback or call users to take action.</p>
      </div>
      <div class="two thirds padded">
        <h2>Messages</h2>
        <p>Communicate instructions, success, warnings or errors with Groundwork messages.</p>
        <p class="message">This is an important message.</p>
        <p class="success message">This is a success message.</p>
        <p class="warning message">This is a warning message.</p>
        <p class="error message">This is an error message.</p>

        <hr/>

        <h2>Callout Boxes</h2>
        <p>Seperate special content with callout boxes.</p>
        <div class="callout">
          <h4>This is a normal callout box</h4>
          <p>Use these to contain or call attention to special content.</p>
        </div>
        <div class="success callout">
          <h4>This is a success callout box</h4>
          <p>Use these to communicate multi-element success messages as a block.</p>
        </div>
        <div class="warning callout">
          <h4>This is a warning callout box</h4>
          <p>Use these to communicate multi-element warning messages as a block.</p>
        </div>
        <div class="error callout">
          <h4>This is a error callout box</h4>
          <p>Use these to communicate multi-element error messages as a block.</p>
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
<?php require_once("_scripts.php"); ?>