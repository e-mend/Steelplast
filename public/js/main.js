Vue.component('header-component', {
    template: '#header-template',
    data() {
      return {
        title: 'Your Website Title',
      };
    },
  });

  new Vue({
    el: '#app',
  });