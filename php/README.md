# ExecCorp - Versão PHP

Este é o site ExecCorp - Transporte Corporativo implementado em PHP puro com HTML, CSS e JavaScript.

## 📁 Estrutura do Projeto

```
php/
├── index.php              # Página inicial
├── servicos.php           # Página de serviços
├── sobre.php              # Página sobre a empresa
├── contato.php            # Página de contato
├── termos-de-uso.php      # Termos de uso
├── politica-de-privacidade.php # Política de privacidade
├── .htaccess              # Configurações Apache
├── README.md              # Este arquivo
├── includes/              # Arquivos de configuração
│   ├── config.php         # Configurações gerais
│   ├── html-head.php      # Template HTML head
│   └── html-footer.php    # Template HTML footer
├── components/            # Componentes reutilizáveis
│   ├── header.php         # Navbar/Header
│   ├── footer.php         # Footer
│   └── slideshow.php      # Componente slideshow
├── css/                   # Arquivos CSS
│   └── style.css          # Estilos principais
├── js/                    # Arquivos JavaScript
│   └── main.js            # JavaScript principal
├── images/                # Imagens do site
│   ├── hero-car.png
│   └── im.png
├── assets/                # Outros recursos
├── pages/                 # Páginas adicionais (se necessário)
└── components/            # Componentes reutilizáveis
```

## 🚀 Instalação e Configuração

### Requisitos
- **PHP 7.4+** (recomendado PHP 8.0+)
- **Apache** ou **Nginx**
- **mod_rewrite** habilitado (Apache)

### Instalação Local

1. **Clone ou copie os arquivos:**
   ```bash
   cp -r php/ /var/www/html/execcorp/
   # ou
   git clone [repositorio] execcorp
   cd execcorp/php
   ```

2. **Configure o servidor web:**
   
   **Apache:**
   - Certifique-se que o mod_rewrite está habilitado
   - O arquivo `.htaccess` já está configurado
   
   **Nginx:**
   ```nginx
   server {
       listen 80;
       server_name execcorp.local;
       root /var/www/html/execcorp/php;
       index index.php index.html;
       
       location / {
           try_files $uri $uri/ /index.php?$query_string;
       }
       
       location ~ \.php$ {
           fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
           fastcgi_index index.php;
           fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
           include fastcgi_params;
       }
   }
   ```

3. **Configure as permissões:**
   ```bash
   chmod 755 php/
   chmod 644 php/*.php
   chmod 644 php/css/*
   chmod 644 php/js/*
   ```

### Configuração

1. **Edite o arquivo `includes/config.php`:**
   ```php
   // Configurações da empresa
   define('COMPANY_NAME', 'Sua Empresa');
   define('COMPANY_EMAIL', 'contato@suaempresa.com');
   define('COMPANY_PHONE', '+55 (XX) XXXX-XXXX');
   define('COMPANY_ADDRESS', 'Seu endereço completo');
   
   // URLs das redes sociais
   define('FACEBOOK_URL', 'https://facebook.com/suaempresa');
   define('INSTAGRAM_URL', 'https://instagram.com/suaempresa');
   define('LINKEDIN_URL', 'https://linkedin.com/company/suaempresa');
   
   // Configurações do site
   define('BASE_PATH', '/execcorp/php'); // Ajuste conforme necessário
   ```

2. **Configure o SSL (produção):**
   - Descomente as linhas de redirecionamento HTTPS no `.htaccess`
   - Configure certificado SSL no servidor

## 🎨 Personalização

### Cores e Estilos
Edite o arquivo `css/style.css` e modifique as variáveis CSS:

```css
:root {
    --primary: #2563eb;        /* Cor principal */
    --secondary: #0f172a;      /* Cor secundária */
    --accent: #06b6d4;         /* Cor de destaque */
    --background: #f8fafc;     /* Cor de fundo */
    /* ... outras variáveis ... */
}
```

### Conteúdo
- **Textos:** Edite os arrays em `includes/config.php`
- **Imagens:** Substitua as imagens na pasta `images/`
- **Serviços:** Modifique o array `$services` em `config.php`
- **Features:** Modifique o array `$features` em `config.php`

### Funcionalidades
- **Formulário de contato:** Integre com seu sistema de e-mail em `contato.php`
- **Newsletter:** Integre com seu provedor de e-mail marketing
- **Analytics:** Adicione seu ID do Google Analytics em `config.php`

## 📱 Recursos Incluídos

### Funcionalidades
- ✅ **Design Responsivo** - Funciona em todos os dispositivos
- ✅ **Slideshow de Imagens** - Com navegação e indicadores
- ✅ **Menu Mobile** - Hamburger menu para dispositivos móveis
- ✅ **Formulário de Contato** - Com validação JavaScript
- ✅ **Newsletter** - Sistema de inscrição
- ✅ **Scroll Animations** - Animações ao rolar a página
- ✅ **Scroll to Top** - Botão para voltar ao topo
- ✅ **SEO Otimizado** - Meta tags e structured data
- ✅ **Performance** - CSS e JS otimizados
- ✅ **Segurança** - Headers de segurança configurados

### Páginas
- 🏠 **Home** - Página inicial com hero, features e estatísticas
- 🚗 **Serviços** - Detalhes dos serviços oferecidos
- 🏢 **Sobre** - História e valores da empresa
- 📞 **Contato** - Formulário e informações de contato
- 📄 **Termos de Uso** - Termos legais
- 🔒 **Política de Privacidade** - LGPD compliance

### Tecnologias
- **HTML5** - Estrutura semântica
- **CSS3** - Estilos modernos com variáveis CSS
- **JavaScript ES6+** - Interatividade moderna
- **PHP 8** - Backend robusto
- **Font Awesome 6** - Ícones modernos
- **Google Fonts** - Tipografia Inter

## 🛡️ Segurança

### Recursos de Segurança Implementados
- Headers de segurança (X-Frame-Options, CSP, etc.)
- Proteção contra XSS e CSRF
- Sanitização de dados de entrada
- Configurações seguras de sessão
- Bloqueio de arquivos sensíveis
- Desabilitação de funções perigosas do PHP

### Recomendações Adicionais
- Use HTTPS em produção
- Mantenha o PHP atualizado
- Configure backups regulares
- Use senhas fortes para FTP/SSH
- Configure firewall apropriado

## 🚀 Deploy em Produção

### Checklist de Deploy
1. ✅ Configurar SSL/HTTPS
2. ✅ Atualizar URLs em `config.php`
3. ✅ Desabilitar debug/error reporting
4. ✅ Configurar cache apropriado
5. ✅ Testar formulários de contato
6. ✅ Configurar monitoramento
7. ✅ Configurar backups
8. ✅ Testar em diferentes dispositivos

### Otimizações de Performance
- Habilitar compressão GZIP
- Configurar cache de browser
- Otimizar imagens
- Minificar CSS/JS (se necessário)
- Usar CDN para recursos estáticos

## 📞 Suporte

Para dúvidas ou problemas:
- **Email:** dev@execcorp.com.br
- **Documentação:** README.md
- **Issues:** GitHub Issues (se aplicável)

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo LICENSE para mais detalhes.

---

**ExecCorp - Transporte Corporativo Premium** 🚗✨ 