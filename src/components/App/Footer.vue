<template>
	<footer class="page-footer">
		<div class="footer-copyright">
			<div class="container">
				© 2020 Всі права захищені
			</div>
		</div>
	</footer>
</template>

<script>
	export default {
		name: 'Footer',
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/index';

	.page-footer {
		background-color: $black;
		position: fixed;
		left: 0px;
		bottom: 0px;
		height: 74px;
		width: 100%;
	}
</style>
