#!/bin/bash

# Script de deploy para ExecCorp Website
# Uso: ./scripts/deploy.sh [local|cloud]

set -e

# Cores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Função para log
log() {
    echo -e "${GREEN}[INFO]${NC} $1"
}

warn() {
    echo -e "${YELLOW}[WARN]${NC} $1"
}

error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Verificar se Docker está rodando
check_docker() {
    if ! docker info > /dev/null 2>&1; then
        error "Docker não está rodando. Por favor, inicie o Docker."
        exit 1
    fi
}

# Build local
build_local() {
    log "Iniciando build local..."
    check_docker
    
    log "Construindo imagem Docker..."
    docker build -t execcorp-website:latest .
    
    log "Build local concluído com sucesso!"
    log "Para executar: docker run -p 3000:3000 execcorp-website:latest"
}

# Deploy para Cloud Run
deploy_cloud() {
    log "Iniciando deploy para Google Cloud Run..."
    
    # Verificar se gcloud está instalado
    if ! command -v gcloud &> /dev/null; then
        error "Google Cloud SDK não está instalado."
        exit 1
    fi
    
    # Verificar se está autenticado
    if ! gcloud auth list --filter=status:ACTIVE --format="value(account)" | grep -q .; then
        error "Não está autenticado no Google Cloud. Execute: gcloud auth login"
        exit 1
    fi
    
    # Obter PROJECT_ID
    PROJECT_ID=$(gcloud config get-value project)
    if [ -z "$PROJECT_ID" ]; then
        error "PROJECT_ID não configurado. Execute: gcloud config set project SEU_PROJECT_ID"
        exit 1
    fi
    
    log "Projeto: $PROJECT_ID"
    
    # Habilitar APIs necessárias
    log "Habilitando APIs necessárias..."
    gcloud services enable cloudbuild.googleapis.com
    gcloud services enable run.googleapis.com
    gcloud services enable containerregistry.googleapis.com
    
    # Build e deploy usando Cloud Build
    log "Iniciando Cloud Build..."
    gcloud builds submit --config cloudbuild.yaml .
    
    log "Deploy concluído com sucesso!"
    
    # Obter URL do serviço
    SERVICE_URL=$(gcloud run services describe execcorp-website --region=us-central1 --format="value(status.url)")
    log "Aplicação disponível em: $SERVICE_URL"
}

# Função principal
main() {
    case "${1:-local}" in
        "local")
            build_local
            ;;
        "cloud")
            deploy_cloud
            ;;
        *)
            error "Uso: $0 [local|cloud]"
            exit 1
            ;;
    esac
}

main "$@" 