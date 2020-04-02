@foreach($content->blocks as $block)
    @if($block->type === "paragraph")
        <p>{!! $block->data->text !!}</p>
    @elseif($block->type === "header")
        <{{ "h" . $block->data->level }}>
            {{ $block->data->text }}
        </{{ "h" . $block->data->level }}>
    @elseif($block->type === "list")
        @if($block->data->style === "unordered")
            <ul>
                @foreach($block->data->items as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ul>
        @elseif($block->data->style === "ordered")
            <ol>
                @foreach($block->data->items as $item)
                    <li>{{$item}}</li>
                @endforeach
            </ol>
        @endif 
        @elseif($block->type === "table")
        <table>
            table
        </table>
    @endif
@endforeach