@extends('layouts.app')

@section('content')
<!-- Home Section -->
<section id="home" class="hero-section">
    <!-- Decorative background blobs -->
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>

    <div class="container fade-in position-relative">
        <div class="row align-items-center">
            <!-- Photo Column -->
            <div class="col-md-5 order-md-2 text-center mb-5 mb-md-0">
                <div class="hero-photo-wrapper">
                    <img src="{{ asset('images/photo profile.jpg') }}" alt="Fitria Novyanti Taufik" class="hero-img">
                    <!-- Floating tech badges -->
                    <div class="hero-badge hero-badge-1">
                        <i class="fa-brands fa-laravel me-1 text-danger"></i> Laravel
                    </div>
                    <div class="hero-badge hero-badge-2">
                        <i class="fa-brands fa-react me-1" style="color:#61dafb;"></i> React.js
                    </div>
                    <div class="hero-badge hero-badge-3">
                        <i class="fa-solid fa-cloud me-1" style="color:#4285f4;"></i> GCP
                    </div>
                    <div class="hero-badge hero-badge-4">
                        <i class="fa-solid fa-microchip me-1 text-success"></i> IoT
                    </div>
                </div>
            </div>

            <!-- Text Column -->
            <div class="col-md-7 order-md-1">
                <p class="hero-greeting mb-2">
                    <span class="greeting-wave"></span> Hello, I'm
                </p>
                <h1 class="hero-name mb-2">Fitria Novyanti Taufik</h1>
                <h2 class="hero-title mb-4">
                    <span id="typing-text"></span><span class="typing-cursor">|</span>
                </h2>

                <!-- Key highlights -->
                <div class="hero-highlights mb-4">
                    <div class="highlight-item">
                        <i class="fa-solid fa-check-circle text-accent me-2"></i>
                        Delivered <strong>3 full-cycle systems</strong> at a Tier-1 automotive manufacturer
                    </div>
                    <div class="highlight-item">
                        <i class="fa-solid fa-check-circle text-accent me-2"></i>
                        Reduced staffing cycle time by <strong>92%</strong> via real-time mapping
                    </div>
                    <div class="highlight-item">
                        <i class="fa-solid fa-check-circle text-accent me-2"></i>
                        <strong>Bangkit 2024</strong> Cloud Computing cohort - Google, GoTo, Traveloka
                    </div>
                </div>

                <div class="d-flex gap-3 flex-wrap">
                    <a href="#portfolio" class="btn btn-primary px-4 py-2">
                        <i class="fa-solid fa-folder-open me-2"></i>View Portfolio
                    </a>
                    <a href="#contact" class="btn btn-outline-primary px-4 py-2">
                        <i class="fa-solid fa-paper-plane me-2"></i>Contact Me
                    </a>
                    <a href="https://linkedin.com/in/fitria-novyanti-taufik" target="_blank" class="btn btn-light border px-3 py-2">
                        <i class="fa-brands fa-linkedin text-primary"></i>
                    </a>
                    <a href="https://github.com/fitrinyc" target="_blank" class="btn btn-light border px-3 py-2">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container fade-in">
        <h2 class="section-title">About Me</h2>

        <div class="row g-4 align-items-start">

            <!-- Left: Summary + Quote -->
            <div class="col-lg-7">
                <!-- Opening quote -->
                <div class="about-quote mb-4">
                    <i class="fa-solid fa-quote-left text-accent me-2" style="font-size:1.5rem;"></i>
                    <em>"I don't just write code - I build systems that solve real problems at scale."</em>
                </div>

                <p class="mb-3">I am a <strong>Web Developer & System Analyst</strong> with around 1 year of hands-on experience delivering production-grade systems across two industries: <span class="text-accent fw-bold">automotive manufacturing</span> and <span class="text-accent fw-bold">government</span>. I specialize in building scalable, full-stack web applications using <strong>Laravel, React.js, PHP</strong>, and <strong>REST APIs</strong> backed by robust databases.</p>

                <p class="mb-4">My work spans from digitizing manual workflows (reducing audit effort by 60%) to real-time production monitoring (cutting cycle time by 92%). I take pride in delivering clean, impactful code-and I'm actively looking for a <strong>Web Developer</strong> or <strong>System Analyst</strong> role where I can keep driving measurable business impact.</p>

                <!-- Key achievements row -->
                <div class="about-achievements">
                    <div class="achievement-pill">
                        <i class="fa-solid fa-industry me-2 text-accent"></i>
                        <span>Tier-1 Automotive Systems</span>
                    </div>
                    <div class="achievement-pill">
                        <i class="fa-solid fa-building-columns me-2 text-accent"></i>
                        <span>Government Sector</span>
                    </div>
                    <div class="achievement-pill">
                        <i class="fa-brands fa-google me-2 text-accent"></i>
                        <span>Bangkit Academy 2024</span>
                    </div>
                    <div class="achievement-pill">
                        <i class="fa-solid fa-trophy me-2 text-accent"></i>
                        <span>2x National Award Winner</span>
                    </div>
                </div>
            </div>

            <!-- Right: Info Card + Stats -->
            <div class="col-lg-5">
                <div class="card p-4 mb-4">
                    <h5 class="mb-3 fw-bold"><i class="fa-solid fa-id-card text-accent me-2"></i>Personal Information</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fa-solid fa-user text-accent me-2"></i> <strong>Name:</strong> Fitria Novyanti Taufik</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope text-accent me-2"></i> <a href="mailto:fitriclys@gmail.com" class="text-decoration-none text-dark">fitriclys@gmail.com</a></li>
                        <li class="mb-2"><i class="fa-solid fa-phone text-accent me-2"></i> (+62) 896-5583-6298</li>
                        <li class="mb-2"><i class="fa-solid fa-location-dot text-accent me-2"></i> Karawang, Jawa Barat</li>
                        <li class="mb-2"><i class="fa-brands fa-linkedin text-accent me-2"></i> <a href="https://linkedin.com/in/fitria-novyanti-taufik" target="_blank" class="text-decoration-none">fitria-novyanti-taufik</a></li>
                        <li><i class="fa-brands fa-github text-accent me-2"></i> <a href="https://github.com/fitrinyc" target="_blank" class="text-decoration-none">github.com/fitrinyc</a></li>
                    </ul>
                </div>

                <!-- Stats Row -->
                <div class="row g-3">
                    <div class="col-4">
                        <div class="stat-card text-center">
                            <div class="stat-number">8+</div>
                            <div class="stat-label">Projects</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card text-center">
                            <div class="stat-number">1+</div>
                            <div class="stat-label">Yrs Exp</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-card text-center">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Awards</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Skills Section -->
