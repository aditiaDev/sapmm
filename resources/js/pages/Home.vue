<template>
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Home1
                    </h2>
                </div>

                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 lg:col-span-12">
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
                                        <button @click="deselectRows">deselect rows</button>
                                        <ag-grid-vue
                                        class="ag-theme-alpine"
                                        style="height: 500px"
                                        :columnDefs="columnDefs.value"
                                        :rowData="rowData.value"
                                        :defaultColDef="defaultColDef"
                                        rowSelection="multiple"
                                        animateRows="true"
                                        @cell-clicked="cellWasClicked"
                                        @grid-ready="onGridReady"
                                        >
                                        </ag-grid-vue>
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
import { AgGridVue } from "ag-grid-vue3";  // the AG Grid Vue Component
import { reactive, onMounted, ref } from "vue";

import "ag-grid-community/styles/ag-grid.css"; // Core grid CSS, always needed
import "ag-grid-community/styles/ag-theme-alpine.css"; // Optional theme CSS
export default {
    name: "Home",
    components: {
        AgGridVue,
    },
    setup() {
        const gridApi = ref(null); // Optional - for accessing Grid's API

        // Obtain API from grid's onGridReady event
        const onGridReady = (params) => {
            gridApi.value = params.api;
        };

        const rowData = reactive({}); // Set rowData to Array of Objects, one Object per Row

        // Each Column Definition results in one Column.
        const columnDefs = reactive({
            value: [
                { headerName: 'Material', field: "MATNR" },
                { headerName: 'Description', field: "MAKTX" },
            ],
        });

        // DefaultColDef sets props common to all Columns
        const defaultColDef = {
            sortable: true,
            filter: true,
            flex: 1
        };

        // Example load data from sever
        onMounted(() => {
            fetch("./public/api/batch")
            .then((result) => result.json())
            .then((remoteRowData) => (rowData.value = remoteRowData));
        });

        return {
            onGridReady,
            columnDefs,
            rowData,
            defaultColDef,
            cellWasClicked: (event) => { // Example of consuming Grid Event
                console.log("cell was clicked", event);
            },
            deselectRows: () =>{
                gridApi.value.deselectAll()
            }
        };
    },
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
