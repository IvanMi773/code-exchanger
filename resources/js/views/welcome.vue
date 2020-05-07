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
</style>