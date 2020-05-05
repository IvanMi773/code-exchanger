import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
	state: {
		currentUserId: null,
	},

	mutations: {
		changeUserId(state, id) {
			state.currentUserId = id
		},
	},

	actions: {},
	modules: {},
});
