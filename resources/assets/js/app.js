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
            currentChat: '',
        }
    },

    methods: {
        chatWith(user) {
            this.currentChat = user;
        }
    }
});

import { ChatManager, TokenProvider } from '@pusher/chatkit';
const chatManager = new ChatManager({
    instanceLocator: process.env.MIX_CHATKIT_INSTANCE_LOCATOR,
    userId: window.user.email,
    tokenProvider: new TokenProvider({ url: process.env.MIX_CHATKIT_AUTH_URL })
});

chatManager.connect()
    .then(currentUser => {
        console.log('Successful connection', currentUser);
        window.currentUser = currentUser;
    })
    .catch(err => {
        console.log('Error on connection', err)
    });
