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
    components: {
      'carousel': VueCarousel.Carousel,
      'slide': VueCarousel.Slide
    },
    data() {
      return {
        images: [],
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
      }
    },
    mounted(){
      this.fetchData();
    }
  });

  Vue.component('main-component', {
    template: '#main-template',
    data(){
      return {
        aboutTitle: 'SOBRE',
        aboutBody: 'Bem-vindo à Steelplast, uma organização dedicada à excelência e à inovação. Desde a nossa fundação em 2000, temos trabalhado incansavelmente para oferecer soluções excepcionais e construir \
        relacionamentos sólidos com nossos clientes, colaboradores e parceiros.',
        emptyBody: ''
      }
    },
    methods: {
      writeText() {
        let currentIndex = 0;
        const intervalId = setInterval(() => {
          this.emptyBody += this.aboutBody[currentIndex];
          currentIndex++;
  
          if (currentIndex === this.aboutBody.length) {
            clearInterval(intervalId);
          }
        }, 50);
      }
    },
    mounted(){
      this.writeText();
    }
  });

  new Vue({
    el: '#app',
  });