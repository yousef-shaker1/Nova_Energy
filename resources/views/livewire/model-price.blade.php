<div>

    <!-- Insert Modal -->
     <div wire:ignore.self class="modal fade" id="addPriceModal" tabindex="-1" aria-labelledby="addPriceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPriceModalLabel">Create Price</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal">&times;</button>
                </div>
                <form wire:submit.prevent="savePrice">
                    <div class="modal-body">
                        
                        <div class="mb-3">
                            <label>image</label>
                            <input type="file" wire:model.live="img" class="form-control">
                            @error('img')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" wire:model.live="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Point Required</label>
                            <input type="text" wire:model.live="points_required" class="form-control">
                            @error('points_required')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Update Price Modal -->
    <div wire:ignore.self class="modal fade" id="updatePriceModal" tabindex="-1"
        aria-labelledby="updatePriceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updatePriceModalLabel">Edit Price</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal">&times;</button>
                </div>
                <form wire:submit.prevent="updatePrice">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" wire:model.live="name" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label>Points Required</label>
                            <input type="text" wire:model.live="points_required" class="form-control">
                            @error('points_required')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="current_img" class="col-form-label">currency image:</label>
                            <br><br>
                            @if ($this->img && is_object($this->img))
                                <div>
                                    <img src="{{ $this->img->temporaryUrl() }}" style="width: 80px; height: 50px;">
                                </div>
                            @elseif ($this->img)
                                <a id="current_img_link" href="{{ Storage::url($this->img) }}">
                                    <img id="" src="{{ Storage::url($this->img) }}"
                                        style="width: 80px; height: 50px;">
                                </a>
                            @endif

                            <br>
                        </div>
                        <div class="mb-3">
                            <label>image</label>
                            <input type="file" wire:model.live="img" class="form-control">
                            @error('img')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   <!-- Delete Student Modal -->
    <div wire:ignore.self class="modal fade" id="deletePriceModal" tabindex="-1"
        aria-labelledby="deletePriceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePriceModalLabel">Delete Price</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal">&times;</button>
                </div>
                <form wire:submit.prevent="destroyPrice">
                    <div class="modal-body">
                        <h4>Are you sure you want to delete this data ?</h4>
                        <label>name</label>
                        <input type="text" wire:model.lazy="name" class="form-control" readonly>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
