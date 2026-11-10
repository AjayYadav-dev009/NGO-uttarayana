<?php
require __DIR__ . '/includes/init.php';

$page = [
    'slug'        => 'programs',
    'title'       => 'Programs & Impact',
    'description' => 'Uttarayana Foundation\'s programmes: Uttarayana Hospital, Health on Wheels, Happy Heart free heart surgery and Nai-Umang for girls\' education, in Uttarakhand.',
    'hero'        => [
        'crumb' => 'Programs & Impact',
        'title' => 'Programs and impact',
        'lead'  => 'Healthcare, heart surgery and education for girls, reaching Uttarakhand’s villages.',
    ],
    'subnav'      => [
        'overview' => 'Overview',
        'hospital' => 'Uttarayana Hospital',
        'wheels' => 'Health on Wheels',
        'heart' => 'Happy Heart',
        'umang' => 'Nai-Umang',
        'journey' => 'Our journey',
    ],
    'css'         => [],  // assets/css/pages/*.css
    'js'          => ['programs'],  // assets/js/pages/*.js
];

require INC . '/header.php';
?>
<section id="overview">
    <div class="w">
        <p class="lead">For more than two decades, Uttarayana Foundation has worked to improve access to healthcare and support vulnerable communities across Uttarakhand. Our programmes focus on rural healthcare, preventive health, cardiac care, girl-child empowerment, community support and emergency assistance.</p>
        <div class="trio">
            <figure><button class="zm" data-cap="Dr. O. P. Yadava and team with Nai-Umang beneficiaries, supporting girls’ education and independent futures."><img src="<?= asset('img/programs/programs-01-9353c9.jpg') ?>" alt="Dr. O. P. Yadava and team with Nai-Umang girls"></button><span><b>Dr. O. P. Yadava and team</b> with Nai-Umang beneficiaries, supporting girls’ education and independent futures.</span></figure>
            <figure><button class="zm" data-cap="Health on Wheels team at Uttarayana Hospital, Almora, bringing healthcare to remote communities."><img src="<?= asset('img/programs/programs-02-08efba.jpg') ?>" alt="Health on Wheels team standing beside the mobile clinic"></button><span><b>Health on Wheels team</b> at Uttarayana Hospital, Almora, bringing healthcare to remote communities.</span></figure>
            <figure><button class="zm" data-cap="Patients receiving healthcare services at Uttarayana Hospital, Papershailly, Almora, Uttarakhand."><img src="<?= asset('img/programs/programs-03-317fea.jpg') ?>" alt="Patients waiting at Uttarayana Hospital"></button><span>Patients receiving healthcare services at <b>Uttarayana Hospital, Papershailly, Almora.</b></span></figure>
        </div>
        <div class="grid8">
            <a class="t" href="#hospital"><b><span class="num" data-target="10" aria-hidden="true">10</span><span class="sr">10</span></b><span>Beds</span><small>Uttarayana Hospital</small><em>Know more →</em></a>
            <a class="t" href="#wheels"><b><span class="num" data-target="4000" data-suffix="+" aria-hidden="true">4,000+</span><span class="sr">4,000+</span></b><span>Households reached</span><small>Health on Wheels</small><em>Know more →</em></a>
            <a class="t" href="#heart"><b><span class="num" data-target="100" data-suffix="+" aria-hidden="true">100+</span><span class="sr">100+</span></b><span>Free heart surgeries</span><small>Happy Heart</small><em>Know more →</em></a>
            <a class="t" href="#umang"><b><span class="num" data-target="42" aria-hidden="true">42</span><span class="sr">42</span></b><span>Girls supported</span><small>Nai-Umang</small><em>Know more →</em></a>
        </div>
    </div>
</section>

