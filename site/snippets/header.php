<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $site->title().' '.$page->title() ?></title>
	<?= snippet('header/favicon') ?>
	<?= snippet('header/metatags') ?>

	<?= css(['assets/css/styles.css', 'assets/css/issue.css']) ?>
	<?= js(['assets/script/main.js']) ?>

	<?php 
		$children_amount = ($site->current_issue()->isNotEmpty()) ? count($site->current_issue()->toPage()->sidenav_order()->toPages()) : 1; 
		$proportion = 'calc(100vh/'.$children_amount.')';
	?>

	<style type="text/css">		
		/***** OVERRIDING STYLES *****/
		.nav_item{ height: <?= $proportion ?>; }
		.nav_item span{ line-height: <?= $proportion ?>; }
		.content{ max-height: <?= $proportion ?>; }

	</style>
	<?= snippet('header/issuefonts') ?>
</head>
<body <?= ($page->template() == 'issue') ? 'class="issue"' : '' ?> >



