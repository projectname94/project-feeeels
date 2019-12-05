<section id="colophon" class="<?= $issueclass ?>">
	<?php if($credit_title != ''): ?>
		<?= '<h1>'.$credit_title.'</h1>' ?>
	<?php endif; ?>

  <?php foreach($credit_columns->toStructure() as $credit_column): ?>
    <div class="colophon_section">
      <h2 class="colophon_heading"><?= $credit_column->column_title()  ?></h2>
      <section class="colophon_content <?= $issueclass ?>">
        <?= $credit_column->column_contents()->kt() ?>
      </section>
    </div>
  <?php endforeach; ?>  
</section>