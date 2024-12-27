@extends('welcome')
@section('title', 'Form sửa')

@section('main')
    <div class="container">
        <h1>Sua Thong tin muon sach</h1>

        <form action="{{ route('borrows.update', $borrows) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="reader_name">Tên người mượn:</label>
                <!-- Hiển thị tên người mượn trong textarea -->
                <textarea class="form-control" id="reader_name" name="reader_name" readonly>{{ $borrows->reader->name }}</textarea>

                <!-- Input ẩn lưu giá trị ID -->
                <input type="hidden" id="reader_id" name="reader_id" value="{{ $borrows->reader->id }}">
            </div>

            <div class="form-group">
                <label for="book">Tên sách:</label>
                <textarea type="text" class="form-control" id="book_id" name="book_id">{{$borrows->book->name}}</textarea>
                <input type="hidden" id="book_id" name="book_id" value="{{ $borrows->book->id }}">
            </div>
            <div class="form-group">
                <label for="borrow_date">Ngày mượn:</label>
                <input type="date" class="form-control" id="borrow_date" name="borrow_date" value="{{ $borrows->borrow_date }}">
            </div>
            <div class="form-group">
                <label for="return_date">Ngày trả dự kiến:</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ $borrows->return_date }}">
            </div>
            <input id="status" name="status" type="text" value="{{ $borrows->status }}">

            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>

    </div>
@endsection
