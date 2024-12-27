@extends('welcome')
@section('title', 'Form sửa sách')

@section('main')
    <div class="container">
        <h1></h1>

        <form action="{{ route('books.update', $books) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Têm sách:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $books->name }}">
            </div>
            <div class="form-group">
                <label for="author">Tác giả:</label>
                <textarea class="form-control" id="author" name="author" required>{{ $books->author }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Thể loại:</label>
                <textarea class="form-control" id="category" name="category">{{ $books->category }}</textarea>
            </div>
            <div class="form-group">
                <label for="year">Năm xuất bản:</label>
                <textarea class="form-control" id="year" name="year">{{ $books->year }}</textarea>
            </div>
            <div class="form-group">
                <label for="quantity">Số lượng tồn:</label>
                <textarea class="form-control" id="quantity" name="quantity">{{ $books->quantity }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </div>
@endsection
