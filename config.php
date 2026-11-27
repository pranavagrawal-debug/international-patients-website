<?php
declare(strict_types=1);

/**
 * Site settings. Edit this file to change names, contact details and the
 * list of treatments. Anything left empty ('') is simply not shown.
 */
return [
    'name'     => 'TRUE Artis',
    'tagline'  => 'Care for international patients',
    'city'     => 'New Delhi, India',

    // Contact details shown in the header, footer and contact page.
    'phone'    => '',          // e.g. '+91 98xxxxxxxx'
    'whatsapp' => '',          // digits only with country code, e.g. '9198xxxxxxxx'
    'email'    => '',          // e.g. 'international@example.com'
    'address'  => '',          // street address shown on the contact page
    'hours'    => '',          // e.g. 'Mon to Sat, 9 am to 7 pm IST'

    // Where each treatment card links. Short, factual, reviewed by your doctors.
    'treatments' => [
        [
            'slug'  => 'rhinoplasty',
            'name'  => 'Rhinoplasty',
            'short' => 'Reshaping of the nose for appearance and, where needed, breathing.',
        ],
        [
            'slug'  => 'liposuction',
            'name'  => 'Liposuction',
            'short' => 'Removal of stubborn localised fat to improve body contour.',
        ],
        [
            'slug'  => 'gynecomastia',
            'name'  => 'Gynecomastia surgery',
            'short' => 'Correction of enlarged male breast tissue.',
        ],
        [
            'slug'  => 'lipoma-removal',
            'name'  => 'Lipoma removal',
            'short' => 'Removal of benign fatty lumps under the skin.',
        ],
    ],

    // Options in the "Country" dropdown of the enquiry form.
    'countries' => [
        'Afghanistan', 'Bangladesh', 'Bhutan', 'Canada', 'Ethiopia', 'Iraq', 'Kenya',
        'Maldives', 'Myanmar', 'Nepal', 'Nigeria', 'Oman', 'Sri Lanka', 'Tanzania',
        'Uganda', 'United Arab Emirates', 'United Kingdom', 'United States', 'Other',
    ],
];
