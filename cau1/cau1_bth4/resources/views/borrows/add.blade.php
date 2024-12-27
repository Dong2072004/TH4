@extends('welcome')
@section('title', 'Thêm mượn sách')

@section('main')
    <div class="container">
        <h1>Sửa thông tin mượn sách</h1>

        <form action="{{ route('borrows.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên người mượn:</label>
                <select class="form-control" id="reader_id" name="reader_id" required>
                    <option value="">-- Chọn người mượn --</option>
                    @foreach($readers as $reader)
                        <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book">Tên sách:</label>
                <select class="form-control" id="book_id" name="book_id" required>
                    <option value="">-- Chọn sách --</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="borrow_date">Ngày mượn:</label>
                <input type="date" class="form-control" id="borrow_date" name="borrow_date" required>
            </div>
            <div class="form-group">
                <label for="return_date">Ngày trả dự kiến:</label>
                <input type="date" class="form-control" id="return_date" name="return_date" required>
            </div>
            <input id="status" name="status" type="text">

            <button type="submit" class="btn btn-primary">Thêm mượn sách</button>
        </form>
    </div>
@endsection
