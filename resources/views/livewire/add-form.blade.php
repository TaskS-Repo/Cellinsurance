
<div class="add-container card">
    <div class="card-header">Add Mobile
        <button class="close-form"><i class="far fa-times-circle fa-1x"></i></button>
    </div>
    <div class="card-body">
    <form wire:submit.prevent="submit" >
        <div class="form-group">
            <label for="brand">Enter Mobile Brand</label>
            <input class="form-control" type="text" id="brand" wire:model="brand" placeholder="Enter Mobile Brand"required>
            <small>Error is going disply here</small>
        </div>
        <div class="form-group">
            <label for="model">Enter Mobile Model</label>
            <input class="form-control" type="text" id="model" wire:model="model" placeholder="Enter Mobile Model" required>
            <small>Error is going disply here</small>
        </div>
        <div class="form-group">
            <label for="name">Enter Mobile Name</label>
            <input class="form-control" type="text" id="name" wire:model="name" placeholder="Enter Mobile Name" required>
            <small>Error is going disply here</small>
        </div>

        <div class="form-group">
            <input class="form-control submit" type="submit"  required>
        </div>

    </form>
</div>
</div>
