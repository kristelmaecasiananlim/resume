<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristel Mae C. Lim - Portfolio</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="icon" type="image/jpeg" href="<?= base_url('images/kmllogo.jpg') ?>">
</head>
<body>

<div class="cursor"></div>
<div class="cursor-dot"></div>

<header>
    <div class="menu">
        <ul>
            <li class="logo">KML</li>
            <li class="menu-toggle"><button id="menuToggle">&#9776;</button></li>
            <li class="menu-item hidden"><a href="#home">Home</a></li>
            <li class="menu-item hidden"><a href="#skills">Skills</a></li>
            <li class="menu-item hidden"><a href="#projects">Projects</a></li>
            <li class="menu-item hidden"><a href="#awards">Awards</a></li>
            <li class="menu-item hidden"><a href="#experience">Experience</a></li>
            <li class="menu-item hidden"><a href="#contact">Contact</a></li>

            <?php if(session()->get('isAdmin')): ?>
                <li class="menu-item"><a href="<?= base_url('admin/dashboard') ?>">Admin Dashboard</a></li>

                <li class="menu-item"><a href="<?= base_url('admin/logout') ?>">Logout</a></li>
            <?php else: ?>
                <li class="menu-item"><a href="<?= base_url('admin/login') ?>">Admin Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
        </ul>
    </div>

    <div class="heroe" id="home">
        <div class="columns is-vcentered">
            <div class="column is-narrow">
                <figure class="image custom-profile-size">
                    <img class="is-rounded profile-image" src="<?= base_url('images/profile.jpg') ?>" alt="Kristel Mae C. Lim">
                </figure>
            </div>
            <div class="column">
                <h1 class="title is-1" style="color: #2e7d32;">Kristel Mae C. Lim</h1>
                <h2 class="subtitle is-4">Bachelor of Science in Information Technology Student</h2>
                <p class="subtitle is-5">West Visayas State University | Iloilo City, Philippines</p>
            </div>
        </div>
    </div>
</header>

<section id="skills" class="fadeInUp">
    <div class="section-content">
        <h1 class="title is-3 section-title">Skills</h1>
        
        <div class="mb-5">
            <h3 class="title is-4" style="color: #2e7d32;">Programming Languages</h3>
            <div class="skills-scroll-wrapper">
                <div class="skills-scroll">
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">C++</span>
                    <span class="skill-tag">Java</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Dart</span>
                    <span class="skill-tag">Solidity</span>
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">C++</span>
                    <span class="skill-tag">Java</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Dart</span>
                    <span class="skill-tag">Solidity</span>
                    <span class="skill-tag">Python</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">C++</span>
                    <span class="skill-tag">Java</span>
                    <span class="skill-tag">PHP</span>
                    <span class="skill-tag">Dart</span>
                    <span class="skill-tag">Solidity</span>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h3 class="title is-4" style="color: #2e7d32;">Tools & Frameworks</h3>
            <div class="skills-scroll-wrapper">
                <div class="skills-scroll">
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">Flutter</span>
                    <span class="skill-tag">MongoDB</span>
                    <span class="skill-tag">Web3.js</span>
                    <span class="skill-tag">Truffle</span>
                    <span class="skill-tag">Ganache</span>
                    <span class="skill-tag">VS Code</span>
                    <span class="skill-tag">Git/GitHub</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">Flutter</span>
                    <span class="skill-tag">MongoDB</span>
                    <span class="skill-tag">Web3.js</span>
                    <span class="skill-tag">Truffle</span>
                    <span class="skill-tag">Ganache</span>
                    <span class="skill-tag">VS Code</span>
                    <span class="skill-tag">Git/GitHub</span>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h3 class="title is-4" style="color: #2e7d32;">Creative Software</h3>
            <div class="skills-scroll-wrapper">
                <div class="skills-scroll">
                    <span class="skill-tag">Figma</span>
                    <span class="skill-tag">Canva</span>
                    <span class="skill-tag">Adobe Premiere</span>
                    <span class="skill-tag">Adobe Illustrator</span>
                    <span class="skill-tag">Adobe Photoshop</span>
                    <span class="skill-tag">MediBang Paint</span>
                    <span class="skill-tag">Figma</span>
                    <span class="skill-tag">Canva</span>
                    <span class="skill-tag">Adobe Premiere</span>
                    <span class="skill-tag">Adobe Illustrator</span>
                    <span class="skill-tag">Adobe Photoshop</span>
                    <span class="skill-tag">MediBang Paint</span>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h3 class="title is-4" style="color: #2e7d32;">Other Skills</h3>
            <div class="skills-scroll-wrapper">
                <div class="skills-scroll">
                    <span class="skill-tag">Blockchain Technology</span>
                    <span class="skill-tag">Smart Contract Development</span>
                    <span class="skill-tag">WordPress Management</span>
                    <span class="skill-tag">SEO Optimization</span>
                    <span class="skill-tag">Kali Linux</span>
                    <span class="skill-tag">Blockchain Technology</span>
                    <span class="skill-tag">Smart Contract Development</span>
                    <span class="skill-tag">WordPress Management</span>
                    <span class="skill-tag">SEO Optimization</span>
                    <span class="skill-tag">Kali Linux</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="fadeInUp">
    <div class="section-content">
        <h1 class="title is-3 section-title">Projects</h1>

        <?php if(!empty($projects)): ?>
            <?php $cardIndex = 0; foreach($projects as $project): ?>
                <?php if($project['project_url']): ?>
                    <a href="<?= htmlspecialchars($project['project_url']) ?>">
                <?php endif; ?>
                        <div class="project-card" style="--card-delay: <?= $cardIndex * 0.1 ?>s;">
                            <?php if($project['logo_path']): ?>
                                <img src="<?= base_url($project['logo_path']) ?>" alt="<?= htmlspecialchars($project['title']) ?> Logo" class="project-logo">
                            <?php endif; ?>
                            <div class="project-content">
                                <h3 class="title is-4" style="color: #2e7d32;"><?= htmlspecialchars($project['title']) ?></h3>
                                <p class="subtitle is-5" style="color: #66bb6a;"><?= htmlspecialchars($project['date_range']) ?></p>
                                <p style="color: black"><?= htmlspecialchars($project['description']) ?></p>
                            </div>
                        </div>
                <?php if($project['project_url']): ?>
                    </a>
                <?php endif; ?>
            <?php $cardIndex++; endforeach; ?>
        <?php else: ?>
            <p>No projects available.</p>
        <?php endif; ?>
    </div>
