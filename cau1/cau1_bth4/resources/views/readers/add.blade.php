@extends('welcome')
@section('title', 'Form thêm người đoc')

@section('main')
    <div class="container">
        <h1>Thêm người đọc</h1>

        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên người đọc:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="author">Ngày sinh:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" required>

            </div>
            <div class="form-group">
                <label for="category">Địa chỉ:</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="year">Số điện thoại:</label>
                <textarea class="form-control" id="phone" name="phone" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">THÊM</button>
        </form>

    </div>
@endsection
