<!-- you can find here all code that are here. if you need to help which class added. if needed just knock me i will do for you -->


<?php
require_once ('header1.php');
?>
<title>Automated Accommodation || All Pages All things</title>
<?php
require_once ('header2.php');
?>
<div class="main-content">
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/pagetitle.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Login/Register</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#">Home</a></li>
                <li class="active text-gray-silver">All</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

<section>
      <div class="container">
<div class="row">
          <div class="col-md-12 mt-40">
           
            <h4 class="title">Contextual classes</h4>
            <p>Use contextual classes to color table rows or individual cells.</p>
            <div class="table-responsive"> <table class="table table-bordered table-striped"> <colgroup> <col class="col-xs-1"> <col class="col-xs-7"> </colgroup> <thead> <tr> <th>Class</th> <th>Description</th> </tr> </thead> <tbody> <tr> <th scope="row"> <code>.active</code> </th> <td>Applies the hover color to a particular row or cell</td> </tr> <tr> <th scope="row"> <code>.success</code> </th> <td>Indicates a successful or positive action</td> </tr> <tr> <th scope="row"> <code>.info</code> </th> <td>Indicates a neutral informative change or action</td> </tr> <tr> <th scope="row"> <code>.warning</code> </th> <td>Indicates a warning that might need attention</td> </tr> <tr> <th scope="row"> <code>.danger</code> </th> <td>Indicates a dangerous or potentially negative action</td> </tr> </tbody> </table> 
            </div>
              <hr>
             <div data-example-id="contextual-table" class="bs-example"> <table class="table"> <thead> <tr> <th>#</th> <th>Column heading</th> <th>Column heading</th> <th>Column heading</th> </tr> </thead> <tbody> <tr class="active"> <th scope="row">1</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">2</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="success"> <th scope="row">3</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">4</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="info"> <th scope="row">5</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">6</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="warning"> <th scope="row">7</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr> <th scope="row">8</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> <tr class="danger"> <th scope="row">9</th> <td>Column content</td> <td>Column content</td> <td>Column content</td> </tr> </tbody> </table> 
              </div>
<pre>
<code class="language-markup">
<span class="c">&lt;!-- On rows --&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>
<span class="nt">&lt;tr</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/tr&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="nt">&lt;tr&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"active"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
  <span class="nt">&lt;td</span> <span class="na">class=</span><span class="s">"info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/td&gt;</span>
<span class="nt">&lt;/tr&gt;</span>
</code>
</pre>

</div>
        </div>
      </div>
    </section> 

<!-- Datetimepicker -->

        <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="heading-line-bottom">
               <h3 class="heading-title">Datetimepicker</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            
            <div class="form-group">
              <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>


            <!-- Datetimepicker Script -->
            <script type="text/javascript">
              $(function () {
                $('#datetimepicker1').datetimepicker();
              });
            </script> 

            <!-- Timepicker -->
            <p>This is only time</p>
            <p><input type="text" class="time ui-timepicker-input" id="basicExample" autocomplete="off"></p>

            <!-- Timepicker Script -->
            <script type="text/javascript">
              $('#basicExample').timepicker();
            </script>

<p>This is only date</p>
<div class="form-group mb-10">
              <input class="form-control required date-picker" type="text" placeholder=" Date" aria-required="true">
            </div>

<p>This is date range</p>
<div id="example-daterange">
              <div class="input-daterange input-group" id="datepicker">
                <input type="text" class="input-sm form-control" name="start" />
                <span class="input-group-addon">to</span>
                <input type="text" class="input-sm form-control" name="end" />
              </div>


              <p>This is time range</p>
              <!-- Timepicker Step -->
            <p><input type="text" class="time ui-timepicker-input" id="stepExample1" autocomplete="off">
              <input type="text" class="time ui-timepicker-input" id="stepExample2" autocomplete="off">
            </p>
            <!-- Timepicker Step Script -->
            <script type="text/javascript">
              $('#stepExample1').timepicker({ 'step': 15 });
                $('#stepExample2').timepicker({
                  'step': function(i) {
                  return (i%2) ? 15 : 45;
                }
              });
            </script>


            <P>Date Time pair</P>
            <!-- Datepair Basic  -->
            <p id="basicExample">
              <input type="text" class="date start" />
              <input type="text" class="time start" /> to
              <input type="text" class="time end" />
              <input type="text" class="date end" />
            </p>
            <!-- Datepair  Script -->
            <script type="text/javascript">
              // initialize input widgets first
              $('#basicExample .time').timepicker({
                  'showDuration': true,
                  'timeFormat': 'g:ia'
              });

              $('#basicExample .date').datepicker({
                  'format': 'm/d/yyyy',
                  'autoclose': true
              });

              // initialize datepair
              var basicExampleEl = document.getElementById('basicExample');
              var datepair = new Datepair(basicExampleEl);
            </script>

          </div>
        </div>
      </div>
    </section>



 <section>
      <div class="container">
        <div class="row">
           <h1>This is Alerts</h1>
          <div class="col-md-6">

            <div class="alert alert-success">Success! Well done its submitted.</div>
            <div class="alert alert-info">Info! take this info.</div>
            <div class="alert alert-warning">Warning ! Dont submit this.</div>
            <div class="alert alert-danger">Error ! Change few things.</div>
          </div>
          <div class="col-md-6">
            <div class="alert alert-success alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Success! Well done its submitted.
            </div>
            <div class="alert alert-info alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Info! take this info. </div>
            <div class="alert alert-warning alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Warning ! Dont submit this. </div>
            <div class="alert alert-danger alert-dismissable">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
              Error ! Change few things. </div>
          </div>
        </div>
      </div>
    </section>
    <section>