</section>


<section id="awards" class="fadeInUp">
    <div class="section-content">
        <h1 class="title is-3 section-title">Awards & Recognition</h1>

        <a href="https://www.facebook.com/share/p/1FY7rmajLF/" target="_blank" class="award-item-link">
            <div class="award-item">
                <h3 class="title is-4">Top 23 National Finalist</h3>
                <p>L'Oréal Brandstorm Competition</p>
            
                <div class="award-preview">
                    <img src="<?= base_url('images/awards/loreal-brandstorm.jpg') ?>" alt="L'Oréal Brandstorm">
                    <div class="award-preview-content">
                        <div class="award-preview-title">L'Oréal Brandstorm 2024</div>
                        <p class="award-preview-description">
                            Proud to be among the Top 23 National Finalists in the prestigious L'Oréal Brandstorm Competition, showcasing innovative business solutions and marketing strategies.
                        </p>
                    </div>
                </div>
            </div>
        </a>

        <div class="award-item" style="--item-delay: 0s;">
            <h3 class="title is-4">Valedictorian</h3>
            <p>Escalante National High School (Elementary & Senior High School)</p>
            
            <div class="award-preview">
                <div class="award-preview-content">
                    <div class="award-preview-title">Valedictorian Achievement</div>
                    <p class="award-preview-description">
                        Graduated as Valedictorian from Escalante National High School, achieving academic excellence in both Elementary and Senior High School.
                    </p>
                </div>
            </div>
        </div>

        <div class="award-item" style="--item-delay: 0.1s;">
            <h3 class="title is-4">Division and Regional Federated SSG President</h3>
            <p>Escalante City, Western Visayas</p>
            
            <div class="award-preview">
                <div class="award-preview-content">
                    <div class="award-preview-title">SSG Leadership</div>
                    <p class="award-preview-description">
                        Served as Division and Regional Federated SSG President, leading student governance initiatives across Escalante City and Western Visayas.
                    </p>
                </div>
            </div>
        </div>

        <div class="award-item" style="--item-delay: 0.2s;">
            <h3 class="title is-4">Academic Excellence Awards</h3>
            <p>Silver Medalist (A.Y. 2024-2025) | Gold Medalist (A.Y. 2023-2024) | Silver Medalist (A.Y. 2022-2023)</p>
            
            <div class="award-preview">
                <div class="award-preview-content">
                    <div class="award-preview-title">Academic Excellence</div>
                    <p class="award-preview-description">
                        Consistently recognized for outstanding academic performance, earning Gold and Silver medals across multiple academic years at West Visayas State University.
                    </p>
                </div>
            </div>
        </div>

        <a href="https://www.facebook.com/share/p/1GWu54Ltpo/" target="_blank" class="award-item-link">
            <div class="award-item">
                <h3 class="title is-4">Conference Presentation</h3>
                <p>ICCC 2025 International Conference - National Taipei University of Technology, Taiwan (December 18-20, 2025)</p>
                
                <div class="award-preview">
                    <img src="<?= base_url('images/awards/iccc.jpg') ?>" alt="ICCC 2025">
                    <div class="award-preview-content">
                        <!-- <div class="award-preview-title">ICCC 2025 International Conference</div>
                        <p class="award-preview-description">
                            Selected to present research at the International Conference on Creative Computing at National Taipei University of Technology, Taiwan.
                        </p>
                    </div> -->
                </div>
            </div>
        </a>
    </div>
