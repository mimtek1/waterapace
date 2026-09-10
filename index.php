<?php
$lang = $_GET['lang'] ?? 'ro';
if (!in_array($lang, ['ro', 'en'], true)) {
    $lang = 'ro';
}

$t = [
    'ro' => [
        'title' => 'Water Apace SRL | Construcții Stații de Tratare a Apei',
        'home' => 'Acasă',
        'about' => 'Despre Noi',
        'services' => 'Servicii',
        'projects' => 'Proiecte',
        'contact' => 'Contact',
        'hero_title' => 'Construcții de Stații de Tratare a Apei în România',
        'hero_desc' => 'Soluții inginerești avansate, proiecte EPC și infrastructură hidrotehnică pentru instalații moderne de tratare a apei.',
        'cta_offer' => 'Contactează-ne',
        'cta_projects' => 'Vezi Proiectele',
        'about_title' => 'Despre Noi - Inginerie și Soluții pentru Tratarea Apei',
        'about_text_1' => 'WATER APACE SRL oferă servicii de proiectare, execuție și punere în funcțiune pentru instalații de tratare a apei potabile și a apelor uzate, adresându-se atât sectorului municipal, cât și celui industrial.',
        'about_text_2' => 'Prin integrarea tehnologiilor moderne de tratare, sistemelor lamelare și echipamentelor de înaltă eficiență, urmărim să oferim soluții fiabile, durabile și adaptate cerințelor fiecărui proiect.',
        'services_title' => 'Domeniile Noastre de Activitate',
        'service_1_title' => 'Apă Potabilă',
        'service_1_desc' => 'Soluții pentru tratarea, filtrarea și potabilizarea apei, adaptate cerințelor proiectelor municipale și industriale.',
        'service_2_title' => 'Epurarea Apelor Uzate',
        'service_2_desc' => 'Soluții tehnice pentru stații de epurare municipale și industriale și pentru modernizarea instalațiilor existente.',
        'service_3_title' => 'Sisteme Lamelare',
        'service_3_desc' => 'Module lamelare și sisteme de decantare pentru creșterea eficienței proceselor de separare solid-lichid.',
        'service_4_title' => 'Proiecte EPC',
        'service_4_desc' => 'Servicii integrate de proiectare, achiziție, construcție, instalare și punere în funcțiune.',
        'projects_title' => 'Proiecte Reprezentative',
        'proj_1_title' => 'Stații de Tratare și Epurare a Apei',
        'proj_1_desc' => 'Soluții pentru construcția, modernizarea și extinderea instalațiilor de tratare și epurare a apei.',
        'proj_2_title' => 'Sisteme pentru Apă Potabilă',
        'proj_2_desc' => 'Sisteme de filtrare, tratare și dezinfecție pentru instalații de alimentare cu apă.',
        'proj_3_title' => 'Sisteme Lamelare Industriale',
        'proj_3_desc' => 'Integrarea sistemelor lamelare de înaltă eficiență pentru procesele industriale de tratare a apei.',
        'contact_title' => 'Date de Contact',
        'contact_desc' => 'Pentru colaborări, solicitări tehnice și proiecte în domeniul tratării apei, ne puteți contacta direct prin e-mail sau telefon.',
        'address' => 'Bulevardul Unirii, Nr. 24, Sector 3, București, România',
        'phone_contact' => '+40 21 555 0192',
        'email_contact' => 'info@waterapace.space',
        'rights' => 'Toate drepturile rezervate.'
    ],
    'en' => [
        'title' => 'Water Apace SRL | Water Treatment Plant Construction',
        'home' => 'Home',
        'about' => 'About Us',
        'services' => 'Services',
        'projects' => 'Projects',
        'contact' => 'Contact',
        'hero_title' => 'Water Treatment Plant Construction in Romania',
        'hero_desc' => 'Advanced engineering solutions, EPC projects, and water infrastructure for modern water treatment facilities.',
        'cta_offer' => 'Contact Us',
        'cta_projects' => 'View Projects',
        'about_title' => 'About Us - Engineering and Water Treatment Solutions',
        'about_text_1' => 'WATER APACE SRL provides engineering, construction, and commissioning services for drinking water and wastewater treatment facilities, serving both municipal and industrial projects.',
        'about_text_2' => 'By integrating modern treatment technologies, advanced lamella systems, and high-efficiency equipment, we aim to provide reliable, durable, and project-specific solutions.',
        'services_title' => 'Our Core Fields of Activity',
        'service_1_title' => 'Drinking Water',
        'service_1_desc' => 'Solutions for water treatment, filtration, and purification designed for municipal and industrial applications.',
        'service_2_title' => 'Wastewater Treatment',
        'service_2_desc' => 'Technical solutions for municipal and industrial wastewater treatment plants and modernization projects.',
        'service_3_title' => 'Lamella Systems',
        'service_3_desc' => 'High-efficiency lamella modules and clarification systems for improved solid-liquid separation.',
        'service_4_title' => 'EPC Projects',
        'service_4_desc' => 'Integrated engineering, procurement, construction, installation, and commissioning services.',
        'projects_title' => 'Representative Projects',
        'proj_1_title' => 'Water and Wastewater Treatment Plants',
        'proj_1_desc' => 'Solutions for the construction, modernization, and expansion of water and wastewater treatment facilities.',
        'proj_2_title' => 'Drinking Water Treatment Systems',
        'proj_2_desc' => 'Filtration, treatment, and disinfection systems for water supply facilities.',
        'proj_3_title' => 'Industrial Lamella Systems',
        'proj_3_desc' => 'Integration of high-efficiency lamella systems for industrial water treatment processes.',
        'contact_title' => 'Contact Information',
        'contact_desc' => 'For cooperation, technical inquiries, and water treatment projects, please contact us directly by email or phone.',
        'address' => 'Bulevardul Unirii, No. 24, District 3, Bucharest, Romania',
        'phone_contact' => '+40 21 555 0192',
        'email_contact' => 'info@waterapace.space',
        'rights' => 'All rights reserved.'
    ]
];

$tr = $t[$lang];
$page_title = htmlspecialchars($tr['title'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root { --primary-blue: #0d3b66; --accent-cyan: #00a8cc; --light-bg: #f4f9fc; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; }
        .navbar { background-color: #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.05); }
        .hero-section {
            background: linear-gradient(rgba(13, 59, 102, 0.85), rgba(0, 168, 204, 0.75)), url('https://images.unsplash.com/photo-1541888946425-d0fbb18f72c3?auto=format&fit=crop&w=1920&q=80') no-repeat center center;
            background-size: cover; color: white; padding: 120px 0;
        }
        .feature-box { background: white; border-radius: 8px; padding: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%; }
        .project-card { border: none; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%; }
        .project-card img { height: 220px; object-fit: cover; }
        .contact-section { background-color: var(--light-bg); padding: 80px 0; }
        .contact-form-box { background: white; padding: 40px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        footer { background-color: var(--primary-blue); color: white; padding: 40px 0 20px 0; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="index.php?lang=<?= $lang ?>">
                <i class="fa-solid fa-water fa-2x me-2 text-info"></i>
                <span>WATER APACE <small class="text-muted">SRL</small></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="index.php?lang=<?= $lang ?>"><?= $tr['home'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#despre"><?= $tr['about'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicii"><?= $tr['services'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#proiecte"><?= $tr['projects'] ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><?= $tr['contact'] ?></a></li>
                    <li class="nav-item ms-3">
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="index.php?lang=ro" class="btn <?= $lang === 'ro' ? 'btn-info text-white' : 'btn-outline-secondary' ?>">RO</a>
                            <a href="index.php?lang=en" class="btn <?= $lang === 'en' ? 'btn-info text-white' : 'btn-outline-secondary' ?>">EN</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center text-md-start">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4"><?= $tr['hero_title'] ?></h1>
                    <p class="lead mb-4"><?= $tr['hero_desc'] ?></p>
                    <a href="#contact" class="btn btn-info btn-lg text-white fw-bold me-3 shadow"><?= $tr['cta_offer'] ?></a>
                    <a href="#proiecte" class="btn btn-outline-light btn-lg"><?= $tr['cta_projects'] ?></a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5" id="despre">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1581094288338-2314dddb7ece?auto=format&fit=crop&w=800&q=80" alt="Water Treatment Engineering" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold text-primary mb-4"><?= $tr['about_title'] ?></h2>
                    <p class="text-muted leading-relaxed"><?= $tr['about_text_1'] ?></p>
                    <p class="text-muted leading-relaxed"><?= $tr['about_text_2'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" id="servicii">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary"><?= $tr['services_title'] ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="fa-solid fa-droplet fa-3x text-info mb-3"></i>
                        <h4><?= $tr['service_1_title'] ?></h4>
                        <p class="text-muted small"><?= $tr['service_1_desc'] ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="fa-solid fa-industry fa-3x text-info mb-3"></i>
                        <h4><?= $tr['service_2_title'] ?></h4>
                        <p class="text-muted small"><?= $tr['service_2_desc'] ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="fa-solid fa-gears fa-3x text-info mb-3"></i>
                        <h4><?= $tr['service_3_title'] ?></h4>
                        <p class="text-muted small"><?= $tr['service_3_desc'] ?></p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center">
                        <i class="fa-solid fa-helmet-safety fa-3x text-info mb-3"></i>
                        <h4><?= $tr['service_4_title'] ?></h4>
                        <p class="text-muted small"><?= $tr['service_4_desc'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="proiecte">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary"><?= $tr['projects_title'] ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <img src="https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary"><?= $tr['proj_1_title'] ?></h5>
                            <p class="card-text text-muted small"><?= $tr['proj_1_desc'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary"><?= $tr['proj_2_title'] ?></h5>
                            <p class="card-text text-muted small"><?= $tr['proj_2_desc'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card project-card h-100">
                        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary"><?= $tr['proj_3_title'] ?></h5>
                            <p class="card-text text-muted small"><?= $tr['proj_3_desc'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 contact-section" id="contact">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary"><?= $tr['contact_title'] ?></h2>
                <p class="text-muted"><?= $tr['contact_desc'] ?></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form-box">
                        <div class="row g-4 text-start mt-2">
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-location-dot text-info fa-2x me-3 mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1"><?= $lang === 'ro' ? 'Adresă' : 'Address' ?></h6>
                                        <p class="small text-muted mb-0"><?= $tr['address'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-phone text-info fa-2x me-3 mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1"><?= $lang === 'ro' ? 'Telefon' : 'Phone' ?></h6>
                                        <p class="small text-muted mb-0"><?= $tr['phone_contact'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-start">
                                    <i class="fa-solid fa-envelope text-info fa-2x me-3 mt-1"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">E-mail</h6>
                                        <p class="small text-muted mb-0"><?= $tr['email_contact'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h5 class="fw-bold mb-1">WATER APACE SRL</h5>
                    <p class="small text-white-50 mb-0">&copy; <?= date('Y') ?> WATER APACE SRL. <?= $tr['rights'] ?></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
