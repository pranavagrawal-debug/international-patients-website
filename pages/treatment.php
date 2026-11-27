<?php
$slug = basename((string) ($GLOBALS['route'] ?? ''));
$treatment = null;
foreach (site('treatments', []) as $t) {
    if ($t['slug'] === $slug) {
        $treatment = $t;
        break;
    }
}
if ($treatment === null) {
    http_response_code(404);
    require __DIR__ . '/404.php';
    return;
}
page_start($treatment['name'], $treatment['short']);
?>
<section class="page-head wrap">
  <p><a href="/treatments">&larr; All treatments</a></p>
  <h1><?= e($treatment['name']) ?></h1>
  <p><?= e($treatment['short']) ?></p>
</section>
<section class="section">
  <div class="wrap">
    <h2>Before you decide</h2>
    <p>Every patient is different. A doctor will review your reports or photos and explain whether this treatment suits you, how it is done, how long you would need to stay, and what recovery involves.</p>
    <div class="actions">
      <a class="button" href="/contact?treatment=<?= e(rawurlencode($treatment['slug'])) ?>">Ask about <?= e($treatment['name']) ?></a>
      <a class="button ghost" href="/plan-your-visit">Plan your visit</a>
    </div>
  </div>
</section>
<?php page_end();
