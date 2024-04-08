@extends("layout.main")
@section("content")
    <form action="{{ BASE_URL."edit-product/".$pro->id }}" method="POST">
        Name<input type="text" name="name" value="{{ $pro->name }}"/>
        Price<input type="text" name="price" value="{{ $pro->price }}"/>
        <input type="submit" name="edit" value="Sửa">
    </form>
@endsection