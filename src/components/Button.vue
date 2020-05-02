<template>
	<div>
		<router-link v-if="to" :to="to">
			<button id="button">{{ text }}</button>
		</router-link>

		<button v-else id="button">{{ text }}</button>
	</div>
</template>

<script>
	export default {
		name: 'Button',

		props: {
			text: {
				type: String,
				required: true,
			},

			to: {
				type: String,
				required: false,
			}
		},
	};
</script>

<style lang="scss" scoped>
    @import '@/assets/scss/index';

	#button {
		background-color: $black;
        color: #ffffff;
        padding: 1rem;
        border: none;
        border-radius: 3px;

		&:hover {
			background-color: $gray;
		}
	}
</style>
