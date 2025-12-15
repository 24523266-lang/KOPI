// Toggle sidebar di mobile (opsional)
document.addEventListener("DOMContentLoaded", function() {
  // Efek hover pada sidebar item
  const sidebarItems = document.querySelectorAll('.sidebar nav a');
  sidebarItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      item.style.backgroundColor = '#e8f5e9';
    });
    item.addEventListener('mouseleave', () => {
      if (!item.classList.contains('active')) {
        item.style.backgroundColor = 'transparent';
      }
    });
  });

  // Toggle calendar day selection
  const days = document.querySelectorAll('.day');
  days.forEach(day => {
    day.addEventListener('click', function() {
      days.forEach(d => d.classList.remove('selected'));
      this.classList.add('selected');
    });
  });

  // Toggle switch for notifications (contoh)
  const toggles = document.querySelectorAll('.toggle-switch');
  toggles.forEach(toggle => {
    toggle.addEventListener('click', function() {
      this.classList.toggle('active');
    });
  });
});