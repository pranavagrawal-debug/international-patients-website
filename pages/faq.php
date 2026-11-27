<?php
page_start('FAQ', 'Common questions from international patients.');
$faq = [
    ['Can I send my reports before I travel?',
     'Yes. Send an enquiry and tell us you have reports or photos. A doctor reviews them before you decide to travel.'],
    ['How long will I need to stay in India?',
     'It depends on the treatment and on how you recover. Your doctor will give you an expected length of stay once your case is reviewed.'],
    ['Do I need a visa?',
     'Most international patients travel on a medical visa. Rules change, so please check the official Indian government visa website or your nearest Indian embassy or consulate.'],
    ['Can I be accompanied by a family member?',
     'Many patients travel with a family member or friend. Tell us in your enquiry so we can plan for it.'],
    ['What languages can I use to contact you?',
     'You can write to us in English. If you need another language, mention it in your enquiry.'],
    ['What happens after I return home?',
     'Your aftercare plan is explained before you leave, and you can contact the care team with questions after you return.'],
];
?>
<section class="page-head wrap">
  <h1>Frequently asked questions</h1>
</section>
<section class="section">
  <div class="wrap faq">
    <?php foreach ($faq as [$q, $a]): ?>
      <details>
        <summary><?= e($q) ?></summary>
        <p><?= e($a) ?></p>
      </details>
    <?php endforeach; ?>
    <div class="actions">
      <a class="button" href="/contact">Ask us something else</a>
    </div>
  </div>
</section>
<?php page_end();
