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
  <!-- <li class="nav-item switch">
    <a class="nav-link css" id="pills-profile-tab" data-toggle="pill" href="#cssEditor" role="tab" aria-controls="pills-profile" aria-selected="false">CSS</a>
  </li> -->
</ul>

<div class="tab-content" id="pills-tabContent">
  <!-- HTML -->
  <div class="tab-pane fade show active" id="htmlEditor" role="tabpanel" aria-labelledby="pills-home-tab">
  <textarea rows="1" class="col area-top" id="input" readonly="readonly">
  <!-- This is a COMMENT! -->
  </textarea>
  <textarea autocomplete="off" autocorrect="off" autocapitalize="off" class="col" spellcheck="false" class="edit" rows="7"  id="html" placeholder="Type your code here."><!-- Try typing a comment here. --></textarea>
  <textarea class="col area-bottom" rows="5" id="input" readonly="readonly">
    <!--
    These COMMENTS don't do anything to code
    -->
  </textarea>
</div>

  <!-- CSS -->
  <!-- <div class="tab-pane fade" id="cssEditor" role="tabpanel" aria-labelledby="pills-profile-tab">

    <textarea rows="1" class="col area-top" id="input" readonly="readonly">

    </textarea>
    <textarea autocomplete="off" autocorrect="off" autocapitalize="off" class="col" spellcheck="false" class="edit" rows="7"  id="css" placeholder="Type your code here."></textarea>
    <textarea class="col area-bottom" rows="5" id="input" readonly="readonly">

    </textarea>
</div> -->
</div>

</div>
    </div>
    <div class="col-md-12 instruc">
      <center><h3 class="mx-auto mt-4">Comments</h3></center>
            <hr>
            <p>Comments look like this:</p>
            <div class="snippet">
              <p>&lt;!-- Example single line comment --&gt;</p>
              <p>&lt;!--<br> Example multiline comment
                 <br>--&gt;</p>
            </div>
            <p class="mt-3">In the code editor above, there will be comments to guide you and make it easier to understand what you need to do. Comments do not change anything about the code, they are like notes in your text book, they help you with understanding a subject. Throughout these games you will see them in the code, they will hopefully guide you on where to put your code and they will try to make the experience easier for you.</p>
            <center><h3>Instructions</h3></center>
            <hr>
            <p class="instruction-text">To write a comment, all you have to do is type the beginning and end part with content inbetween them. <br><span class="snippet">&lt;!-- CONTENT HERE --&gt;</span></p>
            <center><h3>Index</h3></center>
            <hr>
            <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="A comment is an annotation for your code, they could be used to show where you want someone to type their code or they could be used to explain a part of theri code. Comments do not affect output they are simply there to read in the code editor.">Comment</span></p>
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
  <a href="htmlbasics-2.php" class="" id="next">Next</a>
</div>
<script>
// function hint() {
//       document.getElementById("html").value = "<h1>Hello</h1>\n<h2>Hello</h2>\n<h3></h3>\n<h4></h4>\n<h5></h5>\n<h6></h6>\n<p></p>";
//     }
//     function answer() {
//           document.getElementById("html").value = "<h1>Hello</h1>\n<h2>Hello</h2>\n<h3>Hello</h3>\n<h4>Hello</h4>\n<h5>Hello</h5>\n<h6>Hello</h6>\n<p>Hello</p>";
//         }
  </script>
  <div>
<button type="button" class="button" id="check">Check Answer</button>
<button type="button" id="hint" class="button" onclick="hint()">Show Hint</button>
<button type="button" id="answer" class="button" onclick="answer()">Show Answer</button>
</div>
</div>
</div>
<?php include("inc/credentials.php"); ?>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
// $(document).ready(function () {
//     $("#check").on("click", function () {
//     var textAreaCss = $("#css").val();
//     var textAreaHtml = $("#html").val();
//     var answer = "<h1>hello</h1>\n<h2>hello</h2>\n<h3>hello</h3>\n<h4>hello</h4>\n<h5>hello</h5>\n<h6>hello</h6>\n<p>hello</p>";
//     var endStyles = document.getElementById("css").value = 'body {\n background: url("img/cave.jpeg") no-repeat center center;\n background-size: cover;\n color: white;\n}';
//     var textAreaCssValue = textAreaCss.trim().toLowerCase();
//     var textAreaHtmlValue = textAreaHtml.trim().toLowerCase();
//     var formatValue = textAreaHtmlValue.replace(/\s*[\r\n]+\s*/g, '\n')
//                                .replace(/(<[^\/][^>]*>)\s*/g, '$1')
//                                .replace(/\s*(<\/[^>]+>)/g, '$1');
//       if (formatValue.indexOf(answer)!=-1) {
//         $("a#next").removeClass("disabled");
//         $('iframe').contents().find('body').html(textAreaHtml + '<div><h1>Echo...</h1> <h2>Echo...</h2><h3>Echo...</h3><h4>Echo...</h4><h5>Echo...</h5><h6>Echo...</h6><p>Echo...</p></div>');
//         endStyles;
//         $("iframe").contents().find('body').css('background', 'url("img/cave.jpeg") no-repeat center center').css('background-size', 'cover').css('color', 'white');
//       } else {
//
//       }
//     });
//  });




</script>

<?php include("inc/footer.php");?>
