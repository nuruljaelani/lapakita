<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <div class="buttons">
        <button type="button" class="btn icon btn-sm btn-outline-success" @click="edit" x-data="{ id: {{ $id }} }">
            <i class="bi bi-pencil"></i>
        </button>
        <button type="button" @click="deleteData" class="btn icon btn-sm btn-outline-danger" x-data="{ id: {{$id}} }">
            <i class="bi bi-trash"></i>
        </button>
    </div>
</div>