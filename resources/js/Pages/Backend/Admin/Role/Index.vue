<script setup>
    import AdminLayout from "@/Layouts/AdminLayout.vue";
    import {Link, router} from "@inertiajs/vue3";
    import {deleteConfirmation , success } from "@/Helper/helper.js"
    defineProps({
        title: String,
        roles : Array,
    })

    const deleteRole = async (id) =>{
        const result = await deleteConfirmation()
        if (result.isConfirmed) {
            router.delete(`/admin/role/${id}`)
        }
    }
</script>

<template>
    <AdminLayout>
        <div class="page-content">
            <div class="container-fluid">
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">{{ title }}</h4>
                                    <div>
                                        <Link href="/admin/role/create" class="btn btn-primary btn-sm waves-effect">
                                            <i class="fas fa-plus">&nbsp;</i> Create Role
                                        </Link>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">

                                        <thead>
                                        <tr>
                                            <th>#SL</th>
                                            <th>Role</th>
                                            <th>Permissions</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="(role,key) in roles" :key="agent?.id">
                                            <th scope="row" style="width: 20%;">{{ key + 1 }}</th>
                                            <td style="width: 20%;">
                                                <span class="text-capitalize">{{ role?.name }}</span>
                                            </td>
                                            <td style="width:40%;">
                                                <div class="">
                                                    <span v-for="(permission,key) in role?.permissions" :key="key" class="badge badge-soft-primary text-capitalize mx-1">{{ permission?.name }}</span>
                                                </div>
                                            </td>
                                            <td style="width: 30%;">
                                                <Link :href="role?.name !== 'admin' && `/admin/role/${role?.id}/edit`"
                                                      class="btn btn-primary btn-sm waves-effect"
                                                      :class="role?.name === 'admin' ? 'cursore-notalow': '' "
                                                      :disabled="role?.name === 'admin'">
                                                    <i class="fas fa-edit"></i>
                                                </Link>
                                                &nbsp;
                                                <button class="btn btn-danger btn-sm waves-effect"
                                                        :class="role?.name === 'admin' ? 'cursore-notalow': '' "
                                                        :disabled="role?.name === 'admin'"
                                                        @click="deleteRole(role?.id)">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
