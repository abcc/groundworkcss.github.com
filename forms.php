<?php require_once("_doctype.php"); ?>
  <title>Groundwork CSS &hearts;</title>
<?php require_once("_head.php"); ?>
<?php require_once("_header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="one third padded">
        <h1><i class="icon-edit"></i> Forms</h1>
        <p>Forms are a part of almost any modern web application. Users need clean and easy to use forms to submit their information.</p>
        <h6>Example usage:</h6>
        <code>
<pre>&lt;<tag>form</tag> action="<span>#</span>" method="<span>post</span>"&gt;</pre>
<pre>&lt;<tag>label</tag>&gt;<content>Example Label</content>&lt;/<tag>label</tag>&gt;</pre>
<pre>&lt;<tag>p</tag>&gt;&lt;<tag>input</tag> placeholder=&quot;<span>placeholder text</span>&quot; /&gt;&lt;/<tag>p</tag>&gt;</pre>
<pre>&lt;<tag>button</tag>&gt;<content>Submit</content>&lt;/<tag>button</tag>&gt;</pre>
<pre>&lt;/<tag>form</tag>&gt;</pre>
        </code>
        <hr/>
        <h6>Result:</h6>
        <form action="#" method="post">
          <label>Example Label</label>
          <p><input placeholder="placeholder text" /></p>
          <button>Submit</button>
        </form>
      </div>
      <div class="two thirds padded">
        <h2>Form Elements</h2>
        <p>Groundwork makes creating beautiful forms pretty darn easy. By default, form elements such as <code class="inline">&lt;input&gt;</code>, <code class="inline">&lt;select&gt;</code> and <code class="inline">&lt;textarea&gt;</code> expand to 100% width of their containers. This makes setting up forms using the grid system really simple.</p>
        <form action="#" method="post">
          <fieldset>
            <legend>Example Groundwork Form</legend>
            <div class="row">
              <div class="one whole padded">
                <label for="name">First &amp; Last Name</label>
                <input type="text" id="name" placeholder="First &amp; Last Name" />
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="you@example.com" />
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="Street Address" />
              </div>
            </div>
            <div class="row">
              <div class="one half padded">
                <input type="text" placeholder="City" />
              </div>
              <div class="one fourth padded">
                <span class="select">
                  <select>
                    <option value="" disabled selected>State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                    <option value="AS">American Samoa</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FM">Federated States of Micronesia</option>
                    <option value="GU">Guam</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="PW">Palau</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="VI">Virgin Islands</option>
                    <option value="AE">Armed Forces Africa</option>
                    <option value="AA">Armed Forces Americas</option>
                    <option value="AE">Armed Forces Canada</option>
                    <option value="AE">Armed Forces Europe</option>
                    <option value="AE">Armed Forces Middle East</option>
                    <option value="AP">Armed Forces Pacific</option>
                    <option value="AB">Alberta</option>
                    <option value="BC">British Columbia</option>
                    <option value="MB">Manitoba</option>
                    <option value="NB">New Brunswick</option>
                    <option value="NL">Newfoundland and Labrador</option>
                    <option value="NS">Nova Scotia</option>
                    <option value="NT">Northwest Territories</option>
                    <option value="NU">Nunavut</option>
                    <option value="ON">Ontario</option>
                    <option value="PE">Prince Edward Island</option>
                    <option value="QC">Quebec</option>
                    <option value="SK">Saskatchewan</option>
                    <option value="YT">Yukon Territory</option>
                  </select>
                </span>
              </div>
              <div class="one fourth padded">
                <input type="text" placeholder="Zip Code" />
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="message">Special Instructions</label>
                <textarea id="message" placeholder="Enter your message..."></textarea>
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="twitter">Twitter</label>
                <div class="row">
                  <div class="one half pad-right">
                    <div class="row">
                      <div class="one mobile sixth">
                        <span class="prefix">@</span>
                      </div>
                      <div class="five mobile sixths">
                        <input type="text" name="twitter" placeholder="username" />
                      </div>
                    </div>
                  </div>
                  <div class="one half pad-left">
                    <div class="row">
                      <div class="three mobile fifths">
                        <input type="text" name="sidereel" placeholder="pick username" />
                      </div>
                      <div class="two mobile fifths">
                        <span class="suffix">@example.com</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="things">Pick a thing:</label>
                <ul class="radio-list">
                  <li><input type="radio" id="things" name="things" checked /> Thing one</li>
                  <li><input type="radio" name="things" /> Thing two</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <button>Submit</button> <button class="warning">Cancel</button>
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <input type="checkbox" name="things" checked /> I want all the things!
              </div>
            </div>
          </fieldset>
        </form>

        <hr/>

        <h2>Field States</h2>
        <div class="row">
          <div class="one whole padded">
            <p class="invalid">
              <label>Invalid entry field label</label>
              <input value="Invalid entry" />
            </p>
            <div class="invalid row">
              <div class="one mobile tenth">
                <span class="prefix">@</span>
              </div>
              <div class="nine mobile tenths">
                <input value="Invalid entry" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="one whole padded">
            <p class="valid">
              <label>Valid entry field label</label>
              <input value="Valid entry" />
            </p>
            <div class="valid row">
              <div class="one mobile tenth">
                <span class="prefix">@</span>
              </div>
              <div class="nine mobile tenths">
                <input value="Valid entry" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require_once("_scripts.php"); ?>