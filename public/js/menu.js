
    function showContent(contentId) {
        // Hide all content sections
        var contentSections = document.querySelectorAll('.content-section');
        contentSections.forEach(function(section) {
            section.classList.add('d-none');
        });

        // Show the selected content section
        if (contentId) {
            var selectedContent = document.getElementById(contentId);
            selectedContent.classList.remove('d-none');
        } else {
            // If no contentId is provided, show the default content
            var defaultContent = document.getElementById('default-content');
            defaultContent.classList.remove('d-none');
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        // Mengambil semua link navigasi
        var navLinks = document.querySelectorAll('.nav-item.nav-link');

        // Menambahkan event listener ke setiap link navigasi
        navLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                // Mengambil id konten yang sesuai dari href link
                var targetId = this.getAttribute('href').substring(1); // Menghilangkan tanda '#'

                // Menampilkan konten yang sesuai
                showContent(targetId);

                // Mencegah default behavior dari link (berpindah halaman)
                event.preventDefault();
            });
        });

        // Menambahkan event listener ke link default untuk menampilkan konten default
        var defaultLink = document.querySelector('#profil-link'); // Anda dapat mengganti ini dengan link default lainnya
        defaultLink.addEventListener('click', function(event) {
            // Menampilkan konten default
            showContent('profil-content');

            // Mencegah default behavior dari link (berpindah halaman)
            event.preventDefault();
        });

        var absensiLink = document.querySelector('#absensi-link');
        absensiLink.addEventListener('click', function(event) {
            // Menampilkan konten absensi
            showContent('absensi-content');

            // Mencegah default behavior dari link (berpindah halaman)
            event.preventDefault();
        });

        var absensiLink = document.querySelector('#absen-keluar-link');
        absensiLink.addEventListener('click', function(event) {
            // Menampilkan konten absensi
            showContent('absen-keluar-content');

            // Mencegah default behavior dari link (berpindah halaman)
            event.preventDefault();
        });

        var cutiLink = document.querySelector('#cuti-link');
        cutiLink.addEventListener('click', function(event) {
            // Menampilkan konten cuti
            showContent('cuti-content');

            // Mencegah default behavior dari link (berpindah halaman)
            event.preventDefault();
        });

        var infoJabatanLink = document.querySelector('#info-jabatan-link');
        infoJabatanLink.addEventListener('click', function(event) {
            // Menampilkan konten info jabatan
            showContent('info-jabatan-content');

            // Mencegah default behavior dari link (berpindah halaman)
            event.preventDefault();
        });

        var riwayatGajiLink = document.querySelector('#riwayat-gaji-link');
        riwayatGajiLink.addEventListener('click', function(event) {
            // Menampilkan konten riwayat gaji
            showContent('riwayat-gaji-content');

            // Mencegah default behavior dari link (berpindah halaman)
            event.preventDefault();
        });

        // Memanggil fungsi showContent tanpa parameter untuk menampilkan konten default ketika dokumen dimuat
        showContent(null);
    });
