    </div> <!-- Fecha container -->
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><i class="fas fa-graduation-cap"></i> LearnFlow</h4>
                    <p>Sistema de estudos personalizado. Aprenda no seu ritmo!</p>
                </div>
                
                <div class="footer-section">
                    <h4>Matérias</h4>
                    <ul class="footer-links">
                        <li><a href="/learnflow/home"><i class="fas fa-calculator"></i> Matemática</a></li>
                        <li><a href="/learnflow/home"><i class="fas fa-book"></i> Português</a></li>
                        <li><a href="/learnflow/home"><i class="fas fa-landmark"></i> História</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Links Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="/learnflow/home"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="/learnflow/auth/login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="/learnflow/auth/cadastro"><i class="fas fa-user-plus"></i> Cadastrar</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contato</h4>
                    <p><i class="fas fa-envelope"></i> contato@learnflow.com</p>
                    <p><i class="fas fa-phone"></i> (11) 99999-9999</p>
                    <p><i class="fas fa-map-marker-alt"></i> São Paulo, SP</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> LearnFlow. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts personalizados -->
    <script>
        // Inicializar carrossel
        document.addEventListener('DOMContentLoaded', function() {
            var carousel = new bootstrap.Carousel(document.querySelector('.carousel'), {
                interval: 5000,
                wrap: true
            });
            
            // Animações de entrada
            const cards = document.querySelectorAll('.card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in');
            });
        });
    </script>
</body>
</html>