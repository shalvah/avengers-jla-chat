require('./bootstrap');

window.Vue = require('vue');

Vue.component('user-list', require('./components/UserList.vue'));
Vue.component('chat', require('./components/Chat.vue'));
Vue.component('message-list', require('./components/MessageList.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));

const app = new Vue({
    el: '#app',
    data() {
        return {
            users,
            currentChat,
        }
    },
    methods: {
        chatWith(event) {
            this.currentChat = event.chat;
        }
    }
});
