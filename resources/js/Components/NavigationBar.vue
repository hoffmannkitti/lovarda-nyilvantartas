<template>
  <nav class="navigation-bar bg-white p-4 mx-auto max-w-7xl w-[70%]">
    <ul class="flex justify-between p-0 m-0 list-none">
      <li class="text-l font-bold">
        <Link href="/dashboard">Dashboard</Link>
      </li>

      <li v-if="user?.role === 'admin'" class="text-l font-bold">
        <Link href="/admin">Admin Panel 1</Link>
      </li>

      <li v-if="user?.role === 'admin'" class="text-l font-bold">
        <Link href="/admin">Admin Panel 2</Link>
      </li>

      <li v-if="user?.role === 'admin'" class="text-l font-bold">
        <Link href="/admin">Admin Panel 3</Link>
      </li>

      <li v-if="user?.role === 'admin'" class="text-l font-bold">
        <Link href="/admin">Admin Panel 4</Link>
      </li>

      <li v-if="user?.role === 'rider'" class="text-l font-bold">
        <Link href="/rider/profile">Profil</Link>
      </li>

      <li v-if="user?.role === 'rider'" class="text-l font-bold">
        <Link href="/rider/profile">Rider 1</Link>
      </li>

      <li v-if="user?.role === 'rider'" class="text-l font-bold">
        <Link href="/rider/profile">Rider 2</Link>
      </li>

      <li v-if="user?.role === 'rider'" class="text-l font-bold">
        <Link href="/rider/profile">Rider 3</Link>
      </li>

      <li v-if="user?.role === 'employee'" class="text-l font-bold">
        <Link href="/employee/tasks">Feladatok 1</Link>
      </li>

      <li v-if="user?.role === 'employee'" class="text-l font-bold">
        <Link href="/employee/tasks">Feladatok 2</Link>
      </li>

      <li v-if="user?.role === 'employee'" class="text-l font-bold">
        <Link href="/employee/tasks">Munkanapló</Link>
      </li>

      <li v-if="!user" class="text-xl font-bold">
        <Link href="/login">Bejelentkezés</Link>
      </li>
    </ul>
  </nav>
</template>

<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/vue3'

const props = defineProps({
  user: {
    type: Object,
    default: null,
  },
})
</script>

<style scoped>
.navigation-bar ul {
  list-style: none;
  display: flex;
  gap: 1rem;
  padding: 0;
  margin: 0;
}

.navigation-bar li {
  /* stílus, pl. hover, színek, stb. */
}
</style>
