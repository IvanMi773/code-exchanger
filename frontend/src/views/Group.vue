<template>
    <div>
        hello from group
    </div>
</template>

<script>
export default {
    name: 'Group',

    mounted() {
        const currentUser = this.$store.currentUserId        

        if (currentUser === null) {
            this.$router.push('/login');
        }
    }
}
</script>