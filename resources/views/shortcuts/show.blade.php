@extends('layout')

@section('content')
<br>

<form action="{{ route('shortcut.destroy', $shortcut->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <!--<button type="submit" title="delete" style="border: none; background-color:transparent;">
        <i class="fas fa-trash-alt fa-lg text-danger"></i>
    </button>-->
    <a href="{{ route('shortcut.edit', $shortcut->id) }}"><i class="fas fa-edit  fa-lg"></i></a>
    <a href="" onclick="this.closest('form').submit();return false;"> <i class="fas fa-trash-alt  fa-lg"></i></a>
</form>
<br><br>

<h2>{{$shortcut->name}}</h2>
<p>url: <a href="{{$shortcut->url}}">{{$shortcut->url}}</a></p>
<p>remark: {{$shortcut->remark}}</p>
<p>Category: {{$shortcut->category->name}}</p>





@endsection