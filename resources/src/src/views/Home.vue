<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png" />
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
    <p>Hello World</p>
    <p>{{ countNum }}</p>
    <button @click="changeValue">Click</button>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from "@/components/HelloWorld.vue";
import { mapActions, mapState } from "vuex";
import { mapGetters } from "vuex";
export default {
  name: "Home",
  components: {
    HelloWorld,
  },
  data() {
    return {};
  },
  mounted() {
  },
  methods: {
    ...mapActions('homeModule', ["changeValue"])
  },
  computed: {
    ...mapState('homeModule', {
      countNum: state => state.count
    }),
  },
};
</script>
