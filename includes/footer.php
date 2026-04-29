    <!-- FOOTER -->
    <footer>
        <div class="footer-grid">
            <div>
                <div class="footer-brand-logo">🌴 Explore<span>Java</span></div>
                <p class="footer-desc">Panduan wisata lengkap Pulau Jawa — dari pantai eksotis, gunung berapi megah,
                    hingga warisan budaya yang tak ternilai.</p>
                <div class="socials" style="margin-top:1.5rem">
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="social-btn"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Destinasi</h4>
                <ul>
                    <li><a href="#">Pantai & Laut</a></li>
                    <li><a href="#">Pulau-Pulau</a></li>
                    <li><a href="#">Pegunungan</a></li>
                    <li><a href="#">Candi & Budaya</a></li>
                    <li><a href="#">Taman Nasional</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Provinsi</h4>
                <ul>
                    <li><a href="#">Banten</a></li>
                    <li><a href="#">Jawa Barat</a></li>
                    <li><a href="#">Jawa Tengah</a></li>
                    <li><a href="#">DI Yogyakarta</a></li>
                    <li><a href="#">Jawa Timur</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Info</h4>
                <ul>
                    <li><a href="#">Tips Perjalanan</a></li>
                    <li><a href="#">Kuliner Khas</a></li>
                    <li><a href="#">Oleh-Oleh</a></li>
                    <li><a href="#">Kalender Event</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-sig">© 2026 ExploreJava · Curated & Crafted by <span>Zalldi Valenci</span> — Semua hak
                dilindungi.</div>
            <div style="font-size:0.75rem;color:rgba(255,255,255,0.35)">Made with ❤️ for Nusantara</div>
        </div>
    </footer>

    <!-- FAB MOBILE -->
    <button class="fab-mobile" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></button>

    <script>
        // ── NAV SCROLL
        window.addEventListener('scroll', () => {
            document.getElementById('navbar').classList.toggle('solid', window.scrollY > 80);
        });

        // ── SCROLL REVEAL
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('up'); } });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => obs.observe(el));

        // ── PHOTO UPLOAD SYSTEM (sec img based)
        function triggerUpload(sectionEl) {
            const input = sectionEl.querySelector('input[type=file]');
            if (input) input.click();
        }

        async function previewImg(input) {
            const section = input.closest('section.img');
            const img = section.querySelector('img');
            const placeholder = section.querySelector('.upload-placeholder');
            
            if (input.files && input.files[0]) {
                const file = input.files[0];
                
                // Show local preview first (UX)
                const reader = new FileReader();
                reader.onload = e => {
                    img.src = e.target.result;
                    img.style.display = 'block';
                    img.style.width = '100%';
                    img.style.height = '100%';
                    img.style.objectFit = 'cover';
                    if (placeholder) placeholder.style.display = 'none';
                    section.style.opacity = '0.6'; // Loading state
                };
                reader.readAsDataURL(file);

                // Prepare Upload
                const formData = new FormData();
                formData.append('file', file);
                const key = section.dataset.key || '';
                formData.append('key', key);

                console.log('Uploading with key:', key);

                try {
                    const response = await fetch('upload_handler.php', {
                        method: 'POST',
                        body: formData
                    });
                    
                    const text = await response.text(); // Get raw text first for debugging
                    console.log('Raw response:', text);
                    
                    const result = JSON.parse(text);
                    
                    section.style.opacity = '1'; // Remove loading state

                    if (result.success) {
                        console.log('Upload success:', result.url);
                        img.src = result.url + '?t=' + new Date().getTime(); // Prevent cache
                        
                        section.classList.add('upload-success');
                        setTimeout(() => section.classList.remove('upload-success'), 1000);
                    } else {
                        console.error('Upload error:', result.message, result.debug);
                        alert('Upload gagal: ' + result.message);
                        if (!img.getAttribute('src') || img.getAttribute('src') === '') {
                            img.style.display = 'none';
                            if (placeholder) placeholder.style.display = 'flex';
                        }
                    }
                } catch (error) {
                    console.error('Fetch error:', error);
                    section.style.opacity = '1';
                    alert('Terjadi kesalahan saat mengunggah. Cek konsol browser untuk detail.');
                }
            }
        }

        // ── FILTER BEACH BY PROVINCE
        function filterPantai(prov, btn) {
            document.querySelectorAll('.pantai-tag').forEach(t => t.classList.remove('active'));
            btn.classList.add('active');
            document.querySelectorAll('#beachGrid > .photo-card, #beachGrid > .beach-featured').forEach(card => {
                if (prov === 'all' || card.dataset.prov === prov) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // ── FAV TOGGLE
        function toggleFav(btn) {
            btn.classList.toggle('liked');
            const icon = btn.querySelector('i');
            icon.style.transform = 'scale(1.3)';
            setTimeout(() => icon.style.transform = 'scale(1)', 200);
        }

        // ── SCROLL TO TOP
        function scrollToTop() { window.scrollTo({ top: 0, behavior: 'smooth' }); }

        // ── SHOW FAB when scrolled
        window.addEventListener('scroll', () => {
            const fab = document.querySelector('.fab-mobile');
            if (fab) fab.style.display = window.scrollY > 300 ? 'flex' : 'none';
        });
    </script>
</body>

</html>
