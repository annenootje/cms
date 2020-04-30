<div class="item dashboard">
    <a href="/wijzigen/{{$id}}/toggle-favorite"
        class="favorite">
        @include("icons/heart",
            ['isFavorite' => $isFavorite])
    </a>
    <div>
        <h2 class="title">{{$title}}</h2>
        <p class="text">
            {{$description}}
        </p>
    </div>
    <div class="dashboard-controls">
        <a class="control" href="{{$editLink}}">
            @include('icons/edit')
            <p>Wijzigen</p>
        </a>
        @if($addLink)
            <a class="control" href="{{$addLink}}">
                @include('icons/add')
                <p>Toevoegen</p>
            </a>
            @endif

    </div>
    <div class="progress">
        <div
            class="inner red"
            data-procent="{{$progress}}">
        </div>
    </div>
</div>