@extends("layout.main")
@section("content")
   <form action="{{ BASE_URL."post-product" }}" method="POST">
       Name<input type="text" name="name"/>
       Price<input type="text" name="price"/>
       <input type="submit" name="add" value="Thêm">
   </form>
@endsection