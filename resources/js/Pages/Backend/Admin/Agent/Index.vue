<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Link, router,} from "@inertiajs/vue3";
import {ref, watch} from "vue";
import Pagination from "../../../../Components/Pagination.vue";
import {debounce} from "lodash";

const props = defineProps({
    title: String,
    agents: Array | Object,
    queries: Array | Object,
    filters: Object,
    url: String
})

const form = ref({
    activation: props.queries?.activation ?? null,
    status: props.queries?.status ?? null,
    order: props.queries?.order ?? null,
    query: props.queries?.query ?? null,
})

let search = ref(props.filters?.search);
let orderBy = ref(props.filters?.orderBy);
let perPage = ref(props.filters?.perPage);
let status = ref(props.filters?.activation);

watch([search, orderBy, perPage, status], debounce(function ([val, val2, val3, status]) {
    router.get(props.url, {search: val, orderBy:val2, perPage: val3, status:status}, {preserveState: true, replace: true});
}, 300));


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
                                        <Link href="/admin/agent/create" class="btn btn-primary btn-sm waves-effect">
                                            <i class="fas fa-user-plus">&nbsp;</i> Add Agent
                                        </Link>
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class="col-3">
                                        <select name="" v-model="form.activation" id="" class="form-control">
                                            <option value="default" disabled selected>Search by activation</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <select name="" id="" v-model="status" class="form-control">
                                            <option value="default" disabled selected>Search by status</option>
                                            <option value="pending">Pending</option>
                                            <option value="active">Active</option>
                                            <option value="decline">Decline</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <select name="" id="" v-model="orderBy" class="form-control">
                                            <option value="default" disabled selected>Search by order</option>
                                            <option value="asc">ASC</option>
                                            <option value="desc">DESC</option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <input type="search" v-model="search" placeholder="Search..."
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table mb-0 border table-hover">
                                        <thead class="thead-light bg-light">
                                        <tr>
                                            <th>#SL</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Company Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="(agent,key) in agents.data" :key="agent?.id">
                                            <th scope="row">{{ key + 1 }}</th>
                                            <td>
                                                <div class=""
                                                     style="width: 35px;height: 35px;overflow: hidden;object-fit: cover;border-radius: 100%;">

                                                    <img v-if="agent?.image" :src="`/storage/${agent.image}`" alt=""
                                                         class="img-fluid">
                                                    <img v-else src="@/assets/images/agent-placeholder.jpg" alt=""
                                                         class="img-fluid">
                                                </div>
                                            </td>
                                            <td>{{ agent?.username ?? '' }}</td>
                                            <td>{{ agent?.agent?.comp_name }}</td>
                                            <td>{{ agent?.phone }}</td>
                                            <td>{{ agent?.email }}</td>
                                            <td>{{ agent?.agent?.status }}</td>
                                            <td>
                                                <Link href="#" class="btn btn-primary btn-sm waves-effect">
                                                    <i class="fas fa-edit"></i>
                                                </Link>
                                                &nbsp;
                                                <button class="btn btn-danger btn-sm waves-effect">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <Pagination :from="agents.from" :to="agents.to" :links="agents.links"
                                                :total="agents.total"/>
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