<div class="container">
        <div class="row">
    <hr>
            <div class="heading-line-bottom">
              <h4 class="heading-title">With optional icons</h4>
            </div>
              <p>You can also add optional feedback icons with the addition of <code>.has-feedback</code> and the right icon.<strong class="text-danger">Feedback icons only work with textual <code>&lt;input class="form-control"&gt;</code> elements.</strong></p>
              <div data-example-id="form-validation-states-with-icons" class="bs-example mb-30"> <form> <div class="form-group has-success has-feedback"> <label for="inputSuccess2" class="control-label">Input with success</label> <input type="text" aria-describedby="inputSuccess2Status" id="inputSuccess2" class="form-control"> <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span> <span class="sr-only" id="inputSuccess2Status">(success)</span> </div> <div class="form-group has-warning has-feedback"> <label for="inputWarning2" class="control-label">Input with warning</label> <input type="text" aria-describedby="inputWarning2Status" id="inputWarning2" class="form-control"> <span aria-hidden="true" class="glyphicon glyphicon-warning-sign form-control-feedback"></span> <span class="sr-only" id="inputWarning2Status">(warning)</span> </div> <div class="form-group has-error has-feedback"> <label for="inputError2" class="control-label">Input with error</label> <input type="text" aria-describedby="inputError2Status" id="inputError2" class="form-control"> <span aria-hidden="true" class="glyphicon glyphicon-remove form-control-feedback"></span> <span class="sr-only" id="inputError2Status">(error)</span> </div> <div class="form-group has-success has-feedback"> <label for="inputGroupSuccess1" class="control-label">Input group with success</label> <div class="input-group"> <span class="input-group-addon">@</span> <input type="text" aria-describedby="inputGroupSuccess1Status" id="inputGroupSuccess1" class="form-control"> </div> <span aria-hidden="true" class="glyphicon glyphicon-ok form-control-feedback"></span> <span class="sr-only" id="inputGroupSuccess1Status">(success)</span> </div> </form> </div>

<pre>
<code class="language-markup">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputSuccess2"</span><span class="nt">&gt;</span>Input with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputSuccess2"</span> <span class="na">aria-describedby=</span><span class="s">"inputSuccess2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputSuccess2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-warning has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputWarning2"</span><span class="nt">&gt;</span>Input with warning<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputWarning2"</span> <span class="na">aria-describedby=</span><span class="s">"inputWarning2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-warning-sign form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputWarning2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(warning)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-error has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputError2"</span><span class="nt">&gt;</span>Input with error<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputError2"</span> <span class="na">aria-describedby=</span><span class="s">"inputError2Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-remove form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputError2Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(error)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"form-group has-success has-feedback"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;label</span> <span class="na">class=</span><span class="s">"control-label"</span> <span class="na">for=</span><span class="s">"inputGroupSuccess1"</span><span class="nt">&gt;</span>Input group with success<span class="nt">&lt;/label&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group-addon"</span><span class="nt">&gt;</span>@<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"form-control"</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1"</span> <span class="na">aria-describedby=</span><span class="s">"inputGroupSuccess1Status"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-ok form-control-feedback"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">id=</span><span class="s">"inputGroupSuccess1Status"</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>(success)<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
            </div>
          </div>
          </section>


    <section>
      <div class="container">
        <div class="row">
          <div class="heading-line-bottom">
            <h4 class="heading-title">Buttons</h4>
          </div>
          <div class="hover-css-effects">            
            <a class="hvr-grow" href="#">Grow</a>
            <a class="hvr-shrink" href="#">Shrink</a>
            <a class="hvr-pulse" href="#">Pulse</a>
            <a class="hvr-pulse-grow" href="#">Pulse Grow</a>
            <a class="hvr-pulse-shrink" href="#">Pulse Shrink</a>
            <a class="hvr-push" href="#">Push</a>
            <a class="hvr-pop" href="#">Pop</a>
            <a class="hvr-bounce-in" href="#">Bounce In</a>
            <a class="hvr-bounce-out" href="#">Bounce Out</a>
            <a class="hvr-rotate" href="#">Rotate</a>
            <a class="hvr-grow-rotate" href="#">Grow Rotate</a>
            <a class="hvr-float" href="#">Float</a>
            <a class="hvr-sink" href="#">Sink</a>
            <a class="hvr-bob" href="#">Bob</a>
            <a class="hvr-hang" href="#">Hang</a>
            <a class="hvr-skew" href="#">Skew</a>
            <a class="hvr-skew-forward" href="#">Skew Forward</a>
            <a class="hvr-skew-backward" href="#">Skew Backward</a>
            <a class="hvr-wobble-horizontal" href="#">Wobble Horizontal</a>
            <a class="hvr-wobble-vertical" href="#">Wobble Vertical</a>
            <a class="hvr-wobble-to-bottom-right" href="#">Wobble To Bottom Right</a>
            <a class="hvr-wobble-to-top-right" href="#">Wobble To Top Right</a>
            <a class="hvr-wobble-top" href="#">Wobble Top</a>
            <a class="hvr-wobble-bottom" href="#">Wobble Bottom</a>
            <a class="hvr-wobble-skew" href="#">Wobble Skew</a>
            <a class="hvr-buzz" href="#">Buzz</a>
            <a class="hvr-buzz-out" href="#">Buzz Out</a>
            <a class="hvr-shadow" href="#">Shadow</a>
            <a class="hvr-grow-shadow" href="#">Grow Shadow</a>
            <a class="hvr-float-shadow" href="#">Float Shadow</a>
            <a class="hvr-glow" href="#">Glow</a>
            <a class="hvr-shadow-radial" href="#">Shadow Radial</a>
            <a class="hvr-box-shadow-outset" href="#">Box Shadow Outset</a>
            <a class="hvr-box-shadow-inset" href="#">Box Shadow Inset</a>
            <a class="hvr-bubble-top" href="#">Bubble Top</a>
            <a class="hvr-bubble-right" href="#">Bubble Right</a>
            <a class="hvr-bubble-bottom" href="#">Bubble Bottom</a>
            <a class="hvr-bubble-left" href="#">Bubble Left</a>
            <a class="hvr-bubble-float-top" href="#">Bubble Float Top</a>
            <a class="hvr-bubble-float-right" href="#">Bubble Float Right</a>
            <a class="hvr-bubble-float-bottom" href="#">Bubble Float Bottom</a>
            <a class="hvr-bubble-float-left" href="#">Bubble Float Left</a>


            <style>
            .hover-css-effects [class^="hvr-"] {
              background: #e1e1e1 none repeat scroll 0 0;
              color: #666;
              cursor: pointer;
              margin: 0.4em;
              padding: 1em;
              text-decoration: none;
            }
            .hover-css-effects [class^="hvr-icon-"] {
              padding-right: 40px;
            }
          </style>
          </div>
        </div>
      </div>
    </section>

  <!--Chart -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row mb-50">
            <!-- Polar Area -->
            <div class="col-sm-6 col-md-6">              
              <div class="heading-line-bottom">
                <h4 class="text-center">Polar Area</h4>
              </div>            
              <div style="width: 80%" class="text-center">
                <canvas id="chart-area" width="400" height="400"></canvas>
              </div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#polararea-html" aria-controls="polararea-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#polararea-js" aria-controls="polararea-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="polararea-html">
