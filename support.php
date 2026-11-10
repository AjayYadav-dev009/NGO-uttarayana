<?php
require __DIR__ . '/includes/init.php';

$page = [
    'slug'        => 'support',
    'title'       => 'Support us',
    'description' => 'Support Uttarayana Foundation: donate by UPI or bank transfer, volunteer, or partner with us as an institution or CSR team.',
    'hero'        => [
        'crumb' => 'Support us',
        'title' => 'Support our mission',
        'lead'  => 'Give hope a way forward. Support a patient’s care, a child’s education and a community’s future.',
    ],
    'subnav'      => [
        'donate' => 'Donate',
        'join' => 'Volunteer or partner',
        'transparency' => 'Transparency',
    ],
    'css'         => ['support'],  // assets/css/pages/*.css
    'js'          => ['support'],  // assets/js/pages/*.js
];

require INC . '/header.php';
?>
<section id="donate">
    <div class="w dn">
        <div>
            <h2>Choose a cause. Make a difference.</h2>
            <p class="lead">Your gift reaches patients, children and families in Uttarakhand’s villages.</p>
            <div class="causes">
                <a href="<?= url('programs', 'hospital') ?>"><b>Uttarayana Hospital</b><small>Free healthcare for rural communities</small><em>Know more →</em></a>
                <a href="<?= url('programs', 'wheels') ?>"><b>Health on Wheels</b><small>A mobile clinic for remote villages</small><em>Know more →</em></a>
                <a href="<?= url('programs', 'heart') ?>"><b>Happy Heart</b><small>Free open-heart surgery</small><em>Know more →</em></a>
                <a href="<?= url('programs', 'umang') ?>"><b>Nai-Umang</b><small>Education and independence for girls</small><em>Know more →</em></a>
            </div>

            <div class="tabs" role="tablist" aria-label="Ways to give">
                <button role="tab" id="t-upi" aria-selected="true" aria-controls="p-upi">Scan to pay (UPI)</button>
                <button role="tab" id="t-bank" aria-selected="false" aria-controls="p-bank" tabindex="-1">Bank transfer</button>
            </div>
            <div class="box" id="p-upi" role="tabpanel" aria-labelledby="t-upi">
                <div class="qrw">
                    <div>
                        <img id="qr" src="qr.png" alt="UPI QR code for Uttarayana Foundation" onerror="this.style.display='none';document.getElementById('qrph').style.display='flex'">
                        <div class="qrph" id="qrph">QR code image goes here (add qr.png beside this file)</div>
                    </div>
                    <div>
                        <div class="rw"><div><small>UPI ID</small><b>ppr.02324.15022024.00503855@cnrb</b></div><button class="cp" data-copy="ppr.02324.15022024.00503855@cnrb">Copy</button></div>
                        <p class="note">Open any UPI app, scan the code or paste the UPI ID, and confirm the name “Uttarayana Foundation”.</p>
                    </div>
                </div>
            </div>
            <div class="box" id="p-bank" role="tabpanel" aria-labelledby="t-bank" hidden>
                <div class="rw"><div><small>Account name</small><b>Uttarayana Foundation for Action Initiative &amp; Training in Healthcare and Education</b></div><button class="cp" data-copy="Uttarayana Foundation for Action Initiative & Training in Healthcare and Education">Copy</button></div>
                <div class="rw"><div><small>Account number</small><b>2324101009059</b></div><button class="cp" data-copy="2324101009059">Copy</button></div>
                <div class="rw"><div><small>IFSC</small><b>CNRB0002324</b></div><button class="cp" data-copy="CNRB0002324">Copy</button></div>
                <div class="rw"><div><small>Bank and branch</small><b>Canara Bank, Almora</b></div></div>
            </div>
            <p class="note">Uttarayana Foundation is 80G and 12A approved. See <a href="#transparency" style="color:var(--p);font-weight:600;text-decoration:underline">registration details</a>.</p>
            <p class="sr" id="cpmsg" role="status"></p>
        </div>

        <figure class="ph2">
            <img src="<?= asset('img/support/support-01-d73b29.jpg') ?>" alt="Dr. O. P. Yadava with Uttarakhand beneficiaries of the Happy Heart initiative">
            <figcaption><b>Dr. O. P. Yadava with Uttarakhand beneficiaries of the Happy Heart Initiative</b>, providing free open-heart surgery and helping underserved families overcome financial barriers to cardiac care.</figcaption>
        </figure>
    </div>
</section>

<div class="csr">
    <div class="w">
        <div>
            <h3>CSR partnership invited</h3>
            <p>Support rural healthcare, mobile clinics, telemedicine and school health education.</p>
        </div>
        <a class="btn p" href="#join" id="tocsr">Partner with us</a>
    </div>
</div>

