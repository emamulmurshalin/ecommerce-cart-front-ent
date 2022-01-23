import Vue from "vue";
window.Vue = require('vue').default;

Vue.component(
    'app-confirmation-modal',
    require('./Components/Helpers/ConfirmationModal').default
);
