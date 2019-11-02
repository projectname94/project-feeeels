	<meta name="description" content="<?= $site->seo_description() ?>" />
	<meta name="keywords" content="<?= $site->seo_tags() ?>">

  <!-- Schema.org markup for Google+ -->
	<?php if($page->template() == 'archive'): ?>
		<meta itemprop="name" content="<?= $site->title() ?> Archive" >
	<?php elseif($page->template() == 'home'): ?>
		<meta itemprop="name" content="<?= $site->title() ?>" >
	<?php elseif($page->template() == 'profile'): ?>
		<meta itemprop="name" content="<?= $site->title() ?> <?= $page->interviewee_serial() ?>" >
	<?php else: ?>
		<meta itemprop="name" content="<?= $site->title() ?> <?= $page->title() ?>" >
	<?php endif; ?>

	<?php if($page->home_text()->isNotEmpty()): ?>
		<meta itemprop="description" content="<?= $page->home_text()->text() ?>">
	<?php else: ?>
		<meta itemprop="description" content="<?= $site->seo_description() ?>">
	<?php endif; ?>

	<?php if($page->seo_image()->isNotEmpty()): ?>
		<meta itemprop="image" content="<?= $page->seo_image()->toFile()->url() ?>">
	<?php elseif($site->seo_image()->isNotEmpty()): ?>
		<meta itemprop="image" content="<?= $site->seo_image()->toFile()->url() ?>">
	<?php endif; ?>

	
	<!-- Twitter Card data -->
	<!-- https://developer.twitter.com/en/docs/tweets/optimize-with-cards/overview/summary -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="<?= $page->url() ?>">
	
	<?php if($page->template() == 'archive'): ?>
		<meta name="twitter:title" content="<?= $site->title() ?> Archive" >
	<?php elseif($page->template() == 'home'): ?>
		<meta name="twitter:title" content="<?= $site->title() ?>" >
	<?php elseif($page->template() == 'profile'): ?>
		<meta name="twitter:title" content="<?= $site->title() ?> <?= $page->interviewee_serial() ?>" >
	<?php else: ?>
		<meta name="twitter:title" content="<?= $site->title() ?> <?= $page->title() ?>" >
	<?php endif; ?>

	<?php if($page->home_text()->isNotEmpty()): ?>
		<meta name="twitter:description" content="<?= $page->home_text()->text() ?>">
	<?php else: ?>
		<meta name="twitter:description" content="<?= $site->seo_description() ?>">
	<?php endif; ?>

	<!-- Twitter summary card with large image must be at least 280x150px -->
	<?php if($page->seo_image()->isNotEmpty()): ?>
		<meta name="twitter:image:src" content="<?= $page->seo_image()->toFile()->url() ?>">
	<?php elseif($site->seo_image()->isNotEmpty()): ?>
		<meta name="twitter:image:src" content="<?= $site->seo_image()->toFile()->url() ?>">
	<?php endif; ?>

<!-- Open Graph data -->

	<?php if($page->template() == 'archive'): ?>
		<meta property="og:title" content="<?= $site->title() ?> Archive" >
	<?php elseif($page->template() == 'home'): ?>
		<meta property="og:title" content="<?= $site->title() ?>" >
	<?php elseif($page->template() == 'profile'): ?>
		<meta property="og:title" content="<?= $site->title() ?> <?= $page->interviewee_serial() ?>" >
	<?php else: ?>
		<meta property="og:title" content="<?= $site->title() ?> <?= $page->title() ?>" >
	<?php endif; ?>

	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= $page->url() ?>" />
	<!-- 1200 x 630 For optimal sharing -->
	<?php if($page->seo_image()->isNotEmpty()): ?>
		<meta property="og:image" content="<?= $page->seo_image()->toFile()->url() ?>">
	<?php elseif($site->seo_image()->isNotEmpty()): ?>
		<meta property="og:image" content="<?= $site->seo_image()->toFile()->url() ?>">
	<?php endif; ?>

	<?php if($page->home_text()->isNotEmpty()): ?>
		<meta property="og:description" content="<?= $page->home_text()->text() ?>">
	<?php else: ?>
		<meta property="og:description" content="<?= $site->seo_description() ?>">
	<?php endif; ?>

	<meta property="og:site_name" content="<?= $site->title() ?>" />
