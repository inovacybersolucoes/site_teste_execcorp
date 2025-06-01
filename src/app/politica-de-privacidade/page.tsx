'use client';

import { motion } from 'framer-motion';

export default function PrivacyPolicy() {
  return (
    <main className="pt-24 pb-16 bg-background">
      <div className="container max-w-4xl">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ duration: 0.5 }}
        >
          <h1 className="text-4xl font-bold mb-8">Política de Privacidade</h1>
          
          <div className="prose prose-lg max-w-none">
            <div className="mb-8">
              <p className="text-xl mb-4">
                Execcorp – Transporte e Mobilidade Corporativa Ltda.<br />
                CNPJ 59.317.194/0001-04<br />
                ("Execcorp", "nós", "nosso")
              </p>
            </div>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">1. Escopo</h2>
              <p>
                Esta Política se aplica aos aplicativos Execcorp Passageiro e Execcorp Motorista, ao Painel Web corporativo e a quaisquer APIs ou websites controlados pela Execcorp. Ela explica como tratamos dados pessoais de: (i) funcionários-passageiros, (ii) motoristas parceiros, (iii) administradores das empresas contratantes. Conforme exigido pelo Google Play e pela App Store, o link desta Política é disponibilizado publicamente e dentro dos apps.
              </p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">2. Definições principais</h2>
              <ul className="list-disc pl-6 space-y-2">
                <li>LGPD – Lei Geral de Proteção de Dados Pessoais (Lei 13.709/2018)</li>
                <li>GDPR – Regulamento (EU) 2016/679</li>
                <li>Controlador – Execcorp</li>
                <li>Operador – prestadores que processam dados em nome da Execcorp (ex.: gateway de pagamento, Google Maps)</li>
                <li>Titular – pessoa natural a quem os dados dizem respeito</li>
              </ul>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">3. Categorias de dados coletados</h2>
              <div className="overflow-x-auto">
                <table className="min-w-full border-collapse border border-gray-200">
                  <thead>
                    <tr className="bg-gray-50">
                      <th className="border border-gray-200 p-3 text-left">Categoria</th>
                      <th className="border border-gray-200 p-3 text-left">Exemplos</th>
                      <th className="border border-gray-200 p-3 text-left">Base legal (LGPD art. 7)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td className="border border-gray-200 p-3">Identificação</td>
                      <td className="border border-gray-200 p-3">nome, e-mail corporativo, matrícula, CPF</td>
                      <td className="border border-gray-200 p-3">Legítimo interesse na prestação do serviço (art. 7, IX)</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3">Dados de corrida</td>
                      <td className="border border-gray-200 p-3">localização GPS em tempo real, origem/destino, horário</td>
                      <td className="border border-gray-200 p-3">Execução de contrato (art. 7, V)</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3">Dados de pagamento</td>
                      <td className="border border-gray-200 p-3">centro de custo, forma de cobrança da empresa</td>
                      <td className="border border-gray-200 p-3">Execução de contrato</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3">Dados de veículo/motorista</td>
                      <td className="border border-gray-200 p-3">CNH, placa, foto, histórico de viagens</td>
                      <td className="border border-gray-200 p-3">Obrigação legal (art. 7, II)</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3">Dados técnicos</td>
                      <td className="border border-gray-200 p-3">IP, modelo do dispositivo, sistema operacional</td>
                      <td className="border border-gray-200 p-3">Legítimo interesse (segurança & prevenção a fraudes)</td>
                    </tr>
                    <tr>
                      <td className="border border-gray-200 p-3">Dados sensíveis (opcional)</td>
                      <td className="border border-gray-200 p-3">biometria facial para verificação de identidade do motorista</td>
                      <td className="border border-gray-200 p-3">Consentimento explícito (art. 11, I)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>

            {/* Seções 4 a 13 */}
            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">4. Finalidades de uso</h2>
              <ul className="list-disc pl-6 space-y-2">
                <li>Prestação e gestão das corridas (roteirização, estimativa de tarifa e emissão de recibos).</li>
                <li>Cumprimento de obrigações legais e regulatórias junto a órgãos de trânsito e fiscais.</li>
                <li>Segurança e prevenção a fraudes – monitoramento de localização e análise de padrões suspeitos, seguindo as melhores práticas de apps de mobilidade.</li>
                <li>Suporte e atendimento ao titular.</li>
                <li>Analytics: métricas de desempenho e melhoria contínua, sempre em formato agregado e anonimizado.</li>
              </ul>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">5. Compartilhamento de dados</h2>
              <p>Não vendemos dados pessoais. Compartilhamos apenas com:</p>
              <ul className="list-disc pl-6 space-y-2">
                <li>Provedores de infraestrutura em nuvem, push-notifications e analytics (ex.: Google Cloud/Firebase) – sujeitos às cláusulas contratuais padrão do GDPR quando houver transferência internacional;</li>
                <li>Gateways de pagamento para faturamento corporativo;</li>
                <li>Autoridades públicas mediante obrigação legal ou ordem judicial.</li>
              </ul>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">6. Cookies e tecnologias similares</h2>
              <p>Nosso site e o Painel Web utilizam cookies de sessão e de preferência. Todos os cookies de terceiros são previamente listados na Seção "Segurança de Dados" do Google Play e declarados no Privacy Nutrition Label da App Store.</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">7. Retenção e eliminação</h2>
              <p>Mantemos dados somente pelo tempo necessário para cumprir as finalidades declaradas ou obrigações legais, observando o art. 15 da LGPD (término do tratamento). Decorridos os prazos legais, dados são anonimizados ou excluídos de forma segura.</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">8. Direitos do titular</h2>
              <p>O titular pode confirmar a existência de tratamento, acessar, corrigir, anonimizar, bloquear, portar ou excluir seus dados (LGPD arts. 18 e 20). Solicitações devem ser enviadas para o nosso Encarregado de Dados (DPO) no canal indicado abaixo.</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">9. Medidas de segurança</h2>
              <p>Adotamos criptografia em repouso e em trânsito, segregação lógica de bases e controles de acesso com autenticação multifator, atendendo aos requisitos de segurança mínimos para apps móveis da administração pública federal.</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">10. Transferência internacional</h2>
              <p>Quando houver processamento fora do Brasil (p.ex., servidores AWS/Iowa – EUA), utilizamos cláusulas contratuais padrão e exigimos que o país de destino tenha nível adequado de proteção conforme LGPD art. 33 e GDPR.</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">11. Crianças e adolescentes</h2>
              <p>Os aplicativos destinam-se a maiores de 18 anos. Contas corporativas de menores exigem cadastro pelo responsável legal da empresa contratante e consentimento específico (LGPD art. 14).</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">12. Atualizações desta Política</h2>
              <p>Esta versão entra em vigor em 19 maio 2025. Alterações relevantes serão comunicadas por e-mail corporativo e notificação in-app, com pelo menos 7 dias de antecedência, conforme exigem Google Play e App Store.</p>
            </section>

            <section className="mb-8">
              <h2 className="text-2xl font-bold mb-4">13. Contato do Encarregado (DPO)</h2>
              <p>
                Nome: [Nome do DPO]<br />
                E-mail: dpo@execcorp.com.br<br />
                Endereço: Rua Exemplo, 123 – Natal/RN – Brasil<br />
                Telefone: +55 84 0000-0000
              </p>
            </section>
          </div>
        </motion.div>
      </div>
    </main>
  );
} 