<pre>
<code class="language-markup">
Polar Area Chart
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;polar-area&quot; width=&quot;400&quot; height=&quot;400&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="polararea-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Polar Area Chart
    var polarData = [
      {
        value: 200,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 120,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      },
      {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Grey"
      },
      {
        value: 150,
        color: "#4D5360",
        highlight: "#616774",
        label: "Dark Grey"
      }
    ];

  window.onload = function(){
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPolarArea = new Chart(ctx).PolarArea(polarData, {
      responsive:true
    });
  };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->

            </div>
            <!-- Doughnut Chart -->
            <div class="col-sm-6 col-md-6">                            
              <div class="heading-line-bottom">
                <h4 class="text-center">Doughnut Chart</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="doughnutChart" width="400" height="400"></canvas>
              </div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#doughnutChart-html" aria-controls="doughnutChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#doughnutChart-js" aria-controls="doughnutChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="doughnutChart-html">
<pre>
<code class="language-markup">
Doughnut Chart
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;doughnutChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="doughnutChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Doughnut Chart
    var doughnutData = [
      {
        value: 200,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
      },
      {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
      },
      {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
      },
      {
        value: 40,
        color: "#949FB1",
        highlight: "#A8B3C5",
        label: "Grey"
      },
      {
        value: 120,
        color: "#4D5360",
        highlight: "#616774",
        label: "Dark Grey"
      }
    ];
  window.onload = function(){
    var chart_doughnutChart = document.getElementById("doughnutChart").getContext("2d");
    window.myDoughnut = new Chart(chart_doughnutChart).Doughnut(doughnutData, {
      responsive : true
    });
  };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
              
            </div>
          </div>
          <hr>
          <div class="row mb-50">
            <!-- Radar Chart -->
            <div class="col-sm-6 col-md-6">
              <div class="heading-line-bottom">
                <h4 class="text-center">Radar Chart</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="radarChart" width="500" height="500"></canvas>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-sm-6 col-md-6">                            
              <div class="heading-line-bottom">
                <h4 class="text-center">Line Chart</h4>
              </div>
              <div style="width: 90%" class="text-center">
                <canvas id="lineChart" height="450" width="600"></canvas>
              </div>
            </div>
          </div>          
          <div class="row mb-50">
            <!-- Radar Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#radarChart-html" aria-controls="radarChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#radarChart-js" aria-controls="radarChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="radarChart-html">
<pre>
<code class="language-markup">
Radar Chart
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;radarChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="radarChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Radar Chart
    var radarChartData = {
      labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65,59,90,81,56,55,40]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28,48,40,19,96,27,100]
        }
      ]
    };
    window.onload = function(){
      var chart_radarChart = document.getElementById("radarChart").getContext("2d");
      window.myRadar = new Chart(chart_radarChart).Radar(radarChartData, {
        responsive: true
      });
    };   

});

</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
            <!-- Line Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#lineChart-html" aria-controls="lineChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#lineChart-js" aria-controls="lineChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="lineChart-html">
<pre>
<code class="language-markup">
Line Chart
&lt;div style=&quot;width: 90%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;lineChart&quot; height=&quot;450&quot; width=&quot;600&quot;&gt;&lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="lineChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Line Chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(220,220,220,0.2)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(220,220,220,1)",
          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        },
        {
          label: "My Second dataset",
          fillColor : "rgba(151,187,205,0.2)",
          strokeColor : "rgba(151,187,205,1)",
          pointColor : "rgba(151,187,205,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(151,187,205,1)",
          data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        }
      ]
    }
  };
    window.onload = function(){
      var chart_lineChart = document.getElementById("lineChart").getContext("2d");
      window.myLine = new Chart(chart_lineChart).Line(lineChartData, {
        responsive: true
      });
    };

});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
          </div>
          <hr>
          <div class="row mt-50">
            <!-- Bar Chart -->
            <div class="col-sm-6 col-md-6">
              <div class="heading-line-bottom">
                <h4 class="text-center">Bar Chart</h4>
              </div>
              <div style="width: 90%" class="text-center">
                <canvas id="barChart" width="500" height="500"></canvas>
              </div>
            </div>
            <!-- Polar Chart -->
            <div class="col-sm-6 col-md-6">
              <div class="heading-line-bottom">
                <h4 class="text-center">Pie Custom Tooltips</h4>
              </div>
              <div style="width: 80%" class="text-center">
                <canvas id="peiChart" width="500" height="500"></canvas>
              </div>
            </div>
          </div>
          <div class="row mt-50">
            <!-- Bar Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#barChart-html" aria-controls="barChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#barChart-js" aria-controls="barChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="barChart-html">
<pre>
<code class="language-markup">
Bar Chart
&lt;div style=&quot;width: 90%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;barChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="barChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Bar Chart
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var barChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
          {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          },
          {
            fillColor : "rgba(151,187,205,0.5)",
            strokeColor : "rgba(151,187,205,0.8)",
            highlightFill : "rgba(151,187,205,0.75)",
            highlightStroke : "rgba(151,187,205,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          }
        ]
      }
  };
    window.onload = function(){
      var chart_barChart = document.getElementById("barChart").getContext("2d");
      window.myBar = new Chart(chart_barChart).Bar(barChartData, {
        responsive : true
      });
    };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
            <!-- Radar Chart -->
            <div class="col-sm-6 col-md-6">
            <!-- Nav tabs -->
              <ul class="nav nav-tabs mt-30" role="tablist">
                <li role="presentation" class="active"><a href="#pieChart-html" aria-controls="pieChart-html" role="tab" data-toggle="tab">HTML</a></li>
                <li role="presentation"><a href="#pieChart-js" aria-controls="pieChart-js" role="tab" data-toggle="tab">Java Script</a></li>
              </ul>

              <!-- Tab panels -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="pieChart-html">
