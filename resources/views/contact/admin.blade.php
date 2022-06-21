<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"
        <title>El Tona Coffee House Admin</title>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    </head>
    <body>
        @php
            $no = 1;
            $no1 = 1;
            $no2 = 1;
            $no3 = 1;
            $no4 = 1;
            $no5 = 1;

            
        @endphp
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="lab la-profile"></span><span>El Tona Caffeehouse</span></h2> <br>
            </div> 
            <br><br><br>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="#galeri" class="active"><span class="las la-igloo"></span>
                        <span>Galery</span></a>
                    </li>
                    <li>
                        <a href="#events" class="active"><span class="las la-igloo"></span>
                        <span>Even</span></a>
                    </li>
                    <li>
                        <a href="#user"><span class="las la-users"></span>
                        <span>Customers</span></a>
                    </li>
                    <li>
                        <a href="#feedback"><span class="las la-envelope"></span>
                        <span>Feedback</span></a>
                    </li> 
                    <li>
                        <a href="#menu"><span class="las la-hamburger"></span>
                        <span>Menu Of The Day</span></a>
                    </li>
                    <li>
                        <a href="#food"><span class="las la-hamburger"></span>
                        <span>Food Menu</span></a>
                    </li>
                    <li>
                        <a href="#drink"><span class="las la-hamburger"></span>
                        <span>Drink Menu</span></a>
                    </li>
                    <li>
                        <a href="#cake"><span class="las la-hamburger"></span>
                        <span>Cake Menu</span></a>
                    </li>
                    
                    <li>
                        <a href="home"><span class="las la-home"></span>
                        <span>Home</span></a>
                    </li>
                
                </ul>    
            </div>
        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>    
                    </label>
                    Dashboard
                </h2>
                <!-- <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search Here" />
                </div> -->
                
            </header>
            <main>
               <div class="cards">
                    <div class="card-single">
                        <h1 id="user">User</h1>
                        {{-- <span>Customers</span> --}}
                        <span class="las la-users"></span>
                    </div>
               </div>
               <div class="recent-grid">
                    <div class="projects">
                        <div class="card">
                            <div class="card-header">
                                <h3 >Data User</h3>
    
                                <button><a href="{{ url('/contact/create')}}" style="text-decoration: none;color:white;">Add new user </a> <span class="las la-user-plus">
                                </span></button>
                            </div>
                            <div class="card-body"  id="costumer">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            
                                            <td>Name</td>
                                            <td>Username</td>
                                            <td>Email</td>
                                            <td>Role</td>
                                            <td colspan="2"><center>Aksi</center></td>
                                        </tr>
                                    </thead>
                                    @foreach ($contacts as $data)
                                     <tbody>
                                
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->username }}</td>                                      
                                        <td>{{ $data->email }}</td>  
                                        <td>{{ $data->role }}</td>
                                        <td>
                                            <a href="{{ url('/contact/' . $data->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/contact/' . $data->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm" style="margin: 10px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/contact' . '/' . $data->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                        </tbody>
                                    @endforeach {{ $contacts->links() }}
                                </table>
                            </div>
                        </div>
                    </div>
               </div>
                    <div class="cards">
                    <div class="card-single">
                        <h1 id="feedback">Feedback</h1>
                        <span class="las la-email"></span>
                    </div></div>                           
        
           <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Feedback</h3>

                            
                            
                        </div>
                        <div class="card-body"  id="costumer">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Username</td>
                                        <td>Message</td>   
                                        <td>Action</td>                             
                                    </tr>
                                </thead>
                                @foreach ($pesan as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->subjek }}</td>  
                                    <td>
                                        <a href="/delete-feedback/{{$user->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>

                                        </td>                                                            
                                </tr>
                                @endforeach {{ $pesan->links() }}
                            </table>
                        </div>
                    </div>
                </div>
           </div>

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
                    @if($menu->isEmpty())
                    <button><a href="/create-gambar" style="text-decoration: none;color:white;">Tambah Menu </a> <span class="las la-user-plus"></span></button>
                    @endif
                    
                    @foreach ($menu as $item)
                  @php

                    $jumlah = $item-> pa1;
                    @endphp

                            @if($jumlah < 8)
                                
                              
                      
                        <button><a href="/create-gambar" style="text-decoration: none;color:white;">Tambah Menu </a> <span class="las la-user-plus"></span></button>
                            @endif
                            @if($jumlah >= 8)
                      
                        <button><a href="/error-create-gambar" style="text-decoration: none;color:white;">Tambah Menu </a> <span class="las la-user-plus">
                           

                        </span></button>  @endif    @endforeach
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
                                <td>{{ $no1++}}</td>
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
                            <td>{{ $no2++ }}</td>
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
       <div class="cards">
        <div class="card-single">
            <h1 id="drink">Menu</h1>
            <span class="las la-email"></span>
        </div></div>    
       <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Drink Menu</h3>

                    <button><a href="/create-drink" style="text-decoration: none;color:white;">Add Drink </a> <span class="las la-user-plus">

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
                        @foreach ($drink as $minuman)
                        <tr>
                            <td>{{ $no3++}}</td>
                            <td><img src="{{  url('asset/drink/'.$minuman->gambar) }}" alt="" width="80px" height="80px"></td>
                            <td>{{ $minuman->nama }}</td>      
                            <td>Rp.{{ $minuman->harga }}</td>   
                            <td>
                                <a href="/edit-drink/{{ $minuman->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                <form method="POST" action="{{ url('/contact' . '/' . $minuman->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a href="/delete-drink/{{$minuman->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                </form>
                            </td>                                                           
                        </tr>

                        @endforeach {{ $drink->links() }}
                    </table>
                </div>
            </div>
        </div>
   </div>
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
                        <td>{{$no4++ }}</td>
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

                <button><a href="/create-even" style="text-decoration: none;color:white;">Add Event</a> <span class="las la-user-plus">

          
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
                        <td>{{ $no5++ }}</td>
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
       <div class="cards">
        <div class="card-single">
            <h1 id="galeri">Galeri</h1>
            <span class="las la-email"></span>
        </div></div>    
       <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h3>Add Galery</h3>

                    <button><a href="/create-galery" style="text-decoration: none;color:white;">Tambah Galery </a> <span class="las la-user-plus">

              
                    </span></button>
                </div>
                <div class="card-body"  id="costumer">
                    <table width="100%">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Gambar</td>
                                <td>Deskripsi</td>  
                                                         
                            </tr>
                        </thead>
                        @foreach ($galeri as $post)
                        <tr>
                            <td>{{ $no5++ }}</td>
                            <td><img src="{{  asset('asset/galeri/'.$post->gambar) }}" alt="" width="80px" height="80px"></td>
                            <td>{{ $post->deskripsi }}</td> 
                            <td>
                                <a href="/edit-galeri/{{ $post->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                <form method="POST" action="{{ url('/contact' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <a href="/delete-galeri/{{$post->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                </form>
                            </td>                                                             
                        </tr>
                        @endforeach {{ $galeri->links() }}
                    </table>
                </div>
            </div>
        </div>
   </div>
                
                       </div>
    </body>
</html>
