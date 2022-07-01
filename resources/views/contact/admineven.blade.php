@extends('contact.header.header')
@section('header')
<link rel="stylesheet" href="admin.css">
<?php 
$no = 1;
?>
    <div class="container">
        <div class="cards">
            <div class="card-single">
                <h1 id="galeri">Event</h1>
                <span class="las la-email"></span>
            </div></div>    
           <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>List Event</h3>
        
                        <button><a href="/create-even" style="text-decoration: none;color:rgb(255, 255, 255);">Add Event</a> <span class="las la-event">
        
                  
                        </span></button>
                    </div>
                    <div class="card-body"  id="costumer">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Gambar</td>
                                    <td>Deskripsi</td>  
                                    <td>Action</td>
                                                             
                                </tr>
                            </thead>
                            @foreach ($even as $menu)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{  asset('asset/even/'.$menu->gambar) }}" alt="" width="80px" height="80px"></td>
                                <td>{{ $menu->deskripsi }}</td> 
                                <td>
                                    <a href="/edit-even/{{ $menu->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ url('/contact' . '/' . $menu->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <a href="/delete-even/{{$menu->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                    </form>
                                </td>                                                             
                            </tr>
                            @endforeach {{ $even->links() }}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection