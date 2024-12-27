@extends('welcome')
@section('title', 'Form sửa ')

@section('main')
    <div class="container">
        <h1>Sua</h1>

        <form action="{{ route('readers.update', $readers) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên nguoi doc:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $readers->name }}">
            </div>
            <div class="form-group">
                <label for="birthday">ngay sinh:</label>
                <input type="date" class="form-control" id="birthday" name="birthday"  value="{{$readers->birthday}}">
            </div>
            <div class="form-group">
                <label for="address">Dia chi:</label>
                <textarea class="form-control" id="address" name="address">{{ $readers->address }}</textarea>
            </div>
            <div class="form-group">
                <label for="phone">So dien thoai:</label>
                <textarea class="form-control" id="phone" name="phone">{{ $readers->phone }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </div>
@endsection
