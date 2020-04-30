<div class="modal images">
    <div class="inner">
        <h2>
           Foto kiezen
        </h2>

        <div class="overview images">
            @foreach($images as $image)
                <div class="option">

                    <label
                        for={{$image->id}} 
                        style="background-image: url('{{$image->pathname}}')"
                    >
                    <input
                        type="radio"
                        name="image"
                        id={{$image->id}}
                        value="{{$image->pathname}}"
                        {{$chosenImage === $image->pathname ? "checked" : ""}}
                    >
                </div>
            @endforeach
        </div>

        <a class="cross">
            <span></span>
            <span></span>
        </a>
    </div>
</div>