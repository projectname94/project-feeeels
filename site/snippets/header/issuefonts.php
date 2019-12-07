<?php $issues = $site->index()->filterBy('template', 'issue') ?>
<?php foreach($issues as $issue): ?>

	<?php $titleSlug = $issue->title()->slug(); ?>

	<?php if($issue->primaryfonttitle()->isNotEmpty() && $issue->primaryfontfile()->isNotEmpty()): ?>
			<style type="text/css">
				@font-face {
					font-family: '<?= $issue->primaryfonttitle() ?>';
					src: url('<?= $issue->primaryfontfile()->first()->toFile()->url() ?>');
					font-weight: normal;
					font-style: normal;
				}

				<?= '.issue_primary_'.$titleSlug.'{ font-family: '.$issue->primaryfonttitle().'; }' ?>

				<?= '.issue_class_'.$titleSlug ?> h1, 
				<?= '.issue_class_'.$titleSlug ?> h2, 
				<?= '.issue_class_'.$titleSlug ?> h3, 
				<?= '.issue_class_'.$titleSlug ?> h4, 
				<?= '.issue_class_'.$titleSlug ?> h5, 
				<?= '.issue_class_'.$titleSlug ?> h6,
				.nav_item span<?= '.issue_primary_'.$titleSlug ?>{
					font-family: <?= $issue->primaryfonttitle() ?>;
				}

			</style>
	<?php endif; ?>


	<?php if($issue->bodyfonttitle()->isNotEmpty() && $issue->bodyfontfile()->isNotEmpty()): ?>
			<style type="text/css">
				@font-face {
					font-family: '<?= $issue->bodyfonttitle() ?>';
					src: url('<?= $issue->bodyfontfile()->first()->toFile()->url() ?>');
					font-weight: normal;
					font-style: normal;
				}

				<?= '.issue_body_'.$titleSlug.'{ font-family: '.$issue->bodyfonttitle().'; }' ?>

				<?= '.issue_class_'.$titleSlug ?> p,
				<?= '.issue_class_'.$titleSlug ?> button,
				<?= '.issue_class_'.$titleSlug ?> figcaption,
				<?= '.issue_class_'.$titleSlug ?> .colophon_content *{
					font-family: <?= $issue->bodyfonttitle() ?>;
				}

			</style>
	<?php endif; ?>
<?php endforeach; ?>