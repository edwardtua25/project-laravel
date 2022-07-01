@extends('contact.header.header')
@section('header')
<link rel="stylesheet" href="admin.css">
<?php

$no = 1;

?>
<div class="container">
    <div class="cards">
        <div class="card-single">
            <h1 id="food">Menu</h1>
            <span class="las la-email"></span>
        </div></div>    
       <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Food Menu</h3>

                    <button><a href="/create-food" style="text-decoration: none;color:white;">Add Food </a> <span class="las la-user-plus">

                    </span></button>
                </div>
                <div class="card-body"  id="costumer">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Gambar</td>
                                <td>Nama Menu</td>  
                                <td>Harga</td>                              
                            </tr>
                        </thead>
                        @foreach ($makanan as $food)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{  url('asset/food/'.$food->gambar) }}" alt="" width="80px" height="80px"></td>
                            <td>{{ $food->nama}}</td>      
                            <td>Rp.{{ $food->harga }}</td>   
                            <td>
                                <a href="/edit-food/{{ $food->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                <form method="POST" action="{{ url('/contact' . '/' . $food->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a href="/delete-food/{{$food->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                </form>
                            </td>                                                           
                        </tr>

                        @endforeach {{ $makanan->links() }}
                    </table>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection