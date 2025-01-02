<script setup>
    import AdminLayout from "@/Layouts/AdminLayout.vue";
    import {Link, router, useForm} from "@inertiajs/vue3";
    import {ref , computed} from "vue"
    import {toast} from "vue3-toastify";

    const props = defineProps({
        title: String,
        countries: Array,
        errors:Object
    })

    const formBody = useForm({
        username: "",
        email: "",
        phone: "",
        password: "",
        image: "",
    });
    // const errors = ref(null)
    const currentTab = ref(1);
    const isLoading = ref(false);
    const tabs = [
        {
            tab:1,
            title : 'Agent Personal Information',
            formData: [
                { name: 'username', type: 'text', required: true },
                { name: 'email', type: 'email', required: true },
                { name: 'phone', type: 'text', required: true },
                { name: 'password', type: 'password', required: true },
                { name: 'image', type: 'file', required: false }
            ],
        },
        {
            tab:2,
            title : 'Company Information',
            formData : [
                { name: 'designation', type: 'text', required: false },
                { name: 'country_id', type: 'select', required: false },
                { name: 'comp_name', type: 'text', required: false },
                { name: 'comp_address', type: 'text', required: false },
                { name: 'comp_start_year', type: 'date', required: false },
                { name: 'comp_logo', type: 'file', required: false },
                { name: 'comp_reg_sertificat', type: 'file', required: false }
            ]
        },{
            tab: 3,
            title: 'Agent Banking Information',
            formData: [
                { name: 'bank_name', type: 'text', required: false },
                { name: 'bank_acc_name', type: 'text', required: false },
                { name: 'bank_acc_number', type: 'text', required: false },
                { name: 'bank_address', type: 'text', required: false },
                { name: 'bank_branch_name', type: 'text', required: false },
                { name: 'bank_swift_code', type: 'number', required: false }
            ]
        },
        {
            tab:4,
            title: 'Agent Social and Active Information',
            formData: [
                { name: 'fb_url', type: 'url', required: false },
                { name: 'web_url', type: 'url', required: false },
            ]
        },
    ];


    const submitForm = async () => {
        const formData = new FormData();
        console.log("asdfasdf-",formData)

        Object.keys(formBody).forEach((key) => {
            const fieldValue = formBody[key];
            if (fieldValue instanceof File) {
                formData.append(key, fieldValue);
            } else {
                formData.append(key, fieldValue);
            }
        });

        console.log("formData - ",formData);
        router.post("/admin/agent", formData,{
            onStart : async () => {
                isLoading.value = true;
            },
            onSuccess: async (res) => {
                toast.success("Agent Created Successfully.");
                formBody.reset();
                router.get("/admin/agent");
            },
            // onError: async (err) => {
            //     errors.value = err;
            // },
            onFinish: async (res) => {
                isLoading.value = false;
            }
        });
    };

    const handleFileChange = (event, form) => {
        const file = event.target.files[0];
        formBody[form.name] = file;
    };

    const privious = () =>{
        currentTab.value = currentTab.value - 1;
    }

    const next = () =>{
        currentTab.value = currentTab.value + 1;
    }

</script>
<template>
    <AdminLayout>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <form class="card" @submit.prevent="submitForm()" enctype="multipart/form-data">
                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">{{ title }}</h4>
                                    <div class="mt-4">
                                        <button class="btn btn-primary" type="submit" :disabled="isLoading">{{ isLoading ? 'Saving Agent...' : 'Save Agent' }}</button>
                                    </div>
                                </div>

                                <div class="">
                                    <div class="row my-4">
                                        <div
                                            v-for="(tab,key) in tabs"
                                            :key="key"
                                            class="col-3 p-2 rounded-sm cursor-pointer border"
                                            :class="currentTab === tab?.tab ? 'bg-primary text-dark' : ''"

                                        >
                                            <h5 class="m-0 p-0 text-center text-dark">{{ tab.title }}</h5>
                                        </div>
                                    </div>
                                    <section class="h-100" v-for="(tab, key) in tabs" :key="key">
                                        <template v-if="currentTab === tab.tab">
                                            <div class="row">
                                                <div class="col-md-6 h-100" v-for="(form, key) in tab.formData" :key="key">
                                                    <div class="mb-3 position-relative">
                                                        <label for="validationTooltip01" class="form-label text-capitalize">{{ form?.name }}
                                                            <span class="text-danger" v-if="form.required">*</span>
                                                        </label>
                                                        <input v-if="form.type !== 'file' && form.type !== 'select' "
                                                               :type="form.type"
                                                               v-model="formBody[form?.name]"
                                                               class="form-control text-capitalize"
                                                               id="validationTooltip01"
                                                        />
                                                        <input v-if="form.type === 'file'"
                                                               type="file"
                                                               @change="handleFileChange($event, form)"
                                                               class="form-control"
                                                               id="validationTooltip01"
                                                        />

                                                        <select name="" id="" class="form-control" v-if="form.type === 'select'">
                                                            <option value="" selected>Select a country</option>

                                                            <option v-for="country in countries" value="US" class="d-flex align-items-center">
                                                                Hello
                                                            </option>
                                                        </select>
                                                        <small class="text-danger" v-if="errors && errors[form?.name]">{{errors && errors[form?.name] }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </section>
                                    <section>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn btn-primary btn-sm waves-effect" @click="privious()" :disabled="currentTab <= 1">
                                                <i class="fas fa-arrow-left"> </i> &nbsp;
                                                <span> Privious</span>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-sm waves-effect"
                                                    @click="next()"
                                                    :disabled="currentTab >= 4">
                                                <span> Next</span>
                                                &nbsp; <i class="fas fa-arrow-right"> </i>
                                            </button>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<style scoped>

</style>
