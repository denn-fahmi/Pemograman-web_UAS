</div> <footer class="mt-auto py-4 border-top border-secondary" style="background: rgba(0,0,0,0.3);">
        <div class="container text-center">
            <p class="text-muted mb-0 small uppercase fw-bold" style="letter-spacing: 1px;">
                &copy; <?= date('Y'); ?> <span style="color: var(--ps-neon);">PS RENTAL Fahmi</span> - LEVEL UP YOUR GAMING
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animasi Masuk Untuk Cards
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.opacity = "0";
                card.style.transform = "translateY(30px)";
                setTimeout(() => {
                    card.style.transition = "all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275)";
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }, index * 100);
            });
        });

        // Efek Hover Tombol
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                btn.style.filter = "brightness(1.2)";
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.filter = "brightness(1)";
            });
        });
    </script>
</body>
</html>