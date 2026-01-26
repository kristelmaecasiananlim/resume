// Scroll animations using Intersection Observer
document.addEventListener('DOMContentLoaded', function() {
    // Configure intersection observer options for scroll entrance animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    // Create intersection observer for animations
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                // Stop observing after animation plays
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all sections for scroll animations
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        // Add fadeInUp class for animation
        if (!section.classList.contains('fadeInUp')) {
            section.classList.add('fadeInUp');
        }
        observer.observe(section);
    });

    // Also observe dashboard and login containers
    const containers = document.querySelectorAll('.login-container, .dashboard-header, .dashboard-content');
    containers.forEach(container => {
        if (!container.classList.contains('fadeInUp')) {
            container.classList.add('fadeInUp');
        }
        observer.observe(container);
    });

    // ===== Active Section Indicator in Menu =====
    const menuLinks = document.querySelectorAll('header a[href^="#"]');
    
    // Get all elements that should be tracked for menu indicator (sections + home div)
    const sections_for_indicator = document.querySelectorAll('[id="home"], [id="skills"], [id="projects"], [id="awards"], [id="experience"], [id="contact"]');
    
    // Intersection observer for detecting current section
    const sectionObserverOptions = {
        threshold: [0, 0.25, 0.5],
        rootMargin: '-100px 0px -66% 0px'
    };
    
    const sectionObserver = new IntersectionObserver(function(entries) {
        // Find the section that is most visible
        let mostVisibleSection = null;
        let maxVisibility = 0;
        
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const visibility = entry.intersectionRatio;
                if (visibility > maxVisibility) {
                    maxVisibility = visibility;
                    mostVisibleSection = entry.target.id;
                }
            }
        });
        
        // Update active menu item if a section is visible
        if (mostVisibleSection) {
            menuLinks.forEach(link => link.classList.remove('active'));
            const activeLink = document.querySelector(`header a[href="#${mostVisibleSection}"]`);
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    }, sectionObserverOptions);
    
    // Observe all sections for current section tracking
    sections_for_indicator.forEach(section => {
        sectionObserver.observe(section);
    });
});
