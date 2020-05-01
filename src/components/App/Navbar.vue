<template>
	<nav>
		<div class="nav-wrapper nav">
			<router-link to="/" class="ml-5 brand-logo">
				Code Exchanger
			</router-link>

			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><router-link to="/guide">Як це працює?</router-link></li>
				<li><router-link to="/about">Про нас</router-link></li>
				<li>
					<router-link to="/register">Зареєструватися</router-link>
				</li>
				<li><router-link to="/login">Увійти</router-link></li>
			</ul>
		</div>
	</nav>
</template>

<script>
	export default {
		name: 'Navbar',
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/index';

	.brand-logo {
		margin-left: 1rem;
	}

	nav {
		background-color: $black;
	}

	li {
		&:hover {
			background-color: $gray;
		}
	}
</style>
