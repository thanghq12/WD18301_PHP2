@extends('layout.main')
@section('content')
    <h1>Đây là danh sách sản phẩm  {{ $title }}</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Action</td>

        </tr>
        @foreach($products as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->price }}</td>
            <td><a href="{{ BASE_URL.'detail-product/'.$value->id }}">Sửa</a>
                <a href="{{ BASE_URL.'delete-product/'.$value->id }}">Xóa</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection