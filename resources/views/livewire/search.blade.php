<div>
    <input wire:model="search" name="search" type="text" class="form-control border-0 bg-primary" list="mylist" placeholder="Ara..">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach ($datalist as $rs)
                <option value="{{ $rs->title }}">{{ $rs->category->title }}</option>
            @endforeach
        </datalist>
    @endif
</div>
   

