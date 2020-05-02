<template>
	<div id="app">
		<div id="nav">
			<Navbar />
		</div>

		<router-view />

		<Footer />
	</div>
</template>

<script>
	import Navbar from '@/components/App/Navbar';
	import Footer from '@/components/App/Footer';

	export default {
		components: {
			Navbar,
			Footer,
		},
	};
</script>