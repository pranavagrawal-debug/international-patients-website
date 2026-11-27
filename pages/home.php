<?php
page_start('', 'Treatment in India for international patients. Send an enquiry and our care team will guide you from your first message to your journey home.');
?>
<section class="hero">
  <div class="wrap">
    <h1>Treatment in India,<br>guided every step of the way</h1>
    <p class="lead">For patients travelling from abroad. Tell us what you need, share your reports, and our care team will explain your options and what to expect before you decide.</p>
    <div class="actions">
      <a class="button" href="/contact">Send an enquiry</a>
      <a class="button ghost" href="/plan-your-visit">Plan your visit</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Treatments</h2>
    <div class="grid">
      <?php foreach (site('treatments', []) as $t): ?>
        <div class="card">
          <h3><?= e($t['name']) ?></h3>
          <p><?= e($t['short']) ?></p>
          <a class="more" href="/treatments/<?= e($t['slug']) ?>">Learn more</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section soft">
  <div class="wrap">
    <h2>How it works</h2>
    <ol class="steps">
      <li><div><strong>Send an enquiry.</strong> Tell us the treatment you are considering and your country.</div></li>
      <li><div><strong>Share your details.</strong> Send recent reports or photos so a doctor can review your case.</div></li>
      <li><div><strong>Get a plan.</strong> We reply with the recommended approach, the expected stay and next steps.</div></li>
      <li><div><strong>Plan your travel.</strong> We explain what you need to arrange before you come.</div></li>
      <li><div><strong>Treatment and follow-up.</strong> Your care continues after the procedure, including after you return home.</div></li>
    </ol>
  </div>
</section>

<section class="section">
  <div class="wrap">
    <h2>Have a question?</h2>
    <p>Write to us in your own words. There is no obligation.</p>
    <div class="actions">
      <a class="button" href="/contact">Send an enquiry</a>
      <?php if (whatsapp_link() !== ''): ?><a class="button ghost" href="<?= e(whatsapp_link('Hello, I would like to know more about treatment.')) ?>" rel="noopener">WhatsApp us</a><?php endif; ?>
    </div>
  </div>
</section>
<?php page_end();
