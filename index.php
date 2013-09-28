<?php
	# IMPORT YOUR BASE TEMPLATE
	include 'manager/home.php';
?>

<?php # CONTENTS BLOCK # ?>
<?php startblock('content') ?>
<div class="jumbotron">
  <div class="container">
    <h1>Welcome</h1>
    <p>This is our new custom HTML5 Strap Framework version 4.</p>
    <p>It is build by HTML5 + BOOTSTRAP + LESS CSS. <br> A Sleek, intuitive, and powerful front-end framework for faster and easier web development.</p>
  </div>
</div>    

<div class="container">
  <div class="row" id="framework-info">
    <div class="col-lg-4">
      <h2>HTML 5 Strap v.4</h2>
      <p>HTML5 Strap is a custom framework.</p>
      <p>Framework that compiled from different frameworks and configure it to one powerful front-end framework, that allows user to work faster and easier web development with given additional resources and plugins such as; Shadowbox, VideoJS & more...</p>
      <div class="btn-group">
        <a class="btn btn-primary" href="https://github.com/imarkdesigns/html5strap.4">Download</a>
      </div>        
    </div>
    <div class="col-lg-4">
      <h2>LESS CSS 1.4.1</h2>
      <p>The dynamic stylesheet language.</p>
      <p>LESS extends CSS with dynamic behavior such as variables, mixins, operations and functions. As an extension to CSS, LESS is not only backwards compatible with CSS, but the extra features it adds use existing CSS syntax.</p>
      <div class="btn-group">
        <a class="btn btn-primary" href="http://lesscss.org/" target="_blank">Check Info</a>
      </div>        
    </div>
    <div class="col-lg-4">
      <h2>jQuery 1.10.2</h2>
      <p>jQuery is a fast, small, and feature-rich JavaScript library.</p>
      <p>It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</p>
      <div class="btn-group">
        <a class="btn btn-primary" href="http://jquery.com/" target="_blank">Check Info</a>
      </div>        
    </div>
  </div>
  <?php //End of Framework-Info ?>
  
  <hr>
  
  <div class="row" id="framework-guide">
    <div class="col-lg-8">
      <h2>What's inside</h2>
      <p>Within the download you'll find the following directories and files, logically grouping common assets and providing both compiled and minified variations.</p>
      <p>Some third party files and plugins are integrated already on the current framework. Others are manually will be integrate if needed on the develoment.</p>
    </div>
    <div class="col-lg-4">
      <div class="panel panel-primary">
        <div class="panel-heading">HTML5Strap Inspirations</div>
        <ul class="list-group">
          <li class="list-group-item"><a href="http://html5boilerplate.com" target="_blank">HTML5 Boilerplate</a></li>
          <li class="list-group-item"><a href="http://css-tricks.com" target="_blank">CSS Tricks</a></li>
          <li class="list-group-item"><a href="http://www.smashingmagazine.com" target="_blank">Smashing Magazines</a></li>
        </ul>
      </div>      
    </div>
  </div>
  <?php //End of Framework-Guide ?>
</div>

<?php endblock(); ?>



<?php # CSS & JAVASCRIPT PLUGINS BLOCK # ?>
<?php startblock('head') ?>
<?php endblock(); ?>

<?php startblock('script') ?>
<?php endblock(); ?>