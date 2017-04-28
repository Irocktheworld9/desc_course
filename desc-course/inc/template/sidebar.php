<ul class="side-nav fixed" id="mobile-demo">
  	 <li><div class="userView">
	      <div class="background">
	        <img src="img/background.jpg">
	      </div>
	      <a href="#!user"><img class="circle" src="img/sirsendu_pic.png"></a>
	      <a href="#!name"><span class="white-text name">Sirsendu Gope</span></a>
	      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
	    </div>
	</li>
    
    <?php if(defined('PAGE_TITLE') && PAGE_TITLE === "STAFF"): ?>
	    <?php require_once("inc/staff/sidebar.php") ?>
	<?php endif; ?>
	<?php if(defined('PAGE_TITLE') && PAGE_TITLE === "STUDENT"): ?>
	    <?php require_once("inc/student/sidebar.php") ?>
	<?php endif; ?>
	<?php if(defined('PAGE_TITLE') && PAGE_TITLE === "FACULTY"): ?>
	    <?php require_once("inc/faculty/sidebar.php") ?>
	<?php endif; ?>
</ul>