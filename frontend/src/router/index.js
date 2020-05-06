import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const routes = [
	{
		path: '/',
		name: 'Home',
		component: () => import('../views/Home.vue'),
	},

	{
		path: '/register',
		name: 'Register',
		component: () => import('../views/Auth/Register'),
	},

	{
		path: '/login',
		name: 'Login',
		component: () => import('../views/Auth/Login'),
	},

	{
		path: '/group',
		name: 'Group',
		meta: { auth: true },
		component: () => import('../views/Group'),
	},
];

const router = new VueRouter({
	mode: 'history',
	base: process.env.BASE_URL,
	routes,
});

export default router;