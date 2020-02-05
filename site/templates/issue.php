<?= snippet('header') ?>
	<a href="<?= $site->url() ?>" class="<?= $issue->homephoto()->isNotEmpty() ? 'with_image' : 'without_image' ?>" id="home_link">
		<span class="<?= 'issue_primary_'.$issue->title()->slug() ?>" id="home_link_text">Home</span>
		<?php if($issue->homephoto()->isNotEmpty()): ?>
			<span id="home_image" style="background-image: url(<?= $issue->homephoto()->toFile()->resize(1400)->url() ?>)"></span>
		<?php endif ?>
	</a>
	<main id="issue_content_wrapper">	
    <?php if($issue->sidenav_order()->isNotEmpty()): ?>				
			<?=  snippet('components/sidenav', 
				[
					'nav_items' => $issue->sidenav_order()->toPages(), 
					'sticky' => 'sticky',
					'current' => $active_entry,
					'issue' => $issue,
					'issue_title' => $issue->title()->slug()
				]); ?>
			
			<?php 
				$counter = 1; 
				foreach($issue->sidenav_order()->toPages() as $entry):
					$expanded = ($active_entry == $entry->slug()) ? 'expanded' : ''; 
			?>
				<?= snippet('components/sectionentry', 
					[
						'section' => $entry,
						'sectioncount' => $counter,
						'expanded' => $expanded,
						'issueclass' => 'issue_class_'.$issue->title()->slug(),
						'issuetitle' => 'issue_primary_'.$issue->title()->slug(),
						'issuebody' => 'issue_body_'.$issue->title()->slug()
					]) ?>

				<?php 
					$counter++;
				endforeach;
			endif; ?>
  </main>
  <!-- credit columns -->
<?php if($issue->credit_columns()->isNotEmpty()): ?>
	<?= snippet('components/creditcolumns', 
		[ 
			'credit_title' => 'Colophon',
			'credit_columns' => $issue->credit_columns(),
			'issueclass' => 'issue_class_'.$issue->title()->slug()
		]) ?>
<?php endif; ?>

<?= snippet('footer') ?>