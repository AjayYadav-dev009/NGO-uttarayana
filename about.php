<?php
require __DIR__ . '/includes/init.php';

$page = [
    'slug'        => 'about',
    'title'       => 'About us',
    'description' => 'The story of Uttarayana Foundation: free healthcare and education for Uttarakhand\'s villages since 1999, and the people who lead the work.',
    'hero'        => [
        'crumb' => 'About us',
        'title' => 'Our story',
        'lead'  => 'A journey of care, rooted in the Himalayas.',
    ],
    'subnav'      => [
        'story' => 'Our story',
        'journey' => 'Our journey',
        'people' => 'Leadership & team',
        'press' => 'In the press',
        'registration' => 'Registration',
    ],
    'css'         => ['about'],  // assets/css/pages/*.css
    'js'          => ['about'],  // assets/js/pages/*.js
];

require INC . '/header.php';
?>
<section id="story">
    <div class="w st">
        <div>
            <h2>Care that began with a free consultation</h2>
            <p class="lead">Our story began in 1999 with free medical consultations and medicine distribution for
                families in Kasardevi and nearby mountain villages.</p>
            <p>In these remote communities, distance and cost often made healthcare difficult to access. Those early
                efforts brought essential care closer to home and marked the beginning of our commitment to serving
                the people of Kumaon.</p>
            <p>Our outreach grew through medical camps, health talks and school health programmes, in partnership
                with the Government of Uttarakhand, community leaders and local NGOs. Patients in need received
                <b>free open-heart surgery at National Heart Institute, New Delhi</b>.</p>
            <p>With the continued commitment of our founder members and the support of National Heart Institute, New
                Delhi, the work expanded into healthcare, education and community support. <b>Uttarayana Foundation
                    was formally registered as a society in 2013.</b></p>
            <ul class="pills">
                <li>Healthcare</li>
                <li>Heart surgery</li>
                <li>Education for girls</li>
                <li>Community support</li>
            </ul>
        </div>
        <figure class="ph2" style="margin:0">
            <img src="<?= asset('img/about/about1.webp') ?>"
                alt="Foundation team and villagers during field work in Kumaon" loading="lazy">
            <span>Field work in Kumaon, Uttarakhand.</span>
        </figure>
    </div>
</section>

<section class="imp" aria-labelledby="reach">
    <div class="w">
        <h2 id="reach">Reported cumulative reach</h2>
        <p class="sub">Figures reported by the Foundation as of 2025.</p>
        <div class="grid8">
            <div class="t"><b><span class="num" data-target="5" data-suffix=" Lakh+" aria-hidden="true">5
                        Lakh+</span><span class="sr">5 Lakh+</span></b><span>Lives touched</span></div>
            <div class="t"><b><span class="num" data-target="1000" data-suffix="+"
                        aria-hidden="true">1,000+</span><span class="sr">1,000+</span></b><span>Villages
                    covered</span></div>
            <div class="t"><b><span class="num" data-target="100" data-suffix="+"
                        aria-hidden="true">100+</span><span class="sr">100+</span></b><span>Free open-heart
                    surgeries</span></div>
            <div class="t"><b><span class="num" data-target="42" data-suffix="" aria-hidden="true">42</span><span
                        class="sr">42</span></b><span>Girls empowered</span></div>
        </div>
    </div>
</section>

<section id="journey">
    <div class="w">
        <h2>Our journey</h2>
        <p class="sub">From one village clinic to more than a thousand villages. Pick a year, or use the arrow keys.
        </p>

        <div class="rail" role="tablist" aria-label="Milestones by year" id="rail"></div>
        <div class="tp" id="tp" role="tabpanel" aria-live="polite"></div>
        <div class="tc">
            <button id="tprev" aria-label="Previous milestone">‹</button>
            <button id="tnext" aria-label="Next milestone">›</button>
            <span class="cnt" id="tcnt"></span>
        </div>
        <div class="bar" aria-hidden="true"><i id="tbar"></i></div>
    </div>
</section>

<section class="pp" id="people">
    <div class="w">
        <h2>Leadership &amp; team</h2>
        <p class="sub">Doctors, educators and community leaders who give their time and expertise. Select a person
            to read more.</p>
        <div class="flt" role="group" aria-label="Filter people" id="flt"></div>
        <div id="groups"></div>
    </div>
</section>

