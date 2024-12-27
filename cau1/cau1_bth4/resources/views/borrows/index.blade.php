@extends('welcome')
@section('title', 'quan lý mượn sách')

@section('main')
    <h2>Danh sách</h2>

    <a href="{{ route('borrows.create') }}" class="add btn btn-primary font-weight-bold todo-list-add-btn">Thêm mượn sách</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên người mượn</th>
            <th scope="col">Tên sách mượn</th>
            <th scope="col">Ngày mượn</th>
            <th scope="col">Ngày trả</th>
            <th scope="col">Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($borrows as $borrow)
            <tr>
                <th scope="row">{{ $borrow->id }}</th>
                <td>{{ $borrow->reader->name }}</td>
                <td>{{ $borrow->book->name }}</td>
                <td>{{ $borrow->borrow_date }}</td>
                <td>{{ $borrow->return_date }}</td>
                <td>{{ $borrow->status }}</td>
                <td>
                    <a href="{{ route( 'borrows.edit', $borrow->id) }}"><i class="bi bi-pencil me-3"></i></a>
                    <a class="bi bi-trash3 ms-3" data-bs-toggle="modal" data-bs-target="#{{$borrow->id}}"></a>

                    <div class="modal fade" id="{{$borrow->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa mượn sách {{$borrow->id}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    bạn có chắc muốn xóa {{ $borrow->reader->name }} mượn sách {{ $borrow->book->name }} không
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display: inline-block;">
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
