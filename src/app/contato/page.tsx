import Navbar from '@/components/Navbar';

export default function Contato() {
  return (
    <main>
      <Navbar />
      
      {/* Header */}
      <section className="bg-primary text-white py-16">
        <div className="container">
          <h1 className="text-4xl font-bold mb-4">Entre em Contato</h1>
          <p className="text-lg">
            Estamos prontos para ajudar sua empresa com soluções de mobilidade
          </p>
        </div>
      </section>

      {/* Formulário e Informações */}
      <section className="py-20">
        <div className="container">
          <div className="grid md:grid-cols-2 gap-12">
            {/* Formulário */}
            <div>
              <h2 className="text-2xl font-bold mb-6">Envie sua mensagem</h2>
              <form className="space-y-6">
                <div>
                  <label htmlFor="nome" className="block text-gray-700 mb-2">
                    Nome completo
                  </label>
                  <input
                    type="text"
                    id="nome"
                    name="nome"
                    className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                    required
                  />
                </div>
                <div>
                  <label htmlFor="empresa" className="block text-gray-700 mb-2">
                    Empresa
                  </label>
                  <input
                    type="text"
                    id="empresa"
                    name="empresa"
                    className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                    required
                  />
                </div>
                <div>
                  <label htmlFor="email" className="block text-gray-700 mb-2">
                    E-mail corporativo
                  </label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                    required
                  />
                </div>
                <div>
                  <label htmlFor="telefone" className="block text-gray-700 mb-2">
                    Telefone
                  </label>
                  <input
                    type="tel"
                    id="telefone"
                    name="telefone"
                    className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                    required
                  />
                </div>
                <div>
                  <label htmlFor="mensagem" className="block text-gray-700 mb-2">
                    Mensagem
                  </label>
                  <textarea
                    id="mensagem"
                    name="mensagem"
                    rows={4}
                    className="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                    required
                  ></textarea>
                </div>
                <button
                  type="submit"
                  className="w-full bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-lg font-semibold"
                >
                  Enviar Mensagem
                </button>
              </form>
            </div>

            {/* Informações de Contato */}
            <div>
              <h2 className="text-2xl font-bold mb-6">Informações de Contato</h2>
              <div className="space-y-8">
                <div>
                  <h3 className="text-lg font-semibold mb-2">Endereço</h3>
                  <p className="text-gray-600">
                    Rua Principal, 1000<br />
                    São Gonçalo do Amarante - RN, 59290-000
                  </p>
                </div>
                <div>
                  <h3 className="text-lg font-semibold mb-2">Telefone</h3>
                  <p className="text-gray-600">
                    +55 (84) 3000-0000
                  </p>
                </div>
                <div>
                  <h3 className="text-lg font-semibold mb-2">E-mail</h3>
                  <p className="text-gray-600">
                    contato@execcorp.com.br
                  </p>
                </div>
                <div>
                  <h3 className="text-lg font-semibold mb-2">Horário de Atendimento</h3>
                  <p className="text-gray-600">
                    Segunda a Sexta: 8h às 18h<br />
                    Sábado: 9h às 13h
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  );
} 