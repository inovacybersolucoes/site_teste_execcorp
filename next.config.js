/** @type {import('next').NextConfig} */
const nextConfig = {
  output: 'standalone',
  // Configurações para Cloud Run
  env: {
    CUSTOM_KEY: process.env.CUSTOM_KEY,
  },
  // Configurações de imagem para otimização
  images: {
    domains: [],
    unoptimized: false,
  },
  // Configurações de compressão
  compress: true,
  // Headers de segurança
  async headers() {
    return [
      {
        source: '/(.*)',
        headers: [
          {
            key: 'X-Frame-Options',
            value: 'DENY',
          },
          {
            key: 'X-Content-Type-Options',
            value: 'nosniff',
          },
          {
            key: 'Referrer-Policy',
            value: 'origin-when-cross-origin',
          },
        ],
      },
    ];
  },
};

module.exports = nextConfig; 