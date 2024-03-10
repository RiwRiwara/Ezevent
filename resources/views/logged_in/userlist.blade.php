<div class="container mx-auto">
    <div class="bg-white shadow-md rounded-lg">
        <div class="p-6 bg-gray-100 border-b border-gray-200">
            Manage Users
        </div>
        <div class="data-table ">
            <div class="p-2 overflow-x-auto max-w-full">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
</div>

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
