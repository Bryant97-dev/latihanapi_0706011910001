
    @extends('layouts.app')
    @extends('nav.navi')
    @section('contenttwo')
    @section('content')
    
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">List Data</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true">Tambah</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user-> events as $event)
                                <li>{{ $event -> title }}</li>
                            @endforeach
                        </td>    
                       
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection

