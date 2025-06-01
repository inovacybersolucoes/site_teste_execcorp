import Navbar from '@/components/Navbar';

export default function Sobre() {
  const valores = [
    {
      titulo: 'Inovação',
      descricao: 'Buscamos constantemente novas tecnologias e soluções para melhorar a experiência de transporte.',
      icone: '💡'
    },
    {
      titulo: 'Segurança',
      descricao: 'Priorizamos a segurança em todas as nossas operações, desde a seleção de motoristas até a manutenção da frota.',
      icone: '🛡️'
    },
    {
      titulo: 'Sustentabilidade',
      descricao: 'Comprometidos com práticas sustentáveis e redução do impacto ambiental.',
      icone: '🌱'
    },
    {
      titulo: 'Excelência',
      descricao: 'Buscamos a excelência em cada detalhe do nosso serviço para superar as expectativas.',
      icone: '⭐'
    }
  ];

  return (
    <main>
      <Navbar />
      
      {/* Header */}
      <section className="bg-primary text-white py-16">
        <div className="container">
          <h1 className="text-4xl font-bold mb-4">Sobre a ExecCorp</h1>
          <p className="text-lg">
            Transformando a mobilidade corporativa com tecnologia e inovação
          </p>
        </div>
      </section>

      {/* História */}
      <section className="py-20">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center">
            <h2 className="text-3xl font-bold mb-6">Nossa História</h2>
            <p className="text-gray-600 mb-8">
              Fundada em 2020, a ExecCorp nasceu com o propósito de revolucionar o transporte
              corporativo no Brasil. Identificamos uma necessidade crescente por soluções
              de mobilidade mais inteligentes e sustentáveis para empresas.
            </p>
            <p className="text-gray-600">
              Hoje, somos referência no mercado, atendendo grandes corporações com uma
              frota moderna e um sistema de gestão inteligente que garante eficiência
              e segurança em cada viagem.
            </p>
          </div>
        </div>
      </section>

      {/* Valores */}
      <section className="bg-gray-50 py-20">
        <div className="container">
          <h2 className="text-3xl font-bold text-center mb-12">Nossos Valores</h2>
          <div className="grid md:grid-cols-4 gap-8">
            {valores.map((valor, index) => (
              <div key={index} className="text-center">
                <div className="text-4xl mb-4">{valor.icone}</div>
                <h3 className="text-xl font-bold mb-3">{valor.titulo}</h3>
                <p className="text-gray-600">{valor.descricao}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Números */}
      <section className="py-20">
        <div className="container">
          <h2 className="text-3xl font-bold text-center mb-12">ExecCorp em Números</h2>
          <div className="grid md:grid-cols-4 gap-8 text-center">
            <div>
              <div className="text-4xl font-bold text-primary mb-2">+100</div>
              <p className="text-gray-600">Empresas Atendidas</p>
            </div>
            <div>
              <div className="text-4xl font-bold text-primary mb-2">+500</div>
              <p className="text-gray-600">Veículos na Frota</p>
            </div>
            <div>
              <div className="text-4xl font-bold text-primary mb-2">+50k</div>
              <p className="text-gray-600">Viagens Realizadas</p>
            </div>
            <div>
              <div className="text-4xl font-bold text-primary mb-2">98%</div>
              <p className="text-gray-600">Satisfação dos Clientes</p>
            </div>
          </div>
        </div>
      </section>

      {/* Time */}
      <section className="bg-gray-50 py-20">
        <div className="container text-center">
          <h2 className="text-3xl font-bold mb-6">Faça Parte do Nosso Time</h2>
          <p className="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Estamos sempre em busca de talentos que queiram transformar o futuro da
            mobilidade corporativa. Confira nossas vagas abertas e junte-se a nós.
          </p>
          <button className="bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-full font-semibold">
            Ver Vagas Disponíveis
          </button>
        </div>
      </section>
    </main>
  );
} 