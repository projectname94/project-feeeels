<?= ($site->site_text()->isNotEmpty()) ? $site->site_text()->kt() : '' ?>

<?php foreach($site->homepage_order()->toPages() as $issue_item): ?>
  <h3 class="issue_link <?= 'issue_primary_'.$issue_item->title()->slug() ?>">
    <a href="<?= $issue_item->url() ?>" class="">
      <?= $issue_item->title() ?>
    </a>
  </h3> 
<?php endforeach; ?>