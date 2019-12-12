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
	<?= snippet('components/homepage_text') ?>
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
			<?php if($site->footer_links()->isNotEmpty()): ?>
				<?php foreach($site->footer_links()->toStructure() as $footer_link): ?>
					<a class="primary_button" href="<?= $footer_link->link_url() ?>" target="_blank"><?= $footer_link->link_name() ?></a>
				<?php endforeach; ?>
			<?php endif; ?>
		</section>
		<section class="col_2">

			<!-- Begin Mailchimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="https://feeeels.us20.list-manage.com/subscribe/post?u=1c9497c9e1d72f45053d96b85&amp;id=e6d4577fca" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<input type="email" value="" placeholder="Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group">
							<input type="text" value="" placeholder="First Name" name="FNAME" class="" id="mce-FNAME">
						</div>
					<div class="mc-field-group">
						<input type="text" value="" placeholder="Last Name" name="LNAME" class="" id="mce-LNAME">
					</div>
					<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1c9497c9e1d72f45053d96b85_e6d4577fca" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" class="Subscribe" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->
			<p>Follow updates for details on pre-sale and limited edition merch.</p>
	</section>
	</footer>

<?= snippet('footer') ?> 