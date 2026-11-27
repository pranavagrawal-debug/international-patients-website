</main>
<footer class="site-footer">
  <div class="wrap cols">
    <div>
      <strong><?= e(site('name')) ?></strong>
      <p><?= e(site('city')) ?></p>
      <?php if (site('address') !== ''): ?><p><?= nl2br(e(site('address'))) ?></p><?php endif; ?>
    </div>
    <div>
      <strong>Contact</strong>
      <?php if (phone_link() !== ''): ?><p><a href="<?= e(phone_link()) ?>"><?= e(site('phone')) ?></a></p><?php endif; ?>
      <?php if (site('email') !== ''): ?><p><a href="mailto:<?= e(site('email')) ?>"><?= e(site('email')) ?></a></p><?php endif; ?>
      <?php if (site('hours') !== ''): ?><p><?= e(site('hours')) ?></p><?php endif; ?>
      <p><a href="/contact">Send an enquiry</a></p>
    </div>
    <div>
      <strong>Explore</strong>
      <p><a href="/treatments">Treatments</a></p>
      <p><a href="/plan-your-visit">Plan your visit</a></p>
      <p><a href="/faq">FAQ</a></p>
    </div>
  </div>
  <div class="wrap fine">
    <p>The information on this website is general and does not replace a consultation with a doctor.</p>
    <p>&copy; <?= date('Y') ?> <?= e(site('name')) ?></p>
  </div>
</footer>
</body>
</html>
