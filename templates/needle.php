<script>
  $(function () {
    var $needle = $('#needle');
    $('nav a').hover(function (e) {
      var rect = this.getBoundingClientRect();
      $needle.css('left', (rect.left + (rect.width / 2)) + 'px');
    });
  });
</script>
<div id="needle"></div>
