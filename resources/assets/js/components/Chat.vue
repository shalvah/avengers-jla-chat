<template>
    <div class="panel panel-default">
        <div class="panel-heading">{{ user.name }}</div>
        <div class="panel-body">
            <message-list :messages="messages"></message-list>
        </div>
        <div class="panel-footer">
            <chat-form :room="room"></chat-form>
        </div>
    </div>
</template>

<script>
    export default {

        props: ['user'],

        data() {
            return {
                room: {},
                messages: []
            }
        },

        created() {
            this.subscribeToChat();
        },

        methods: {
            async subscribeToChat() {
                let otherUserId = this.user.email;
                let roomName = [currentUser.id, otherUserId].sort().join('|');
                this.room = currentUser.rooms.find(room => room.name === roomName);
                if (!(this.room)) {
                    this.room = await currentUser.createRoom({
                        name: roomName,
                        private: true,
                        addUserIds: [otherUserId]
                    });
                    console.log('Created room', this.room)
                }
                currentUser.subscribeToRoom({
                    roomId: this.room.id,
                    hooks: {
                        onNewMessage: message => {
                            console.log(message)
                            this.addMessage(message);
                        }
                    },
                })
            },
            addMessage(message) {
                if (message.sender.id === currentUser.id) {
                    message.sender.id = 'You';
                }
                this.messages.push(message);
            }
        }
    }
</script>