</section>

<section id="experience" class="fadeInUp">
    <div class="section-content">
        <h1 class="title is-3 section-title">Work Experience & Leadership</h1>

        <div class="project-card" style="--card-delay: 0s;">
            <img src="<?= base_url('images/experience-logo/k-creates-for-you-logo.png') ?>" alt="K Creates For You Logo" class="project-logo">
            <div class="project-content">
                <h3 class="title is-4" style="color: #2e7d32;">Digital Media Specialist</h3>
                <p class="subtitle is-5" style="color: #559b59;">2020 - Present</p>
                <p>Manage WordPress content systems and optimize SEO strategies for international clients across multiple industries. Create and execute social media campaigns for global audiences.</p>
            </div>
        </div>

        <div class="project-card" style="--card-delay: 0.1s;">
            <img src="<?= base_url('images/experience-logo/icon-logo.png') ?>" alt="ICON Logo" class="project-logo">
            <div class="project-content">
                <h3 class="title is-4" style="color: #2e7d32;">Managing Editor, School Publication</h3>
                <p class="subtitle is-5" style="color: #66bb6a;">2024 - 2025</p>
                <p>Oversee editorial operations and manage publication workflows, coordinating with writers, designers, and photographers.</p>
            </div>
        </div>

        <div class="project-card" style="--card-delay: 0.2s;">
            <img src="<?= base_url('images/experience-logo/icon-logo.png') ?>" alt="ICON Logo" class="project-logo">
            <div class="project-content">
                <h3 class="title is-4" style="color: #2e7d32;">Associate Editor, School Publication</h3>
                <p class="subtitle is-5" style="color: #66bb6a;">2023 - 2024</p>
                <p>Managed editorial content coordination, reviewing and editing articles for clarity and accuracy.</p>
            </div>
        </div>

        <div class="project-card" style="--card-delay: 0.3s;">
            <img src="<?= base_url('images/experience-logo/icon-logo.png') ?>" alt="ICON Logo" class="project-logo">
            <div class="project-content">
                <h3 class="title is-4" style="color: #2e7d32;">Illustrator, School Publication</h3>
                <p class="subtitle is-5" style="color: #66bb6a;">2022 - 2023</p>
                <p>Created original illustrations for publication segments while collaborating with writers and editors to develop visual solutions that enhanced narratives.</p>
            </div>
        </div>

        <div class="project-card" style="--card-delay: 0.4s;">
            <img src="<?= base_url('images/experience-logo/ssg-logo.png') ?>" alt="SSG Logo" class="project-logo">
            <div class="project-content">
                <h3 class="title is-4" style="color: #2e7d32;">Student Government President</h3>
                <p class="subtitle is-5" style="color: #66bb6a;">2020 - 2021</p>
                <p>Led student government operations and managed all social media accounts, developing digital content strategies.</p>
            </div>
        </div>
    </div>
</section>

