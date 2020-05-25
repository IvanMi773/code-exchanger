<template>
	<div>
		<div class="bg row p-5">
			<div class="col-6">
				<div class="container">
					<h3 class="title">Що таке Code Exchanger?</h3>

					<p class="text">
						Code Exchanger - це простий інструмент для створення
						проектів у невеликих командах
					</p>

                    <div class="row">
                        <Button class="button col-3 mr-5" text="Зареєструватися" />
                        <Button class="button col-3" text="Гайд" />
                    </div>
				</div>
			</div>

			<div class="col-6">
				<img
					src="../../../public/images/main_page.jpg"
					class="float-right img"
					alt="main page logo"
				>
			</div>
		</div>

		<div class="bg-1 row">
			<div class="col-6">
				<img
					src="../../../public/images/main_page_1.jpg"
					class="float-left img m-5"
					style="width: 500px"
					alt="main page photo"
				>
			</div>

			<div class="col-6">
				<h4 class="text mt-5">
					Зручний для використання у невеликих командах та самотужки
				</h4>
			</div>
		</div>

		<div class="bg-2 row">
			<div class="col-6">
				<h4 class="text ml-5 mt-5">
					Робить процес розробки швидшим і приємнішим
				</h4>
			</div>

			<div class="col-6">
				<img
					src="../../../public/images/main_page_2.jpg"
					class="float-left img m-5"
					style="width: 500px"
					alt="main page photo"
				>
			</div>
		</div>

		<div class="bg-1 row">
			<div class="col-6">
				<img
					src="../../../public/images/main_page_3.jpg"
					class="float-left img m-5"
					style="width: 500px"
					alt="main page photo"
				>
			</div>

			<div class="col-6 d-flex h-100">
				<h4 class="text mt-5 align-self-center">
					Пишіть на будь-якій мові програмування - Code Exchanger її підтримує
				</h4>
			</div>
		</div>

		<div class="row mx-auto align-items-center">
			<h5>
				Ми в соціальних мережах:
			</h5>
			<a href="https://web.telegram.org/ivanmi773">
				<img src="../../../public/images/telegram.png" style="width: 50px; heigth: 50px">
			</a>
		</div>
	</div>
</template>

<script>
	import Button from '../components/Button';

	export default {
		name: 'Home',

		components: {
			Button,
        },
	};
</script>

<style lang="scss" scoped>
	@import '../../sass/app';

    .bg {
        background-color: $light-gray;
	}
	
	.bg-1 {
		background-color: #E2F9E5;
	}

	.bg-2 {
		background-color: #DEE7FE;
	}

	.bg-3 {
		background-color: #FDF1FA;
	}
</style>