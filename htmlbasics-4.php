<?php include("inc/header.php");?>

<div class="container-fluid">
<div class="row mt-3">
  <div class="animated bounceInDown html col-sm-12 col-md-6">
    <div class="code mr-3">
      <center><h3 class="tool-title">Code Editor</h3></center>
      <div class="editor">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
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

  <textarea autocomplete="off" autocorrect="off" autocapitalize="off" class="col" spellcheck="false" class="edit" rows="14"  id="html" placeholder="Type your code here.">
<div class="sign">
<!-- type One stop shop in a few miles in the correct text tags -->

</div>

<!-- Do not edit below this line! -->
<!-- Setup -->
<style>
div {
  background: url("img/signh2.svg") no-repeat center center;
  background-size: cover;
  height: 188px;
  width: 280px;
  position: absolute;
  top: 40%;
  word-wrap: break-word;
}

h2 {
margin: 40px;
color: white;
}
</style>
</textarea>


</div>

  <!-- CSS -->
  <!-- <div class="tab-pane fade" id="cssEditor" role="tabpanel" aria-labelledby="pills-profile-tab">
    <textarea autocomplete="off" autocorrect="off" autocapitalize="off" class="col" spellcheck="false" class="edit" rows="14"  id="css" placeholder="Type your code here.">


    </textarea>
</div> -->
</div>

</div>
    </div>
    <div class="col-md-12 instruc">
      <center><h3 class="mx-auto mt-4">Using Text</h3></center>
      <hr>
      <p>Now you want to get a snack before you go to the airport. But it seems there is no sign showing where a possible shop is.</p>
      <center><h3 class="mt-4">Instructions</h3></center>
      <hr>
      <p>Below is an index of what type of text each type of sign needs.</p>
      <p>Type One stop shop in a few miles on the sign in the specified sign format from below.</p>

      <center><h3>Index</h3></center>
      <hr>
      <div class="row">
      <div class="sign-index col">
      <h4>h1 tag signs</h4>
      <img src="img/signh1.png">
    </div>
    <div class="sign-index col">
      <h4>h2 tag signs</h4>
      <img src="img/signh2.png">
    </div>
    </div>
    <div class="row">
    <div class="sign-index col">
    <h4>h3 tag signs</h4>
    <img src="img/signh3.png">
  </div>
  <div class="sign-index col">
    <h4>h4 tag signs</h4>
    <img src="img/signh4.png">
  </div>
  </div>
  <div class="row">
  <div class="sign-index col">
  <h4>h5 tag signs</h4>
  <img src="img/signh5.png">
</div>
<div class="sign-index col">
  <h4>h6 tag signs</h4>
  <img src="img/signh6.png">
</div>
</div>
  </div>
  </div>
  <div class="animated bounceInDown col-sm-12 col-md-6 output">
  <center><h3 class="tool-title">Code Output</h3></center>
    <iframe>


    </iframe>
    <div class="container-fluid">
  <div class="row navigation">
    <div class="pagination d-flex">
  <a href="htmlbasics-3.php">Previous</a>
  <a href="htmlbasics-3.php">3</a>
  <a href="htmlbasics-4.php">4</a>
  <a href="htmlbasics-5.php">5</a>
  <a href="htmlbasics-5.php" class="disabled" id="next">Next</a>
</div>
<script>
function hint() {
      document.getElementById("html").value = '<div class="sign">\n<!-- type One stop shop in a few miles in the correct text tags -->\n<h2></h2>\n</div>\n\n<!-- do not edit below this line! -->\n<!-- setup -->\n<style>\ndiv {\nbackground: url("img/signh2.png") no-repeat center center;\nbackground-size: cover;\nheight: 188px;\nwidth: 280px;\nposition: absolute;\n top: 40%;\nword-wrap: break-word;\n}\nh2 {\nmargin: 40px;\n color: white; \n}\n</style>';
    }
    function answer() {
          document.getElementById("html").value = '<div class="sign">\n<!-- type One stop shop in a few miles in the correct text tags -->\n<h2>One stop shop in a few miles</h2>\n</div>\n\n<!-- do not edit below this line! -->\n<!-- setup -->\n<style>\ndiv {\nbackground: url("img/signh2.png") no-repeat center center;\nbackground-size: cover;\nheight: 188px;\nwidth: 280px;\nposition: absolute;\n top: 40%;\nword-wrap: break-word;\n}\nh2 {\nmargin: 40px;\n color: white; \n}\n</style>';
        }
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
$(document).ready(function () {

    $("iframe").contents().find('body').css('background', 'url("img/citybg2.png") no-repeat center center').css('background-size', 'cover').css('color', '#1C2833').css('font-family', 'Rubik, sans-serif');
    $('iframe').contents().find('body').html('<div class="sign animated bounceInDown"></div>')
    $('iframe').contents().find('div').css('background', 'url("img/signh2.png") no-repeat center center').css('background-size', 'cover').css('height', '188px').css('width', '280px').css('position', 'absolute').css('top', '40%');

    $("#check").on("click", function () {
    var textAreaCss = $("#css").val();
    var textAreaHtml = $("#html").val();
    var answer = '<div class="sign">\n<!-- type one stop shop in a few miles in the correct text tags -->\n<h2>one stop shop in a few miles</h2>\n</div>\n\n<!-- do not edit below this line! -->\n<!-- setup -->\n<style>\ndiv {\nbackground: url("img/signh2.png") no-repeat center center;\nbackground-size: cover;\nheight: 188px;\nwidth: 280px;\nposition: absolute;\n top: 40%;\nword-wrap: break-word;\n}\nh2 {\nmargin: 40px;\n color: white; \n}\n</style>'.replace(/\s*[\r\n]+\s*/g, '\n')
                               .replace(/(<[^\/][^>]*>)\s*/g, '$1')
                               .replace(/\s*(<\/[^>]+>)/g, '$1');;
    // var endStyles = document.getElementById("css").value = 'body {\n background: url("img/cave.jpg") no-repeat center center;\n background-size: cover;\n color: white;\n  height: 100%; \n}';
    // var textAreaCssValue = textAreaCss.trim().toLowerCase();
    var textAreaHtmlValue = textAreaHtml.trim().toLowerCase();
    var formatValue = textAreaHtmlValue.replace(/\s*[\r\n]+\s*/g, '\n')
                               .replace(/(<[^\/][^>]*>)\s*/g, '$1')
                               .replace(/\s*(<\/[^>]+>)/g, '$1');
      if (formatValue.indexOf(answer)!=-1) {
        $("a#next").removeClass("disabled");
        $('iframe').contents().find('.sign').html('<h2>One stop shop in a few miles</h2>');
        $('iframe').contents().find('h2').css('margin', '40px').css('color', 'white');
        $('iframe').contents().find('div').removeClass('bounceInDown').addClass('animated bounce infinite');
      } else {
        console.log(formatValue);
        console.log(answer);
      }
    });
 });




</script>

<?php include("inc/footer.php");?>
