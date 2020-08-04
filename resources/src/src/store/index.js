import Vue from 'vue'
import Vuex from 'vuex'
import homeModule from './modules/home'
import actions from './actions';
import mutations from './mutations';

Vue.use(Vuex)

export default new Vuex.Store({
  state: {

  },
  actions,
  mutations,
  modules: {
    homeModule
  }
})
