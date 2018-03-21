<template>
    <div style="padding: 20px 20% 0 20%; background-color: #3097d1;">
        <ul class="list-group">
            <li class="list-group-item" v-for="user in users">
                <div @click="chatWith(user)" style="cursor: pointer">
                    {{ user.name }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        props: ['users'],

        methods: {
            chatWith(user) {
                this.$emit('chatopened', { user });
            }
        }
    }
</script>
