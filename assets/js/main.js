// Animasi sederhana saat halaman dimuat
document.addEventListener("DOMContentLoaded", function() {
  // Efek fade-in untuk elemen (opsional)
  const fadeInElements = document.querySelectorAll('.fade-in');
  fadeInElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    
    setTimeout(() => {
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    }, 100);
  });
});

// Alert demo
function showLoginAlert() {
  alert("Login berhasil! Redirect ke dashboard...");
}