<section id="skills">
    <div class="container fade-in">
        <h2 class="section-title">Technical Skills</h2>
        <div class="row g-4">
            <!-- Backend -->
            <div class="col-md-4 col-sm-6">
                <x-card class="h-100 p-2" icon="fa-solid fa-server" title="Backend Development" description="Building robust RESTful APIs and server-side logic using PHP and Node.js.">
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-primary">Laravel</span>
                        <span class="badge bg-primary">PHP</span>
                        <span class="badge bg-primary">Node.js</span>
                        <span class="badge bg-primary">Express</span>
                    </div>
                </x-card>
            </div>
            <!-- Frontend -->
            <div class="col-md-4 col-sm-6">
                <x-card class="h-100 p-2" icon="fa-solid fa-code" title="Frontend Development" description="Creating interactive and responsive user interfaces.">
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-primary">React.js</span>
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-primary">HTML/CSS</span>
                        <span class="badge bg-primary">Bootstrap</span>
                    </div>
                </x-card>
            </div>
            <!-- Database -->
            <div class="col-md-4 col-sm-6">
                <x-card class="h-100 p-2" icon="fa-solid fa-database" title="Database Management" description="Designing and managing relational and NoSQL databases.">
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-primary">MS SQL Server</span>
                        <span class="badge bg-primary">MySQL</span>
                        <span class="badge bg-primary">Firestore</span>
                    </div>
                </x-card>
            </div>
            <!-- Cloud & DevOps -->
            <div class="col-md-4 col-sm-6">
                <x-card class="h-100 p-2" icon="fa-solid fa-cloud" title="Cloud Computing" description="Deploying scalable apps and managing cloud infrastructure.">
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-primary">GCP</span>
                        <span class="badge bg-primary">Cloud Run</span>
                        <span class="badge bg-primary">Firebase</span>
                        <span class="badge bg-primary">Git</span>
                    </div>
                </x-card>
            </div>
            <!-- IoT -->
            <div class="col-md-4 col-sm-6">
                <x-card class="h-100 p-2" icon="fa-solid fa-microchip" title="Internet of Things (IoT)" description="Integrating hardware sensors with web dashboards.">
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-primary">ESP32</span>
                        <span class="badge bg-primary">YOLOv11</span>
                        <span class="badge bg-primary">Shinobi CCTV</span>
                    </div>
                </x-card>
            </div>
            <!-- Others -->
            <div class="col-md-4 col-sm-6">
                <x-card class="h-100 p-2" icon="fa-solid fa-comments" title="Soft Skills & Languages" description="Effective communication and collaboration across teams.">
                    <div class="d-flex flex-wrap justify-content-center gap-2 mt-3">
                        <span class="badge bg-secondary">System Analysis</span>
                        <span class="badge bg-secondary">Indonesian (Native)</span>
                        <span class="badge bg-secondary">English</span>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" style="background-color: white;">
    <div class="container fade-in">
        <h2 class="section-title">Featured Projects</h2>
        <p class="text-center text-muted mb-5" style="margin-top: -35px;">
            <i class="fa-solid fa-lock me-1" style="color:var(--accent);"></i>
            Some projects are <strong>Internal/Confidential</strong> due to NDA policies - manufacturing & government sectors.
        </p>

        <!-- PUBLIC PROJECTS (always visible) -->
        <div class="row g-4" id="public-projects">

            <!-- Project: IoT YoloV11 -->
            <div class="col-md-6">
                <x-card class="h-100" image="{{ asset('images/WhatsApp Image 2026-06-21 at 15.25.04.jpg') }}" title="Sistem IoT YoloV11 - Deteksi Hama Padi" description="Designed and deployed an end-to-end IoT web dashboard ingesting live sensor data and YOLOv11 pest-detection results as the primary monitoring interface for rice farmers in Karawang. Validated via Blackbox Testing and UAT.">
                    <div class="mb-3">
                        <span class="badge bg-secondary">Laravel</span>
                        <span class="badge bg-secondary">React.js</span>
                        <span class="badge bg-secondary">MySQL</span>
                        <span class="badge bg-secondary">IoT</span>
                        <span class="badge bg-secondary">REST API</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted small mb-0"><i class="fa-solid fa-graduation-cap me-1"></i> Lead Developer - Final Thesis</p>
                        <span class="badge bg-success"><i class="fa-solid fa-star me-1"></i> Thesis</span>
                    </div>
                </x-card>
            </div>

            <!-- Project: SAPA -->
            <div class="col-md-6">
                <x-card class="h-100" image="{{ asset('images/WhatsApp Image 2026-06-21 at 15.01.56.jpg') }}" title="SAPA (Sign Language Personal Assistant)" description="A real-time web app built on Google Cloud services (Cloud Run, Firestore, Storage). Led the Cloud Computing team delivering a capstone project serving the deaf community, managing multiple RESTful API endpoints across microservices.">
                    <div class="mb-3">
                        <span class="badge bg-secondary">Node.js</span>
                        <span class="badge bg-secondary">Express</span>
                        <span class="badge bg-secondary">GCP</span>
                        <span class="badge bg-secondary">Firebase</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted small mb-0"><i class="fa-solid fa-users me-1"></i> Cloud Computing Team Lead</p>
                        <span class="badge bg-primary"><i class="fa-brands fa-google me-1"></i> Bangkit</span>
                    </div>
                </x-card>
            </div>

            <!-- Project: Sistem Penyiraman -->
            <div class="col-md-6">
                <x-card class="h-100" image="{{ asset('images/WhatsApp Image 2026-06-21 at 15.01.42.jpg') }}" title="Sistem Penyiraman Tanaman Otomatis Berbasis IoT" description="Engineered an ESP32-based automated irrigation system using Fuzzy Mamdani control logic, with remote monitoring and manual override capability via the Blynk IoT platform.">
                    <div class="mb-3">
                        <span class="badge bg-secondary">Laravel</span>
                        <span class="badge bg-secondary">Bootstrap</span>
                        <span class="badge bg-secondary">MySQL</span>
                        <span class="badge bg-secondary">ESP32</span>
                        <span class="badge bg-secondary">Blynk IoT</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted small mb-0"><i class="fa-solid fa-code me-1"></i> Developer</p>
                        <span class="badge bg-success"><i class="fa-solid fa-microchip me-1"></i> IoT</span>
                    </div>
                </x-card>
            </div>

            <!-- Project: Kas Digital -->
            <div class="col-md-6">
                <x-card class="h-100" image="{{ asset('images/WhatsApp Image 2026-06-21 at 15.21.22.jpg') }}" title="Sistem Kas Digital Organisasi" description="Developed a web-based digital cashbook application with Laravel, integrating Midtrans Payment Gateway (sandbox) to simulate real digital transactions for student organizations.">
                    <div class="mb-3">
                        <span class="badge bg-secondary">Laravel</span>
                        <span class="badge bg-secondary">Bootstrap</span>
                        <span class="badge bg-secondary">MySQL</span>
                        <span class="badge bg-secondary">Midtrans</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted small mb-0"><i class="fa-solid fa-code me-1"></i> Developer</p>
                    </div>
                </x-card>
            </div>

        </div><!-- end #public-projects -->

        <!-- TOGGLE BUTTON -->
        <div class="text-center mt-5">
            <button id="toggle-confidential-btn" onclick="toggleConfidential()" class="btn btn-outline-primary px-5 py-2">
                <i class="fa-solid fa-lock me-2"></i> Lihat Selengkapnya - Internal Projects (4)
            </button>
        </div>

        <!-- CONFIDENTIAL PROJECTS (hidden by default, text-only, no images) -->
        <div id="confidential-projects" style="display:none;">
            <div class="confidential-divider my-5">
                <div class="divider-line"></div>
                <span class="divider-label"><i class="fa-solid fa-lock me-2"></i>Internal / Confidential Projects</span>
                <div class="divider-line"></div>
            </div>
            <div class="row g-4">

                <!-- Manpower Mapping System -->
                <div class="col-md-6">
                    <div class="card h-100 confidential-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <div class="confidential-icon me-3">
                                    <i class="fa-solid fa-users-gear"></i>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <span class="badge badge-confidential"><i class="fa-solid fa-lock me-1"></i> Internal</span>
                                        <span class="badge bg-warning text-dark"><i class="fa-solid fa-industry me-1"></i> Manufacturing</span>
                                    </div>
                                    <h5 class="card-title mb-0">Manpower Mapping System</h5>
                                    <p class="text-muted small mb-0">PT ATI Indonesia - Jan 2026 - Jul 2026</p>
                                </div>
                            </div>
                            <p class="card-text text-muted small mb-3">Architected a real-time manpower visibility system for <strong>500+ operators across 100+ production lines</strong>. Reduced staffing report cycle time by <strong>92%</strong>. Built for a Tier-1 automotive manufacturer supplying major OEMs.</p>
                            <div>
                                <span class="badge bg-secondary">PHP Native</span>
                                <span class="badge bg-secondary">MS SQL Server</span>
                                <span class="badge bg-secondary">JavaScript</span>
                                <span class="badge bg-secondary">HTML/CSS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IT Asset Inventory System -->
                <div class="col-md-6">
                    <div class="card h-100 confidential-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <div class="confidential-icon me-3">
                                    <i class="fa-solid fa-boxes-stacked"></i>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <span class="badge badge-confidential"><i class="fa-solid fa-lock me-1"></i> Internal</span>
                                        <span class="badge bg-warning text-dark"><i class="fa-solid fa-industry me-1"></i> Manufacturing</span>
                                    </div>
                                    <h5 class="card-title mb-0">IT Asset Inventory System</h5>
                                    <p class="text-muted small mb-0">PT ATI Indonesia - Jan 2026 - Jul 2026</p>
                                </div>
                            </div>
                            <p class="card-text text-muted small mb-3">Digitised end-to-end IT asset tracking from procurement to disposal, cutting <strong>manual audit effort by 60%</strong>. Enabled real-time inventory reports and reduced administrative overhead significantly.</p>
                            <div>
                                <span class="badge bg-secondary">PHP Native</span>
                                <span class="badge bg-secondary">MS SQL Server</span>
                                <span class="badge bg-secondary">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Abnormality Tracking System -->
                <div class="col-md-6">
                    <div class="card h-100 confidential-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <div class="confidential-icon me-3">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <span class="badge badge-confidential"><i class="fa-solid fa-lock me-1"></i> Internal</span>
                                        <span class="badge bg-warning text-dark"><i class="fa-solid fa-industry me-1"></i> Manufacturing</span>
                                    </div>
                                    <h5 class="card-title mb-0">Abnormality Tracking System</h5>
                                    <p class="text-muted small mb-0">PT ATI Indonesia - Jan 2026 - Jul 2026</p>
                                </div>
                            </div>
                            <p class="card-text text-muted small mb-3">Centralised production issue reporting into a <strong>single dashboard</strong>, enabling supervisors to track, escalate, and resolve incidents more efficiently across departments.</p>
                            <div>
                                <span class="badge bg-secondary">PHP Native</span>
                                <span class="badge bg-secondary">MS SQL Server</span>
                                <span class="badge bg-secondary">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CCTV Monitoring System -->
                <div class="col-md-6">
                    <div class="card h-100 confidential-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <div class="confidential-icon me-3">
                                    <i class="fa-solid fa-video"></i>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <span class="badge badge-confidential"><i class="fa-solid fa-lock me-1"></i> Internal</span>
                                        <span class="badge bg-info text-dark"><i class="fa-solid fa-building-columns me-1"></i> Government</span>
                                    </div>
                                    <h5 class="card-title mb-0">Web-Based CCTV Monitoring System</h5>
                                    <p class="text-muted small mb-0">DISKOMINFO Kab. Karawang - Sep - Nov 2025</p>
                                </div>
                            </div>
                            <p class="card-text text-muted small mb-3">Integrated <strong>8 IP camera feeds</strong> (via Shinobi) into a unified web dashboard, replacing fragmented access across 3 separate government facilities.</p>
                            <div>
                                <span class="badge bg-secondary">Laravel</span>
                                <span class="badge bg-secondary">Shinobi CCTV</span>
                                <span class="badge bg-secondary">JavaScript</span>
                                <span class="badge bg-secondary">MS SQL Server</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end confidential row -->

            <!-- Collapse button -->
            <div class="text-center mt-4">
                <button onclick="toggleConfidential()" class="btn btn-light border px-4 py-2 text-muted">
                    <i class="fa-solid fa-chevron-up me-2"></i>Sembunyikan
                </button>
            </div>
        </div><!-- end #confidential-projects -->

    </div>
