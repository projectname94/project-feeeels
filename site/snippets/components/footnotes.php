<ul class="entry_footnotes">
	<?php foreach($footnotes->toStructure() as $footnote): ?>
		<li class="footnote" id="footnote_<?= $footnote->title() ?>">
			<sup><?= $footnote->character() ?></sup>
			<?= $footnote->footnote()->kt() ?>
		</li>
	<?php endforeach; ?>	
</ul>