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
    <center>
    <div class="back">
     <div class="canvas">
       <!-- Image below here -->

       <!-- Image above here -->
    </div>
    </div>
            <h2>Fame and Flower</h2>
            <h4>By Benjamin</h4>
    </center>


    <style>
    @import url("https://fonts.googleapis.com/css?family=Princess+Sofia");

    .back {
    background-image: url("img/paintingback.svg");
    height: 300px;
    width:  300px;
    position: relative;
    margin: 10%;
    margin-bottom: 0;
    }

    h2 {
      font-family: "Princess Sofia", cursive;
    }

    img {
      margin-top: 20px;
      width: 250px;
      height: 250;
      border-radius: 7px;
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
      <center><h3 class="mx-auto mt-4">Using Images</h3></center>
      <hr>
      <p>Images are also an important part of web development, as they also convey information and make your site look pretty.</p>
      <p>Now you'll be using a different tag, an <span class="snippet">&lt;img&gt;</span> tag!</p>
      <p>These should be much simpler than the previous tags we were learning about because, you don't need to close img tags with a <span class="snippet">/&gt;</span>.</p>
      <p><span class="snippet">&lt;img&gt;</span> specifies that you want an image in the code, but you need to specifiy what image. To do that, you need to give the <span class="snippet">&lt;img&gt;</span> tag an attribute. An attribute is something that defines a property of a tag and can change how it acts and outputs. We'll be using the <span class="snippet">src=""</span> attribute, src stands for source. We'll be taking an image from a directory, so you can get an image from the internet or from your own storage.</p>
      <p>To add the <span class="snippet">src=""</span> attribute to the <span class="snippet">&lt;img&gt;</span> tag you type it inbetween the <span class="snippet">&lt;img</span> and the <span class="snippet">&gt;</span>. So it would look like this, <span class="snippet">&lt;img src=""&gt;</span> To specify the image you just type the directory of the image inbewteen the quotation marks,
        <span class="snippet">" Image_here.png "</span> and you can use most image formats such as .png .jpg etc..</p>
      <center><h3 class="mt-4">Instructions</h3></center>
      <hr>
      <p>Type an <span class="snippet">&lt;img&gt;</span> tag and set it's source attribute to flower.jpg</p>

      <center><h3>Index</h3></center>
      <hr>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Most if not everything in your code is surrounded by tags, they come in different form aswell you define the type of tag by typing one of a long list of tag types inbetween the < and the > tags look like this, < > Content here </ > .">Tag</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="This is a type of tag that displays images to the page and it is self closing which means you do not need /> at the end, you can use images from the internet or from your local storage.">&lt;img&gt;</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Attributes affect how tags behave and are shown, they are always included inside the tag itself.">Attribute</span></p>
      <p><span class="pop" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="This is an attribute that gets the source of something like a file, to be displayed.">src=""</span></p>
  </div>
  </div>
  <div class="animated bounceInDown col-sm-12 col-md-6 output">
  <center><h3 class="tool-title">Code Output</h3></center>
    <iframe>


    </iframe>
    <div class="container-fluid">
  <div class="row navigation">
    <div class="pagination d-flex">
  <a href="htmlbasics-4.php">Previous</a>
  <a href="htmlbasics-3.php">3</a>
  <a href="htmlbasics-4.php">4</a>
  <a href="htmlbasics-5.php">5</a>
  <a href="tobecontinued.php" class="disabled" id="next">Next</a>
</div>
<script>
function hint() {
      document.getElementById("html").value = '<center>\n<div class="back">\n<div class="canvas">\n <!-- Image below here -->\n<img src="">\n<!-- Image above here -->\n</div>\n</div>\n<h2>Fame and Flower</h2>\n<h4>By Benjamin</h4>\n</center>\n\n\n<style>\n@import url("https://fonts.googleapis.com/css?family=Princess+Sofia");\n\n.back {\nbackground-image: url("img/paintingback.svg");\nheight: 300px;\nwidth:  300px;\nposition: relative;\nmargin: 10%;\nmargin-bottom: 0;\n}\n\nh2 {\nfont-family: "Princess Sofia", cursive;\n}\n\nimg {\nmargin-top: 20px;\nwidth: 250px;\nheight: 250;\nborder-radius: 7px;\n}\n</style>';
    }
    function answer() {
          document.getElementById("html").value = '<center>\n<div class="back">\n<div class="canvas">\n <!-- Image below here -->\n<img src="flower.jpg">\n<!-- Image above here -->\n</div>\n</div>\n<h2>Fame and Flower</h2>\n<h4>By Benjamin</h4>\n</center>\n\n\n<style>\n@import url("https://fonts.googleapis.com/css?family=Princess+Sofia");\n\n.back {\nbackground-image: url("img/paintingback.svg");\nheight: 300px;\nwidth:  300px;\nposition: relative;\nmargin: 10%;\nmargin-bottom: 0;\n}\n\nh2 {\nfont-family: "Princess Sofia", cursive;\n}\n\nimg {\nmargin-top: 20px;\nwidth: 250px;\nheight: 250;\nborder-radius: 7px;\n}\n</style>';
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

    $("iframe").contents().find('body').css('background-color', '#F0D99E').css('background-size', 'cover').css('color', '#1C2833').css('font-family', 'Rubik, sans-serif');
    $('iframe').contents().find('body').html('<center><div class="back"><div class="canvas"><!-- Image below here --><!-- Image above here --></div></div><h2>Fame and Flower</h2><h4>By Benjamin</h4></center>')
    $('iframe').contents().find('.back').css('background-image', 'url("img/paintingback.svg")').css('height', '300px').css('width', '300px').css('position', 'relative').css('margin', '10%').css('margin-bottom', '0');
    $('iframe').contents().find('h2').css('font-family', 'Princess Sofia, cursive');
    $('iframe').contents().find('img').css('margin-top', '20px').css('width', '250px').css('height', '250px').css('border-radius', '7px');

    $("#check").on("click", function () {
    var textAreaCss = $("#css").val();
    var textAreaHtml = $("#html").val();
    var answer = '<center>\n<div class="back">\n<div class="canvas">\n <!-- Image below here -->\n<img src="flower.jpg">\n<!-- Image above here -->\n</div>\n</div>\n<h2>Fame and Flower</h2>\n<h4>By Benjamin</h4>\n</center>\n\n\n<style>\n@import url("https://fonts.googleapis.com/css?family=Princess+Sofia");\n\n.back {\nbackground-image: url("img/paintingback.svg");\nheight: 300px;\nwidth:  300px;\nposition: relative;\nmargin: 10%;\nmargin-bottom: 0;\n}\n\nh2 {\nfont-family: "Princess Sofia", cursive;\n}\n\nimg {\nmargin-top: 20px;\nwidth: 250px;\nheight: 250;\nborder-radius: 7px;\n}\n</style>'.replace(/\s*[\r\n]+\s*/g, '\n')
                               .replace(/(<[^\/][^>]*>)\s*/g, '$1')
                               .replace(/\s*(<\/[^>]+>)/g, '$1').toLowerCase();
    // var endStyles = document.getElementById("css").value = 'body {\n background: url("img/cave.jpg") no-repeat center center;\n background-size: cover;\n color: white;\n  height: 100%; \n}';
    // var textAreaCssValue = textAreaCss.trim().toLowerCase();
    var textAreaHtmlValue = textAreaHtml.trim().toLowerCase();
    var formatValue = textAreaHtmlValue.replace(/\s*[\r\n]+\s*/g, '\n')
                               .replace(/(<[^\/][^>]*>)\s*/g, '$1')
                               .replace(/\s*(<\/[^>]+>)/g, '$1');
      if (formatValue.indexOf(answer)!=-1) {
        $("a#next").removeClass("disabled");
        $('iframe').contents().find('.canvas').html('<img src="flower.jpg">');
        $('iframe').contents().find('img').css('margin-top', '20px').css('width', '250px').css('height', '250px').css('border-radius', '7px');
        $('iframe').contents().find('div').addClass('animated tada infinite');
        $('iframe').contents().find('h4, h2').addClass('animated bounce infinite');
      } else {
        console.log(formatValue);
        console.log(answer);
        console.log("Wrong");
      }
    });
 });




</script>

<?php include("inc/footer.php");?>
