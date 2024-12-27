@extends('welcome')
@section('title', 'Quản lý người đọc')

@section('main')
    <h2>Danh sách</h2>

    <a href="{{ route('readers.create') }}" class="add btn btn-primary ">Thêm người đọc</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Tên người đọc</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Hành động</th>

        </tr>
        </thead>
        <tbody>
        @foreach($readers as $reader)
            <tr>
                <th scope="row">{{ $reader->id }}</th>
                <td>{{ $reader->name }}</td>
                <td>{{ $reader->birthday}}</td>
                <td>{{ $reader->address}}</td>
                <td>{{ $reader->phone}}</td>

                <td>
                    <a href="{{ route( '$readers.edit', $reader->id) }}"><i class="bi bi-pencil me-3"></i></a>
                    <!-- Button trigger modal -->
                    <a class="bi bi-trash3 ms-3" data-bs-toggle="modal" data-bs-target="#{{$reader->id}}"></a>

                    <!-- Modal -->
                    <div class="modal fade" id="{{$readers->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xóa bài viết {{$reader->id}}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    bạn có chắc muốn xóa {{$readers->name}} không
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <form action="{{ route('$readers.destroy', $book->id) }}" method="POST" style="display: inline-block;">
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
