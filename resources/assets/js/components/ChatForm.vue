<template>
    <div class="input-group">
        <input type="text" name="message" class="form-control"
               placeholder="Send a message" v-model="message" @keyup.enter="sendMessage">
        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['room'],

        data() {
            return {
                message: ''
            }
        },

        methods: {
            sendMessage() {
                if (this.message.trim()) {
                    currentUser.sendMessage({
                        text: this.message,
                        roomId: this.room.id
                    });
                    this.message = '';
                }
            }
        }
    }
</script>
