import Vue from 'vue';
import Vueex from 'vuex';

Vue.use(Vueex);

export const store = new Vueex.Store({
    state:
    {
        auth: {}
    },
    getters:
    {
        getAuth: state =>
        {
            return state.auth;
        }
    },
    mutations:
    {
        setAuthToken: (state, val) =>
        {
            state.auth.token = val;
        },
        setAuthUser: (state, val) =>
        {
            state.auth.user = val;
        }
    },
    actions:
    {
        setAuthToken: ({commit}, val) =>
        {
            commit('setAuthToken', val);
        },
        setAuthUser: ({commit}, val) =>
        {
            commit('setAuthUser', val);
        }
    }
});