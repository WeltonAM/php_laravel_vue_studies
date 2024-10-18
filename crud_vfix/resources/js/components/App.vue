<template>
    <div class="flex flex-col justify-between min-h-screen">
        <div>
            <nav>
                <router-link class="mr-4" to="/">Home</router-link>
                <router-link class="mr-4" to="/about">About</router-link>
            </nav>
        </div>

        <div class="flex-1 flex flex-col justify-center items-center">
            <router-view />
        </div>
    </div>
</template>


