@extends('layout.header')
@section('header')
<link rel="stylesheet" href="admin.css">
<div class="container">
    <?php
    $no = 1;
    ?>
    <div class="cards">
        <div class="card-single">
            <h1 id="cake">Menu</h1>
            <span class="las la-email"></span>
        </div></div>    
       <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Cake Menu</h3>
    
                    <button><a href="/create-cake" style="text-decoration: none;color:white;">Add Cake </a> <span class="las la-user-plus">
    
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
                        @foreach ($cake as $kue)
                        <tr>
                            <td>{{$no++ }}</td>
                            <td><img src="{{  url('asset/cake/'.$kue->gambar) }}" alt="" width="80px" height="80px"></td>
                            <td>{{ $kue->nama }}</td>      
                            <td>Rp.{{ $kue->harga }}</td>   
                            <td>
                                <a href="/edit-cake/{{ $kue->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                <form method="POST" action="{{ url('/contact' . '/' . $kue->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a href="/delete-cake/{{$kue->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                </form>
                            </td>                                                           
                        </tr>
    
                        @endforeach {{ $cake->links() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
