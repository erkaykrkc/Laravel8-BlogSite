<div class="bg-white border border-top-0 p-4">

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div class="form-row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <input type="text" wire:model="subject" class="form-control" id="subject">
                    @error('subject')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="review">Your Review *</label>
            <textarea id="review" wire:model="review" cols="30" rows="5" class="form-control"></textarea>
            @error('review')
            <span class="text-danger">{{ $message }} </span>
            @enderror
        </div>
        <div class="form-group">
            @error('rate')
            <span class="text-danger">{{ $message }} </span>
            @enderror
            <label for="review">Your Rating *</label><br>
                <input type="radio"  wire:model="rate" value="5"> Çok İyi <br>
                <input type="radio"  wire:model="rate" value="4"> İyi  <br>
                <input type="radio"  wire:model="rate" value="3"> Normal <br>
                <input type="radio"  wire:model="rate" value="2"> Kötü <br>
                <input type="radio"  wire:model="rate" value="1"> Çok Kötü <br>
        </div>
        <div class="form-group mb-0">
            @auth
            <input type="submit" value="Save"
                class="btn btn-primary font-weight-semi-bold py-2 px-3">
            @else
                <a href="/login" class="btn btn-info font-weight-semi-bold py-2 px-3"> For Submit Your Review, Please Login </a>
            @endauth
        </div>
    </form>
</div>
 