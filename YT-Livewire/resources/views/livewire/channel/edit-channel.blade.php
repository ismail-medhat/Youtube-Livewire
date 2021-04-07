<div>

    @if($channel->image)
        <img src="{{ asset('images/'.$channel->image) }}" class="img-thumbnail" style="margin-bottom: 15px;" alt="Channel Logo ">
    @endif


    <form wire:submit.prevent="update">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" wire:model="channel.name">
            @error('channel.name')
            <strong class="text-danger"> {{ $message }}</strong>
            @enderror
        </div>


        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" wire:model="channel.slug">
            @error('channel.slug')
            <strong class="text-danger"> {{ $message }}</strong>
            @enderror
        </div>


        <div class="form-group">
            <label for="description">Description</label>
            <textarea cols="30" rows="4" class="form-control" wire:model="channel.description"></textarea>
            @error('channel.description')
            <strong class="text-danger"> {{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            <input type="file" class="form-control" wire:model="image">
            @error('image')
            <strong class="text-danger"> {{ $message }}</strong>
            @enderror
        </div>

        <div class="form-group">
            @if($image)
                Image Preview:
                <img src="{{ $image->temporaryUrl() }}" class="img-thumbnail" style="width: 80px;height: 80px;">

            @endif
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

        @if(session()->has('message'))
            <strong class="text-success"> {{ session('message') }}</strong>
        @endif

    </form>
</div>
