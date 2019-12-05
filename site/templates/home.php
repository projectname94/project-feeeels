<?= snippet('header') ?> 

<!-- side nav -->
<?php if($site->current_issue()->isNotEmpty()): ?>
	<?=  snippet('components/sidenav', 
		[
			'nav_items' => $site->current_issue()->toPage()->sidenav_order()->toPages(), 
			'sticky' => '',
			'current' => '',
			'issue_title' => $site->current_issue()->toPage()->title()->slug()
		]); ?>
<?php endif; ?>

<!-- homepage contents -->
<section class="full">
	<?= ($site->site_text()->isNotEmpty()) ? $site->site_text()->kt() : '' ?>

	<?php foreach($site->homepage_order()->toPages() as $issue_item): ?>
		<h3 class="issue_link <?= 'issue_primary_'.$issue_item->title()->slug() ?>">
			<a href="<?= $issue_item->url() ?>" class="">
				<?= $issue_item->title() ?>
			</a>
		</h3>	
	<?php endforeach; ?>
</section>

<!-- credit columns -->
<?php if($site->credit_columns()->isNotEmpty()): ?>
<?= snippet('components/creditcolumns', 
	[ 
		'credit_title' => '',
		'credit_columns' => $site->credit_columns() 
	]) ?>
<?php endif; ?>
		
<!-- footer -->
	<footer>
		<section class="col_2">
			<a class="primary_button" href="https://www.instagram.com/feeeels.mag/?hl=en" target="_blank">Instagram</a>
			<a class="primary_button" href="https://www.instagram.com/feeeels.mag/?hl=en" target="_blank">Shop</a>
		</section>
		<section class="col_2">
			<form>
				<input type="text" name="email" placeholder="Email Address">
				<input type="submit" value="Subscribe" class="Subscribe">
			</form>
			<p>Follow updates for details on pre-sale and limited edition merch.</p>
	</section>
	</footer>

<?= snippet('footer') ?> 