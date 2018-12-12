<?php $title = 'About'; ?>
<?php ob_start(); ?>
  <h1>About</h1>

  <h2>... me</h2>
  <p>
    If you have some thoughts, <a href="mailto:olegbelostotsky@gmail.com">get in touch</a> with me.
    Also at the top of the page you can find links on my social media profiles. I always open for a new experience and knowledge.
  </p>

  <h2>... this site</h2>
  <p>
    Basically, PHP is used: <a href="https://github.com/zendframework/zend-diactoros">Zend Diactoros</a> for the PSR-7 implementation and
    <a href="https://github.com/PHP-DI/PHP-DI">PHP-DI</a> for PSR-11, <a href="https://github.com/erusev/parsedown">Parsedown</a> as a markdown converter.
    Among the JavaScript libraries: <a href="https://github.com/isagalaev/highlight.js">highlight.js</a> to highlight the syntax.
    As a Normalize.css alternative, I think <a href="https://github.com/pure-css/pure">Pure</a> looks fine.
    The web server deployed using <a href="https://www.docker.com/">Docker</a>, <a href="http://nginx.org">nginx</a>
    and hosted at <a href="https://m.do.co/c/762c39fd514e">DigitalOcean</a>.
  </p>
<?php $content = ob_get_contents(); ?>
<?php ob_end_clean(); ?>

<?php require($this->kernel->getTemplateDir() . '/layout.php'); ?>
