<nav id="main_index" class="<?= $sticky ?>">
  <?php $item_index = 1; ?>
  <?php foreach($nav_items as $nav_item): ?>
    <a href="<?= $nav_item->url() ?>" class="nav_item <?= ($nav_item->slug() == $current) ? 'current' : '' ?> <?= 'nav_item'.$item_index ?>" style="background-color: <?= ($nav_item->entry_color()->isNotEmpty()) ? $nav_item->entry_color() : "#ffffff" ?>" data-target="section1">
      <span><?= $nav_item->title() ?></span>
    </a>
    <?php $item_index++; ?>
  <?php endforeach; ?>
</nav>