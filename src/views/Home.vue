<template>
	<div class="bg row">
		<div class="col s6">
			<div class="container">
				<h3 class="title">Що таке Code Exchanger?</h3>

				<p class="text">
					Code Exchanger - це простий інструмент для створення
					проектів у невеликих командах
				</p>

                <div class="row">
                    <Button text="Зареєструватися" />
                    <Button text="Гайд" />
                </div>
			</div>
		</div>
		<div class="col s6">
			<img
				src="../../public/images/main_page.jpg"
				class="right img"
				alt="main page logo"
			/>
		</div>
	</div>
</template>

<script>
    import Button from '@/components/Button';
    
	export default {
        name: 'Home',
        
        components: {
            Button,
        },
	};
</script>

<style lang="scss" scoped>
    @import '@/assets/scss/index';

	.bg {
		background-color: $light-gray;
	}

	.img {
		margin: 1rem;
	}

	.title {
		color: #373757;
	}
</style>
