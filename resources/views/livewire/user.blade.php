<div>
    @include('livewire.model-user')

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
        
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> # </th>
                <th>Name</th>
                <th>Email</th>
                <th>Points</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $users->firstItem() + $loop->index }}</td>
                
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->points }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                        data-bs-target="#deleteUsereModal"
                        wire:click="loadUserData({{ $user->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center my-4">
        {{ $users->links() }}
    </div>
</div>
