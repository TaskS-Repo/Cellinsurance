
<div class="edit-container card">
    <div class="card-header">Add Mobile
        <button class="close-form"><i class="far fa-times-circle fa-1x"></i></button>
    </div>
    <div class="card-body">
    <form wire:submit.prevent="update">
        <div class="form-group">
            <label for="">Edit Mobile Brand</label>
            <input class="form-control" type="text" id="brand" value="{{ $mobile->brand }}" wire:model='brand' required>
            <small>Error is going disply here</small>
        </div>
        <div class="form-group">
            <label for="">Edit Mobile Brand</label>
            <input class="form-control" type="text" id="" required>
            <small>Error is going disply here</small>
        </div>
        <div class="form-group">
            <label for="">Edit Mobile Name</label>
            <input class="form-control" type="text" id="" required>
            <small>Error is going disply here</small>
        </div>

        <div class="form-group">
            <label for=""></label>
            <input class="form-control submit" type="submit" id="" required>
            <small>Error is going disply here</small>
        </div>

    </form>
</div>
</div>