<section class="pr alt" id="hospital">
    <div class="w">
        <div class="media">
            <button class="zm" data-cap="A treatment room at Uttarayana Hospital."><img src="<?= asset('img/programs/programs-04-f8d833.jpg') ?>" alt="Treatment room at Uttarayana Hospital"></button>
            <button class="zm" data-cap="Patients and families at the Uttarayana Hospital counter."><img src="<?= asset('img/programs/programs-05-f0b1cd.jpg') ?>" alt="Patients and families at the hospital counter"></button>
        </div>
        <div>
            <span class="eyebrow">Uttarayana Hospital</span>
            <h2>Free healthcare for rural communities</h2>
            <p>Located in Papershailly, the hospital serves people living in the rural areas of <b>Hawalbagh, Bhaisiyachhana and Takula blocks</b> of Almora district, providing free healthcare to the surrounding community.</p>
            <p>Since 2013, the Foundation has supported its essential facilities and operations, including doctors, nursing staff and drivers. It was inaugurated in 2017 by Hon’ble Chief Minister of Uttarakhand Shri Trivendra Singh Rawat.</p>
            <h3>Facilities</h3>
            <ul class="ck">
                <li>10-bedded hospital</li>
                <li>Modular operation theatre</li>
                <li>Cylinder-based oxygen plant</li>
                <li>X-ray, ECG, pharmacy and lab (outsourced)</li>
            </ul>
            <div class="grid8 three" style="grid-template-columns:repeat(2,1fr)">
                <div class="t"><b><span class="num" data-target="10" aria-hidden="true">10</span><span class="sr">10</span></b><span>Beds</span></div>
                <div class="t"><b>2017</b><span>Inaugurated</span></div>
            </div>
        </div>
    </div>
</section>

<section class="pr rev" id="wheels">
    <div class="w">
        <div class="media">
            <button class="zm" data-cap="Patients seated at the back of the Health on Wheels van."><img src="<?= asset('img/programs/programs-06-ec68e8.jpg') ?>" alt="Patients seated at the back of the Health on Wheels van"></button>
            <button class="zm" data-cap="A health worker checks a patient’s blood pressure inside the Health on Wheels van."><img src="<?= asset('img/programs/programs-07-d42807.jpg') ?>" alt="Health worker checking a patient's blood pressure in the mobile clinic"></button>
        </div>
        <div>
            <span class="eyebrow">Health on Wheels</span>
            <h2>Taking healthcare closer to rural communities</h2>
            <p>Since <b>2018</b>, Uttarayana Foundation’s <b>Health on Wheels</b> mobile clinic has brought basic healthcare directly to remote communities through <b>weekly visits</b>, reducing the need for families to travel long distances for care.</p>
            <p>Inaugurated by <b>Shri Ajay Tamta, then Minister of State for Textiles, Government of India</b>, the initiative has reached <b>4,000 households</b>. Its community outreach has also received newspaper and media coverage.</p>
            <h3>What we do</h3>
            <ul class="ck">
                <li>Take healthcare services closer to rural communities</li>
                <li>Support access to medical care in remote areas</li>
                <li>Reach communities that face difficulty travelling for healthcare</li>
            </ul>
            <div class="grid8 three" style="grid-template-columns:repeat(2,1fr)">
                <div class="t"><b>2018</b><span>Mobile van service began</span></div>
                <div class="t"><b><span class="num" data-target="4000" data-suffix="+" aria-hidden="true">4,000+</span><span class="sr">4,000+</span></b><span>Households reached</span></div>
            </div>
        </div>
    </div>
</section>

<section class="pr alt" id="heart">
    <div class="w">
        <div class="media">
            <button class="zm" data-cap="Patients and families gathered with the Foundation team."><img src="<?= asset('img/programs/programs-08-7929ad.jpg') ?>" alt="Patients and families gathered with the Foundation team"></button>
            <button class="zm" data-cap="Newspaper report (Dainik Jagran): “Suhani will live”. A young girl with a heart defect received free surgery in Delhi."><img src="<?= asset('img/programs/programs-09-943afc.jpg') ?>" alt="Newspaper report about Suhani, a girl who received free heart surgery"></button>
        </div>
        <div>
            <span class="eyebrow">Happy Heart</span>
            <h2>Life-saving heart care for those in need</h2>
            <p>The Happy Heart initiative provides <b>free open-heart surgery</b> to patients who could not otherwise afford it. Through it, patients from Uttarakhand receive treatment at the National Heart Institute, New Delhi, access that would be financially out of reach for many families on their own.</p>
            <h3>What we do</h3>
            <ul class="ck">
                <li>Support free open-heart surgeries for disadvantaged patients</li>
                <li>Facilitate access to specialised cardiac treatment</li>
                <li>Support patients from Uttarakhand at the National Heart Institute</li>
                <li>Work with the All India Heart Foundation on cardiac care access</li>
            </ul>
            <div class="grid8 three">
                <div class="t"><b><span class="num" data-target="100" data-suffix="+" aria-hidden="true">100+</span><span class="sr">100+</span></b><span>Heart surgeries</span></div>
                <div class="t"><b>1999</b><span>Initiative began</span></div>
                <div class="t"><b>Every year</b><span>Patients continue to receive treatment</span></div>
            </div>
        </div>
    </div>
