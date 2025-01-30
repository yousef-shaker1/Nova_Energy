<div>
    @include('livewire.model-price')

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
            <strong>{{ session()->get('success') }}</strong>
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="card-title">Table Data</h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#addPriceModal">Create</button>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> # </th>
                <th>Image</th>
                <th>Name</th>
                <th>Point Required</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prices as $price)
                <tr>
                    <td>{{ $prices->firstItem() + $loop->index }}</td>
                    <td ><a href="{{ Storage::url($price->img) }}"><img
                        src="{{ Storage::url($price->img) }}" style="width: 80px; height: 60px;"></a></td>
                    <td>{{ $price->name }}</td>
                    <td> {{ $price->points_required }} Point</td>
                    <td>
                        <button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#updatePriceModal" wire:click="editPrice({{ $price->id }})">Edit</button>

                            <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#deletePriceModal"
                            wire:click="loadPriceData({{ $price->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center my-4">
        {{ $prices->links() }}
    </div>
</div>
