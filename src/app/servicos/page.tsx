import Navbar from '@/components/Navbar';

export default function Servicos() {
  const servicos = [
    {
      titulo: 'Transporte Executivo',
      descricao: 'Serviço premium de transporte para executivos com carros de luxo e motoristas altamente treinados.',
      icone: '🚙',
      features: [
        'Carros executivos de luxo',
        'Motoristas bilíngues',
        'Wi-Fi a bordo',
        'Água e amenidades',
      ]
    },
    {
      titulo: 'Fretamento Corporativo',
      descricao: 'Soluções de transporte regular para colaboradores com rotas otimizadas e monitoramento em tempo real.',
      icone: '🚐',
      features: [
        'Rotas personalizadas',
        'Monitoramento GPS',
        'Relatórios de utilização',
        'App para colaboradores',
      ]
    },
    {
      titulo: 'Eventos Corporativos',
      descricao: 'Transporte especializado para eventos empresariais, convenções e treinamentos.',
      icone: '🎯',
      features: [
        'Coordenação logística',
        'Veículos padronizados',
        'Equipe de suporte',
        'Plano de contingência',
      ]
    },
  ];

  return (
    <main>
      <Navbar />
      
      {/* Header */}
      <section className="bg-primary text-white py-16">
        <div className="container">
          <h1 className="text-4xl font-bold mb-4">Nossos Serviços</h1>
          <p className="text-lg">
            Soluções completas de mobilidade corporativa para sua empresa
          </p>
        </div>
      </section>

      {/* Serviços */}
      <section className="py-20">
        <div className="container">
          <div className="grid md:grid-cols-3 gap-8">
            {servicos.map((servico, index) => (
              <div
                key={index}
                className="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow"
              >
                <div className="text-4xl mb-4">{servico.icone}</div>
                <h2 className="text-2xl font-bold mb-4">{servico.titulo}</h2>
                <p className="text-gray-600 mb-6">{servico.descricao}</p>
                <ul className="space-y-3">
                  {servico.features.map((feature, idx) => (
                    <li key={idx} className="flex items-center text-gray-700">
                      <span className="text-primary mr-2">✓</span>
                      {feature}
                    </li>
                  ))}
                </ul>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="bg-gray-50 py-16">
        <div className="container text-center">
          <h2 className="text-3xl font-bold mb-6">
            Precisa de uma solução personalizada?
          </h2>
          <p className="text-lg text-gray-600 mb-8">
            Nossa equipe está pronta para desenvolver um plano sob medida para sua empresa
          </p>
          <button className="bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-full font-semibold">
            Solicite uma Proposta
          </button>
        </div>
      </section>
    </main>
  );
} 