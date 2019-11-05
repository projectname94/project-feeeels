<section 
	class="content <?= $expanded ?>" 
	id="<?= 'section'.$sectioncount ?>" 
	data-section="<?= $sectioncount ?>" 
	data-slug="<?= $section->slug() ?>"
	style="background-color: <?= ($section->entry_color()->isNotEmpty()) ? $section->entry_color() : "#ffffff" ?>;">
  <h2 class="issue_heading"><?= ($section->title()->isNotEmpty()) ? $section->title() : '' ?></h2>
  <h3 class="issue_heading"><?= ($section->subtitle()->isNotEmpty()) ? $section->subtitle() : '' ?></h3>
  <div class="bubble">
    <?= $section->text()->kt() ?>
  </div>
</section>