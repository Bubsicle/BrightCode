$(document).ready(function() {
  var frame = $('iframe');
  var contents= frame.contents();
  var body = contents.find('body');
  var styleTag = contents.find('head').append('<style></style>').children('style');
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
});
