<template>
    <div class="panel panel-default">
        <div class="panel-heading">{{ user.name }}</div>
        <div class="panel-body">
            <message-list :messages="messages"></message-list>
        </div>
        <div class="panel-footer">
            <chat-form @messagesent="addMessage"></chat-form>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                messages: []
            }
        },

        created() {
            this.subscribeToChat();
        },

        methods: {
            subscribeToChat() {
            },

            addMessage(message) {
                this.messages.push(message);
            }
        }
    }
</script>