</section>

<!-- Experience Section -->
<section id="experience">
    <div class="container fade-in">
        <h2 class="section-title">Work & Organizational Experience</h2>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="timeline">
                    <!-- Exp 1 -->
                    <div class="timeline-item">
                        <div class="timeline-date">Jan 2026 - Jul 2026</div>
                        <h5 class="mb-1">Web Developer Intern</h5>
                        <p class="text-primary fw-bold mb-2"><i class="fa-solid fa-building me-1"></i> PT ATI Indonesia (On-site)</p>
                        <ul class="text-muted ps-3">
                            <li>Architected a Manpower Mapping System for real-time visibility of 500+ operators across 100+ lines, reducing reporting cycle time by 92%.</li>
                            <li>Developed an IT Asset Inventory System that digitized tracking, cutting manual audit effort by 60%.</li>
                            <li>Designed an Abnormality Tracking System centralizing issue reporting via a single dashboard.</li>
                            <li>Delivered 3 full-cycle systems by collaborating directly with stakeholders to gather requirements and validate workflows.</li>
                        </ul>
                        <div class="mt-2">
                            <span class="badge bg-light text-dark border">PHP Native</span>
                            <span class="badge bg-light text-dark border">MS SQL Server</span>
                            <span class="badge bg-light text-dark border">JS/HTML/CSS</span>
                        </div>
                    </div>
                    <!-- Exp 2 -->
                    <div class="timeline-item">
                        <div class="timeline-date">Sep 2025 - Nov 2025</div>
                        <h5 class="mb-1">IT Support Intern</h5>
                        <p class="text-primary fw-bold mb-2"><i class="fa-solid fa-building-columns me-1"></i> DISKOMINFO Kab. Karawang (On-site)</p>
                        <ul class="text-muted ps-3">
                            <li>Engineered a web-based CCTV Monitoring System integrating 8 IP camera feeds (via Shinobi) into a single dashboard.</li>
                            <li>Diagnosed and resolved 10+ network incidents (IP conflicts, AP failures) with zero external escalation.</li>
                            <li>Produced 2 technical user guides, accelerating staff onboarding and reducing repeat support requests.</li>
                        </ul>
                    </div>
                    <!-- Exp 3 -->
                    <div class="timeline-item">
                        <div class="timeline-date">Mar 2025 - Jul 2025</div>
                        <h5 class="mb-1">Product Research Intern</h5>
                        <p class="text-primary fw-bold mb-2"><i class="fa-solid fa-chart-pie me-1"></i> PT Tumbuh Global (Remote)</p>
                        <ul class="text-muted ps-3">
                            <li>Conducted SWOT-based benchmarking of 2 training programs against 15+ competitors.</li>
                            <li>Analyzed participant needs to recommend actionable insights for curriculum improvement.</li>
                        </ul>
                    </div>
                    <!-- Exp 4 (Bangkit) -->
                    <div class="timeline-item">
                        <div class="timeline-date">Sep 2024 - Dec 2024</div>
                        <h5 class="mb-1">Cloud Computing Cohort</h5>
                        <p class="text-primary fw-bold mb-2"><i class="fa-brands fa-google me-1"></i> Bangkit Academy 2024 (Google, GoTo, Traveloka)</p>
                        <ul class="text-muted ps-3">
                            <li>Selected for a national tech talent program (acceptance rate < 10%).</li>
                            <li>Led the Cloud Computing team in delivering a capstone project utilizing GCP services (Cloud Run, Firestore).</li>
                        </ul>
                    </div>
                    <!-- Org Exp -->
                    <div class="timeline-item">
                        <div class="timeline-date">2023 - 2024</div>
                        <h5 class="mb-1">General Treasurer & Student Mentor</h5>
                        <p class="text-primary fw-bold mb-2"><i class="fa-solid fa-users me-1"></i> Himpunan Mahasiswa Informatika & PKKMB UNSIKA</p>
                        <ul class="text-muted ps-3">
                            <li>Managed budgets across 14 organizational activities, ensuring transparency and collaboration with 53 members.</li>
                            <li>Mentored 150+ new students during university orientation, acting as a liaison between participants and the committee.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education & Awards Section -->
