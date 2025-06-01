'use client';

import Image from 'next/image';
import Link from 'next/link';
import { motion } from 'framer-motion';
import { FiArrowRight, FiShield, FiSmartphone, FiTruck, FiUsers } from 'react-icons/fi';
import Navbar from '@/components/Navbar';
import Slideshow from '@/components/Slideshow';

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  animate: { opacity: 1, y: 0 },
  transition: { duration: 0.5 }
};

export default function Home() {
  return (
    <main className="overflow-hidden">
      <Navbar />
      
      {/* Hero Section */}
      <section className="min-h-screen relative flex items-center">
        {/* Background com gradiente */}
        <div className="absolute inset-0 bg-gradient-to-br from-primary via-secondary to-accent opacity-90" />
        
        <div className="container relative z-10 pt-32">
          <div className="grid lg:grid-cols-2 gap-12 items-center">
            <motion.div
              initial={{ opacity: 0, x: -50 }}
              animate={{ opacity: 1, x: 0 }}
              transition={{ duration: 0.5 }}
            >
              <h1 className="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                Transporte Corporativo{' '}
                <span className="text-accent">Premium</span>
              </h1>
              <p className="text-xl text-gray-100 mb-8">
                Excelência em mobilidade corporativa com tecnologia avançada,
                conforto superior e profissionalismo incomparável.
              </p>
              <div className="flex flex-wrap gap-4">
                <Link href="/contato" className="btn-primary">
                  Solicitar Orçamento
                </Link>
                <Link href="/servicos" className="btn-secondary text-white border-white">
                  Nossos Serviços
                </Link>
              </div>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, scale: 0.8 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ duration: 0.5, delay: 0.2 }}
              className="relative"
            >
              <div className="relative h-[500px] animate-float">
                <Slideshow />
              </div>
            </motion.div>
          </div>
        </div>

        {/* Scroll Indicator */}
        <motion.div
          initial={{ opacity: 0, y: 10 }}
          animate={{ opacity: 1, y: 0 }}
          transition={{ delay: 1, duration: 1, repeat: Infinity }}
          className="absolute bottom-8 left-1/2 transform -translate-x-1/2"
        >
          <div className="w-6 h-10 border-2 border-white rounded-full flex justify-center">
            <div className="w-1 h-3 bg-white rounded-full mt-2 animate-bounce" />
          </div>
        </motion.div>
      </section>

      {/* Features Section */}
      <section className="section bg-background">
        <div className="container">
          <motion.div
            initial="initial"
            whileInView="animate"
            viewport={{ once: true }}
            className="text-center max-w-3xl mx-auto mb-16"
          >
            <motion.h2 
              variants={fadeIn}
              className="text-4xl md:text-5xl font-bold mb-6"
            >
              Por que escolher a{' '}
              <span className="gradient-text">ExecCorp</span>?
            </motion.h2>
            <motion.p 
              variants={fadeIn}
              className="text-xl text-gray-600"
            >
              Combinamos tecnologia de ponta com excelência em serviço para 
              oferecer a melhor experiência em transporte corporativo.
            </motion.p>
          </motion.div>

          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            {features.map((feature, index) => (
              <motion.div
                key={feature.title}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.2 }}
                className="card p-6 text-center group"
              >
                <div className="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors duration-300">
                  {feature.icon}
                </div>
                <h3 className="text-xl font-bold mb-4">{feature.title}</h3>
                <p className="text-gray-600">{feature.description}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* Stats Section */}
      <section className="section bg-primary text-white">
        <div className="container">
          <div className="grid md:grid-cols-4 gap-8 text-center">
            {stats.map((stat, index) => (
              <motion.div
                key={stat.value}
                initial={{ opacity: 0, scale: 0.5 }}
                whileInView={{ opacity: 1, scale: 1 }}
                viewport={{ once: true }}
                transition={{ delay: index * 0.1 }}
              >
                <div className="text-5xl font-bold mb-2">{stat.value}</div>
                <p className="text-lg opacity-90">{stat.label}</p>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="section bg-background">
        <div className="container">
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            className="card p-12 text-center max-w-4xl mx-auto"
          >
            <h2 className="text-4xl font-bold mb-6">
              Pronto para elevar o padrão do transporte da sua empresa?
            </h2>
            <p className="text-xl text-gray-600 mb-8">
              Entre em contato conosco e descubra como podemos oferecer uma
              experiência premium em mobilidade corporativa.
            </p>
            <Link
              href="/contato"
              className="btn-primary inline-flex items-center group"
            >
              Fale Conosco
              <FiArrowRight className="ml-2 group-hover:translate-x-1 transition-transform" />
            </Link>
          </motion.div>
        </div>
      </section>
    </main>
  );
}

const features = [
  {
    icon: <FiTruck className="w-8 h-8 text-primary" />,
    title: 'Frota Premium',
    description: 'Veículos executivos de luxo com todo conforto e segurança para suas viagens.'
  },
  {
    icon: <FiSmartphone className="w-8 h-8 text-primary" />,
    title: 'App Exclusivo',
    description: 'Gestão completa das viagens com nosso aplicativo desenvolvido para executivos.'
  },
  {
    icon: <FiShield className="w-8 h-8 text-primary" />,
    title: 'Máxima Segurança',
    description: 'Motoristas altamente treinados e monitoramento em tempo real de todas as viagens.'
  },
  {
    icon: <FiUsers className="w-8 h-8 text-primary" />,
    title: 'Suporte VIP',
    description: 'Atendimento personalizado 24/7 para garantir a melhor experiência.'
  }
];

const stats = [
  { value: '+200', label: 'Empresas Parceiras' },
  { value: '+1000', label: 'Veículos na Frota' },
  { value: '+100k', label: 'Viagens Realizadas' },
  { value: '99%', label: 'Satisfação dos Clientes' }
]; 