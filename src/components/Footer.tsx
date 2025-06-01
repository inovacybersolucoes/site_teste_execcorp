'use client';

import Link from 'next/link';
import { motion } from 'framer-motion';
import { FiMapPin, FiPhone, FiMail, FiFacebook, FiInstagram, FiLinkedin, FiArrowUp } from 'react-icons/fi';

export default function Footer() {
  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  const containerVariants = {
    hidden: { opacity: 0 },
    visible: {
      opacity: 1,
      transition: {
        staggerChildren: 0.1
      }
    }
  };

  const itemVariants = {
    hidden: { opacity: 0, y: 20 },
    visible: { opacity: 1, y: 0 }
  };

  return (
    <footer className="bg-secondary text-white relative">
      {/* Scroll to Top Button */}
      <button
        onClick={scrollToTop}
        className="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-primary hover:bg-primary/80 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-110"
      >
        <FiArrowUp size={24} />
      </button>

      <div className="container py-16">
        <motion.div
          variants={containerVariants}
          initial="hidden"
          whileInView="visible"
          viewport={{ once: true }}
          className="grid md:grid-cols-2 lg:grid-cols-4 gap-12"
        >
          {/* Sobre */}
          <motion.div variants={itemVariants}>
            <h3 className="text-2xl font-bold mb-6 gradient-text">ExecCorp</h3>
            <p className="text-gray-300 mb-6">
              Soluções inteligentes de mobilidade corporativa para sua empresa.
              Tecnologia e conforto em cada viagem.
            </p>
            <div className="flex space-x-4">
              <a
                href="https://facebook.com"
                target="_blank"
                rel="noopener noreferrer"
                className="text-gray-300 hover:text-white transition-colors duration-300"
              >
                <FiFacebook size={24} />
              </a>
              <a
                href="https://instagram.com"
                target="_blank"
                rel="noopener noreferrer"
                className="text-gray-300 hover:text-white transition-colors duration-300"
              >
                <FiInstagram size={24} />
              </a>
              <a
                href="https://linkedin.com"
                target="_blank"
                rel="noopener noreferrer"
                className="text-gray-300 hover:text-white transition-colors duration-300"
              >
                <FiLinkedin size={24} />
              </a>
            </div>
          </motion.div>

          {/* Links Rápidos */}
          <motion.div variants={itemVariants}>
            <h3 className="text-xl font-bold mb-6">Links Rápidos</h3>
            <ul className="space-y-3">
              <li>
                <Link 
                  href="/" 
                  className="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group"
                >
                  <span className="w-0 group-hover:w-2 h-0.5 bg-primary mr-0 group-hover:mr-2 transition-all duration-300" />
                  Início
                </Link>
              </li>
              <li>
                <Link 
                  href="/servicos" 
                  className="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group"
                >
                  <span className="w-0 group-hover:w-2 h-0.5 bg-primary mr-0 group-hover:mr-2 transition-all duration-300" />
                  Serviços
                </Link>
              </li>
              <li>
                <Link 
                  href="/sobre" 
                  className="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group"
                >
                  <span className="w-0 group-hover:w-2 h-0.5 bg-primary mr-0 group-hover:mr-2 transition-all duration-300" />
                  Sobre
                </Link>
              </li>
              <li>
                <Link 
                  href="/contato" 
                  className="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group"
                >
                  <span className="w-0 group-hover:w-2 h-0.5 bg-primary mr-0 group-hover:mr-2 transition-all duration-300" />
                  Contato
                </Link>
              </li>
              <li>
                <Link 
                  href="/termos-de-uso" 
                  className="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group"
                >
                  <span className="w-0 group-hover:w-2 h-0.5 bg-primary mr-0 group-hover:mr-2 transition-all duration-300" />
                  Termos de Uso
                </Link>
              </li>
              <li>
                <Link 
                  href="/politica-de-privacidade" 
                  className="text-gray-300 hover:text-white transition-colors duration-300 flex items-center group"
                >
                  <span className="w-0 group-hover:w-2 h-0.5 bg-primary mr-0 group-hover:mr-2 transition-all duration-300" />
                  Política de Privacidade
                </Link>
              </li>
            </ul>
          </motion.div>

          {/* Contato */}
          <motion.div variants={itemVariants}>
            <h3 className="text-xl font-bold mb-6">Contato</h3>
            <ul className="space-y-4">
              <li className="flex items-center text-gray-300 hover:text-white transition-colors duration-300">
                <FiMapPin className="mr-3 text-primary" />
                <span>Av. Paulista, 1000 - São Paulo</span>
              </li>
              <li className="flex items-center text-gray-300 hover:text-white transition-colors duration-300">
                <FiPhone className="mr-3 text-primary" />
                <span>+55 (11) 3000-0000</span>
              </li>
              <li className="flex items-center text-gray-300 hover:text-white transition-colors duration-300">
                <FiMail className="mr-3 text-primary" />
                <span>contato@execcorp.com.br</span>
              </li>
            </ul>
          </motion.div>

          {/* Newsletter */}
          <motion.div variants={itemVariants}>
            <h3 className="text-xl font-bold mb-6">Newsletter</h3>
            <p className="text-gray-300 mb-4">
              Receba novidades e atualizações sobre nossos serviços.
            </p>
            <form className="space-y-3">
              <input
                type="email"
                placeholder="Seu e-mail"
                className="w-full px-4 py-2 bg-white/10 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-white placeholder-gray-400"
              />
              <button
                type="submit"
                className="w-full bg-primary hover:bg-primary/80 text-white px-4 py-2 rounded-lg transition-colors duration-300"
              >
                Inscrever-se
              </button>
            </form>
          </motion.div>
        </motion.div>
      </div>

      {/* Copyright */}
      <div className="border-t border-gray-800">
        <div className="container py-6">
          <p className="text-center text-gray-400">
            © {new Date().getFullYear()} ExecCorp - Transporte Corporativo. Todos os direitos reservados.
          </p>
        </div>
      </div>
    </footer>
  );
} 