<template>
	<div class="container">
		<div class="row">
			<form class="bg" @submit.prevent="submitHandler">
				<div class="">
					<h3>Вітаємо!</h3>

					<div class="input-field">
						<input
							id="name"
							v-model="name"
							type="text"
							class="validate"
							:class="{
								invalid:
									($v.name.$dirty && !$v.name.required) ||
									($v.name.$dirty && !$v.name.minLength),
							}"
						/>

						<label for="name">Імя</label>

						<span
							class="helper-text invalid"
							v-if="$v.name.$dirty && !$v.name.required"
						>
							Імя не можe бути пустим
						</span>

						<span
							class="helper-text invalid"
							v-if="$v.name.$dirty && !$v.name.minLength"
						>
							Мінімальна довжина імені:
							{{ $v.name.$params.minLength.min }}
						</span>
					</div>

					<div class="input-field">
						<input
							id="email"
							v-model="email"
							type="text"
							class="validate"
							:class="{
								invalid:
									($v.email.$dirty && !$v.email.required) ||
									($v.email.$dirty && !$v.email.email),
							}"
						/>

						<label for="email">Email</label>

						<span
							class="helper-text invalid"
							v-if="$v.email.$dirty && !$v.email.required"
						>
							Поле Email не можe бути пустим
						</span>

						<span
							class="helper-text invalid"
							v-if="$v.email.$dirty && !$v.email.email"
						>
							Введіть корректний Email
						</span>
					</div>

					<div class="input-field">
						<input
							id="password"
							v-model="password"
							type="password"
							class="validate"
							:class="{
								invalid:
									($v.password.$dirty &&
										!$v.password.required) ||
									($v.password.$dirty &&
										!$v.password.minLength),
							}"
						/>
						<label for="password">Password</label>

						<span
							class="helper-text invalid"
							v-if="$v.password.$dirty && !$v.password.required"
						>
							Пароль не можe бути пустим
						</span>

						<span
							class="helper-text invalid"
							v-if="$v.password.$dirty && !$v.password.minLength"
						>
							Мінімальна довжина пароля:
							{{ $v.password.$params.minLength.min }}
						</span>
					</div>

					<p>
						Уже є аккаунт?
						<router-link to="/login">Увійдіть</router-link>
					</p>

					<span v-if="err" class="helper-text invalid">Помилка валідації в одному з полів</span>

					<Button text="Зареєструватися" />
				</div>
			</form>
		</div>
	</div>
</template>

<script>
	import Button from '@/components/Button';
	import { required, email, minLength } from 'vuelidate/lib/validators';
	import gql from 'graphql-tag';

	export default {
		name: 'Register',

		components: {
			Button,
		},

		data() {
			return {
				name: '',
				email: '',
				password: '',
				err: '',
			};
		},

		validations: {
			name: {
				required,
				minLength: minLength(3),
			},

			email: {
				required,
				email,
			},

			password: {
				required,
				minLength: minLength(8),
			},
		},

		methods: {
			submitHandler() {
				if (this.$v.$invalid) {
					this.$v.$touch();
					return;
				}

				this.$apollo.mutate({
					mutation: gql`mutation($name: String!, $email: String!, $password: String!) {
						register(
							input: {
								name: $name
								email: $email
								password: $password
								password_confirmation: $password
							}
						) {
							status
						}
					}`,

					variables: {
						name: this.name,
						email: this.email,
						password: this.password,
						password_confirmation: this.password,
					}
				}).then(res => {
					if (res.data.register.status === "SUCCESS") {
						this.$router.push('/group')
					}
				})
				.catch(error => {
					console.log(error);
					error = this.err
				})
			},
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

	.invalid {
		color: #f44336;
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
