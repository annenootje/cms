<div class="item">
    <div>
        <h2 class="title">{{$title}}</h2>
        <p class="text">
            {{$description}}
        </p>
    </div>
    <div class="progress">
        <div
            class="inner red"
            data-procent="{{$progress}}">
        </div>
    </div>
    <div class="controls">
        @if($addLink)
            <a
                class="control"
                href="{{$addLink}}"
            >
                <img
                    src="/img/icons/add-white.svg"
                    alt="">
                <p>Toevoegen</p>
            </a>
        @endif
        
        <a
            class="control"
            href="{{$editLink}}"
        >
            <img
                src="/img/icons/edit-white.svg"
                alt="">
            <p>Wijzigen</p>
        </a>
    </div>
</div>