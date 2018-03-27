<template>
    <ul style="list-style-type: none;">
        <li v-for="message in messages">
            <div>
                <strong class="primary-font">
                    {{ message.sender.displayName }}
                </strong>
            </div>
            <p>
                {{ message.text }}
            </p>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['messages']
    };
</script>
