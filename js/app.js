$(document).ready(function() {
  var frame = $('iframe');
  var contents= frame.contents();
  var body = contents.find('body');
  var styleTag = contents.find('head').append('<link rel="stylesheet" href="css/animate.css"><link href="https://fonts.googleapis.com/css?family=Cabin|Inconsolata|Nunito|Nunito+Sans|Pacifico|Quicksand|Rubik|VT323" rel="stylesheet">').append('<style></style>').children('style');
  $("textarea").focus(function(){
    var $this = $(this);
    $this.keyup(function() {
      if( $this.attr("id") === 'html' ) {
        body.html( $this.val() );
      } else {
        styleTag.text( $this.val() );
      }
    });
  });
  $(function () {
  $('[data-toggle="popover"]').popover()
})
});
