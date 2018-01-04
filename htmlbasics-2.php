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
      <p><span data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Tags</span> are used to make HTML content work. Everything you code, is surrounded by tags, tags look like this:</p>
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
      <p>Summary of constructing tags:</p>
      <ol>
        <li>Start with <div class="snippet"><</div></li>
        <li>Then specify what tag you want, for example: <div class="snippet">h1</div> or <div class="snippet">h2</div>.</li>
        <li>Close the first bit of the tag with a <div class="snippet">></div>, so your first tag looks like this, <div class="snippet"> &lt;h1&gt;</div>.</li>
        <li>Then type your text for example: <div class="snippet">Hello, I am very pleased to meet you.</div>. so far the tag would look like this, <div class="snippet">&lt;h1&gt; Hello, I am very pleased to meet you.</div></li>
        <li>Finally you must add the end tag to close the tags, which is the first 3 steps but before the specification of what tag you want, you add a /, for example <div class="snippet">&lt;/h1&gt;</div></li>
        <li>And so your tags will looks like this, <div class="snippet">&lt;h1&gt;Hello, I am very pleased to meet you.&lt;/h1&gt;</div>.</li>
      </ol>
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

      <center><h3>Index</h3>
      <p>Hover over the text to see an explanation of what you hovered over</p></center>
      <hr>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Most if not everything in your code is surrounded by tags, they come in different form aswell you define the type of tag by typing one of a long list of tag types inbetween the < and the > tags look like this, < > Content here </ > .">Tag</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="The end tag is the same as the tag specified at the front except it has a / inside which means it's the end of tag. </ >, any content written past that tag will not be inside the tags, meaning it will not format the content than if it was inside the tag.">End tag</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="HTML is the coding language that is commonly used to make the content of websites.">HTML</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="h1 stands for heading 1 and they are the biggest out of the 6 heading tags.">&lt;h1&gt; &lt;/h1&gt;</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="h2 stands for heading 2 and they are the second biggest text out of the 6 heading tags.">&lt;h2&gt; &lt;/h2&gt;</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="h3 stands for heading 3 and they are the third biggest text out of the 6 heading tags.">&lt;h3&gt; &lt;/h3&gt;</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="h4 stands for heading 4 and they are the fourth biggest text out of the 6 heading tags.">&lt;h4&gt; &lt;/h4&gt;</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="h5 stands for heading 5 and they are the fifth biggest text out of the 6 heading tags.">&lt;h5&gt; &lt;/h5&gt;</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="h6 stands for heading 6 and they are the sixth biggest text out of the 6 heading tags. This is the smallest heading tag.">&lt;h6&gt; &lt;/h6&gt;</span></p>
            <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="p stands for paragraph and this is a type of text tag that is commonly used to write paragraphs.">&lt;p&gt; &lt;/p&gt;</span></p>
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
  <a href="htmlbasics-3.php">3</a>
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
    var endStyles = document.getElementById("css").value = 'body {\n background: url("img/cave.jpg") no-repeat center center;\n background-size: cover;\n color: white;\n  height: 100%; \n}';
    var textAreaCssValue = textAreaCss.trim().toLowerCase();
    var textAreaHtmlValue = textAreaHtml.trim().toLowerCase();
    var formatValue = textAreaHtmlValue.replace(/\s*[\r\n]+\s*/g, '\n')
                               .replace(/(<[^\/][^>]*>)\s*/g, '$1')
                               .replace(/\s*(<\/[^>]+>)/g, '$1');
      if (formatValue.indexOf(answer)!=-1) {
        $("a#next").removeClass("disabled");
        $('iframe').contents().find('body').html(textAreaHtml + '<div class="animated fadeInUp"><h1>Echo...</h1> <h2>Echo...</h2><h3>Echo...</h3><h4>Echo...</h4><h5>Echo...</h5><h6>Echo...</h6><p>Echo...</p></div> <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="https://unsplash.com/@sortino?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Joshua Sortino"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Joshua Sortino</span></a>');
        endStyles;
        $("iframe").contents().find('body').css('background', 'url("img/cave.jpg") no-repeat center center').css('background-size', 'cover').css('height', '100%').css('color', 'white');
      } else {

      }
    });
 });




</script>

<?php include("inc/footer.php");?>