<pre>
<code class="language-markup">
Pie Custom Tooltips
&lt;div style=&quot;width: 80%&quot; class=&quot;text-center&quot;&gt;
  &lt;canvas id=&quot;pieChart&quot; width=&quot;500&quot; height=&quot;500&quot;/&gt;
  &lt;/canvas&gt;
&lt;/div&gt;
</code>
</pre>     
                </div>
                <div role="tabpanel" class="tab-pane" id="pieChart-js">
<pre>
<code class="language-javascript">
$(document).ready(function() {
    // Pie Chart
      var pieData = [
        {
          value: 300,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Red"
        },
        {
          value: 50,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Green"
        },
        {
          value: 100,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Yellow"
        },
        {
          value: 40,
          color: "#949FB1",
          highlight: "#A8B3C5",
          label: "Grey"
        },
        {
          value: 120,
          color: "#4D5360",
          highlight: "#616774",
          label: "Dark Grey"
        }

      ];

    window.onload = function(){
      var chart_peiChart = document.getElementById("peiChart").getContext("2d");
      window.myBar = new Chart(chart_peiChart).Pie(pieData, {
        responsive : true
      });
    };
});
</code>
</pre>     
                </div>
              </div>
              <!-- End Tab panels -->
            </div>
          </div>

        </div>
      </div>
    </section>

    <div class="clear"></div>
    <script type="text/javascript">
      // Polar Area Chart
      var polarData = [
        {
          value: 200,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Red"
        },
        {
          value: 50,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Green"
        },
        {
          value: 120,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Yellow"
        },
        {
          value: 40,
          color: "#949FB1",
          highlight: "#A8B3C5",
          label: "Grey"
        },
        {
          value: 150,
          color: "#4D5360",
          highlight: "#616774",
          label: "Dark Grey"
        }
      ];

      // Doughnut Chart
      var doughnutData = [
        {
          value: 200,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Red"
        },
        {
          value: 50,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Green"
        },
        {
          value: 100,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Yellow"
        },
        {
          value: 40,
          color: "#949FB1",
          highlight: "#A8B3C5",
          label: "Grey"
        },
        {
          value: 120,
          color: "#4D5360",
          highlight: "#616774",
          label: "Dark Grey"
        }
      ];

      // Radar Chart
      var radarChartData = {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65,59,90,81,56,55,40]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28,48,40,19,96,27,100]
          }
        ]
      };

      // Line Chart
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var lineChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
          {
            label: "My First dataset",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          },
          {
            label: "My Second dataset",
            fillColor : "rgba(151,187,205,0.2)",
            strokeColor : "rgba(151,187,205,1)",
            pointColor : "rgba(151,187,205,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(151,187,205,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          }
        ]
      }
      
      // Bar Chart
      var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var barChartData = {
        labels : ["January","February","March","April","May","June","July"],
        datasets : [
          {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          },
          {
            fillColor : "rgba(151,187,205,0.5)",
            strokeColor : "rgba(151,187,205,0.8)",
            highlightFill : "rgba(151,187,205,0.75)",
            highlightStroke : "rgba(151,187,205,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
          }
        ]

      }

      // Pie Chart
      var pieData = [
        {
          value: 300,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Red"
        },
        {
          value: 50,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Green"
        },
        {
          value: 100,
          color: "#FDB45C",
          highlight: "#FFC870",
          label: "Yellow"
        },
        {
          value: 40,
          color: "#949FB1",
          highlight: "#A8B3C5",
          label: "Grey"
        },
        {
          value: 120,
          color: "#4D5360",
          highlight: "#616774",
          label: "Dark Grey"
        }

      ];


      //window load
      window.onload = function(){

        var chart_area = document.getElementById("chart-area").getContext("2d");
        window.myPolarArea = new Chart(chart_area).PolarArea(polarData, {
          responsive:true
        });

        var chart_doughnutChart = document.getElementById("doughnutChart").getContext("2d");
        window.myDoughnut = new Chart(chart_doughnutChart).Doughnut(doughnutData, {
          responsive : true
        });

        var chart_radarChart = document.getElementById("radarChart").getContext("2d");
        window.myRadar = new Chart(chart_radarChart).Radar(radarChartData, {
          responsive: true
        });
        
        var chart_lineChart = document.getElementById("lineChart").getContext("2d");
        window.myLine = new Chart(chart_lineChart).Line(lineChartData, {
          responsive: true
        });

        var chart_barChart = document.getElementById("barChart").getContext("2d");
        window.myBar = new Chart(chart_barChart).Bar(barChartData, {
          responsive : true
        });

        var chart_peiChart = document.getElementById("peiChart").getContext("2d");
        window.myBar = new Chart(chart_peiChart).Pie(pieData, {
          responsive : true
        });
      }
    </script>
    <!-- JS | Chart-->
    <script src="js/chart.js"></script>
  </div>


<!-- Divider-->
<section class="text-center" data-bg-img="images/pagetitle.jpg">
      <div class="container pt-120 pb-120">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>Background pattern Divider</h3>
            <h5>Content Here...</h5>
          </div>
        </div>
      </div>
    </section>

     <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<pre>
<code class="language-markup">
&lt;section class=&quot;text-center&quot; data-bg-img=&quot;images/pattern/p14.png&quot;&gt;
  &lt;div class=&quot;container pt-120 pb-120&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-md-12 text-center&quot;&gt;
        &lt;h3&gt;Background pattern Divider&lt;/h3&gt;
        &lt;h5&gt;Content Here...&lt;/h5&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;
</code>
</pre>            
          </div>
        </div>
      </div>
    </section>

    <section class="divider bg3 layer-overlay text-center" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-120 pb-120">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="text-white">Background Image Divider</h3>
            <h5 class="text-white">Content Here...</h5>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<pre>
<code class="language-markup">
&lt;section class=&quot;divider layer-overlay text-center&quot;&gt;
  &lt;div class=&quot;container pt-120 pb-120&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-md-12 text-center&quot;&gt;
        &lt;h3 class=&quot;text-white&quot;&gt;Background Image Divider&lt;/h3&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;Content Here...&lt;/h5&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;
</code>
</pre>            
          </div>
        </div>
      </div>
    </section>

    <section class="divider parallax layer-overlay text-center" data-parallax-ratio="0.7" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-120 pb-120">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="text-white">Background Image With Parallax Divider</h3>
            <h5 class="text-white">Content Here...</h5>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<pre>
