<!-- Favicon -->
<?php if($page->favicon()->exists() && $page->favicon()->isNotEmpty()): ?>
	<meta name="msapplication-TileImage" content="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(16)->url() : '' ?>"> <!-- Windows 8 -->
	<meta name="msapplication-TileColor" content="#00000"/>
	<!--[if IE]><link rel="shortcut icon" href="images/favicons/favicon.ico"><![endif]-->
	<link rel="icon" type="image/png" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(16)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(57)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(72)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(76)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(114)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(120)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(144)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= ($page->favicon()->isNotEmpty()) ? $page->favicon()->toFile()->resize(152)->url() : '' ?>">

<?php else: ?>
	<meta name="msapplication-TileImage" content="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(16)->url() : '' ?>"> <!-- Windows 8 -->
	<meta name="msapplication-TileColor" content="#00000"/>
	<!--[if IE]><link rel="shortcut icon" href="images/favicons/favicon.ico"><![endif]-->
	<link rel="icon" type="image/png" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(16)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(57)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(72)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(76)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(114)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(120)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(144)->url() : '' ?>">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= ($site->favicon()->isNotEmpty()) ? $site->favicon()->toFile()->resize(152)->url() : '' ?>">
<?php endif; ?>