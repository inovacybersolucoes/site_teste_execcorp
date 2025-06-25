<?php
// Página de Contato
require_once 'includes/config.php';

$page_title = 'Contato - ' . SITE_NAME;
$page_description = 'Entre em contato com a ExecCorp para solicitar orçamentos e tirar dúvidas sobre nossos serviços.';

include 'includes/html-head.php';
?>

<!-- Header/Navbar -->
<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content" style="text-align: center;">
            <div class="hero-text">
                <h1>Entre em <span class="gradient-text">Contato</span></h1>
                <p>
                    Estamos prontos para atender você. Entre em contato conosco
                    e descubra como podemos ajudar sua empresa.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="grid grid-cols-2" style="gap: 4rem; align-items: start;">
            <!-- Formulário -->
            <div class="card" style="padding: 2rem;">
                <h3 class="mb-6">Envie uma Mensagem</h3>
                <form id="contact-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Nome Completo *</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">E-mail *</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="tel" id="phone" name="phone" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="company" class="form-label">Empresa</label>
                        <input type="text" id="company" name="company" class="form-input">
                    </div>

                    <div class="form-group">
                        <label for="service" class="form-label">Serviço de Interesse</label>
                        <select id="service" name="service" class="form-select">
                            <option value="">Selecione um serviço</option>
                            <option value="executivo">Transporte Executivo</option>
                            <option value="fretamento">Fretamento Corporativo</option>
                            <option value="eventos">Eventos Corporativos</option>
                            <option value="personalizado">Serviço Personalizado</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Mensagem *</label>
                        <textarea id="message" name="message" class="form-textarea" 
                                  placeholder="Descreva suas necessidades ou dúvidas..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        Enviar Mensagem
                        <i class="fas fa-paper-plane" style="margin-left: 0.5rem;"></i>
                    </button>
                </form>
            </div>

            <!-- Informações de Contato -->
            <div>
                <h3 class="mb-6">Informações de Contato</h3>
                
                <div class="card mb-6" style="padding: 1.5rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <div style="width: 3rem; height: 3rem; background-color: rgba(37, 99, 235, 0.1); 
                                    border-radius: 50%; display: flex; align-items: center; justify-content: center; 
                                    margin-right: 1rem;">
                            <i class="fas fa-map-marker-alt" style="color: var(--primary);"></i>
                        </div>
                        <div>
                            <h4>Endereço</h4>
                            <p class="text-gray-600"><?php echo COMPANY_ADDRESS; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card mb-6" style="padding: 1.5rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <div style="width: 3rem; height: 3rem; background-color: rgba(37, 99, 235, 0.1); 
                                    border-radius: 50%; display: flex; align-items: center; justify-content: center; 
                                    margin-right: 1rem;">
                            <i class="fas fa-phone" style="color: var(--primary);"></i>
                        </div>
                        <div>
                            <h4>Telefone</h4>
                            <p class="text-gray-600"><?php echo COMPANY_PHONE; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card mb-6" style="padding: 1.5rem;">
                    <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                        <div style="width: 3rem; height: 3rem; background-color: rgba(37, 99, 235, 0.1); 
                                    border-radius: 50%; display: flex; align-items: center; justify-content: center; 
                                    margin-right: 1rem;">
                            <i class="fas fa-envelope" style="color: var(--primary);"></i>
                        </div>
                        <div>
                            <h4>E-mail</h4>
                            <p class="text-gray-600"><?php echo COMPANY_EMAIL; ?></p>
                        </div>
                    </div>
                </div>

                <div class="card" style="padding: 1.5rem;">
                    <h4 class="mb-4">Horário de Atendimento</h4>
                    <div style="margin-bottom: 0.5rem;">
                        <strong>Segunda a Sexta:</strong> 8h às 18h
                    </div>
                    <div style="margin-bottom: 0.5rem;">
                        <strong>Sábado:</strong> 8h às 12h
                    </div>
                    <div>
                        <strong>Domingo:</strong> Atendimento de emergência
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

<?php include 'includes/html-footer.php'; ?> 