<section id="certifications" class="fadeInUp">
    <div class="section-content">
        <h1 class="title is-3 section-title">Certifications & Training</h1>

        <div class="award-item" style="--item-delay: 0s;">
            <h3 class="title is-4">MIKROTIK Basic and Advanced Router OS Training</h3>
            <p>April 15-19, 2024</p>
            
            <div class="award-preview">
                <div class="award-preview-content">
                    <div class="award-preview-title">MIKROTIK Certifications</div>
                    <p class="award-preview-description">
                        Completed comprehensive MIKROTIK training covering basic and advanced Router OS configuration. Earned the following certifications:
                    </p>
                    <ul style="color: black; margin-left: 1.5rem; margin-top: 0.75rem;">
                        <li>Mikrotik Certified Network Associate (MTCNA)</li>
                        <li>Mikrotik Certified Routing Engineer (MTCRE)</li>
                        <li>Mikrotik Certified User Management Engineer (MTCUME)</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="award-item" style="--item-delay: 0.1s;">
            <h3 class="title is-4">CISCO Networking Academy</h3>
            <p>Networking & Cybersecurity Training</p>
            
            <div class="award-preview">
                <div class="award-preview-content">
                    <div class="award-preview-title">CISCO Academy Courses</div>
                    <p class="award-preview-description">
                        Completed multiple courses through CISCO Networking Academy covering networking fundamentals and cybersecurity:
                    </p>
                    <ul style="color: black; margin-left: 1.5rem; margin-top: 0.75rem;">
                        <li>CCNA Introduction to Networks</li>
                        <li>CCNA Switching, Routing, and Wireless Essentials</li>
                        <li>Introduction to Cybersecurity</li>
                        <li>Junior Cybersecurity Analyst Career Path</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="fadeInUp">
    <?php if (session()->getFlashdata('success')): ?>
    <div style="max-width: 700px; margin: 0 auto 1rem; padding: 1rem; background-color: #c8e6c9; color: #2e7d32; border-radius: 8px; text-align: center;">
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
    <div style="max-width: 700px; margin: 0 auto 1rem; padding: 1rem; background-color: #ffcdd2; color: #c62828; border-radius: 8px; text-align: center;">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>

    <div class="section-content">
        <h1 class="title is-3 section-title" style="text-align: center;">Get In Touch</h1>
        
        <form class="contact-form" action="<?= base_url('contact/submit') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
        
        <div class="content contact-info">
            <p><strong>Email:</strong> <a href="mailto:kristelmae.lim@wvsu.edu.ph" class="contact-link">kristelmae.lim@wvsu.edu.ph</a></p>
            <p><strong>Phone:</strong> <a href="tel:09953151697" class="contact-link">09953151697</a></p>
            <p><strong>GitHub:</strong> <a href="https://github.com/kristelmaecasiananlim" target="_blank" class="contact-link">github.com/kristelmaecasiananlim</a></p>
            <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/kristel-mae-lim-7515b323b/" target="_blank" class="contact-link">linkedin.com/in/kristel-mae-lim</a></p>
            <p><strong>Affiliations:</strong> Base Philippines, Web3 Iloilo</p>
        </div>
    </div>
</section>

<footer>
    <p>&copy; 2025 Kristel Mae C. Lim. All rights reserved.</p>
</footer>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Custom cursor functionality
    const cursor = document.querySelector('.cursor');
    const cursorDot = document.querySelector('.cursor-dot');

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
        cursorDot.style.left = e.clientX + 'px';
    cursorDot.style.top = e.clientY + 'px';
});

document.querySelectorAll('a, button, .project-card').forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
});

// Mobile menu toggle
const menuToggle = document.getElementById("menuToggle");
if (menuToggle) {
    menuToggle.onclick = function() {
        document.querySelectorAll('.menu-item').forEach(item => {
            item.classList.toggle("hidden");
        });
    };
}
});
</script>
<script src="<?= base_url('js/animations.js') ?>"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section[id], .heroe');
    const menuLinks = document.querySelectorAll('header .menu-item a[href^="#"]');
    
    function removeActiveClasses() {
        menuLinks.forEach(link => link.classList.remove('active'));
    }
    
    function addActiveClass(id) {
        removeActiveClasses();
        const activeLink = document.querySelector(`header .menu-item a[href="#${id}"]`);
        if (activeLink) activeLink.classList.add('active');
    }
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id || 'home';
                addActiveClass(id);
            }
        });
    }, {
        root: null,
        rootMargin: '-50% 0px -50% 0px',
        threshold: 0
    });
    
    sections.forEach(section => observer.observe(section));
    addActiveClass('home');
});
</script>
</body>
</html>
````