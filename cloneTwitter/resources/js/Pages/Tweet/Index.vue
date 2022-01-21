<template>
  <app-layout title="Profile">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Les derniers tweets
      </h2>
    </template>

    <div class="py-12">
      {{ tweets }}
    </div>
  </app-layout>
</template>

<script>
//import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  props: {
    tweets: Array,
  },

  components: {
    AppLayout,
  },
};
</script>
