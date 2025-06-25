# ExecCorp - Transporte Corporativo

Site institucional da ExecCorp - Transporte Corporativo, uma empresa especializada em soluções premium de mobilidade corporativa.

**Este projeto foi migrado para PHP puro para máxima compatibilidade e facilidade de deploy.**

## 🚀 Tecnologias Utilizadas

- **PHP 8+** - Backend robusto
- **HTML5** - Estrutura semântica moderna
- **CSS3** - Design system customizado com variáveis CSS
- **JavaScript ES6+** - Interatividade moderna
- **Font Awesome 6** - Ícones profissionais
- **Google Fonts** - Tipografia Inter

## 📁 Estrutura do Projeto

```
ExecCorp/
├── php/                    # 🎯 PROJETO PRINCIPAL
│   ├── index.php          # Página inicial
│   ├── servicos.php       # Página de serviços
│   ├── sobre.php          # Página sobre a empresa
│   ├── contato.php        # Página de contato
│   ├── termos-de-uso.php  # Termos de uso
│   ├── politica-de-privacidade.php # Política de privacidade
│   ├── .htaccess          # Configurações Apache
│   ├── README.md          # Documentação detalhada
│   ├── includes/          # Configurações e templates
│   ├── components/        # Componentes reutilizáveis
│   ├── css/               # Estilos customizados
│   ├── js/                # JavaScript interativo
│   └── images/            # Recursos visuais
├── .git/                  # Controle de versão
├── .gitignore            # Arquivos ignorados
└── README.md             # Este arquivo
```

## 🎯 Início Rápido

### Requisitos
- **PHP 7.4+** (recomendado PHP 8.0+)
- **Apache** ou **Nginx**
- **mod_rewrite** habilitado (Apache)

### Instalação

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/inovacybersolucoes/site_teste_execcorp.git
   cd site_teste_execcorp
   ```

2. **Configure o servidor web apontando para a pasta `php/`:**
   ```bash
   # Apache
   DocumentRoot /caminho/para/site_teste_execcorp/php
   
   # Nginx
   root /caminho/para/site_teste_execcorp/php;
   ```

3. **Configure as informações da empresa em `php/includes/config.php`**

4. **Acesse o site no navegador**

### Configuração Rápida

Edite o arquivo `php/includes/config.php`:

```php
// Informações da empresa
define('COMPANY_NAME', 'Sua Empresa');
define('COMPANY_EMAIL', 'contato@suaempresa.com');
define('COMPANY_PHONE', '+55 (XX) XXXX-XXXX');
define('COMPANY_ADDRESS', 'Seu endereço completo');

// URLs das redes sociais
define('FACEBOOK_URL', 'https://facebook.com/suaempresa');
define('INSTAGRAM_URL', 'https://instagram.com/suaempresa');
define('LINKEDIN_URL', 'https://linkedin.com/company/suaempresa');
```

## ✨ Funcionalidades

### 🎨 Design & UX
- ✅ **Totalmente Responsivo** - Mobile, tablet e desktop
- ✅ **Design Moderno** - Interface clean e profissional
- ✅ **Animações Suaves** - Transições e efeitos visuais
- ✅ **Performance Otimizada** - Carregamento rápido

### 🔧 Funcionalidades Técnicas
- ✅ **Slideshow Interativo** - Galeria de imagens com navegação
- ✅ **Menu Mobile** - Hamburger menu responsivo
- ✅ **Formulário de Contato** - Com validação JavaScript
- ✅ **Newsletter** - Sistema de inscrição
- ✅ **SEO Otimizado** - Meta tags e structured data
- ✅ **Scroll Animations** - Elementos animados no scroll

### 🛡️ Segurança
- ✅ **Headers de Segurança** - Proteção contra ataques
- ✅ **Sanitização de Dados** - Prevenção XSS
- ✅ **Configuração Segura** - PHP e Apache otimizados
- ✅ **LGPD Compliance** - Política de privacidade

### 📄 Páginas Incluídas
- 🏠 **Home** - Apresentação da empresa e serviços
- 🚗 **Serviços** - Detalhamento dos serviços oferecidos
- 🏢 **Sobre** - História, missão e valores
- 📞 **Contato** - Formulário e informações de contato
- 📋 **Termos de Uso** - Termos legais
- 🔒 **Política de Privacidade** - Proteção de dados

## 🎨 Personalização

### Cores do Site
Edite as variáveis CSS em `php/css/style.css`:

```css
:root {
    --primary: #2563eb;      /* Azul principal */
    --secondary: #0f172a;    /* Azul escuro */
    --accent: #06b6d4;       /* Azul claro */
    --background: #f8fafc;   /* Cinza claro */
}
```

### Conteúdo
- **Textos:** Modifique os arrays em `php/includes/config.php`
- **Imagens:** Substitua as imagens em `php/images/`
- **Serviços:** Edite o array `$services` no config
- **Features:** Edite o array `$features` no config

## 🚀 Deploy

### Servidor Compartilhado
1. Faça upload da pasta `php/` via FTP
2. Configure o domínio para apontar para a pasta
3. Ajuste as configurações em `config.php`

### VPS/Dedicado
1. Clone o repositório no servidor
2. Configure o Apache/Nginx
3. Configure SSL/HTTPS
4. Teste todas as funcionalidades

### Checklist de Deploy
- [ ] Configurar SSL/HTTPS
- [ ] Atualizar informações da empresa
- [ ] Testar formulários
- [ ] Configurar backup
- [ ] Testar responsividade
- [ ] Verificar SEO

## 📊 Performance

O site foi otimizado para máxima performance:
- **CSS Minificado** - Estilos otimizados
- **JavaScript Eficiente** - Código modular
- **Imagens Otimizadas** - Lazy loading
- **Cache Configurado** - Headers apropriados
- **GZIP Habilitado** - Compressão automática

## 🆘 Suporte

Para dúvidas ou problemas:
- **📧 Email:** dev@execcorp.com.br
- **📖 Documentação:** Veja `php/README.md` para detalhes técnicos
- **🐛 Issues:** [GitHub Issues](https://github.com/inovacybersolucoes/site_teste_execcorp/issues)

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

---

## 🎯 Por que PHP?

Esta versão em PHP oferece:
- **✅ Compatibilidade Universal** - Funciona em qualquer servidor
- **✅ Facilidade de Deploy** - Sem build process
- **✅ Manutenção Simples** - Código direto e claro
- **✅ Performance Sólida** - Otimizado para produção
- **✅ SEO Friendly** - Renderização server-side

**ExecCorp - Transporte Corporativo Premium** 🚗✨ 