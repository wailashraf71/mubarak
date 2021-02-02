<template>
    <div>
    <data-table
        :columns="columns"
        :url="url"
        :theme="theme"
        :translate="{ nextButton: 'Next', previousButton: 'Previous', placeholderSearch: 'Search'}"
    >
    </data-table>
        <!-- Delete Modal -->
        <div class="modal fade text-left" id="deleteModal" tabindex="-1" role="dialog"
             aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title px-2" id="mediumModalLabel" style="font-size: 18px"><b>Delete record</b></p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Remove this record from database?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-disabled" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="document.getElementById('dynForm').submit()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import EditButtonComponent from "./EditButtonComponent";
import DeleteButtonComponent from "./DeleteButtonComponent";

export default {
    props: {
        data: {},
        columns: {},
        theme: '',
        url: ''
    },
    components: {
        EditButtonComponent,
        DeleteButtonComponent,
    },
}
</script>
