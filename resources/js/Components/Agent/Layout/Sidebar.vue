<script setup>
    import {Link} from "@inertiajs/vue3";

    const menus = [
        {
            type : 'separator',
            title: 'Dashboard Analytics',
        },
        {
            type : 'menu',
            title: 'Dashboard',
            icon: 'bx bx-home-circle',
            path: '/agent/dashboard',
        },
    ]
</script>

<template>
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <template v-for="menu in menus">
                <li v-if="menu?.type === 'menu'" class="metismenu-item">
                    <Link :href="menu?.path" class="waves-effect">
                        <i :class="menu?.icon"></i>
                        <span key="t-chat">{{ menu?.title}}</span>
                    </Link>
                </li>
                <li v-if="menu?.type === 'separator'" class="menu-title">{{ menu?.title }}</li>
            </template>
        </ul>
    </div>
</template>

<style scoped>

</style>
