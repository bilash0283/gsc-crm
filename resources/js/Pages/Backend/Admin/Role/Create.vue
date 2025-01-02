<script setup>
    import {ref} from  "vue"
    import AdminLayout from "@/Layouts/AdminLayout.vue";
    import {Link, router} from "@inertiajs/vue3";

    defineProps({
        title: String,
        modules : Array,
    })

    const form = ref({
        name : '',
        permissions : [],
    });

    const errors = ref({});

    const setPermissions = (permission) => {
        if (form.value.permissions.includes(permission)) {
            const index = form.value.permissions.indexOf(permission);
            form.value.permissions.splice(index, 1);
        } else {
            form.value.permissions.push(permission);
        }
    };

    const submitForm = () => {
        router.post('/admin/role', form.value,{
            onSuccess: data => {
                console.log(data);
            },
            onError: error => {
                errors.value = error;
            }
        })
    }

</script>

<template>
    <AdminLayout>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">{{ title }}</h4>
                                    <div>
                                        <Link href="/admin/role" class="btn btn-primary btn-sm waves-effect">
                                            <i class="fas fa-arrow-left">&nbsp;</i> Go Back</Link>
                                    </div>
                                </div>
                                <form @submit.prevent="submitForm()">
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <label class="visually-hidden" for="autoSizingInputGroup">Role Name</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    :class="errors?.name && 'is-invalid'"
                                                    v-model="form.name"
                                                    id="autoSizingInputGroup"
                                                    placeholder="Enter role name here..."
                                                />
                                                <button class="input-group-text btn btn-primary waves-effect">Submit Form</button>
                                            </div>
                                            <small class="mt-3 text-danger" v-if="errors?.name">{{ errors?.name}}</small>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div v-if="errors?.permissions" class="alert alert-danger d-flex justify-content-between align-items-center" role="alert">
                                            <span>
                                                {{ errors?.permissions }}
                                            </span>
                                            <button type="button" class="btn btn-sm btn-outline-danger waves-effect" aria-label="Close" @click="errors.permissions = null">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3" v-for="(module, key) in modules" :key="key">
                                            <div class="card border h-100">
                                                <div class="card-header">
                                                    {{ key }}
                                                </div>
                                                <div class="card-body">
                                                    <div
                                                        v-for="(item, key) in module"
                                                        class="form-check form-switch form-switch-md mb-3"
                                                        dir="ltr"
                                                        :key="key"
                                                    >
                                                        <input
                                                            class="form-check-input"
                                                            @change="setPermissions(item?.id)"
                                                            type="checkbox"
                                                            :id="item?.name"
                                                        />
                                                        <label class="form-check-label text-capitalize" :for="item?.name">{{ item?.name }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
