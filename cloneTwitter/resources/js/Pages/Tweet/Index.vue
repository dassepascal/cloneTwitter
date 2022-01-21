<template>
  <app-layout title="Profile">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Les derniers tweets
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div
          v-for="tweet in tweets"
          v-bind:key="tweet.id"
          class="
            flex
            items-center
            space-x-4
            bg-white
            overflow-hidden
            rounded rounded-b-none
            border-b-2 border-gray-200
            py-6
            px-4
          "
        >
          <div>
            <a
              class="text-sm text-gray-900 font-bold hover:text-blue-400"
              href="#"
            >
              {{ tweet.user.name }}
            </a>
            <span class="font-thin text-gray-400"
              >· le {{ tweet.created_at }}</span
            >
          </div>
        </div>
      </div>
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
