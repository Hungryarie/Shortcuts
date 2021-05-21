@extends('layout')


@section('banner')
    <header>
        <!--<h1>This is Phantom, a expensive, fully responsive site<br />
        template designed by <a href="http://html5up.net">HTML5 UP</a>.</h1>
        <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
        -->
        {{--dump($category)--}}
        
        @isset($category)
            <h1>{{$category}}</h1>
        @endisset
        @empty($category)
            <h1>Alle shortcuts</h1>
        @endempty

        <p>zodat het handig doorklikken is ;-)</p>
        @if (count($shortcuts)===0)
        <h3>Helaas... </h3><p>geen shortcuts gevonden</p>
    @endif
    </header>
    
@endsection

@section('message')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
@endsection

@section('tiles')

    @foreach ($shortcuts as $shortcut)
        <!--<article class="style1">-->
        <article class={{$shortcut->style()}}>
            
            {{--  dump($shortcut->getQuantity()) --}}
            {{--  dump($shortcut->style()) --}}
            <span class="image">
                <!--<img src="/images/pic01.jpg" alt="" />-->
                <img src="/images/{{$shortcut->bgpicture()}}" alt="" />
            </span>
            <a href="{{ $shortcut->url }}">
                <h2>{{$shortcut->name}}</h2>
                <div class="content">
                    <p>{{ $shortcut->remark }}</p>
                    <p>{{ $shortcut->url }}</p>
                </div>
            </a>
            <!--<a href="{{route('shortcut.edit', $shortcut->name)}}"><i class="fas fa-edit  fa-lg"></i></a>-->
        </article>
    @endforeach

@endsection