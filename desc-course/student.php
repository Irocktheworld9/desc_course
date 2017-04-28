<?php define('PAGE_TITLE', 'STUDENT') ?>
<?php require_once("inc/template/header.php") ?>


<?php require_once("inc/template/sidebar.php") ?>

<section class="main-content">
	<?php 
		$pages = array(
			'subject','marks','profile','semester'
		);

		$page = "";

		if(isset($_GET['page']) && !empty($_GET['page'])) {
			$page = $_GET['page'];
		}

		if($page != "" && in_array($page, $pages)) {
			require_once("inc/student/".$page.".php");
		} else {
			require_once("inc/student/profile.php");
		}
	?>
</section>

<?php require_once("inc/template/footer.php") ?>