<section id="education" style="background-color: white;">
    <div class="container fade-in">
        <h2 class="section-title">Education, Certifications & Awards</h2>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <!-- Education -->
                <div class="card mb-4 p-4 border-start border-4 border-primary">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-md-center mb-3 mb-md-0">
                            <h4 class="text-primary mb-0">2022 - 2026</h4>
                        </div>
                        <div class="col-md-9 border-start border-2 border-accent ps-md-4">
                            <h5>Bachelor of Informatics <span class="badge bg-success ms-2">GPA: 3.86/4.00</span></h5>
                            <p class="fw-bold mb-1"><i class="fa-solid fa-graduation-cap text-accent me-1"></i> Universitas Singaperbangsa Karawang</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <!-- Certifications -->
                    <div class="col-md-6 mb-4">
                        <h4 class="mb-3"><i class="fa-solid fa-certificate text-accent me-2"></i> Certifications</h4>
                        <ul class="list-group list-group-flush shadow-sm rounded">
                            <li class="list-group-item p-3">
                                <strong>Pengembang Web Pratama</strong><br>
                                <span class="text-muted small">BPPTIK - Balai Pelatihan dan Pengembangan TIK</span>
                            </li>
                            <li class="list-group-item p-3">
                                <strong>Google Cloud Computing Foundations</strong><br>
                                <span class="text-muted small">Google (Issued via Bangkit Academy)</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Awards -->
                    <div class="col-md-6 mb-4">
                        <h4 class="mb-3"><i class="fa-solid fa-trophy text-accent me-2"></i> Awards</h4>
                        <ul class="list-group list-group-flush shadow-sm rounded">
                            <li class="list-group-item p-3">
                                <strong>Juara II IoT</strong><br>
                                <span class="text-muted small">Politeknik Negeri Bali</span>
                            </li>
                            <li class="list-group-item p-3">
                                <strong>Juara II Idea Project Semantik</strong><br>
                                <span class="text-muted small">HIMTIKA</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container fade-in">
        <h2 class="section-title">Get In Touch</h2>
        <div class="row">
            <div class="col-md-5 mb-5 mb-md-0">
                <div class="card p-4 h-100">
                    <h4 class="mb-4">Contact Information</h4>
                    <p class="text-muted mb-4">I'm actively seeking new opportunities. Whether you have a question or just want to say hi, I'll try my best to get back to you!</p>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light rounded-circle p-3 me-3 text-primary">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Email</h6>
                            <a href="mailto:fitriclys@gmail.com" class="text-muted small text-decoration-none">fitriclys@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light rounded-circle p-3 me-3 text-primary">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">LinkedIn</h6>
                            <a href="https://linkedin.com/in/fitria-novyanti-taufik" target="_blank" class="text-muted small text-decoration-none">linkedin.com/in/fitria-novyanti-taufik</a>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light rounded-circle p-3 me-3 text-primary">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Phone / WhatsApp</h6>
                            <p class="text-muted mb-0 small">(+62) 896-5583-6298</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light rounded-circle p-3 me-3 text-primary">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">GitHub</h6>
                            <a href="https://github.com/fitrinyc" target="_blank" class="text-muted small text-decoration-none">github.com/fitrinyc</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-light rounded-circle p-3 me-3 text-primary">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h6 class="mb-0">Location</h6>
                            <p class="text-muted mb-0 small">Karawang, Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7">
                <div class="card p-4 h-100">
                    <h4 class="mb-4">Send Me A Message</h4>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="john@example.com">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Job Opportunity">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your message here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 py-2 w-100">Send Message <i class="fa-solid fa-paper-plane ms-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