<code class="language-markup">
&lt;section class=&quot;divider parallax layer-overlay text-center&quot; data-bg-img=&quot;http://placehold.it/1920x1280&quot;&gt;
  &lt;div class=&quot;container pt-120 pb-120&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-md-12 text-center&quot;&gt;
        &lt;h3 class=&quot;text-white&quot;&gt;Background Image With Parallax Divider&lt;/h3&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;Content Here...&lt;/h5&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;
</code>
</pre>            
          </div>
        </div>
      </div>
    </section>
    
    <section class="divider @white-f8">
      <div class="container pt-120 pb-120">
        <div class="row">
          <div class="col-md-5">
            <img class="img-fullwidth" src="http://placehold.it/450x450" alt="">
          </div>
          <div class="col-md-7">
            <h2 class="text-uppercase mt-0">AAAAAAAAAAAAAAAAAAAAAA</h2>
            <h4>ASAAAAAAAAAAA.</h4>

            <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>

            <pAAAAAAAAAAAAAAAAAAAAA</p>
            
            <ul class="list-divider pl-20">
              <li><i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">AAAAAAAAAAAAAAAAAAAAA</a></li>
              <li> <i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">aaaaaaaaaaaaaaaaaaaaaaaaa</a></li>
              <li> <i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a></li>
              <li> <i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">aaaaaaaaaaaaaaaaaaaaaaaaaaa</a></li>
              <li> <i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">aaaaaaaaaaaaaaaaaaaaaaaaaaa</a></li>
              <li> <i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">aaaaaaaaaaaaaaaaaaaaaaaaaa.</a></li>
              <li> <i class="fa fa-check-square-o mr-10 text-black-light"></i> <a href="#">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa </a></li>
            </ul>

            <a class="btn btn-dark mt-30" href="#">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <section class="divider bg-theme-colored text-center">
      <div class="container pt-120 pb-120">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="text-white">Solid Color Divider</h3>
            <h5 class="text-white">Content Here...</h5>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<pre>
<code class="language-markup">
&lt;section class=&quot;divider bg-lighter text-center&quot;&gt;
  &lt;div class=&quot;container pt-120 pb-120&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-md-12 text-center&quot;&gt;
        &lt;h3 class=&quot;text-white&quot;&gt;Solid Color Divider&lt;/h3&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;Content Here...&lt;/h5&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;
</code>
</pre>            
          </div>
        </div>
      </div>
    </section>

    <section class="divider layer-overlay overlay-dark-8 text-center" data-bg-img="http://placehold.it/1920x1280">
      <div class="bg-video">
        <div id="home-video" class="video">
          <div class="player video-container" data-property="{videoURL:'BzCUFHUWqHM',containment:'#home-video',autoPlay:true, showControls:false, mute:false, startAt:0, opacity:1}"></div>
        </div>
      </div>
      <div class="container pt-120 pb-120">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="text-white">Background With Video Divider</h3>
            <h5 class="text-white">Content Here...</h5>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<pre>
<code class="language-markup">
&lt;section data-bg-img=&quot;http://placehold.it/1920x1280&quot; class=&quot;divider no-bg layer-overlay overlay-dark-8 text-center&quot; style=&quot;background-image: url(&amp;quot;http://placehold.it/1920x1280&amp;quot;);&quot;&gt;
  &lt;div class=&quot;bg-video&quot;&gt;
    &lt;div class=&quot;video&quot; id=&quot;home-video&quot;&gt;
      &lt;div data-property=&quot;{videoURL:'BzCUFHUWqHM',containment:'#home-video',autoPlay:true, showControls:false, mute:false, startAt:0, opacity:1}&quot; class=&quot;player video-container mb_YTPlayer&quot; id=&quot;video_1454419886736&quot; style=&quot;display: none; position: relative; background-image: none;&quot;&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;container pt-120 pb-120&quot;&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-md-12 text-center&quot;&gt;
        &lt;h3 class=&quot;text-white&quot;&gt;Background With Video Divider&lt;/h3&gt;
        &lt;h5 class=&quot;text-white&quot;&gt;Content Here...&lt;/h5&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;
</code>
</pre>            
          </div>
        </div>
      </div>
    </section>

    <section class="divider bg-gray-lighter">
      <div class="container pt-120 pb-120">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="mt-0 page-title">Video Promo</h2>
              <p>Title here discription
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <iframe src="https://player.vimeo.com/video/68402219" width="500" height="300" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
<pre>
<code class="language-markup">
&lt;section class=&quot;divider&quot;&gt;
  &lt;div class=&quot;container pt-120 pb-120&quot;&gt;
    &lt;div class=&quot;section-title&quot;&gt;
      &lt;div class=&quot;row&quot;&gt;
        &lt;div class=&quot;col-md-12 text-center&quot;&gt;
          &lt;h2 class=&quot;mt-0 page-title&quot;&gt;Video Promo&lt;/h2&gt;
          &lt;p&gt;You can Write here
            :D :D&lt;/p&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col-md-8 col-md-offset-2&quot;&gt;
        &lt;iframe src=&quot;https://player.vimeo.com/video/68402219&quot; width=&quot;500&quot; height=&quot;350&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
 &lt;/section&gt;
</code>
</pre>            
          </div>
        </div>
      </div>
    </section>



