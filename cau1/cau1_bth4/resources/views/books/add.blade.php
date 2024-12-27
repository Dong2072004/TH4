@extends('welcome')
@section('title', 'Form thêm sách')

@section('main')
    <div class="container">
        <h1>Thêm sách</h1>

        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên sách:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="author">Tác giả:</label>
                <textarea class="form-control" id="author" name="author" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Thể loại:</label>
                <textarea class="form-control" id="category" name="category" required></textarea>
            </div>
            <div class="form-group">
                <label for="year">Năm xuất bản:</label>
                <textarea class="form-control" id="year" name="year" required></textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng tồn:</label>
                <textarea class="form-control" id="quantity" name="quantity" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">THÊM</button>
        </form>

    </div>
@endsection
