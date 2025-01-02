<script setup>
import {Link, router} from "@inertiajs/vue3";

    const menus = [
        {
            type : 'separator',
            title: 'Dashboard Analytics',
        },
        {
            type : 'menu',
            title: 'Dashboard',
            icon: 'bx bx-home-circle',
            path: '/admin/dashboard',
        },
        {
            type : 'separator',
            title: 'User Management',
        },
        {
            type : 'menu',
            title: 'Agent',
            icon: 'fas fa-user-secret',
            path: '/admin/agent',
        },
        {
            type : 'menu',
            title: 'Student',
            icon: 'fas fa-user-graduate',
            path: '/admin/student',
        },
        {
            type : 'separator',
            title: 'Site Management',
        },
        {
            type : 'menu',
            title: 'Roles',
            icon: 'fas fa-user-lock',
            path: '/admin/role',
        },
        {
            type : 'menu',
            title: 'System Logs',
            icon: 'fas fa-list-ul',
            path: '/admin/logs',
        },
    ]
</script>

<template>
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <template v-for="menu in menus">
                <li v-if="menu?.type === 'menu'" class="metismenu-item">
                    <Link :href="menu?.path" class="waves-effect" :class="router.page.url === menu.path ? 'text-dark' : ''">
                        <i :class="[
                            { 'text-dark': router.page.url === menu.path },
                            menu?.icon
                        ]"
                        style="font-size: 15px"
                        ></i>
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