<section id="press">
    <div class="w">
        <h2>In the press</h2>
        <p class="sub">Our work, as reported in the local press.</p>
        <div class="sl"><button class="nb pv" aria-label="Previous">‹</button>
            <div class="tr">
                <a class="nw" href="#"><img
                        src="<?= asset('img/press/press-1.webp') ?>"
                        alt="Dainik Jagran clipping about Suhani's free heart surgery"
                        loading="lazy"><span>Diagnosed with CHD at a Foundation camp at age four, Suhani received
                        free cardiac surgery in Delhi within days.</span></a>
                <a class="nw" href="#"><img
                        src="<?= asset('img/press/press-2.webp') ?>"
                        alt="Newspaper clipping about the Foundation's COVID-19 response"
                        loading="lazy"><span>During COVID-19 the Foundation offered hospital space, ventilators and
                        ambulances to the state government.</span></a>
                <a class="nw" href="#"><img
                        src="<?= asset('img/press/press-3.webp') ?>"
                        alt="Newspaper clipping about Uttarayana Hospital, Papershailly"
                        loading="lazy"><span>Uttarayana Hospital: free care for rural communities, closer to
                        home.</span></a>
                <a class="nw" href="#"><img
                        src="<?= asset('img/press/press-4.webp') ?>"
                        alt="Newspaper clipping about the Nai-Umang programme" loading="lazy"><span>Nai-Umang: 42
                        girls from Balika Sadan, Almora, receive professional training in Delhi.</span></a>
            </div><button class="nb nx" aria-label="Next">›</button>
        </div>
    </div>
</section>

<section class="imp" id="registration">
    <div class="w">
        <h2>Registration and contact</h2>
        <p class="sub">Registered under the Societies Registration Act, 1860. 80G and 12A approved. Tap Copy to use
            a number in a donation or CSR form.</p>
        <div class="rg">
            <div class="rw">
                <div><small>Registration no.</small><b>UK06408072019001690</b></div><button class="cp"
                    data-copy="UK06408072019001690">Copy</button>
            </div>
            <div class="rw">
                <div><small>DARPAN ID</small><b>UK/2025/0857139</b></div><button class="cp"
                    data-copy="UK/2025/0857139">Copy</button>
            </div>
            <div class="rw">
                <div><small>80G</small><b>AAATU5730HF20215</b></div><button class="cp"
                    data-copy="AAATU5730HF20215">Copy</button>
            </div>
            <div class="rw">
                <div><small>12A</small><b>AAATU5730HE20142</b></div><button class="cp"
                    data-copy="AAATU5730HE20142">Copy</button>
            </div>
        </div>
        <div class="addr">
            <div><b>Registered office</b>Village Maat, Kasardevi, Post: Dinapani, Almora, Uttarakhand 263601</div>
            <div><b>Uttarayana Hospital</b>Village Bhalura, Post: NTD, Papershailly, Almora, Uttarakhand 263601
            </div>
            <div><b>Mobile Health Services</b>9410159952<br>uttarayana.faith@gmail.com</div>
        </div>
        <p class="sr" id="cpmsg" role="status"></p>
    </div>
</section>

<section class="inv">
    <div class="w">
        <h2>Our journey continues. Be part of it.</h2>
        <p>Your support helps more families in Kumaon reach healthcare, and helps girls pursue education and
            independent living. &nbsp;हर गाँव तक स्वास्थ्य, हर परिवार तक विश्वास</p>
        <div class="row"><a href="<?= url('support', 'donate') ?>">Donate</a><a href="<?= url('support', 'join') ?>">Volunteer</a><a href="<?= url('support', 'partner') ?>">Partner with us</a></div>
    </div>
</section>

<div class="sl gl"><button class="nb pv" aria-label="Previous">‹</button>
    <div class="tr"><img
            src="<?= asset('img/slide/slide1.webp') ?>"
            alt="Foundation field work" loading="lazy"><img
            src="<?= asset('img/slide/slide2.webp') ?>"
            alt="Foundation field work" loading="lazy"><img
            src="<?= asset('img/slide/slide3.webp') ?>"
            alt="Foundation field work" loading="lazy"><img
            src="<?= asset('img/slide/slide4.webp') ?>"
            alt="Foundation field work" loading="lazy"><img
            src="<?= asset('img/slide/slide5.webp') ?>"
            alt="Foundation field work" loading="lazy"></div><button class="nb nx" aria-label="Next">›</button>
</div>



<dialog id="dlg" aria-labelledby="dn">
    <div class="dl">
        <img id="di" src="" alt="">
        <div>
            <h3 id="dn"></h3>
            <div class="rl" id="dr"></div>
            <div id="db"></div>
        </div>
    </div>
    <div class="df"><button id="dp">‹ Previous</button><button class="x" id="dx">Close</button><button id="dnx">Next
            ›</button></div>
</dialog>



<?php require INC . '/footer.php'; ?>
