import { useState, useEffect } from 'react';

interface ScrollOptions {
  threshold?: number;
  debounceTime?: number;
}

export const useScroll = ({ threshold = 20, debounceTime = 100 }: ScrollOptions = {}) => {
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    let timeoutId: NodeJS.Timeout;

    const handleScroll = () => {
      if (timeoutId) {
        clearTimeout(timeoutId);
      }

      timeoutId = setTimeout(() => {
        setIsScrolled(window.scrollY > threshold);
      }, debounceTime);
    };

    window.addEventListener('scroll', handleScroll);
    return () => {
      window.removeEventListener('scroll', handleScroll);
      if (timeoutId) {
        clearTimeout(timeoutId);
      }
    };
  }, [threshold, debounceTime]);

  return { isScrolled };
}; 