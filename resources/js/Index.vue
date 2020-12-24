<template>
    <div>
        <router-link :to="{name: 'Home'}">Home</router-link>
        <router-link :to="{name: 'Second'}">Second</router-link>
        <router-view></router-view>
    </div>
</template>