<section>
      <div class="container">
        <div class="row">
          <div id="all-icons" class="row">
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-album"></span>
                <input type="text" value="pe-7s-album" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6aa" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6aa" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-arc"></span>
                <input type="text" value="pe-7s-arc" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6ab" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6ab" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-back-2"></span>
                <input type="text" value="pe-7s-back-2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6ac" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6ac" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-bandaid"></span>
                <input type="text" value="pe-7s-bandaid" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6ad" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6ad" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-car"></span>
                <input type="text" value="pe-7s-car" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6ae" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6ae" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-diamond"></span>
                <input type="text" value="pe-7s-diamond" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6af" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6af" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-door-lock"></span>
                <input type="text" value="pe-7s-door-lock" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b0" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b0" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-eyedropper"></span>
                <input type="text" value="pe-7s-eyedropper" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b1" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b1" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-female"></span>
                <input type="text" value="pe-7s-female" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b2" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b2" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-gym"></span>
                <input type="text" value="pe-7s-gym" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b3" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b3" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-hammer"></span>
                <input type="text" value="pe-7s-hammer" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b4" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b4" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-headphones"></span>
                <input type="text" value="pe-7s-headphones" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b5" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b5" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-helm"></span>
                <input type="text" value="pe-7s-helm" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b6" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b6" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-hourglass"></span>
                <input type="text" value="pe-7s-hourglass" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b7" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b7" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-leaf"></span>
                <input type="text" value="pe-7s-leaf" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b8" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b8" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-magic-wand"></span>
                <input type="text" value="pe-7s-magic-wand" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6b9" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6b9" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-male"></span>
                <input type="text" value="pe-7s-male" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6ba" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6ba" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-map-2"></span>
                <input type="text" value="pe-7s-map-2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6bb" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6bb" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-next-2"></span>
                <input type="text" value="pe-7s-next-2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6bc" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6bc" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-paint-bucket"></span>
                <input type="text" value="pe-7s-paint-bucket" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6bd" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6bd" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-pendrive"></span>
                <input type="text" value="pe-7s-pendrive" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6be" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6be" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-photo"></span>
                <input type="text" value="pe-7s-photo" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6bf" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6bf" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-piggy"></span>
                <input type="text" value="pe-7s-piggy" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c0" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c0" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-plugin"></span>
                <input type="text" value="pe-7s-plugin" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c1" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c1" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-refresh-2"></span>
                <input type="text" value="pe-7s-refresh-2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c2" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c2" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-rocket"></span>
                <input type="text" value="pe-7s-rocket" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c3" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c3" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-settings"></span>
                <input type="text" value="pe-7s-settings" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c4" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c4" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-shield"></span>
                <input type="text" value="pe-7s-shield" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c5" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c5" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-smile"></span>
                <input type="text" value="pe-7s-smile" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c6" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c6" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-usb"></span>
                <input type="text" value="pe-7s-usb" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c7" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c7" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-vector"></span>
                <input type="text" value="pe-7s-vector" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c8" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c8" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-wine"></span>
                <input type="text" value="pe-7s-wine" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6c9" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6c9" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-cloud-upload"></span>
                <input type="text" value="pe-7s-cloud-upload" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e68a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe68a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-cash"></span>
                <input type="text" value="pe-7s-cash" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e68c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe68c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-close"></span>
                <input type="text" value="pe-7s-close" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e680" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe680" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-bluetooth"></span>
                <input type="text" value="pe-7s-bluetooth" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e68d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe68d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-cloud-download"></span>
                <input type="text" value="pe-7s-cloud-download" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e68b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe68b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-way"></span>
                <input type="text" value="pe-7s-way" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e68e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe68e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-close-circle"></span>
                <input type="text" value="pe-7s-close-circle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e681" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe681" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-id"></span>
                <input type="text" value="pe-7s-id" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e68f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe68f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-up"></span>
                <input type="text" value="pe-7s-angle-up" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e682" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe682" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-wristwatch"></span>
                <input type="text" value="pe-7s-wristwatch" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e690" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe690" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-up-circle"></span>
                <input type="text" value="pe-7s-angle-up-circle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e683" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe683" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-world"></span>
                <input type="text" value="pe-7s-world" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e691" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe691" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-right"></span>
                <input type="text" value="pe-7s-angle-right" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e684" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe684" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-volume"></span>
                <input type="text" value="pe-7s-volume" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e692" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe692" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-right-circle"></span>
                <input type="text" value="pe-7s-angle-right-circle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e685" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe685" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-users"></span>
                <input type="text" value="pe-7s-users" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e693" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe693" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-left"></span>
                <input type="text" value="pe-7s-angle-left" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e686" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe686" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-user-female"></span>
                <input type="text" value="pe-7s-user-female" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e694" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe694" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-left-circle"></span>
                <input type="text" value="pe-7s-angle-left-circle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e687" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe687" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-up-arrow"></span>
                <input type="text" value="pe-7s-up-arrow" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e695" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe695" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-down"></span>
                <input type="text" value="pe-7s-angle-down" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e688" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe688" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-switch"></span>
                <input type="text" value="pe-7s-switch" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e696" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe696" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-angle-down-circle"></span>
                <input type="text" value="pe-7s-angle-down-circle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e689" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe689" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-scissors"></span>
                <input type="text" value="pe-7s-scissors" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e697" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe697" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-wallet"></span>
                <input type="text" value="pe-7s-wallet" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e600" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe600" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-safe"></span>
                <input type="text" value="pe-7s-safe" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e698" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe698" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-volume2"></span>
                <input type="text" value="pe-7s-volume2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e601" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe601" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-volume1"></span>
                <input type="text" value="pe-7s-volume1" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e602" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe602" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-voicemail"></span>
                <input type="text" value="pe-7s-voicemail" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e603" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe603" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-video"></span>
                <input type="text" value="pe-7s-video" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e604" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe604" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-user"></span>
                <input type="text" value="pe-7s-user" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e605" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe605" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-upload"></span>
                <input type="text" value="pe-7s-upload" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e606" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe606" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-unlock"></span>
                <input type="text" value="pe-7s-unlock" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e607" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe607" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-umbrella"></span>
                <input type="text" value="pe-7s-umbrella" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e608" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe608" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-trash"></span>
                <input type="text" value="pe-7s-trash" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e609" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe609" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-tools"></span>
                <input type="text" value="pe-7s-tools" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e60a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe60a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-timer"></span>
                <input type="text" value="pe-7s-timer" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e60b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe60b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-ticket"></span>
                <input type="text" value="pe-7s-ticket" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e60c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe60c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-target"></span>
                <input type="text" value="pe-7s-target" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e60d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe60d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-sun"></span>
                <input type="text" value="pe-7s-sun" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e60e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe60e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-study"></span>
                <input type="text" value="pe-7s-study" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e60f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe60f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-stopwatch"></span>
                <input type="text" value="pe-7s-stopwatch" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e610" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe610" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-star"></span>
                <input type="text" value="pe-7s-star" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e611" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe611" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-speaker"></span>
                <input type="text" value="pe-7s-speaker" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e612" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe612" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-signal"></span>
                <input type="text" value="pe-7s-signal" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e613" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe613" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-shuffle"></span>
                <input type="text" value="pe-7s-shuffle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e614" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe614" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-shopbag"></span>
                <input type="text" value="pe-7s-shopbag" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e615" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe615" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-share"></span>
                <input type="text" value="pe-7s-share" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e616" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe616" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-server"></span>
                <input type="text" value="pe-7s-server" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e617" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe617" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-search"></span>
                <input type="text" value="pe-7s-search" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e618" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe618" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-film"></span>
                <input type="text" value="pe-7s-film" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a5" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a5" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-science"></span>
                <input type="text" value="pe-7s-science" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e619" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe619" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-disk"></span>
                <input type="text" value="pe-7s-disk" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a6" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a6" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-ribbon"></span>
                <input type="text" value="pe-7s-ribbon" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e61a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe61a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-repeat"></span>
                <input type="text" value="pe-7s-repeat" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e61b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe61b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-refresh"></span>
                <input type="text" value="pe-7s-refresh" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e61c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe61c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-add-user"></span>
                <input type="text" value="pe-7s-add-user" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a9" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a9" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-refresh-cloud"></span>
                <input type="text" value="pe-7s-refresh-cloud" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e61d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe61d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-paperclip"></span>
                <input type="text" value="pe-7s-paperclip" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e69c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe69c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-radio"></span>
                <input type="text" value="pe-7s-radio" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e61e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe61e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-note2"></span>
                <input type="text" value="pe-7s-note2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e69d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe69d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-print"></span>
                <input type="text" value="pe-7s-print" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e61f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe61f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-network"></span>
                <input type="text" value="pe-7s-network" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e69e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe69e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-prev"></span>
                <input type="text" value="pe-7s-prev" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e620" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe620" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-mute"></span>
                <input type="text" value="pe-7s-mute" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e69f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe69f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-power"></span>
                <input type="text" value="pe-7s-power" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e621" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe621" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-medal"></span>
                <input type="text" value="pe-7s-medal" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a0" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a0" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-portfolio"></span>
                <input type="text" value="pe-7s-portfolio" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e622" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe622" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-like2"></span>
                <input type="text" value="pe-7s-like2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a1" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a1" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-plus"></span>
                <input type="text" value="pe-7s-plus" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e623" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe623" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-left-arrow"></span>
                <input type="text" value="pe-7s-left-arrow" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a2" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a2" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-play"></span>
                <input type="text" value="pe-7s-play" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e624" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe624" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-key"></span>
                <input type="text" value="pe-7s-key" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a3" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a3" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-plane"></span>
                <input type="text" value="pe-7s-plane" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e625" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe625" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-joy"></span>
                <input type="text" value="pe-7s-joy" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a4" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a4" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-photo-gallery"></span>
                <input type="text" value="pe-7s-photo-gallery" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e626" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe626" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-pin"></span>
                <input type="text" value="pe-7s-pin" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e69b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe69b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-phone"></span>
                <input type="text" value="pe-7s-phone" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e627" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe627" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-plug"></span>
                <input type="text" value="pe-7s-plug" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e69a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe69a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-pen"></span>
                <input type="text" value="pe-7s-pen" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e628" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe628" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-right-arrow"></span>
                <input type="text" value="pe-7s-right-arrow" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e699" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe699" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-paper-plane"></span>
                <input type="text" value="pe-7s-paper-plane" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e629" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe629" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-delete-user"></span>
                <input type="text" value="pe-7s-delete-user" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a7" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a7" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-paint"></span>
                <input type="text" value="pe-7s-paint" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e62a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe62a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-bottom-arrow"></span>
                <input type="text" value="pe-7s-bottom-arrow" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e6a8" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe6a8" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-notebook"></span>
                <input type="text" value="pe-7s-notebook" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e62b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe62b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-note"></span>
                <input type="text" value="pe-7s-note" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e62c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe62c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-next"></span>
                <input type="text" value="pe-7s-next" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e62d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe62d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-news-paper"></span>
                <input type="text" value="pe-7s-news-paper" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e62e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe62e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-musiclist"></span>
                <input type="text" value="pe-7s-musiclist" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e62f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe62f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-music"></span>
                <input type="text" value="pe-7s-music" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e630" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe630" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-mouse"></span>
                <input type="text" value="pe-7s-mouse" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e631" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe631" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-more"></span>
                <input type="text" value="pe-7s-more" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e632" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe632" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-moon"></span>
                <input type="text" value="pe-7s-moon" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e633" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe633" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-monitor"></span>
                <input type="text" value="pe-7s-monitor" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e634" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe634" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-micro"></span>
                <input type="text" value="pe-7s-micro" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e635" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe635" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-menu"></span>
                <input type="text" value="pe-7s-menu" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e636" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe636" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-map"></span>
                <input type="text" value="pe-7s-map" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e637" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe637" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-map-marker"></span>
                <input type="text" value="pe-7s-map-marker" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e638" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe638" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-mail"></span>
                <input type="text" value="pe-7s-mail" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e639" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe639" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-mail-open"></span>
                <input type="text" value="pe-7s-mail-open" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e63a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe63a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-mail-open-file"></span>
                <input type="text" value="pe-7s-mail-open-file" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e63b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe63b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-magnet"></span>
                <input type="text" value="pe-7s-magnet" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e63c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe63c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-loop"></span>
                <input type="text" value="pe-7s-loop" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e63d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe63d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-look"></span>
                <input type="text" value="pe-7s-look" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e63e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe63e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-lock"></span>
                <input type="text" value="pe-7s-lock" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e63f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe63f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-lintern"></span>
                <input type="text" value="pe-7s-lintern" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e640" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe640" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-link"></span>
                <input type="text" value="pe-7s-link" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e641" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe641" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-like"></span>
                <input type="text" value="pe-7s-like" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e642" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe642" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-light"></span>
                <input type="text" value="pe-7s-light" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e643" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe643" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-less"></span>
                <input type="text" value="pe-7s-less" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e644" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe644" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-keypad"></span>
                <input type="text" value="pe-7s-keypad" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e645" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe645" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-junk"></span>
                <input type="text" value="pe-7s-junk" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e646" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe646" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-info"></span>
                <input type="text" value="pe-7s-info" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e647" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe647" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-home"></span>
                <input type="text" value="pe-7s-home" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e648" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe648" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-help2"></span>
                <input type="text" value="pe-7s-help2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e649" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe649" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-help1"></span>
                <input type="text" value="pe-7s-help1" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e64a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe64a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-graph3"></span>
                <input type="text" value="pe-7s-graph3" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e64b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe64b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-graph2"></span>
                <input type="text" value="pe-7s-graph2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e64c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe64c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-graph1"></span>
                <input type="text" value="pe-7s-graph1" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e64d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe64d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-graph"></span>
                <input type="text" value="pe-7s-graph" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e64e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe64e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-global"></span>
                <input type="text" value="pe-7s-global" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e64f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe64f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-gleam"></span>
                <input type="text" value="pe-7s-gleam" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e650" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe650" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-glasses"></span>
                <input type="text" value="pe-7s-glasses" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e651" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe651" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-gift"></span>
                <input type="text" value="pe-7s-gift" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e652" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe652" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-folder"></span>
                <input type="text" value="pe-7s-folder" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e653" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe653" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-flag"></span>
                <input type="text" value="pe-7s-flag" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e654" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe654" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-filter"></span>
                <input type="text" value="pe-7s-filter" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e655" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe655" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-file"></span>
                <input type="text" value="pe-7s-file" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e656" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe656" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-expand1"></span>
                <input type="text" value="pe-7s-expand1" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e657" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe657" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-exapnd2"></span>
                <input type="text" value="pe-7s-exapnd2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e658" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe658" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-edit"></span>
                <input type="text" value="pe-7s-edit" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e659" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe659" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-drop"></span>
                <input type="text" value="pe-7s-drop" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e65a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe65a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-drawer"></span>
                <input type="text" value="pe-7s-drawer" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e65b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe65b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-download"></span>
                <input type="text" value="pe-7s-download" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e65c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe65c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-display2"></span>
                <input type="text" value="pe-7s-display2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e65d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe65d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-display1"></span>
                <input type="text" value="pe-7s-display1" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e65e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe65e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-diskette"></span>
                <input type="text" value="pe-7s-diskette" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e65f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe65f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-date"></span>
                <input type="text" value="pe-7s-date" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e660" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe660" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-cup"></span>
                <input type="text" value="pe-7s-cup" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e661" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe661" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-culture"></span>
                <input type="text" value="pe-7s-culture" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e662" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe662" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-crop"></span>
                <input type="text" value="pe-7s-crop" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e663" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe663" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-credit"></span>
                <input type="text" value="pe-7s-credit" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e664" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe664" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-copy-file"></span>
                <input type="text" value="pe-7s-copy-file" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e665" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe665" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-config"></span>
                <input type="text" value="pe-7s-config" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e666" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe666" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-compass"></span>
                <input type="text" value="pe-7s-compass" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e667" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe667" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-comment"></span>
                <input type="text" value="pe-7s-comment" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e668" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe668" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-coffee"></span>
                <input type="text" value="pe-7s-coffee" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e669" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe669" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-cloud"></span>
                <input type="text" value="pe-7s-cloud" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e66a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe66a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-clock"></span>
                <input type="text" value="pe-7s-clock" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e66b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe66b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-check"></span>
                <input type="text" value="pe-7s-check" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e66c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe66c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-chat"></span>
                <input type="text" value="pe-7s-chat" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e66d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe66d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-cart"></span>
                <input type="text" value="pe-7s-cart" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e66e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe66e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-camera"></span>
                <input type="text" value="pe-7s-camera" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e66f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe66f" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-call"></span>
                <input type="text" value="pe-7s-call" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e670" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe670" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-calculator"></span>
                <input type="text" value="pe-7s-calculator" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e671" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe671" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-browser"></span>
                <input type="text" value="pe-7s-browser" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e672" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe672" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-box2"></span>
                <input type="text" value="pe-7s-box2" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e673" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe673" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-box1"></span>
                <input type="text" value="pe-7s-box1" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e674" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe674" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-bookmarks"></span>
                <input type="text" value="pe-7s-bookmarks" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e675" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe675" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-bicycle"></span>
                <input type="text" value="pe-7s-bicycle" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e676" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe676" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-bell"></span>
                <input type="text" value="pe-7s-bell" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e677" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe677" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-battery"></span>
                <input type="text" value="pe-7s-battery" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e678" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe678" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-ball"></span>
                <input type="text" value="pe-7s-ball" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e679" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe679" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-back"></span>
                <input type="text" value="pe-7s-back" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e67a" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe67a" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-attention"></span>
                <input type="text" value="pe-7s-attention" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e67b" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe67b" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-anchor"></span>
                <input type="text" value="pe-7s-anchor" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e67c" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe67c" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-albums"></span>
                <input type="text" value="pe-7s-albums" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e67d" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe67d" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-alarm"></span>
                <input type="text" value="pe-7s-alarm" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e67e" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe67e" class="unicode-text">
              </fieldset>
            </div>
            <div class="font-icon-list col-md-2 col-sm-3 col-xs-6 col-xs-6">
              <div class="font-icon-detail"><span class="pe-7s-airplay"></span>
                <input type="text" value="pe-7s-airplay" class="font-icon-name">
              </div>
              <fieldset class="font-icon-code">
                <input type="text" readonly value="e67f" class="code-value">
                <input type="text" readonly maxlength="1" value="" class="unicode">
                <input type="text" value="&amp;#xe67f" class="unicode-text">
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      /* fonts border style */
      .font-icon-detail {
        text-align: center;
        margin-bottom: 20px;
      }
      .font-icon-detail span:first-child {
          border: 1px solid #eaeaea;
          border-radius: 3px;
          color: #1a1a1a;
          display: inline-block;
          font-size: 48px;
          padding: 10px 0;
          transition: color 150ms linear 0s, background 150ms linear 0s, font-size 150ms linear 0s, width 150ms ease 0s;
          width: 70px;
        }
        .font-icon-name {
          border: 0 none;
          display: block;
          font-size: 13px;
          margin-top: 15px;
          padding: 0;
          text-align: center;
          width: 100%;
        }
        .font-icon-code {
          max-height: 0;
          opacity: 0;
          overflow: hidden;
          text-align: center;
          transition: max-height 200ms linear 0s, opacity 200ms linear 0s;
        }
        .code-value, .unicode, .unicode-text {
          background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
          border: medium none;
          color: #a0a0a0;
          text-align: center;
        }
    </style>
  </div>

<?php
require_once ('footer.php');
?>