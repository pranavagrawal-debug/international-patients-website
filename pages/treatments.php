<?php
page_start('Treatments', 'Treatments available for international patients.');
?>
<section class="page-head wrap">
  <h1>Treatments</h1>
  <p>Choose a treatment to read more, or send an enquiry if you are not sure which one is right for you.</p>
</section>
<section class="section">
  <div class="wrap grid">
    <?php foreach (site('treatments', []) as $t): ?>
      <div class="card">
        <h3><?= e($t['name']) ?></h3>
        <p><?= e($t['short']) ?></p>
        <a class="more" href="/treatments/<?= e($t['slug']) ?>">Learn more</a>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<?php page_end();
