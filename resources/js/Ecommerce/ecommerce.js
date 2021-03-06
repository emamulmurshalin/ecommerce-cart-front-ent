import Vue from "vue";
window.Vue = require('vue').default;

Vue.component(
    'app-confirmation-modal',
    require('./Components/Helpers/ConfirmationModal').default
);

Vue.component(
    'app-recommended-products',
    require('./Components/Views/RecommendedProduct').default
);
