<?php
require __DIR__ . '/includes/init.php';

$page = [
    'slug'        => 'home',
    'title'       => 'Homepage',
    'description' => 'Rooted in Uttarakhand’s villages since 1999, Uttarayana Foundation brings affordable healthcare, life-saving heart treatment and education for girls.',
    'css'         => ['index'],  // assets/css/pages/*.css
    'js'          => [],  // assets/js/pages/*.js
];

require INC . '/header.php';
?>
<section class="hero">
    <div class="w">
        <h1>Supporting Rural Communities Through Healthcare and Education.</h1>
        <p>Rooted in Uttarakhand’s villages since 1999, we bring affordable primary and secondary healthcare,
            life-saving heart treatment and education for girls.</p>
        <a class="btn" href="<?= url('support') ?>">Support Us</a>&nbsp; <a class="btn o" href="#imp">See the Impact</a>
    </div>
</section>
<div class="reg">Registered under the Societies Registration Act, 1860 &nbsp;·&nbsp; 80G &amp; 12A approved
    &nbsp;·&nbsp; DARPAN ID: UK/2025/0857139</div>
<section class="imp" id="imp">
    <div class="w">
        <h2>Our Impact</h2>
        <p class="sub">Since 1999, when free consultations began in Kasardevi, Almora, our work has grown across
            Uttarakhand’s hills.</p>
        <ul class="ms">
            <li><b>1999</b><span>Community service began</span></li>
            <li><b>2013</b><span>Foundation established</span></li>
        </ul>
        <div class="grid8 ten">
            <div class="t"><b><span class="num" data-target="5" data-suffix=" Lakh+" aria-hidden="true">5
                        Lakh+</span><span class="sr">5 Lakh+</span></b><span>People treated</span></div>
            <div class="t"><b><span class="num" data-target="1000" data-suffix="+"
                        aria-hidden="true">1,000+</span><span class="sr">1,000+</span></b><span>Villages
                    covered</span></div>
            <div class="t"><b><span class="num" data-target="250" data-suffix="+"
                        aria-hidden="true">250+</span><span class="sr">250+</span></b><span>Camps &amp; cardiac
                    OPDs</span></div>
            <div class="t"><b><span class="num" data-target="100" data-suffix="+"
                        aria-hidden="true">100+</span><span class="sr">100+</span></b><span>Free open-heart
                    surgeries</span></div>
            <div class="t"><b><span class="num" data-target="60000" data-suffix="+"
                        aria-hidden="true">60,000+</span><span class="sr">60,000+</span></b><span>Beneficiaries
                    screened</span></div>
            <div class="t"><b><span class="num" data-target="57" data-suffix="" aria-hidden="true">57</span><span
                        class="sr">57</span></b><span>School health programmes</span></div>
            <div class="t"><b><span class="num" data-target="4000" data-suffix="+"
                        aria-hidden="true">4,000+</span><span class="sr">4,000+</span></b><span>Households
                    reached</span></div>
            <div class="t"><b><span class="num" data-target="42" data-suffix="" aria-hidden="true">42</span><span
                        class="sr">42</span></b><span>Girls empowered (Nai-Umang)</span></div>
            <div class="t"><b><span class="num" data-target="300" data-suffix=""
                        aria-hidden="true">300</span><span class="sr">300</span></b><span>Families financially assisted
                    during the COVID-19 crisis</span></div>
            <div class="t"><b><span aria-hidden="true">&gt; </span><span class="num" data-target="10000" data-suffix=""
                        aria-hidden="true">10,000</span><span class="sr">More than 10,000</span></b><span>Feet above sea level:
                    outreach in Adi Kailash–Gunji</span></div>
        </div>
    </div>