</section>

<section class="pr rev" id="umang">
    <div class="w">
        <div class="media">
            <button class="zm" data-cap="Newspaper reports, December 2021: seven girls from Almora reach the National Heart Institute, Delhi, under the Nai-Umang programme."><img src="<?= asset('img/programs/programs-10-3d32cb.jpg') ?>" alt="Newspaper reports from December 2021 about seven girls from Almora reaching Delhi"></button>
        </div>
        <div>
            <span class="eyebrow">Nai-Umang</span>
            <h2>Supporting girls towards education and independence</h2>
            <p>The Covid-19 pandemic left many children without the support of their parents, and girls facing difficult social and economic circumstances were especially vulnerable. In response, the Foundation established <b>Nai-Umang in 2021</b>.</p>
            <p>With support from the Almora administration and committed individuals, seven girls were brought to the National Heart Institute, New Delhi, in the programme’s first year, for care and a better future.</p>
            <h3>What we do</h3>
            <ul class="ck">
                <li>Support girls from economically disadvantaged families</li>
                <li>Provide educational support and livelihood skills training</li>
                <li>Work towards making girls financially self-reliant</li>
                <li>Support their integration into mainstream society</li>
            </ul>
            <div class="grid8 three" style="grid-template-columns:repeat(2,1fr)">
                <div class="t"><b><span class="num" data-target="42" aria-hidden="true">42</span><span class="sr">42</span></b><span>Girls supported</span></div>
                <div class="t"><b>2021</b><span>Programme established</span></div>
            </div>
        </div>
    </div>
</section>

<section class="alt" id="journey" style="background:var(--pl)">
    <div class="w">
        <h2>Our journey</h2>
        <p class="sub">Key milestones in our programmes. The full story is on <a href="<?= url('about', 'journey') ?>" style="color:var(--p);font-weight:600;text-decoration:underline">our About page</a>.</p>
        <ol class="jv" id="jv">
            <li><h4>1999</h4><p><b>Bringing care to the hills.</b> Free consultations and medicines begin in Kasardevi, Almora.</p></li>
            <li><h4>2009</h4><p><b>Kumaon’s first open-heart surgeries</b> are performed in Almora, a milestone in cardiac care in the hills.</p></li>
            <li><h4>2013</h4><p><b>Uttarayana Foundation is registered</b> under the Societies Registration Act, 1860. <a href="<?= url('about', 'registration') ?>">See registration details</a></p></li>
            <li><h4>2017</h4><p><b>Uttarayana Hospital opens</b> at Papershailly, inaugurated by Hon’ble Chief Minister of Uttarakhand Shri Trivendra Singh Rawat.</p></li>
            <li><h4>2018</h4><p><b>Health on Wheels</b> is inaugurated by Shri Ajay Tamta, then Minister of State for Textiles, Government of India. It has reached 4,000 households.</p></li>
            <li><h4>2020</h4><p><b>Covid response:</b> relief funds sent to 300 families, oxygen support shared with the district, telemedicine expanded.</p></li>
            <li><h4>2021</h4><p><b>Nai-Umang launched.</b> So far 42 girls from Balika Sadan, Almora, have been supported, under an MoU with the Government of Uttarakhand.</p></li>
        </ol>
    </div>
</section>

<section class="inv">
    <div class="w">
        <h2>Help us reach one more village</h2>
        <p>Every rupee funds hospital care, mobile camps and Nai-Umang. &nbsp;हर गाँव तक स्वास्थ्य, हर परिवार तक विश्वास</p>
        <div class="row"><a href="<?= url('support', 'donate') ?>">Donate</a><a href="<?= url('support', 'join') ?>">Volunteer</a><a href="<?= url('support', 'partner') ?>">Partner with us</a></div>
    </div>
</section>



<dialog id="lb" aria-label="Photo viewer">
    <img id="li" src="" alt="">
    <div id="lc"></div>
    <div class="df"><button id="lp">‹ Previous</button><button class="x" id="lx">Close</button><button id="ln">Next ›</button></div>
</dialog>



<?php require INC . '/footer.php'; ?>
