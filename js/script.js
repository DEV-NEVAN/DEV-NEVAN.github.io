const mainImage = document.getElementById('mainImage');

// Mengganti gambar saat kursor masuk
mainImage.addEventListener('mouseenter', function() {
    mainImage.src = 'image/TES5.png'; // Gambar baru
});

// Mengembalikan gambar ke awal saat kursor keluar
mainImage.addEventListener('mouseleave', function() {
    mainImage.src = 'image/TES4.png'; // Gambar awal
});