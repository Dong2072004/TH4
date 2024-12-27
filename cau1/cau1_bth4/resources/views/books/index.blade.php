@extends('welcome')
@section('title', 'quản lý sách')

@section('main')
    <h2>Danh sách</h2>

    <a href="{{ route('books.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Thêm sách</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Tên sách</th>
            <th scope="col">Tác giả</th>
            <th scope="col">Thể loại sách</th>
            <th scope="col">Năm xuất bản</th>
            <th scope="col">Số lượng bản sao</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->quantity }}</td>
                <td>
                    <a href="{{ route( 'books.edit', $book->id) }}"><i class="bi bi-pencil me-3"></i></a>
                    <!-- Button trigger modal -->
                    <a class="bi bi-trash3 ms-3" data-bs-toggle="modal" data-bs-target="#{{$book->id}}"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="{{$book->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa bài viết {{$book->id}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    bạn có chắc muốn xóa {{$book->name}} không
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xác nhận</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
