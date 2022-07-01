@extends('layout.header')
@section('header')
<link rel="stylesheet" href="admin.css">
<?php
$no = 1;
?>
<div class="container">
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

</div>
@endsection
