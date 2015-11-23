/* jshint -W004, -W033, -W116 */

$(document).ready(function() {

    $('#generate').on('click', function() {
        console.log($('input[id=input-text]').val());
        var words = new Lexer().lex($('input[id=input-text]').val());
        var taggedWords = new POSTagger().tag(words);
        var result = "";
        for (i in taggedWords) {
          var taggedWord = taggedWords[i];
          var word = taggedWord[0];
          var tag = taggedWord[1];
          // Note the use of document.writeln instead of print
          result += (word + " / " + tag + "<br/>");
        }
        $('#tagged-text').html(result);
        $("#tagged-title").show();
        $("#tagged-text").show();
    });

  registerNavButtons();
});

function registerNavButtons() {
  var sections = ['home', 'about', 'team', 'demo', 'tech'];

  sections.forEach(function(section) {
    clickAndScroll('#nav-' + section, '#' + section);
  });
}

function clickAndScroll(link, section) {
  var delay = 700;

  $(link).click(function() {
    $('html, body').animate({
      scrollTop: $(section).offset().top - 50
    }, delay);

    return false;
  });
}
