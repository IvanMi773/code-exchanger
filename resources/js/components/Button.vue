<template>
	<div>
		<a v-if="to" :href="to">
			<button type="submit" id="button">{{ text }}</button>
		</a>

		<button type="button" @submit.prevent="$emit('click')" v-else id="button">{{ text }}</button>
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
			},
		},
	};
</script>

<style lang="scss" scoped>
    @import '../../sass/app';

	#button {
		background-color: $black;
        color: #ffffff;
        padding: 0.7rem;
        border: none;
        border-radius: 3px;

		&:hover {
			background-color: $gray;
		}
	}
</style>
