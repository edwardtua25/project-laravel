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
            $no6 =1;

            
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
                        <a href="#even" class="active"><span class="las la-igloo"></span>
                        <span>Events</span></a>
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
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3 id="events">Even</h3>
            
                            <button><a href="/create-even" style="text-decoration: none;color:white;">Add Events </a> <span class="las la-user-plus">
            
                            </span></button>
                        </div>
                        <div class="card-body"  id="costumer">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Gambar</td>
                                        <td>Nama Even</td>  
                                        <td>Action</td>                              
                                    </tr>
                                </thead>
                                @foreach ($even as $time)
                                <tr>
                                    <td>{{ $no6++ }}</td>
                                    <td><img src="{{  url('asset/even/'.$time->gambar) }}" alt="" width="80px" height="80px"></td>
                                    <td>{{ $time->nama}}</td>        
                                    <td>
                                        <a href="/edit-even/{{ $time->id }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                        <form method="POST" action="{{ url('/contact' . '/' . $time->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <a href="/delete-even/{{$time->id}}" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Apakah data ini akan dihapus?&quot;)" style="margin: 10px"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                                        </form>
                                    </td>                                                           
                                </tr>
            
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>