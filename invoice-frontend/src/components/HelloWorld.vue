<script setup>
import {Button} from "./ui/button/index.js";
import { ref } from 'vue'

defineProps({
  msg: String,
})

const count = ref(0)
</script>

<template>
  <Button variant="secondary">Button</Button>
  <h1 class="bg-red-600">{{ msg }}</h1>
</template>

<style scoped></style>
