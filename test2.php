<?php include("inc/header.php");?>

<div class="container-fluid">
<div class="row mt-3">
  <div class="html col-sm-12 col-md-6">
    <div class="code mr-3">
      <center><h3 class="tool-title">Code Editor</h3></center>
      <div class="editor">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item switch ">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#htmlEditor" role="tab" aria-controls="pills-home" aria-selected="true">HTML</a>
  </li>
  <li class="nav-item switch">
    <a class="nav-link css" id="pills-profile-tab" data-toggle="pill" href="#cssEditor" role="tab" aria-controls="pills-profile" aria-selected="false">CSS</a>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
  <!-- HTML -->
  <div class="tab-pane fade show active" id="htmlEditor" role="tabpanel" aria-labelledby="pills-home-tab">
  <textarea rows="1" class="col area-top" id="input" readonly="readonly">
  <!-- Paste Tags Below Here! -->
  </textarea>
  <textarea autocomplete="off" autocorrect="off" autocapitalize="off" class="col" spellcheck="false" class="edit" rows="7"  id="html" placeholder="Type your code here."></textarea>
  <textarea class="col area-bottom" rows="5" id="input" readonly="readonly">
    <!-- Paste tags above here! -->
  </textarea>
</div>

  <!-- CSS -->
  <div class="tab-pane fade" id="cssEditor" role="tabpanel" aria-labelledby="pills-profile-tab">

    <textarea rows="1" class="col area-top" id="input" readonly="readonly">

    </textarea>
    <textarea autocomplete="off" autocorrect="off" autocapitalize="off" class="col" spellcheck="false" class="edit" rows="7"  id="css" placeholder="Type your code here."></textarea>
    <textarea class="col area-bottom" rows="5" id="input" readonly="readonly">

    </textarea>
</div>
</div>

</div>
    </div>
    <div class="col-md-12 instruc">
      <center><h3 class="mx-auto mt-4">Text</h3></center>
      <hr>
      <p>Text is important to convey information as content to the person reading. Like when your writing a letter or when the teacher writes tasks on the board. HTML, which is the coding language we are using. Gives you options to write text to be displayed.</p>
      <p>Tags are used to make HTML content work. Everything you code is surrounded by tags, tags look like this:</p>
      <div class="snippet">
        <p>&lt; &gt; &lt;/&gt;</p>
      </div>
      <p>Every tag has &lt; and &gt;. There are hundreds of tags but the text tags look like this:</p>
      <div class="snippet">
        <p>&lt;h1&gt; &lt;/h1&gt;<br>
          &lt;h2&gt; &lt;/h2&gt;<br>
          &lt;h3&gt; &lt;/h3&gt;<br>
          &lt;h4&gt; &lt;/h4&gt;<br>
          &lt;h5&gt; &lt;/h5&gt;<br>
          &lt;h6&gt; &lt;/h6&gt;<br>
          &lt;p&gt; &lt;/p&gt;
        </p>
      </div>
      <p>These are the most common text tags you will come across. To type your text, just type what ever you want inbetween the tags, like this:</p>
      <div class="snippet">
        <p>&lt;h1&gt; My Text Here &lt;/h1&gt;</p>
      </div>
      <p>You may notice that the last tag contains a / . You must put that there because it indicates that it is the end tag which means content outside of that tag will not be considered part of that tag. Example:</p>
      <div class="snippet">
        <p>&lt;h1&gt;This text is part of the tags &lt;/h1&gt; This text is not part of the tags.</p>
      </div>
      <p>So putting content outside the tag will behave differently than if it was inside.</p>
      <center><h3 class="mt-4">Instructions</h3></center>
      <hr>
      <p>Look at these tags and copy and paste them into the code editor above.</p>
      <div class="snippet">
        <p>&lt;h1&gt;&lt;/h1&gt;<br>
          &lt;h2&gt;&lt;/h2&gt;<br>
          &lt;h3&gt;&lt;/h3&gt;<br>
          &lt;h4&gt;&lt;/h4&gt;<br>
          &lt;h5&gt;&lt;/h5&gt;<br>
          &lt;h6&gt;&lt;/h6&gt;<br>
          &lt;p&gt;&lt;/p&gt;
        </p>
      </div>
      <p>Then type Hello inside all the tags, make sure the tags are on their own line.</p>
    </div>
  </div>
  <div class="col-sm-12 col-md-6 output">
  <center><h3 class="tool-title">Code Output</h3></center>
    <iframe>


    </iframe>
    <div class="container-fluid">
  <div class="row navigation">
    <div class="pagination d-flex">
  <a href="htmlbasics-1.php">Previous</a>
  <a href="htmlbasics-1.php">1</a>
  <a href="htmlbasics-2.php">2</a>
  <a href="html-basics3.php">3</a>
  <a href="htmlbasics-3.php" class="disabled" id="next">Next</a>
</div>
<script>
function hint() {
      document.getElementById("html").value = "<h1>Hello</h1>\n<h2>Hello</h2>\n<h3></h3>\n<h4></h4>\n<h5></h5>\n<h6></h6>\n<p></p>";
    }
    function answer() {
          document.getElementById("html").value = "<h1>Hello</h1>\n<h2>Hello</h2>\n<h3>Hello</h3>\n<h4>Hello</h4>\n<h5>Hello</h5>\n<h6>Hello</h6>\n<p>Hello</p>";
        }
  </script>
<button type="button" class="button" id="check">Check Answer</button>
<button type="button" id="hint" class="button" onclick="hint()">Show Hint</button>
<button type="button" id="answer" class="button" onclick="answer()">Show Answer</button>
</div>
</div>
<?php include("inc/credentials.php"); ?>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
    $("#check").on("click", function () {
    var textAreaCss = $("#css").val();
    var textAreaHtml = $("#html").val();
    var answer = "<h1>hello</h1>\n<h2>hello</h2>\n<h3>hello</h3>\n<h4>hello</h4>\n<h5>hello</h5>\n<h6>hello</h6>\n<p>hello</p>";
    var endStyles = document.getElementById("css").value = 'body {\n background: url("img/cave.jpeg") no-repeat center center;\n background-size: cover;\n color: white;\n}';
    var textAreaCssValue = textAreaCss.trim().toLowerCase();
    var textAreaHtmlValue = textAreaHtml.trim().toLowerCase();
    var formatValue = textAreaHtmlValue.replace(/\s*[\r\n]+\s*/g, '\n')
                               .replace(/(<[^\/][^>]*>)\s*/g, '$1')
                               .replace(/\s*(<\/[^>]+>)/g, '$1');
      if (formatValue.indexOf(answer)!=-1) {
        $("a#next").removeClass("disabled");
        $('iframe').contents().find('body').html(textAreaHtml + '<div><h1>Echo...</h1> <h2>Echo...</h2><h3>Echo...</h3><h4>Echo...</h4><h5>Echo...</h5><h6>Echo...</h6><p>Echo...</p></div>');
        endStyles;
        $("iframe").contents().find('body').css('background', 'url("img/cave.jpeg") no-repeat center center').css('background-size', 'cover').css('color', 'white');
      } else {

      }
    });
 });




</script>

<?php include("inc/footer.php");?>
