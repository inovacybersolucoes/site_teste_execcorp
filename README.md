# ExecCorp - Transporte Corporativo

Site institucional da ExecCorp - Transporte Corporativo, uma empresa especializada em soluções premium de mobilidade corporativa.

## Tecnologias Utilizadas

- Next.js 14
- React 18
- TypeScript
- Tailwind CSS
- React Icons
- Framer Motion
- HeadlessUI
- Docker
- Google Cloud Run

## Requisitos

- Node.js 18.17 ou superior
- npm ou yarn
- Docker (para containerização)
- Google Cloud SDK (para deploy na nuvem)

## Instalação

1. Clone o repositório:
```bash
git clone https://github.com/inovacybersolucoes/site_teste_execcorp.git
cd site_teste_execcorp
```

2. Instale as dependências:
```bash
npm install
# ou
yarn install
```

3. Execute o servidor de desenvolvimento:
```bash
npm run dev
# ou
yarn dev
```

4. Abra [http://localhost:3000](http://localhost:3000) no seu navegador para ver o resultado.

## Docker

### Build Local

Para construir e executar a aplicação usando Docker:

```bash
# Construir a imagem
docker build -t execcorp-website .

# Executar o container
docker run -p 3000:3000 execcorp-website
```

### Docker Compose

Para desenvolvimento com Docker Compose:

```bash
# Construir e executar
docker-compose up --build

# Executar em background
docker-compose up -d
```

### Script Automatizado

Use o script de deploy para facilitar o processo:

```bash
# Build local
chmod +x scripts/deploy.sh
./scripts/deploy.sh local

# Deploy para Cloud Run
./scripts/deploy.sh cloud
```

## Deploy no Google Cloud Run

### Pré-requisitos

1. Instale o [Google Cloud SDK](https://cloud.google.com/sdk/docs/install)
2. Autentique-se:
```bash
gcloud auth login
```

3. Configure o projeto:
```bash
gcloud config set project SEU_PROJECT_ID
```

### Deploy Automático

```bash
# Usando o script
./scripts/deploy.sh cloud

# Ou manualmente
gcloud builds submit --config cloudbuild.yaml .
```

### Deploy Manual

```bash
# 1. Habilitar APIs
gcloud services enable cloudbuild.googleapis.com
gcloud services enable run.googleapis.com
gcloud services enable containerregistry.googleapis.com

# 2. Build da imagem
docker build -t gcr.io/SEU_PROJECT_ID/execcorp-website .

# 3. Push para Container Registry
docker push gcr.io/SEU_PROJECT_ID/execcorp-website

# 4. Deploy no Cloud Run
gcloud run deploy execcorp-website \
  --image gcr.io/SEU_PROJECT_ID/execcorp-website \
  --region us-central1 \
  --platform managed \
  --allow-unauthenticated \
  --port 3000 \
  --memory 512Mi \
  --cpu 1
```

## Estrutura do Projeto

```
src/
├── app/                    # Páginas e layouts da aplicação
├── components/            # Componentes reutilizáveis
├── styles/               # Estilos globais e configurações
└── hooks/                # Hooks customizados
scripts/                  # Scripts de automação
├── deploy.sh            # Script de deploy
Dockerfile               # Configuração Docker
docker-compose.yml       # Configuração Docker Compose
cloudbuild.yaml         # Configuração Cloud Build
```

## Scripts Disponíveis

- `npm run dev` - Inicia o servidor de desenvolvimento
- `npm run build` - Cria uma versão otimizada para produção
- `npm run start` - Inicia o servidor de produção
- `npm run lint` - Executa a verificação de linting

## Configurações de Produção

### Variáveis de Ambiente

Crie um arquivo `.env.local` para desenvolvimento:

```env
NEXT_PUBLIC_API_URL=https://api.execcorp.com
NEXT_PUBLIC_ANALYTICS_ID=your-analytics-id
```

### Otimizações

- **Output Standalone**: Configurado para builds otimizados
- **Compressão**: Habilitada para melhor performance
- **Headers de Segurança**: Configurados automaticamente
- **Telemetria**: Desabilitada em produção

## Monitoramento

### Health Check

A aplicação inclui health checks automáticos:
- Endpoint: `http://localhost:3000/`
- Intervalo: 30s
- Timeout: 10s

### Logs

Para visualizar logs no Cloud Run:

```bash
gcloud logs read --service=execcorp-website --region=us-central1
```

## Contribuindo

1. Crie um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Faça commit das suas alterações (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## Suporte

Para suporte técnico, entre em contato:
- Email: dev@execcorp.com.br
- Issues: [GitHub Issues](https://github.com/inovacybersolucoes/site_teste_execcorp/issues) 