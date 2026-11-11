<?php
require __DIR__ . '/includes/init.php';

$page = [
    'slug'        => 'contact',
    'title'       => 'Contact',
    'description' => 'Contact Uttarayana Foundation: send a message, call us, or find Uttarayana Hospital and our registered office in Almora, Uttarakhand.',
    'hero'        => [
        'crumb' => 'Contact',
        'title' => 'Get in touch',
        'lead'  => 'Write to us, call us, or visit us in Almora.',
    ],
    'subnav'      => [
        'message' => 'Send a message',
        'find'    => 'Find us',
    ],
    'css'         => ['contact'],  // assets/css/pages/*.css
    'js'          => [],  // assets/js/pages/*.js
];

$mapEmbed = 'https://www.google.com/maps?q=' . rawurlencode(MAP_QUERY) . '&output=embed';
$mapOpen  = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode(MAP_QUERY);

require INC . '/header.php';
?>
<section id="message">
    <div class="w">
        <div class="cg">
            <img class="cimg" src="<?= asset(CONTACT_IMAGE) ?>" alt="Uttarayana Hospital, Papershailly, Almora" loading="lazy">
            <div>
                <h2>Send a message</h2>
                <p class="sub" style="margin-bottom:20px">Questions about our work, a visit or a partnership? Fill in the form and we will get back to you.</p>
                <form class="fm" id="f-contact" novalidate data-kind="Contact">
                    <div class="in">
                        <div><label for="c1">Name <i>*</i></label><input id="c1" name="Name" required autocomplete="given-name" placeholder="Your name"><p class="er"></p></div>
                        <div><label for="c2">Last name <i>*</i></label><input id="c2" name="Last name" required autocomplete="family-name" placeholder="Your last name"><p class="er"></p></div>
                        <div class="full"><label for="c3">Email <i>*</i></label><input id="c3" name="Email" type="email" required autocomplete="email" placeholder="Your email address"><p class="er"></p></div>
                        <div class="full"><label for="c4">Message <i>*</i></label><textarea id="c4" name="Message" required placeholder="Enter your message"></textarea><p class="er"></p></div>
                        <div class="full act"><button class="btn p" type="submit">Send message</button><p class="msg" role="status"></p></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="find" style="background:var(--pl)">
    <div class="w">
        <div class="cg">
            <div class="fi">
                <h2>Find us here</h2>
                <h3>Uttarayana Hospital</h3>
                <p><?= e(FOOTER_HOSPITAL) ?></p>
                <h3>Registered office</h3>
                <p><?= e(FOOTER_OFFICE) ?></p>
                <p class="cd"><b>Phone:</b> <a href="tel:+91<?= e(preg_replace('/\D/', '', CONTACT_PHONE)) ?>"><?= e(CONTACT_PHONE) ?></a><br><b>Email:</b> <a href="mailto:<?= e(TOPBAR_EMAIL) ?>"><?= e(TOPBAR_EMAIL) ?></a></p>
            </div>
            <div class="mp">
                <iframe src="<?= e($mapEmbed) ?>" title="Map showing Uttarayana Hospital, Almora" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                <a class="open" href="<?= e($mapOpen) ?>" target="_blank" rel="noopener">Open in Maps ↗</a>
            </div>
        </div>
    </div>
</section>

<?php require INC . '/footer.php'; ?>