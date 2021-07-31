@extends('admin.layouts.app')

@section('title')
Product index
@endsection

@section("content")
 <h1>Product uzgartiradigan sahifa </h1>
 <table>
     <tr>
         <th>Name</th>
         <th>Measure</th>
         <th>Price</th>
         <th></th>
     </tr>
     @foreach ($productList as $val)
         <tr>
             <td>{{ $val->name }}</td>
             <td>{{ $val->measure }}</td>
             <td>{{ $val->price }}</td>
             <th>
                <a href="{{ route("admin.product.show",$val->id) }}">show</a>
                <a href="{{ route("admin.product.edit",$val->id) }}">edit</a>

            </th>
         </tr>
     @endforeach
 </table>
@endsection
