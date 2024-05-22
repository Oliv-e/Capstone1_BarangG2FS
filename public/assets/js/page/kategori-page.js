function showCategory(category, element) {
    // Sembunyikan semua kategori
    const categories = document.querySelectorAll('.category');
    categories.forEach(cat => cat.style.display = 'none');

    // Tampilkan kategori yang dipilih
    const activeCategory = document.getElementById(category);
    if (activeCategory) {
        activeCategory.style.display = 'block';
    }

    // Hapus kelas 'active' dari semua tombol kategori
    const categoryLinks = document.querySelectorAll('.category-link');
    categoryLinks.forEach(link => link.classList.remove('active'));

    // Tambahkan kelas 'active' ke tombol yang diklik
    if (element) {
        element.classList.add('active');
    }
}

// Tampilkan kategori pertama secara default saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
    showCategory('ruang-tamu', document.querySelector('.category-link'));
});





