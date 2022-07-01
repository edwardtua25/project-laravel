@extends('layout.header')
@section('header')
<link rel="stylesheet" href="admin.css">
<?php 
$no = 1;
?>
<div class="container">

    <div class="cards">
        <div class="card-single">
            <h1 id="menu">Menu</h1>
            <span class="las la-email"></span>
        </div></div>    
       <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Menu Of The Day</h3>
                    @if($massages = Session::get('status_error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      {{$massages}}
                    </div>
                  @endif
                  @if($massages = Session::get('status_berhasil'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{$massages}}
                  </div>
                @endif
             
                <button><a href="/create-gambar" style="text-decoration: none;color:white;">Tambah Menu </a> <span class="las la-user-plus"></span></button>
              
                
                {{-- @foreach ($menu2 as $item)
              @php

                $jumlah = $item;
                @endphp

                        @if($jumlah < 9)
                            
                          
                  
                    <button><a href="/create-gambar" style="text-decoration: none;color:white;">Tambah Menu </a> <span class="las la-user-plus"></span></button>
                        @endif
                        @if($jumlah >= 9)
                  
                    <button><a href="/error-create-gambar" style="text-decoration: none;color:white;">Tambah Menu </a> <span class="las la-user-plus">
                       

                    </span></button>  @endif    @endforeach --}}
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

                        @foreach ($menu2 as $item)
                        <tr>
                            <td>{{ $no++}}</td>
                            <td><img src="{{  url('asset/gambar/'.$item->gambar) }}" alt="" width="80px" height="80px"></td>
                            <td>{{ $item->nama }}</td>      
                            <td>Rp.{{ $item->harga }}</td>   
                            <td>
                                <a href="/edit-gambar/{{ $item->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a href="/delete-gambar/{{$item->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                </form>
                            </td>                                                           
                        </tr>

                        @endforeach {{ $menu2->links() }}
                    </table>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection
