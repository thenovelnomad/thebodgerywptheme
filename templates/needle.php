<script>
  $(function () {
    var $needle = $('#needle');
    $('nav a').hover(function (e) {
      console.log(this);
      $needle.css('left', '100px');
    });
  });

  lolwut.triggererr();

</script>
<div id="needle"></div>
