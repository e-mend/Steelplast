Vue.component('header-component', {
    template: '#header-template',
    data() {
      return {
        title: 'STEELPLAST',
        homeTitle: 'HOME',
        productsTitle: 'PRODUTOS',
        contactTitle: 'CONTATO'
      };
    },
    methods: {
      
    },
    mounted(){
      
    },
  });

  Vue.component('carousel-component', {
    template: '#carousel-template',
    data() {
      return {
        images: []
      };
    },
    methods: {
      async fetchData() {
          try {
            const response = await fetch('https://api.nekosapi.com/v3/images?limit=10&rating=safe');
            const data = await response.json();
            this.images = data.items;
          } catch (error) {
            console.error('Error fetching data:', error);
        }
      },
      isFirstElement(index) {
        // Return true for the first element, false for the rest
        return index === 0;
      },
    },
    beforeMount(){
      this.fetchData();
    }
  });
  
  Vue.component('main-component', {
    template: '#main-template',
    data(){
      return {
        items: [
          {
            id: 1,
            title: 'SOBRE',
            body: 'Bem-vindo à Steelplast, uma organização dedicada à excelência e à inovação. Desde a nossa fundação em 2000, temos trabalhado incansavelmente para oferecer soluções excepcionais e construir \
            relacionamentos sólidos com nossos clientes, colaboradores e parceiros.',
            empty: ''
          },
          {
            id: 2,
            title: 'VALORES',
            body: `Qualidade Intransigente: Comprometemo-nos a oferecer apenas materiais de engenharia que atendam aos mais altos padrões de qualidade, assegurando a satisfação e confiança de nossos clientes.

            Inovação Contínua: Estimulamos a criatividade e a busca constante por soluções inovadoras, visando aprimorar nossos processos e antecipar as necessidades do mercado.
            
            Conexão Global: Acreditamos na força das conexões globais e na importância de integrar o Brasil ao cenário internacional, promovendo um intercâmbio de conhecimentos e tecnologias.
            
            Relações de Confiança: Valorizamos a transparência e integridade em todas as nossas relações, cultivando parcerias de longo prazo baseadas na confiança mútua e no respeito.
            
            Atendimento Personalizado: Priorizamos a satisfação do cliente, oferecendo um atendimento personalizado e consultivo, adaptando-nos às necessidades específicas de cada projeto.`,
            empty: ''
          },
        ]
      }
    },
    methods: {
      writeText(item) {
        let currentIndex = 0;
        const intervalId = setInterval(() => {
          item.empty += item.body[currentIndex];
          currentIndex++;
  
          if (currentIndex === item.body.length) {
            clearInterval(intervalId);
          }
        }, 50);
      }
    },
    mounted(){
      for(let i = 0; i < this.items.length; i++){
        this.writeText(this.items[i]);
      }
      
    }
  });

  new Vue({
    el: '#app',
  });