import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
	state: {
		currentUserId: null,
		currentUser: {},
	},

	mutations: {
		changeUserId(state, id) {
			state.currentUserId = id
		},

		changeCurrentUser(state, user) {
			state.currentUser = user
		}
	},

	actions: {},
	modules: {},
});
