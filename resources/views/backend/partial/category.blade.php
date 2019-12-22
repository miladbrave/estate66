@if(isset($select_cat))
    @foreach($cat as $sub)
        <option value="{{$sub->id}}"
                @if($categories->parent_id == $sub->id) selected @endif>{{str_repeat('--', $level)}} {{$sub->name}}</option>
        @if(count($sub->childRecursive)>0)
            @include('admin.partial.category',['cat' => $sub->childRecursive , 'level' => $level+1, 'select_cat'=>$categories])
        @endif
    @endforeach
@else
    @foreach($cat as $sub)
        <option value="{{$sub->id}}">{{str_repeat('--', $level)}} {{$sub->name}}</option>
        @if(count($sub->childRecursive)>0)
            @include('admin.partial.category',['cat' => $sub->childRecursive , 'level' => $level+1])
        @endif
    @endforeach
@endif