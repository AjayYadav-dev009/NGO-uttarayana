/* About page: content data, timeline and people filter / profile dialog */

var ASSETS = (window.SITE && window.SITE.assets) || 'assets/';
        var MILES = [
            { y: '1999', loc: 'Kasardevi, Almora', t: 'A humble beginning', p: ['Free medical consultations and medicine distribution begin for families in Kasardevi and nearby mountain villages.', 'In these remote communities, distance and cost made healthcare hard to reach. The early outreach brought essential care closer to home.'] },
            { y: '2009', loc: 'Almora', t: 'A historic first for Kumaon', p: ['Our founding member performed <b>Kumaon’s first open-heart surgeries on three patients</b>, opening a new chapter in healthcare in the hills.'], img: ASSETS + 'img/about/journey-1.webp', alt: 'Heart screening camp in a village' },
            { y: '2013', loc: 'Uttarakhand', t: 'The Foundation takes shape', p: ['Our efforts came together under <b>Uttarayana Foundation, formally registered as a society in 2013</b>.', 'With the commitment of founder members and the support of National Heart Institute, New Delhi, the work expanded into healthcare, education and community support.'] },
            { y: '2017', loc: 'Papershailly, Almora', t: 'Uttarayana Hospital opens', p: ['A greenfield hospital, <b>inaugurated by Shri Trivendra Singh Rawat, Hon’ble Chief Minister of Uttarakhand</b>.', 'It serves communities across Takula, Hawalbagh and Bhaisiya Chhana blocks, giving rural families a permanent local base for consultations, treatment and community health services.'], img: ASSETS + 'img/about/journey-2.webp', alt: 'Uttarayana Hospital' },
            { y: '2018', loc: 'Almora district', t: 'Health on Wheels: healthcare at the doorstep', p: ['Inaugurated by <b>Shri Ajay Tamta, then Union Minister of State for Textiles</b>, Health on Wheels brings healthcare to remote mountain communities.', 'Its Basic Cardiac Life Support Mobile Clinic serves <b>4,000 households</b> across Takula, Hawalbagh and Bhaisiya Chhana blocks, offering medical assessments, early diagnosis and timely referrals.'], img: ASSETS + 'img/about/journey-3.webp', alt: 'Health on Wheels mobile clinic' },
            { y: '2020', loc: 'Almora', t: 'Standing with families through COVID-19', p: ['During the pandemic the Foundation gave financial assistance to <b>more than 300 affected families</b>.', 'It also extended <b>oxygen support to healthcare facilities in Almora</b> and expanded <b>telemedicine services</b>, so families could get medical advice during the crisis.'] },
            { y: '2021', loc: 'Balika Sadan, Almora', t: 'Nai-Umang: education, skills and a path to independence', p: ['Nai-Umang has so far supported <b>42 girls from Balika Sadan, Almora</b>, under an <b>MoU with the Government of Uttarakhand</b>.', 'The programme combines higher education, vocational training, mentoring and career guidance. Participants have secured work in nursing, hospitality and support roles, progressing towards self-reliance.'], img: ASSETS + 'img/about/journey-4.webp', alt: 'Nai-Umang girls' },
            { y: '2024', loc: 'Adi-Kailash and Gunji', t: 'Taking healthcare above 10,000 feet', p: ['The team delivered healthcare in the <b>Adi-Kailash and Gunji region, above 10,000 feet</b>, bringing medical support to people in challenging high-altitude terrain.', 'The outreach reflects our commitment to overcoming geographical barriers and reaching places where healthcare is hard to access.'] },
            { y: '2025', loc: 'Across Uttarakhand', t: 'Reaching 1,000+ villages', p: ['By 2025 the Foundation had reached <b>1,000+ villages</b>, touched <b>over 5 lakh lives</b> and screened <b>more than 60,000 patients</b>.', 'The milestone reflects years of sustained outreach: medical assessment, health awareness and access to care closer to rural communities.'] },
            { y: '2026', loc: 'With National Heart Institute', t: '100+ free open-heart surgeries', p: ['With the support of NHI, the Foundation has facilitated <b>more than 100 free open-heart surgeries</b>, helping patients overcome financial barriers to essential cardiac treatment.', 'The milestone reflects our commitment to making specialised heart care accessible to those in need.'] }
        ];

        var GROUPS = [
            { id: 'lead', name: 'Leadership' },
            { id: 'clin', name: 'Clinical advisors' },
            { id: 'team', name: 'Our team' },
            { id: 'legal', name: 'Legal and taxation' },
            { id: 'media', name: 'Media and public relations' }
        ];
        var PEOPLE = [
            { g: 'lead', n: 'Dr. O. P. Yadava', r: 'Founder · CEO and Chief Consultant Cardiac Surgeon, NHI', img: ASSETS + 'img/people/about-01-284ac0.jpg', b: ['Dr. Yadava is CEO and Chief Consultant Cardiac Surgeon at <b>NHI, New Delhi</b>, and Director of the <b>All India Heart Foundation</b>. With over <b>20,000 open-heart surgeries</b> performed during his career, he brings decades of expertise and a deep commitment to service.', 'For decades, he has brought that expertise back to the hills he grew up in, guiding Uttarayana’s mission to ensure that distance and financial hardship do not stand between families and life-saving care.'] },
            { g: 'lead', n: 'Dr. Rajendra Dobhal', r: 'Vice Chancellor, Swami Rama Himalayan University', img: ASSETS + 'img/people/about-02-478473.jpg', b: ['Dr. Rajendra Dobhal, Vice Chancellor of Swami Rama Himalayan University, formerly led UCOST, Government of Uttarakhand. A Fellow of the National Academy of Sciences, India.', 'He brings decades of experience in research and education to Uttarayana Foundation’s work in healthcare, learning and community development across Uttarakhand.'] },
            { g: 'clin', n: 'Dr. (Prof.) Usha Yadava', r: 'Guiding Uttarayana’s eye care mission', img: ASSETS + 'img/people/about-03-8003f0.jpg', b: ['Former Director Professor of Ophthalmology at Guru Nanak Eye Hospital, New Delhi, Dr. Usha Yadava brings extensive clinical and academic experience to Uttarayana Foundation.', 'She leads the Foundation’s free eye care services, helping underserved communities across Uttarakhand access specialist consultations and essential care to protect their vision.'] },
            { g: 'clin', n: 'Dr. Vinod Sharma', r: 'Leading heart care at Uttarayana', img: ASSETS + 'img/people/about-04-fe6bce.jpg', b: ['Dr. Vinod Sharma, Vice President of Uttarayana Foundation and a Head of Cardiology Services at National Heart Institute, New Delhi, leads the Foundation’s heart care services.', 'Working with NHI, he helps people in Almora, Pithoragarh, Bageshwar and Champawat access specialist heart consultations and care closer to home.'] },
            { g: 'team', n: 'Mr. Mahipal Pilkhwal', r: 'General Secretary', img: ASSETS + 'img/people/about-05-9ae124.jpg', b: ['A hands-on leader and grassroots implementer, he turns vision into action and action into lasting change.', 'He unites people, expertise and resources to bring healthcare, education and opportunity within reach of underserved Himalayan communities.'] },
            { g: 'team', n: 'Prof. Raag Yadava', r: 'Supporting education and opportunity', img: ASSETS + 'img/people/about-06-1e99b8.jpg', b: ['A law graduate of the National Law School and a Rhodes Scholar at Oxford, Prof. Raag Yadava brings academic and education policy experience to Uttarayana Foundation.', 'He helps guide the Foundation’s <b>Nai-Umang initiative</b>, supporting girls from underserved communities to continue their education, build confidence and work towards independent futures.'] },
            { g: 'team', n: 'Dr. (Prof.) Mrinal Yadava', r: 'Cardiologist · Specialist cardiac outreach', img: ASSETS + 'img/people/about-07-7282da.jpg', b: ['<b>Dr. Mrinal Yadava</b>, a cardiologist and an Assistant Professor at the University of Washington, USA, trained at Maulana Azad Medical College, Michigan State University and Oregon Health &amp; Science University.', 'Bringing his expertise to Uttarakhand, he supports Uttarayana Foundation’s <b>specialist cardiac outreach</b>, helping marginalised communities access expert care closer to home.'] },
            { g: 'legal', n: 'Mr. Vipin Aggarwal', r: 'Advisor · Legal and taxation', img: ASSETS + 'img/people/about-08-4d79a4.jpg', b: ['Vipin Aggarwal brings his experience in finance, taxation and compliance to Uttarayana Foundation.', 'His guidance supports responsible financial management and transparent governance, helping the Foundation carry forward its work in healthcare, education and community service.'] },
            { g: 'legal', n: 'Mr. Rama Shankar Nainwal', r: 'Legal Advisor', img: ASSETS + 'img/people/about-09-c8a741.jpg', b: ['A native of Uttarakhand, Mr. Rama Shankar Nainwal advises Uttarayana Foundation on legal matters, society registration, renewals and related compliance requirements.', 'His guidance and advocacy support sound governance, helping the Foundation carry forward its community service with accountability.'] },
            { g: 'media', n: 'Mr. Pramod Joshi', r: 'Media and community outreach', img: ASSETS + 'img/people/about-10-7abbb2.jpg', b: ['An Almora-based media professional who runs an independent news agency, Pramod Joshi supports Uttarayana Foundation’s media outreach and community engagement.', 'His close connection with local communities helps bring wider attention to the Foundation’s healthcare, education and social initiatives, strengthening awareness and public participation.'] }
        ];

        /* ---------- timeline ---------- */
        (function () {
            var rail = document.getElementById('rail'), tp = document.getElementById('tp'), cnt = document.getElementById('tcnt'),
                bar = document.getElementById('tbar'), pv = document.getElementById('tprev'), nx = document.getElementById('tnext'), cur = 0, tabs = [];
            MILES.forEach(function (m, i) {
                var b = document.createElement('button'); b.type = 'button'; b.setAttribute('role', 'tab'); b.id = 'tab' + i; b.textContent = m.y;
                b.addEventListener('click', function () { go(i, true) });
                b.addEventListener('keydown', function (e) {
                    if (e.key === 'ArrowRight') { e.preventDefault(); go(Math.min(cur + 1, MILES.length - 1), true, true) }
                    if (e.key === 'ArrowLeft') { e.preventDefault(); go(Math.max(cur - 1, 0), true, true) }
                });
                rail.appendChild(b); tabs.push(b);
            });
            function go(i, scroll, focus) {
                cur = i; var m = MILES[i];
                tabs.forEach(function (b, k) { b.setAttribute('aria-selected', k === i); b.tabIndex = k === i ? 0 : -1 });
                tp.setAttribute('aria-labelledby', 'tab' + i);
                var has = !!m.img;
                tp.className = 'tp' + (has ? ' has' : ' noimg');
                tp.innerHTML = '<div><div class="yr">' + m.y + '</div><span class="loc">' + T(m.loc) + '</span><h3>' + T(m.t) + '</h3>' + m.p.map(function (x) { return '<p>' + T(x) + '</p>' }).join('') + '</div>' +
                    (has ? '<figure><img src="' + m.img + '" alt="' + T(m.alt) + '" onerror="this.closest(\'.tp\').className=\'tp noimg\'"></figure>' : '');
                pv.disabled = i === 0; nx.disabled = i === MILES.length - 1;
                cnt.textContent = (i + 1) + ' of ' + MILES.length;
                bar.style.width = ((i + 1) / MILES.length * 100) + '%';
                var b = tabs[i]; rail.scrollTo({ left: b.offsetLeft - (rail.clientWidth - b.offsetWidth) / 2, behavior: 'smooth' });
                if (focus) b.focus();
            }
            pv.addEventListener('click', function () { go(cur - 1) });
            nx.addEventListener('click', function () { go(cur + 1) });
            var sx = null;
            tp.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX }, { passive: true });
            tp.addEventListener('touchend', function (e) { if (sx === null) return; var dx = e.changedTouches[0].clientX - sx; sx = null; if (Math.abs(dx) > 60) { if (dx < 0 && cur < MILES.length - 1) go(cur + 1); if (dx > 0 && cur > 0) go(cur - 1) } });
            go(0);
        })();

        /* ---------- people: filter + dialog ---------- */
        (function () {
            var flt = document.getElementById('flt'), gr = document.getElementById('groups'), dlg = document.getElementById('dlg');
            var idx = 0, last = null;
            var all = document.createElement('button'); all.type = 'button'; all.textContent = T('Everyone'); all.setAttribute('aria-pressed', 'true'); all.dataset.g = ''; flt.appendChild(all);
            GROUPS.forEach(function (g) {
                var b = document.createElement('button'); b.type = 'button'; b.textContent = T(g.name); b.setAttribute('aria-pressed', 'false'); b.dataset.g = g.id; flt.appendChild(b);
                var sec = document.createElement('div'); sec.className = 'grp'; sec.dataset.g = g.id;
                sec.innerHTML = '<h3>' + T(g.name) + '</h3><div class="cards"></div>';
                var cards = sec.querySelector('.cards');
                PEOPLE.forEach(function (p, i) {
                    if (p.g !== g.id) return;
                    var c = document.createElement('button'); c.type = 'button'; c.className = 'pc';
                    c.innerHTML = '<img src="' + p.img + '" alt=""><span><strong>' + T(p.n) + '</strong><small>' + T(p.r) + '</small><em>' + T('Read more →') + '</em></span>';
                    c.addEventListener('click', function () { last = c; show(i); if (!dlg.open) dlg.showModal() });
                    cards.appendChild(c);
                });
                gr.appendChild(sec);
            });
            flt.addEventListener('click', function (e) {
                var b = e.target.closest('button'); if (!b) return;
                [].forEach.call(flt.children, function (x) { x.setAttribute('aria-pressed', x === b) });
                [].forEach.call(gr.children, function (s) { s.hidden = !!b.dataset.g && s.dataset.g !== b.dataset.g });
            });
            function show(i) {
                idx = (i + PEOPLE.length) % PEOPLE.length; var p = PEOPLE[idx];
                var im = document.getElementById('di'); im.src = p.img; im.alt = T(p.n);
                document.getElementById('dn').textContent = T(p.n); document.getElementById('dr').textContent = T(p.r);
                document.getElementById('db').innerHTML = p.b.map(function (x) { return '<p>' + T(x) + '</p>' }).join('');
            }
            document.getElementById('dp').addEventListener('click', function () { show(idx - 1) });
            document.getElementById('dnx').addEventListener('click', function () { show(idx + 1) });
            document.getElementById('dx').addEventListener('click', function () { dlg.close() });
            dlg.addEventListener('click', function (e) { if (e.target === dlg) dlg.close() });
            dlg.addEventListener('keydown', function (e) { if (e.key === 'ArrowRight') show(idx + 1); if (e.key === 'ArrowLeft') show(idx - 1) });
            dlg.addEventListener('close', function () { if (last) last.focus() });
        })();