<section class="jn" id="join">
    <div class="w">
        <h2>Volunteer or partner</h2>
        <p class="sub intro">Tell us how you would like to help. We will reply by email.</p>
        <div class="tabs" role="tablist" aria-label="Get involved">
            <button role="tab" id="t-vol" aria-selected="true" aria-controls="f-vol">Volunteer</button>
            <button role="tab" id="t-par" aria-selected="false" aria-controls="f-par" tabindex="-1">Partner</button>
        </div>

        <form class="fm" id="f-vol" role="tabpanel" aria-labelledby="t-vol" novalidate data-kind="Volunteer">
            <p class="sub" style="margin:0 0 18px">Medical, teaching and other professional volunteers are welcome to apply below.</p>
            <div class="in">
                <div><label for="v1">Your name <i>*</i></label><input id="v1" name="Name" required autocomplete="name"><p class="er"></p></div>
                <div><label for="v2">Email address <i>*</i></label><input id="v2" name="Email" type="email" required autocomplete="email"><p class="er"></p></div>
                <div><label for="v3">Area of expertise</label><input id="v3" name="Area of expertise" placeholder="For example: paediatrics, teaching, nursing"></div>
                <div><label for="v4">Availability</label>
                    <select id="v4" name="Availability"><option value="">Select</option><option>One-time visit</option><option>A few days a month</option><option>Remote</option><option>Open to discuss</option></select></div>
                <div class="full"><label for="v5">Tell us how you’d like to help</label><textarea id="v5" name="How I'd like to help"></textarea></div>
                <div class="full act"><button class="btn p" type="submit">Send</button><p class="msg" role="status"></p></div>
            </div>
        </form>

        <form class="fm" id="f-par" role="tabpanel" aria-labelledby="t-par" novalidate hidden data-kind="Partnership">
            <p class="sub" style="margin:0 0 18px">For institutions, hospitals and CSR teams looking to fund a specific programme.</p>
            <div class="in">
                <div><label for="p1">Organisation name <i>*</i></label><input id="p1" name="Organisation" required autocomplete="organization"><p class="er"></p></div>
                <div><label for="p2">Contact person <i>*</i></label><input id="p2" name="Contact person" required autocomplete="name"><p class="er"></p></div>
                <div><label for="p3">Email address <i>*</i></label><input id="p3" name="Email" type="email" required autocomplete="email"><p class="er"></p></div>
                <div><label for="p4">Phone</label><input id="p4" name="Phone" type="tel" autocomplete="tel"></div>
                <div><label for="p5">Programme of interest</label>
                    <select id="p5" name="Programme of interest"><option value="">Select</option><option>Uttarayana Hospital</option><option>Health on Wheels</option><option>Happy Heart</option><option>Nai-Umang</option><option>Not sure yet</option></select></div>
                <div><label for="p6">Timeline</label>
                    <select id="p6" name="Timeline"><option value="">Select</option><option>One-time</option><option>Ongoing</option><option>Open to discuss</option></select></div>
                <div class="full"><label for="p7">Tell us about your organisation and how you’d like to partner</label><textarea id="p7" name="About the organisation"></textarea></div>
                <div class="full act"><button class="btn p" type="submit">Send</button><p class="msg" role="status"></p></div>
            </div>
        </form>
    </div>
</section>

<section id="transparency">
    <div class="w">
        <h2>Transparency</h2>
        <p class="sub">Registered under the Societies Registration Act, 1860.</p>
        <div class="rw" style="border-top:1px solid var(--ln);padding-top:12px;margin-bottom:12px"><div><small>Legal name</small><b>Uttarayana Foundation For Action Initiative &amp; Training in Healthcare and Education</b></div></div>
        <div class="tx">
            <div class="rw"><div><small>Society registration no.</small><b>UK06408072019001690</b></div><button class="cp" data-copy="UK06408072019001690">Copy</button></div>
            <div class="rw"><div><small>DARPAN ID</small><b>UK/2025/0857139</b></div><button class="cp" data-copy="UK/2025/0857139">Copy</button></div>
            <div class="rw"><div><small>80G</small><b>AAATU5730HF20215</b></div><button class="cp" data-copy="AAATU5730HF20215">Copy</button></div>
            <div class="rw"><div><small>12A</small><b>AAATU5730HE20142</b></div><button class="cp" data-copy="AAATU5730HE20142">Copy</button></div>
        </div>
        <div class="ct">
            <div><b>Registered office</b>Village Maat, Kasardevi, Post: Dinapani, Almora, Uttarakhand 263601<br>Phone: 98106 01252</div>
            <div><b>Uttarayana Hospital</b>Village Bhalura, Post: NTD, Papershailly (Kasardevi Road), Almora, Uttarakhand 263601</div>
            <div><b>Contact</b>Mobile Health Services: 9410159952<br>uttarayana.faith@gmail.com</div>
        </div>
    </div>
</section>



<?php require INC . '/footer.php'; ?>
