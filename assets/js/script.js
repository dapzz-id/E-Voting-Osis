document.querySelector('.sidebar header .toggle').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('close');
    
    // Simpan status toggle ke localStorage
    const isClosed = sidebar.classList.contains('close');
    localStorage.setItem('sidebarClosed', isClosed);
});

// Baca status toggle dari localStorage saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    const isClosed = localStorage.getItem('sidebarClosed') === 'true';
    const sidebar = document.querySelector('.sidebar');
    if (isClosed) {
        sidebar.classList.add('close');
    } else {
        sidebar.classList.remove('close');
    }
});