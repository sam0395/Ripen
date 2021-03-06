<nav data-scroll-header id="navbar" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Ripen Studios</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li><a data-scroll href="#home">Home</a></li>
        <li><a data-scroll href="#services">Services</a></li>
        <li><a data-scroll href="#portfolio">Portfolio</a></li>
        <li><a data-scroll href="#process">Process</a></li>
        <li><a data-scroll href="#contact">Contact</a></li>

      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<script type="text/javascript">
  $(function() {

    smoothScroll.init({
      speed: 500,
      easing: 'easeInOutCubic'
    });

    $(window).on('scroll', function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > 70) {
          $('#navbar').addClass('animate-navbar');
      }else {
          $('#navbar').removeClass('animate-navbar');
      }
    });
  });
</script>