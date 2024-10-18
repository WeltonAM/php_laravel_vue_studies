<template>
    <nav class="flex justify-between p-4 bg-gray-200">
        <div class="text-lg">
            NavBar
        </div>

        <div class="flex gap-x-4 me-auto mb-2 mb-lg-0">
            <ul>
                <li class="nav-item">
                    <Link class="text-dark" :href="route('myHome')" >Home</Link>
                </li>

                <li class="nav-item">
                    <Link class="text-dark" :href="route('aboutUs')" >About</Link>
                </li>

                <li class="nav-item">
                    <Link class="text-dark" :href="route('contactUs')" >Contact</Link>
                </li>
            </ul>
        </div>

    </nav>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
