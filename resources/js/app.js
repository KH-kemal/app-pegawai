import './bootstrap'; // Baris ini biasanya sudah ada

// Inisialisasi AOS (Animate on Scroll)
// Kode ini akan berjalan setelah library AOS dari CDN dimuat
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 700,
        once: true,
    });
});


// Kode untuk Navigasi Aktif saat Scroll
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('main section'); // Lebih spesifik ke section di dalam main
    const navLinks = document.querySelectorAll('nav a[href^="#"]');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    // Reset semua link dulu
                    link.classList.remove('bg-gray-900', 'text-white');
                    link.classList.add('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
                    
                    // Tambahkan kelas aktif ke link yang cocok
                    if (link.getAttribute('href').substring(1) === entry.target.id) {
                        link.classList.add('bg-gray-900', 'text-white');
                        link.classList.remove('text-gray-300', 'hover:bg-gray-700', 'hover:text-white');
                    }
                });
            }
        });
    }, { rootMargin: "-50% 0px -50% 0px" });

    sections.forEach(section => {
        observer.observe(section);
    });
});