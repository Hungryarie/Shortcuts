@extends('layout')

@section('content')
    nieuwe!!!

    <!-- Success message -->
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif

    <form action="" method="post" action="{{ route('shortcut.store') }}">

        <!-- CROSS Site Request Forgery Protection -->
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="url" id="url" value placeholder="url">
            <!-- Error -->
            @if ($errors->has('url'))
            <div class="error">
                {{ $errors->first('url') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" value placeholder="name">
            <!-- Error -->
            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>

        <div class="form-group">
            <select name="category_id" id="category_id">
                <option value><b>- Category - </b></option>
                <option value='1'>Smartplug</option>
                <option value='2'>Internal</option>
                <option value='3'>External</option>
            </select>
            <!-- Error -->
            @if ($errors->has('category_id'))
            <div class="error">
                {{ $errors->first('category_id') }}
            </div>
            @endif
        </div>

        <div class="form-group">

            <textarea class="form-control" name="remark" id="remark" rows="3" value placeholder="remark"></textarea>
        </div>

        <input type="submit" name="send" value="Submit" class="primary">
    </form>
@endsection