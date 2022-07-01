@extends('layout.header')
@section('header')
<link rel="stylesheet" href="admin.css">

<div class="container">
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
</div>

@endsection
