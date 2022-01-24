@foreach ($children as $subcategory)
    <ul>   
        @if(count($subcategory->children))
            <li>{{ $subcategory->title}}</li>
            <ul>   
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
            <hr>
            @else
            <li style="width:200px">
                <a class="text-info" href="{{ route('categoryblogs',['id'=>$subcategory->id,'slug'=>$subcategory->slug]) }}">{{ $subcategory->title }}</a>
            </li>
        @endif
    </ul>
@endforeach