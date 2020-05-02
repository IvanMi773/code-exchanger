<template>
	<div class="container">
		<div class="row">
			<form class="bg">
				<h3>Вітаємо знову!</h3>

				<div class="input-field">
					<input id="email" type="text" class="validate" />
					<label for="email">Email</label>
				</div>

				<div class="input-field">
					<input id="password" type="password" class="validate" />
					<label for="password">Password</label>
				</div>

                <p>Не має аккаунта?
                    <router-link to="/register">Зареєструйтесь</router-link>    
                </p>

				<Button text="Увійти" />
			</form>
		</div>
	</div>
</template>

<script>
	import Button from '@/components/Button';

	export default {
		name: 'Register',

		components: {
			Button,
		},
	};
</script>

<style lang="scss" scoped>
	@import '@/assets/scss/index';

	.bg {
		background-color: $light-gray;
		margin-left: auto;
		margin-right: auto;
		margin-top: 1rem;
		margin-bottom: auto;
		padding: 1rem;
	}

	.input-field label {
		color: #000;
	}

	.input-field input[type='text']:focus + label {
		color: #000;
	}

	.input-field input[type='password']:focus + label {
		color: #000;
	}

	.input-field input[type='text']:focus {
		border-bottom: 1px solid #000;
		box-shadow: 0 1px 0 0 #000;
	}

	.input-field input[type='text'][type='password'].valid {
		border-bottom: 1px solid #000;
		box-shadow: 0 1px 0 0 #000;
	}

	.input-field input[type='password'][type='password']:focus {
		border-bottom: 1px solid #000;
		box-shadow: 0 1px 0 0 #000;
	}

	.input-field .prefix.active {
		color: #000;
	}
</style>