</section>
<section>
    <div class="w">
        <h2>Our Programmes</h2>
        <p class="sub">Healthcare, hope and opportunity for the state’s most vulnerable communities.</p>
        <div class="sl"><button class="nb pv" aria-label="Previous">‹</button>
            <div class="tr"><a class="pg" href="<?= url('programs', 'hospital') ?>"><img
                        src="<?= asset('banner/uttarayana-faith-foundation-tNiry7UUvq3qfvPc.webp') ?>"
                        alt="Uttarayana Hospital" loading="lazy">
                    <h3>Uttarayana Hospital</h3>
                    <p>Free care for rural communities at Papersali, Almora. Better access, closer to home.</p>
                    <span>Know more →</span>
                </a><a class="pg" href="<?= url('programs', 'wheels') ?>"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481211440_650398277511157_8725831068823555168_n-Bm9BLd6GdkpJNkdw.jpg"
                        alt="Health on Wheels" loading="lazy">
                    <h3>Health on Wheels</h3>
                    <p>A mobile clinic and specialist outreach serving 100 remote villages.</p><span>Know more
                        →</span>
                </a><a class="pg" href="<?= url('programs', 'heart') ?>"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481450982_648256521058666_6090774794054906512_n-92aXY3BDg2NtWlk6.jpg"
                        alt="Heart screening camp" loading="lazy">
                    <h3>Free Heart Surgery</h3>
                    <p>Village screening camps, then free cardiac surgery in Delhi for children and adults.</p>
                    <span>Know more →</span>
                </a><a class="pg" href="<?= url('programs', 'umang') ?>"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481087133_645916224626029_8015487658597098639_n-QSpLW2fuQrMJpilz.jpg"
                        alt="Nai-Umang girls" loading="lazy">
                    <h3>Nai-Umang</h3>
                    <p>Skills training and higher education for 42 girls from Balika Sadan, Almora.</p><span>Know
                        more →</span>
                </a></div><button class="nb nx" aria-label="Next">›</button>
        </div>
    </div>
</section>
<section class="aw" id="awards">
    <div class="w">
        <span class="eyebrow">Recognition</span>
        <h2>Awards &amp; Recognition</h2>
        <ul class="awc">
            <li><span class="tag">2029</span>
                <h4>President-Elect, IACTS</h4>
                <p>Indian Association of Cardiovascular Thoracic Surgeons.</p>
            </li>
            <li><span class="tag">2006</span>
                <h4>Lifetime Achievement Award</h4>
                <p>Presented to Dr. O. P. Yadava by Dr. A. P. J. Abdul Kalam.</p>
            </li>
            <li><span class="tag">National</span>
                <h4>Dr. B. C. Roy National Award</h4>
                <p>Awarded to the Foundation’s founder, Dr. O. P. Yadava.</p>
            </li>
            <li><span class="tag">Editor</span>
                <h4>Editor-in-Chief</h4>
                <p>Indian Journal of Thoracic and Cardiovascular Surgery and Cardiology Today.</p>
            </li>
        </ul>
    </div>
</section>
<section class="jr" id="journey">
    <div class="w">
        <span class="eyebrow">Since 1992</span>
        <h2>Our Journey</h2>
        <ol class="jt">
            <li><b>1992</b>
                <h4>Pioneered Total Arterial Myocardial Revascularisation in India</h4>
            </li>
            <li><b>1999</b>
                <h4>Free consultations begin in Kasardevi, Almora</h4>
            </li>
            <li><b>2013</b>
                <h4>Uttarayana Foundation formally registered</h4>
            </li>
            <li><b>2020</b>
                <h4>COVID-19 response</h4>
                <p>Hospital space, ventilators, ambulances and direct financial aid to families.</p>
            </li>
            <li><b>2021</b>
                <h4>Nai-Umang launched</h4>
                <p>42 girls supported towards higher education and independent living.</p>
            </li>
        </ol>
    </div>
</section>
<section>
    <div class="w">
        <h2>In the News</h2>
        <p class="sub">Our work, as reported in the local press.</p>
        <div class="sl"><button class="nb pv" aria-label="Previous">‹</button>
            <div class="tr"><a class="nw" href="#"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/baby-suhani--dainik-jagran-9xy1G1vn35qDAMFX.png"
                        alt="" loading="lazy"><span>Diagnosed with CHD at a Foundation camp at age four, Suhani
                        received free cardiac surgery in Delhi within days.</span></a><a class="nw" href="#"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/covid-news-2nBUZA1DVro1Bslh.png"
                        alt="" loading="lazy"><span>During COVID-19 the Foundation offered hospital space,
                        ventilators and ambulances to the state government.</span></a><a class="nw" href="#"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/22-12-2021-02-ZDDIaXNrsZtks51C.jpg"
                        alt="" loading="lazy"><span>Uttarayana Hospital, Papersali: free care for rural communities,
                        closer to home.</span></a><a class="nw" href="#"><img
                        src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/nai-umang-2-CurYZCJEEkFh9sLa.png"
                        alt="" loading="lazy"><span>Nai-Umang: 42 girls from Balika Sadan, Almora, receive
                        professional training in Delhi.</span></a></div><button class="nb nx"
                aria-label="Next">›</button>
        </div>
    </div>
