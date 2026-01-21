<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kristel Mae C. Lim - Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="icon" type="image/jpeg" href="/images/kmllogo.jpg">
    <style>
        html { scroll-behavior: smooth; }
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; color: #2d3436; }
        
        header { background-color: #e8f5e9; padding: .4rem 0 0; }
        .menu { padding: .4rem 2rem; }
        header ul { border-bottom: 1px solid #c8e6c9; list-style: none; margin: 0; padding: 0; text-align: right; }
        header li { display: inline-block; }
        header li a { color: rgba(0,0,0,.6); display: block; height: 44px; text-decoration: none; border-radius: 5px; }
        header li.menu-item a { margin: 5px 0; height: 38px; line-height: 36px; padding: .4rem .65rem; }
        header li.menu-item a:hover { background-color: #66bb6a; color: white; }
        
        .logo { float: left; height: 44px; padding: .4rem .5rem; font-weight: bold; color: #2e7d32; }
        .menu-toggle { display: none; float: right; }
        .menu-toggle button { background-color: #a5d6a7; border: none; border-radius: 3px; color: white; cursor: pointer; font-size: 1.3rem; height: 36px; width: 40px; margin: 11px 0; }
        .menu-toggle button:hover { background-color: #66bb6a; }
        
        .heroe { max-width: 1100px; margin: 0 auto; padding: 2rem 1.75rem; }
        .profile-image { border: 4px solid #66bb6a; }
        
        section { 
            padding: 3rem 0;
            margin: 0;
        }
        
        section:nth-child(odd) {
            background: linear-gradient(135deg, #e8f5e9 0%, #f1f8f4 100%);
        }
        
        section:nth-child(even) {
            background-color: #ffffff;
        }
        
        .section-content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 1.75rem;
        }
        
        .section-title { color: #2e7d32; border-bottom: 3px solid #66bb6a; padding-bottom: 0.5rem; margin-bottom: 1.5rem; }
        
        .skill-tag { background-color: #e8f5e9; color: #2e7d32; padding: 0.5rem 1rem; border-radius: 20px; display: inline-block; margin: 0.3rem; font-size: 0.9rem; }
        .project-card, .award-item { border-left: 4px solid #66bb6a; padding-left: 1.5rem; margin-bottom: 2rem; }
        .project-card h3, .award-item h3 { color: #2e7d32; margin-bottom: 0.5rem; }
        .project-card h3:hover { background-color: #fdfdfd; padding: 0.5rem; border-radius: 5px; }
        
        .contact-link { color: #2e7d32; text-decoration: none; }
        .contact-link:hover { color: #66bb6a; text-decoration: underline; }
        
        footer { background-color: #66bb6a; color: white; text-align: center; padding: 2rem; }
        
        @media (max-width: 629px) {
            .menu-toggle { display: block; padding: 0 1rem; }
            .menu-item { background-color: #e8f5e9; border-top: 1px solid #c8e6c9; margin: 0 15px; width: calc(100% - 30px); }
            .menu-item.hidden { display: none; }
            .menu-item a:hover { background-color: #66bb6a; color: white; }
        }
    </style>
</head>
<body>

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
        </ul>
    </div>
    <div class="heroe" id="home">
        <div class="columns is-vcentered">
            <div class="column is-narrow">
                <figure class="image is-128x128">
                    <img class="is-rounded profile-image" src="/images/profile.jpg" alt="Kristel Mae C. Lim">
                </figure>
            </div>
            <div class="column">
                <h1 class="title is-2" style="color: #2e7d32;">Kristel Mae C. Lim</h1>
                <h2 class="subtitle is-5">Bachelor of Science in Information Technology Student</h2>
                <p class="subtitle is-6">West Visayas State University | Iloilo City, Philippines</p>
            </div>
        </div>
    </div>
</header>

<section id="skills">
    <div class="section-content">
        <h1 class="title is-3 section-title">Skills</h1>
        
        <div class="mb-5">
            <h3 class="title is-5" style="color: #2e7d32;">Programming Languages</h3>
            <span class="skill-tag">Python</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">C++</span>
            <span class="skill-tag">Java</span>
            <span class="skill-tag">PHP</span>
            <span class="skill-tag">Dart</span>
            <span class="skill-tag">Solidity</span>
        </div>

        <div class="mb-5">
            <h3 class="title is-5" style="color: #2e7d32;">Tools & Frameworks</h3>
            <span class="skill-tag">Node.js</span>
            <span class="skill-tag">Flutter</span>
            <span class="skill-tag">MongoDB</span>
            <span class="skill-tag">Web3.js</span>
            <span class="skill-tag">Truffle</span>
            <span class="skill-tag">Ganache</span>
            <span class="skill-tag">VS Code</span>
            <span class="skill-tag">Git/GitHub</span>
        </div>

        <div class="mb-5">
            <h3 class="title is-5" style="color: #2e7d32;">Creative Software</h3>
            <span class="skill-tag">Figma</span>
            <span class="skill-tag">Canva</span>
            <span class="skill-tag">Adobe Premiere</span>
            <span class="skill-tag">Adobe Illustrator</span>
            <span class="skill-tag">Adobe Photoshop</span>
            <span class="skill-tag">MediBang Paint</span>
        </div>

        <div class="mb-5">
            <h3 class="title is-5" style="color: #2e7d32;">Other Skills</h3>
            <span class="skill-tag">Blockchain Technology</span>
            <span class="skill-tag">Smart Contract Development</span>
            <span class="skill-tag">WordPress Management</span>
            <span class="skill-tag">SEO Optimization</span>
            <span class="skill-tag">Kali Linux</span>
        </div>
    </div>
</section>

<section id="projects">
    <div class="section-content">
        <h1 class="title is-3 section-title">Projects</h1>

        <div class="project-card">
            <a href="https://drive.google.com/file/d/1tu52Ws49DQ_qtpPAbv_im9hISlecI6lD/view?usp=sharing"><h3 class="title is-5">Vital Link Chain: Blockchain-Based Secure Shared Access System</h3></a>
            <p class="subtitle is-6" style="color: #66bb6a;">February - December 2025</p>
            <p>A decentralized healthcare records management system utilizing blockchain technology and smart contract-based access control for secure patient OPD records with integrated encryption protocols. Built with Flutter, Solidity, Node.js, Web3.js, Truffle, Ganache, and MongoDB.</p>
        </div>

        <div class="project-card">
            <a href="https://drive.google.com/file/d/1EoXmngUH1gCjN_ewbdm2Lg8Ig0Stk2p8/view?usp=sharing"><h3 class="title is-5">Techno Desk Works</h3></a>
            <p class="subtitle is-6" style="color: #66bb6a;">May - June 2024</p>
            <p>A freelance marketplace platform for students to offer professional services, featuring profile creation, portfolio building, messaging, and payment handling. Built with Dart using Flutter framework.</p>
        </div>

        <div class="project-card">
            <a href="https://drive.google.com/file/d/1SRl6d3bL6RtHsXId5p-CaH2uoQtkE6OP/view?usp=sharing"><h3 class="title is-5">Guardium</h3></a>
            <p class="subtitle is-6" style="color: #66bb6a;">May - June 2024</p>
            <p>A health monitoring wearable device concept for epilepsy patients that tracks vital parameters and alerts caregivers through mobile devices. Completed ideation phase using Figma.</p>
        </div>

        <div class="project-card">
            <a href="link to JUNE III"><h3 class="title is-5">June III</h3></a>
            <p class="subtitle is-6" style="color: #66bb6a;">March - May 2024</p>
            <p>An optimized inventory management system built with HTML, CSS, and PHP.</p>
        </div>

        <div class="project-card">
            <a href="link to OSSF"><h3 class="title is-5">OSSF (Opportunity Space for Student Freelancers)</h3></a>
            <p class="subtitle is-6" style="color: #66bb6a;">November - December 2023</p>
            <p>An online marketplace connecting businesses with student freelancers for remote work. Built with HTML, CSS, and JavaScript.</p>
        </div>

        <div class="project-card">
            <a href="link to You Matter"><h3 class="title is-5">You Matter Website</h3></a>
            <p class="subtitle is-6" style="color: #66bb6a;">November - December 2022</p>
            <p>A mental health support website providing curated music and videos for emotional wellbeing. Built with HTML and CSS.</p>
        </div>
    </div>
</section>

<section id="awards">
    <div class="section-content">
        <h1 class="title is-3 section-title">Awards & Recognition</h1>

        <div class="award-item">
            <h3 class="title is-5" style="color: #2e7d32;">Top 23 National Finalist</h3>
            <p>L'Oréal Brandstorm Competition</p>
        </div>

        <div class="award-item">
            <h3 class="title is-5" style="color: #2e7d32;">Valedictorian</h3>
            <p>Escalante National High School (Elementary & Senior High School)</p>
        </div>

        <div class="award-item">
            <h3 class="title is-5" style="color: #2e7d32;">Division and Regional Federated SSG President</h3>
            <p>Escalante City, Western Visayas</p>
        </div>

        <div class="award-item">
            <h3 class="title is-5" style="color: #2e7d32;">Academic Excellence Awards</h3>
            <p>Silver Medalist (A.Y. 2024-2025) | Gold Medalist (A.Y. 2023-2024) | Silver Medalist (A.Y. 2022-2023)</p>
        </div>

        <div class="award-item">
            <h3 class="title is-5" style="color: #2e7d32;">Conference Presentation</h3>
            <p>ICCC 2025 International Conference - National Taipei University of Technology, Taiwan (December 18-20, 2025)</p>
        </div>
    </div>
</section>

<section id="experience">
    <div class="section-content">
        <h1 class="title is-3 section-title">Work Experience & Leadership</h1>

        <div class="project-card">
            <h3 class="title is-5">Digital Media Specialist</h3>
            <p class="subtitle is-6" style="color: #66bb6a;">2020 - Present</p>
            <p>Manage WordPress content systems and optimize SEO strategies for international clients across multiple industries. Create and execute social media campaigns for global audiences.</p>
        </div>

        <div class="project-card">
            <h3 class="title is-5">Managing Editor, School Publication</h3>
            <p class="subtitle is-6" style="color: #66bb6a;">2024 - 2025</p>
            <p>Oversee editorial operations and manage publication workflows, coordinating with writers, designers, and photographers.</p>
        </div>

        <div class="project-card">
            <h3 class="title is-5">Associate Editor, School Publication</h3>
            <p class="subtitle is-6" style="color: #66bb6a;">2023 - 2024</p>
            <p>Managed editorial content coordination, reviewing and editing articles for clarity and accuracy.</p>
        </div>

        <div class="project-card">
            <h3 class="title is-5">Illustrator, School Publication</h3>
            <p class="subtitle is-6" style="color: #66bb6a;">2022 - 2023</p>
            <p>Created original illustrations for publication segments while collaborating with writers and editors to develop visual solutions that enhanced narratives.</p>
        </div>

        <div class="project-card">
            <h3 class="title is-5">Student Government President</h3>
            <p class="subtitle is-6" style="color: #66bb6a;">2020 - 2021</p>
            <p>Led student government operations and managed all social media accounts, developing digital content strategies.</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="section-content">
        <h1 class="title is-3 section-title">Get In Touch</h1>
        <div class="content">
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

<script>
    document.getElementById("menuToggle").onclick = function() {
        document.querySelectorAll('.menu-item').forEach(item => item.classList.toggle("hidden"));
    };
</script>

</body>
</html>