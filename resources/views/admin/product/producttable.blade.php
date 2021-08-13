@extends("layout.layout");
@section("content")
<br>
<a style="margin-left: 700px" class="btn btn-success" href="{{route('productcreate')}}">add new product</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">details</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
        <th scope="col">quantity</th>
        <th scope="col">category_name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($productsdata as $item )
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td>{{$item['details']}}</td>
        <td>{{$item['description']}}</td>
        <td>{{$item['price']}}</td>
        <td>{{$item['quantity']}}</td>
        <td>{{$item->category['name']}}</td>
        <td><a href="{{route('admindeleteproduct',['productid'=>$item['id']])}}">delete</a></td>
            <td><a href="{{route('editproduct',['productid'=>$item['id']])}}">update</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
    
@endsection