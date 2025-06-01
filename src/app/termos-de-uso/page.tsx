'use client';

import { motion } from 'framer-motion';
import Navbar from '@/components/Navbar';

export default function TermsOfUse() {
  return (
    <main className="min-h-screen bg-background">
      <Navbar />
      <div className="container max-w-4xl pt-24 pb-16">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.5 }}
        >
          <h1 className="text-4xl font-bold mb-8">Termos de Uso</h1>
          
          <div className="prose prose-lg max-w-none">
            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">1. Aceitação dos Termos</h2>
              <p>
                Ao criar conta ou utilizar qualquer Serviço Execcorp, o usuário declara ter lido, compreendido e aceito integralmente este Termo, bem como a Política de Privacidade vigente. O uso destina-se a maiores de 18 anos e exclusivamente a corridas corporativas solicitadas por empresas contratantes. Qualquer violação poderá resultar em suspensão ou encerramento imediato da conta conforme orientação do Superior Tribunal de Justiça sobre segurança em apps de transporte.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">2. Definições</h2>
              <ul className="list-disc pl-6 space-y-2">
                <li><strong>Serviços</strong> – aplicativos Execcorp Passageiro e Motorista, Painel Web, APIs e demais soluções digitais.</li>
                <li><strong>Empresa Contratante</strong> – pessoa jurídica que celebra contrato com a Execcorp e assume o pagamento das corridas de seus funcionários.</li>
                <li><strong>Passageiro</strong> – funcionário ou colaborador autorizado pela Empresa Contratante.</li>
                <li><strong>Motorista</strong> – prestador de serviço autônomo previamente homologado pela Execcorp.</li>
                <li><strong>Usuário</strong> – qualquer pessoa que acesse ou utilize os Serviços.</li>
              </ul>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">3. Legislação Aplicável</h2>
              <p>Este Termo observa:</p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Marco Civil da Internet (Lei 12.965/2014), com especial atenção ao art. 7º (direitos do usuário) e art. 19 (responsabilidade por conteúdo de terceiros);</li>
                <li>Código de Defesa do Consumidor (Lei 8.078/1990), art. 6º (princípio da informação clara);</li>
                <li>Decreto 7.962/2013, que disciplina informações pré-contratuais em comércio eletrônico;</li>
                <li>LGPD (Lei 13.709/2018) quanto às bases legais de tratamento (art. 7º);</li>
                <li>Lei 13.640/2018, que atribui aos municípios a regulamentação do transporte remunerado privado individual.</li>
              </ul>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">4. Descrição dos Serviços</h2>
              <p>
                A Execcorp conecta Passageiros a Motoristas parceiros para corridas corporativas, gerencia rotas, calcula tarifas e processa faturamento diretamente à Empresa Contratante. A Execcorp não é transportadora e não mantém vínculo empregatício com Motoristas, atuando como intermediadora de tecnologia.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">5. Cadastro e Responsabilidades</h2>
              
              <h3 className="text-xl font-bold mt-6 mb-3">5.1 Passageiros</h3>
              <p>
                Devem informar dados verídicos (nome, CPF, e-mail corporativo, matrícula) e manter sigilo de credenciais. O compartilhamento de conta é proibido.
              </p>

              <h3 className="text-xl font-bold mt-6 mb-3">5.2 Motoristas</h3>
              <p>
                Devem possuir CNH válida, veículo em conformidade com a legislação municipal e aprovar verificação documental e, quando aplicável, biometria facial mediante consentimento explícito.
              </p>

              <h3 className="text-xl font-bold mt-6 mb-3">5.3 Empresas Contratantes</h3>
              <p>
                São responsáveis por: (i) indicar Passageiros autorizados; (ii) assegurar que apenas pessoas maiores de idade utilizem o serviço; (iii) efetuar o pagamento das corridas nas condições contratuais.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">6. Obrigações das Partes</h2>
              <div className="overflow-x-auto">
                <table className="min-w-full border-collapse border border-gray-200">
                  <thead>
                    <tr className="bg-gray-50">
                      <th className="border border-gray-200 p-3 text-left">Usuário</th>
                      <th className="border border-gray-200 p-3 text-left">Obrigações principais</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td className="border border-gray-200 p-3 font-semibold">Passageiro</td>
                      <td className="border border-gray-200 p-3">Utilizar o app exclusivamente para fins corporativos; respeitar Motoristas; pagar multas e pedágios que não estejam cobertos em contrato.</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3 font-semibold">Motorista</td>
                      <td className="border border-gray-200 p-3">Cumprir as leis de trânsito; manter seguro obrigatório; zelar pela segurança; recusar corridas que violem leis locais.</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3 font-semibold">Execcorp</td>
                      <td className="border border-gray-200 p-3">Manter a plataforma funcional; adotar medidas de segurança PCI-DSS para dados de pagamento; disponibilizar canais de suporte.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">7. Pagamentos e Faturamento</h2>
              <p>
                A tarifa é calculada com base em distância, tempo e variáveis contratuais. A Empresa Contratante autoriza a Execcorp a emitir faturas mensais ou integrar-se ao seu centro de custo. Não há cobranças diretas no cartão do Passageiro, exceto em casos de uso pessoal expressamente habilitado.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">8. Política de Privacidade</h2>
              <p>
                O tratamento de dados segue a Política de Privacidade publicada em URL permanente, conforme exigem Google Play DDA e App Store Review Guidelines. Entre outros pontos, os dados de localização são coletados apenas durante a corrida e armazenados criptografados em repouso.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">9. Propriedade Intelectual</h2>
              <p>
                Todo o software, marcas, logotipos e base de dados pertencem à Execcorp ou a seus licenciantes. É vedado efetuar engenharia reversa, copiar ou distribuir qualquer parte dos Serviços sem autorização.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">10. Condutas Proibidas</h2>
              <p>
                Incluem, mas não se limitam a: (i) uso do app para fins ilícitos; (ii) envio de conteúdo difamatório; (iii) tentativa de acesso não autorizado a sistemas; (iv) manipulação de tarifa ou localização; (v) fraude de identidade. Conteúdo ilegal poderá ser removido de ofício ou mediante ordem judicial, obedecendo aos parâmetros do art. 19 do Marco Civil.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">11. Suspensão e Encerramento</h2>
              <p>
                A Execcorp poderá suspender a conta a qualquer momento, em casos de violação grave ou risco à segurança, garantindo posterior direito de defesa, conforme entendimento do STJ.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">12. Limitação de Responsabilidade</h2>
              <p>
                A Execcorp não responde por danos decorrentes de: (i) falha no dispositivo ou conexão do usuário; (ii) eventos de força maior; (iii) conduta de terceiros (Motoristas ou Passageiros) além do que prevê o CDC. Em qualquer hipótese, a responsabilidade total ficará limitada ao valor da corrida específica que originou o dano direto.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">13. Alterações nos Termos</h2>
              <p>
                Este Termo poderá ser atualizado para refletir mudanças legais, tecnológicas ou de negócio. Alterações relevantes serão notificadas com antecedência mínima de sete dias via e-mail corporativo e notificação in-app, em consonância com o Decreto 7.962/2013.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">14. Resolução de Conflitos e Foro</h2>
              <p>
                As partes envidarão esforços para resolver conflitos amigavelmente. Persistindo o litígio, fica eleito o foro da Comarca de São Gonçalo do Amarante/RN, renunciando a qualquer outro, por mais privilegiado que seja.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">15. Contato</h2>
              <p>
                Encarregado de Dados (DPO): dpo@execcorp.com.br<br />
                Suporte Geral: suporte@execcorp.com.br | +55 84 0000-0000<br />
                Endereço: Rua Exemplo, 123 – São Gonçalo do Amarante/RN – Brasil
              </p>
            </section>
          </div>
        </motion.div>
      </div>
    </main>
  );
} 