<template>
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        PR PO Status
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-6">
                        <!-- BEGIN: Hoverable Table -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60">
                                <h2 class="font-medium text-base mr-auto">
                                    Hoverable Table
                                </h2>
                            </div>
                            <div class="p-5" id="hoverable-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="whitespace-nowrap">#</th>
                                                    <th class="whitespace-nowrap">First Name</th>
                                                    <th class="whitespace-nowrap">Last Name</th>
                                                    <th class="whitespace-nowrap">Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Angelina</td>
                                                    <td>Jolie</td>
                                                    <td>@angelinajolie</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Brad</td>
                                                    <td>Pitt</td>
                                                    <td>@bradpitt</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Charlie</td>
                                                    <td>Hunnam</td>
                                                    <td>@charliehunnam</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Hoverable Table -->
                        
                    </div>
                    
                </div>
            </div>
            <!-- END: Content -->
        </div>
    </div>
    <!-- END: Content -->
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            //
        }
    },
    created() {
    },
    methods: {}
}
</script>
