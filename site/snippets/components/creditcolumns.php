<?php if (isset($issueclass)): ?>
  <?php $issue_class = $issueclass ?>
<?php else: ?>
  <?php $issue_class = '' ?>
<?php endif ?>
<section id="colophon" class="<?= $issue_class ?>">
	<?php if($credit_title != ''): ?>
		<?= '<h1>'.$credit_title.'</h1>' ?>
	<?php endif; ?>

  <?php foreach($credit_columns->toStructure() as $credit_column): ?>
    <div class="colophon_section">
      <h2 class="colophon_heading"><?= $credit_column->column_title()  ?></h2>
      <section class="colophon_content <?= $issue_class ?>">
        <?= $credit_column->column_contents()->kt() ?>
      </section>
    </div>
  <?php endforeach; ?>  
</section>