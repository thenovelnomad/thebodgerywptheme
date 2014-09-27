<script>
  $(function () {
    var $needle = $('#needle'), needleTo = 0, rect = {}, $active = $('li.active a');
    if ($active.length) {
      rect = $active[0].getBoundingClientRect();
      needleTo = rect.left + (rect.width / 2) - 12;
    } else {
      needleTo = document.body.getBoundingClientRect().width / 2;
    }
    $needle.css('left', needleTo + 'px');
    $('nav a').hover(function (e) {
      rect = this.getBoundingClientRect();
      $needle.css('left', (rect.left + (rect.width / 2) - 12) + 'px');
    });
  });
</script>
<div id="needle"></div>
