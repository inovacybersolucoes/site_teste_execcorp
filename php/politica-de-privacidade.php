<?php
// Página Política de Privacidade
require_once 'includes/config.php';

$page_title = 'Política de Privacidade - ' . SITE_NAME;
$page_description = 'Política de privacidade e proteção de dados da ExecCorp - Transporte Corporativo.';

include 'includes/html-head.php';
?>

<!-- Header/Navbar -->
<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="min-height: 40vh;">
    <div class="container">
        <div class="hero-content" style="text-align: center;">
            <div class="hero-text">
                <h1>Política de <span class="gradient-text">Privacidade</span></h1>
                <p>Última atualização: <?php echo date('d/m/Y'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="section bg-white">
    <div class="container">
        <div style="max-width: 48rem; margin: 0 auto;">
            <div class="card" style="padding: 3rem;">
                <h2>1. Informações Gerais</h2>
                <p class="mb-6">
                    A <?php echo COMPANY_NAME; ?> respeita sua privacidade e está comprometida 
                    com a proteção dos seus dados pessoais. Esta política explica como coletamos, 
                    usamos, armazenamos e protegemos suas informações pessoais.
                </p>

                <h2>2. Informações que Coletamos</h2>
                <p class="mb-4">Coletamos as seguintes informações:</p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li><strong>Dados de Identificação:</strong> Nome, CPF/CNPJ, RG</li>
                    <li><strong>Dados de Contato:</strong> E-mail, telefone, endereço</li>
                    <li><strong>Dados Profissionais:</strong> Empresa, cargo, setor</li>
                    <li><strong>Dados de Localização:</strong> Endereços de origem e destino</li>
                    <li><strong>Dados de Pagamento:</strong> Informações de faturamento</li>
                    <li><strong>Dados de Navegação:</strong> Cookies, logs de acesso, IP</li>
                </ul>

                <h2>3. Como Usamos suas Informações</h2>
                <p class="mb-4">Utilizamos seus dados para:</p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li>Prestar os serviços de transporte contratados</li>
                    <li>Processar pagamentos e emitir faturas</li>
                    <li>Comunicar sobre alterações nos serviços</li>
                    <li>Melhorar nossos serviços e experiência do cliente</li>
                    <li>Cumprir obrigações legais e regulamentares</li>
                    <li>Enviar comunicações de marketing (com seu consentimento)</li>
                </ul>

                <h2>4. Compartilhamento de Informações</h2>
                <p class="mb-4">
                    Não vendemos, alugamos ou compartilhamos seus dados pessoais com terceiros, 
                    exceto nas seguintes situações:
                </p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li>Com prestadores de serviços terceirizados (sob acordo de confidencialidade)</li>
                    <li>Para cumprir obrigações legais ou decisões judiciais</li>
                    <li>Para proteger nossos direitos, propriedade ou segurança</li>
                    <li>Com seu consentimento explícito</li>
                </ul>

                <h2>5. Segurança dos Dados</h2>
                <p class="mb-6">
                    Implementamos medidas técnicas e organizacionais apropriadas para proteger 
                    seus dados pessoais contra acesso não autorizado, alteração, divulgação ou 
                    destruição. Isso inclui criptografia, controles de acesso e treinamento 
                    regular de funcionários.
                </p>

                <h2>6. Retenção de Dados</h2>
                <p class="mb-6">
                    Mantemos seus dados pessoais pelo tempo necessário para cumprir as finalidades 
                    descritas nesta política, ou conforme exigido por lei. Após este período, 
                    os dados são eliminados de forma segura.
                </p>

                <h2>7. Seus Direitos (LGPD)</h2>
                <p class="mb-4">Conforme a Lei Geral de Proteção de Dados, você tem direito a:</p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li>Confirmar a existência de tratamento de dados</li>
                    <li>Acessar seus dados pessoais</li>
                    <li>Corrigir dados incompletos, inexatos ou desatualizados</li>
                    <li>Solicitar a anonimização, bloqueio ou eliminação</li>
                    <li>Solicitar a portabilidade dos dados</li>
                    <li>Revogar seu consentimento</li>
                    <li>Ser informado sobre entidades com as quais compartilhamos dados</li>
                </ul>

                <h2>8. Cookies e Tecnologias Similares</h2>
                <p class="mb-6">
                    Utilizamos cookies para melhorar sua experiência em nosso site. Você pode 
                    gerenciar suas preferências de cookies através das configurações do seu 
                    navegador. Alguns recursos podem não funcionar adequadamente se os cookies 
                    forem desabilitados.
                </p>

                <h2>9. Menores de Idade</h2>
                <p class="mb-6">
                    Nossos serviços não são destinados a menores de 18 anos. Não coletamos 
                    intencionalmente dados pessoais de menores. Se tomarmos conhecimento de 
                    tal coleta, tomaremos medidas para excluir essas informações.
                </p>

                <h2>10. Alterações na Política</h2>
                <p class="mb-6">
                    Esta política pode ser atualizada periodicamente. Notificaremos sobre 
                    alterações significativas através de nossos canais de comunicação habituais.
                </p>

                <h2>11. Contato e Exercício de Direitos</h2>
                <p class="mb-4">
                    Para exercer seus direitos ou esclarecer dúvidas sobre esta política, 
                    entre em contato conosco:
                </p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li><strong>E-mail:</strong> <?php echo COMPANY_EMAIL; ?></li>
                    <li><strong>Telefone:</strong> <?php echo COMPANY_PHONE; ?></li>
                    <li><strong>Endereço:</strong> <?php echo COMPANY_ADDRESS; ?></li>
                </ul>

                <p>
                    <strong>Encarregado de Dados (DPO):</strong> dpo@execcorp.com.br
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

<?php include 'includes/html-footer.php'; ?> 