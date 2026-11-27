# International patients website

PHP website for international patients, hosted on Vercel with the community
[`vercel-php`](https://github.com/vercel-community/php) runtime (PHP 8.3).

## Structure

| Path | Purpose |
|---|---|
| `config.php` | Site name, contact details, treatments, country list. Edit this first. |
| `pages/` | One file per page (`home`, `treatments`, `treatment`, `doctors`, `plan-your-visit`, `faq`, `contact`, `404`). |
| `includes/` | Shared header, footer and helper functions. |
| `api/index.php` | Router. Every URL goes through this file (see `vercel.json`). |
| `public/assets/` | CSS and images, served as static files. |
| `router.php` | Local development helper. |

## Run it locally

```
php -S localhost:8000 router.php
```

Then open http://localhost:8000.

## Deploy on Vercel

1. Import this repository in Vercel. No build command and no framework preset are needed.
2. Add the environment variable below, then redeploy.

| Variable | What it does |
|---|---|
| `LEAD_WEBHOOK_URL` | Address that receives each enquiry as JSON (a Google Sheets, Zapier, Make or CRM webhook). Until it is set, the enquiry form tells visitors it could not send and nothing is lost silently. |

The enquiry JSON contains: `submitted_at`, `name`, `email`, `phone`, `country`, `treatment`, `message`, `source`.

## Things to know about PHP on Vercel

- Each request runs as a short-lived serverless function. Nothing written to disk is kept.
- There are no long-lived PHP sessions, and `mail()` does not work. Use the webhook, or an email API.
- Put images and other static files in `public/`, not next to the PHP files.

## Content status

The text on every page is a draft for your doctors and care team to review. Doctor profiles, phone,
WhatsApp, email and address are empty until you provide them in `config.php` and the `pages/` files.
