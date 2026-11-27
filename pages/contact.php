<?php
$treatments = array_column(site('treatments', []), 'name', 'slug');
$countries  = site('countries', []);

$values = [
    'name' => '', 'email' => '', 'phone' => '', 'country' => '',
    'treatment' => (string) ($_GET['treatment'] ?? ''), 'message' => '', 'consent' => '',
];
$errors = [];
$sent   = false;
$failed = false;

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    foreach (array_keys($values) as $key) {
        $values[$key] = trim((string) ($_POST[$key] ?? ''));
    }

    // Hidden field that real visitors never fill in. Pretend success to bots.
    if (trim((string) ($_POST['website'] ?? '')) !== '') {
        $sent = true;
    } else {
        if ($values['name'] === '' || mb_strlen($values['name']) > 120) {
            $errors['name'] = 'Please enter your name.';
        }
        if (!filter_var($values['email'], FILTER_VALIDATE_EMAIL) || mb_strlen($values['email']) > 160) {
            $errors['email'] = 'Please enter a valid email address.';
        }
        if (mb_strlen($values['phone']) > 40) {
            $errors['phone'] = 'That phone number is too long.';
        }
        if ($values['country'] === '' || !in_array($values['country'], $countries, true)) {
            $errors['country'] = 'Please choose your country.';
        }
        if ($values['treatment'] !== '' && $values['treatment'] !== 'not-sure' && !isset($treatments[$values['treatment']])) {
            $errors['treatment'] = 'Please choose a treatment from the list.';
        }
        if ($values['message'] === '' || mb_strlen($values['message']) > 3000) {
            $errors['message'] = 'Please tell us a little about what you need (up to 3000 characters).';
        }
        if ($values['consent'] !== 'yes') {
            $errors['consent'] = 'Please confirm that we may contact you about your enquiry.';
        }

        if (!$errors) {
            $lead = [
                'submitted_at' => gmdate('c'),
                'name'         => $values['name'],
                'email'        => $values['email'],
                'phone'        => $values['phone'],
                'country'      => $values['country'],
                'treatment'    => $treatments[$values['treatment']] ?? 'Not sure',
                'message'      => $values['message'],
                'source'       => 'international-patients-website',
            ];
            if (send_enquiry($lead)) {
                $sent = true;
            } else {
                $failed = true;
            }
        }
    }
}

page_start('Contact', 'Send an enquiry to our international patient team.');
?>
<section class="page-head wrap">
  <h1>Send an enquiry</h1>
  <p>Tell us what you need and our care team will reply. Please do not include passport or payment details.</p>
</section>
<section class="section">
  <div class="wrap">
    <?php if ($sent): ?>
      <div class="alert ok"><strong>Thank you.</strong> We have received your enquiry and will reply by email.</div>
    <?php else: ?>
      <?php if ($failed): ?>
        <div class="alert err"><strong>Sorry, we could not send your enquiry just now.</strong>
          Please try again in a few minutes<?= whatsapp_link() !== '' ? ' or message us on WhatsApp' : '' ?><?= site('email') !== '' ? ' or email ' . e(site('email')) : '' ?>.</div>
      <?php elseif ($errors): ?>
        <div class="alert err">Please check the highlighted details below.</div>
      <?php endif; ?>

      <form class="enquiry" method="post" action="/contact" novalidate>
        <div class="hp" aria-hidden="true">
          <label>Leave this empty <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
        </div>

        <label>Your name
          <input type="text" name="name" value="<?= e($values['name']) ?>" required maxlength="120" autocomplete="name">
          <?php if (isset($errors['name'])): ?><small><?= e($errors['name']) ?></small><?php endif; ?>
        </label>

        <div class="two">
          <label>Email
            <input type="email" name="email" value="<?= e($values['email']) ?>" required maxlength="160" autocomplete="email">
            <?php if (isset($errors['email'])): ?><small><?= e($errors['email']) ?></small><?php endif; ?>
          </label>
          <label>Phone or WhatsApp (with country code)
            <input type="tel" name="phone" value="<?= e($values['phone']) ?>" maxlength="40" autocomplete="tel">
            <?php if (isset($errors['phone'])): ?><small><?= e($errors['phone']) ?></small><?php endif; ?>
          </label>
        </div>

        <div class="two">
          <label>Country
            <select name="country" required>
              <option value="">Choose your country</option>
              <?php foreach ($countries as $c): ?>
                <option<?= $values['country'] === $c ? ' selected' : '' ?>><?= e($c) ?></option>
              <?php endforeach; ?>
            </select>
            <?php if (isset($errors['country'])): ?><small><?= e($errors['country']) ?></small><?php endif; ?>
          </label>
          <label>Treatment
            <select name="treatment">
              <option value="">Choose a treatment</option>
              <?php foreach ($treatments as $slug => $name): ?>
                <option value="<?= e($slug) ?>"<?= $values['treatment'] === $slug ? ' selected' : '' ?>><?= e($name) ?></option>
              <?php endforeach; ?>
              <option value="not-sure"<?= $values['treatment'] === 'not-sure' ? ' selected' : '' ?>>I am not sure yet</option>
            </select>
            <?php if (isset($errors['treatment'])): ?><small><?= e($errors['treatment']) ?></small><?php endif; ?>
          </label>
        </div>

        <label>How can we help?
          <textarea name="message" required maxlength="3000"><?= e($values['message']) ?></textarea>
          <?php if (isset($errors['message'])): ?><small><?= e($errors['message']) ?></small><?php endif; ?>
        </label>

        <label style="font-weight:400;display:flex;gap:10px;align-items:flex-start">
          <input type="checkbox" name="consent" value="yes" style="width:auto;margin-top:5px"<?= $values['consent'] === 'yes' ? ' checked' : '' ?>>
          <span>I agree that you may contact me about my enquiry using the details above.</span>
        </label>
        <?php if (isset($errors['consent'])): ?><small><?= e($errors['consent']) ?></small><?php endif; ?>

        <div><button class="button" type="submit">Send enquiry</button></div>
      </form>
    <?php endif; ?>

    <?php if (site('address') !== '' || site('hours') !== '' || phone_link() !== '' || whatsapp_link() !== ''): ?>
      <div class="note" style="margin-top:28px;max-width:640px">
        <?php if (phone_link() !== ''): ?>Call: <a href="<?= e(phone_link()) ?>"><?= e(site('phone')) ?></a><br><?php endif; ?>
        <?php if (whatsapp_link() !== ''): ?>WhatsApp: <a href="<?= e(whatsapp_link()) ?>" rel="noopener">start a chat</a><br><?php endif; ?>
        <?php if (site('hours') !== ''): ?><?= e(site('hours')) ?><br><?php endif; ?>
        <?php if (site('address') !== ''): ?><?= nl2br(e(site('address'))) ?><?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php page_end();