</section>
<section class="fd">
    <div class="w two"><img
            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/dr-yadava-2-RJRFGsbQEos3uSyF.png"
            alt="Dr. O. P. Yadava">
        <div>
            <h2>Our Founder: Dr. O. P. Yadava</h2>
            <p>CEO and Chief Cardiac Surgeon at National Heart Institute, New Delhi, and Director of the All India
                Heart Foundation. His outreach began with free consultations in Kasardevi, Almora, in 1999.</p>
            <div class="cred">
                <div><b>20,000+</b>heart operations</div>
                <div><b>4 decades</b>of practice</div>
                <div><b>1992</b>TAMR pioneer, India</div>
            </div><a class="btn" href="<?= url('about') ?>">Read full profile</a>
        </div>
    </div>
</section>
<section>
    <div class="w">
        <h2>Testimonials</h2>
        <div class="sl tst"><button class="nb pv" aria-label="Previous">‹</button>
            <div class="tr">
                <figure class="q">
                    <blockquote>Dr O P Yadav and his organisation, Uttarayana Foundation, have done outstanding work in
                        Almora district and neighbouring districts over the past several years for healthcare,
                        particularly heart disease prevention.</blockquote>
                    <figcaption><span class="av" aria-hidden="true">VS</span><span><b>Vinod Kumar Suman</b>Former
                            District Magistrate, Almora</span></figcaption>
                </figure>
                <figure class="q">
                    <blockquote>My son Ayansh was born with a hole in his heart… within two days my son’s surgery was
                        done, completely free. I am grateful to Dr O P Yadav, Mahipal ji, and the whole team.</blockquote>
                    <figcaption><span class="av" aria-hidden="true">KB</span><span><b>Karan Bhandari</b>Father of
                            Ayansh Bhandari, age 6</span></figcaption>
                </figure>
                <figure class="q story">
                    <blockquote>Diagnosed with a congenital heart defect at a Foundation camp at the age of four, Suhani
                        received free cardiac surgery in Delhi within days.</blockquote>
                    <figcaption><span class="av" aria-hidden="true">S</span><span><b>Suhani’s story</b>Free heart
                            surgery after a Foundation camp</span></figcaption>
                </figure>
                <figure class="q story">
                    <blockquote>Forty-two girls from Balika Sadan, Almora, have received professional training in Delhi
                        and support towards higher education and independent living.</blockquote>
                    <figcaption><span class="av" aria-hidden="true">N</span><span><b>Nai-Umang</b>Our programme for
                            girls’ education and training</span></figcaption>
                </figure>
            </div><button class="nb nx" aria-label="Next">›</button>
        </div>
    </div>
</section>
<section class="inv">
    <div class="w">
        <h2>Get Involved</h2>
        <p>Every rupee funds hospital care, mobile camps and Nai-Umang. &nbsp;हर गाँव तक स्वास्थ्य, हर परिवार तक
            विश्वास</p>
        <div class="row"><a href="<?= url('support', 'donate') ?>">Donate</a><a href="<?= url('support', 'join') ?>">Volunteer</a><a href="<?= url('support', 'partner') ?>">Partner with us</a></div>
    </div>
</section>
<div class="sl gl"><button class="nb pv" aria-label="Previous">‹</button>
    <div class="tr"><img
            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481918182_645916227959362_2590371648645501543_n-2uhf2pMfBHUuLF44.jpg"
            alt="Foundation field work" loading="lazy"><img
            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481211440_650398277511157_8725831068823555168_n-Bm9BLd6GdkpJNkdw.jpg"
            alt="Foundation field work" loading="lazy"><img
            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/480569165_641836968367288_5483151691071154577_n-zof0wUYQ00U6wcFT.jpg"
            alt="Foundation field work" loading="lazy"><img
            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481164465_650398444177807_8551361197916948722_n-CfeDedJLHyBdOMcM.jpg"
            alt="Foundation field work" loading="lazy"><img
            src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=900,fit=crop/uyzQ6zhWkYkr7bfm/481087133_645916224626029_8015487658597098639_n-QSpLW2fuQrMJpilz.jpg"
            alt="Foundation field work" loading="lazy"></div><button class="nb nx" aria-label="Next">›</button>
</div>


<?php require INC . '/footer.php'; ?>