<?php
declare(strict_types=1);

$GLOBALS['site'] = require __DIR__ . '/../config.php';

/** Site setting, e.g. site('name'). */
function site(string $key, mixed $default = ''): mixed
{
    return $GLOBALS['site'][$key] ?? $default;
}

/** Escape text for safe output in HTML. */
function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Link that opens a WhatsApp chat, or '' if no number is set. */
function whatsapp_link(string $text = ''): string
{
    $number = preg_replace('/\D+/', '', (string) site('whatsapp'));
    if ($number === '') {
        return '';
    }
    return 'https://wa.me/' . $number . ($text !== '' ? '?text=' . rawurlencode($text) : '');
}

/** Phone link ('tel:...') or '' if no number is set. */
function phone_link(): string
{
    $number = preg_replace('/[^\d+]/', '', (string) site('phone'));
    return $number === '' ? '' : 'tel:' . $number;
}

/**
 * Send an enquiry to the place configured in the LEAD_WEBHOOK_URL environment
 * variable (a Google Sheets/Zapier/Make/CRM webhook, for example).
 * Returns false when nothing is configured or the call fails, so the visitor
 * is never told an enquiry was sent when it was not.
 */
function send_enquiry(array $lead): bool
{
    $url = getenv('LEAD_WEBHOOK_URL');
    if ($url === false || $url === '') {
        error_log('Enquiry not delivered: LEAD_WEBHOOK_URL is not set.');
        return false;
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS     => json_encode($lead, JSON_UNESCAPED_UNICODE),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,
    ]);
    curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status < 200 || $status >= 300) {
        error_log('Enquiry webhook failed with HTTP ' . $status);
        return false;
    }
    return true;
}

/** Page start: sets the title and prints the header. */
function page_start(string $title, string $description = ''): void
{
    $siteName = site('name');
    $fullTitle = $title === '' ? $siteName . ' | ' . site('tagline') : $title . ' | ' . $siteName;
    $GLOBALS['page'] = ['title' => $fullTitle, 'description' => $description];
    require __DIR__ . '/header.php';
}

/** Page end: prints the footer. */
function page_end(): void
{
    require __DIR__ . '/footer.php';
}
