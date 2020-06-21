@extends('layouts.app')

@section('content')
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
                        <button class="btn btn-dark">
                            {{ __('Зареєструватися') }}
                        </button>

                        <button class="ml-4 btn btn-dark">
                            {{ __('Гайд') }}
                        </button>
                    </div>
				</div>
			</div>

			<div class="col-6">
				<img
					src="{{ asset('images/main_page.jpg') }}"
					class="float-right img"
					alt="main page logo"
				>
			</div>
		</div>

		<div class="bg-1 row">
			<div class="col-6">
				<img
					src="{{ asset('images/main_page_1.jpg') }}"
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
					src="{{ asset('images/main_page_2.jpg') }}"
					class="float-left img m-5"
					style="width: 500px"
					alt="main page photo"
				>
			</div>
		</div>

		<div class="bg-1 row">
			<div class="col-6">
				<img
					src="{{ asset('images/main_page_3.jpg') }}"
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
				<img src="{{ asset('images/telegram.png') }}" style="width: 50px; heigth: 50px">
			</a>
		</div>
	</div>
@endsection