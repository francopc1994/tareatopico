@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 ">
            <img width="200px" height="200px" class="border border-dark" src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" >                    
            
           
        
        </div> 
        
        <div class="col-md-6">
        
       
            <div class="card">
                <div class="card-header"><h2>Perfil</h2> 
                </div>
                <div class="card-body">                
                    <perfil-component />
                </div>
                <div class="form-group">
                        
                        <div class="col-lg-8 col-lg-offset-2 ">
                            <div class="align-bottom ">
                                <h4>Editar avatar</h4>
                                            {{ Form::open(['route' => ['user.profile.update'], 'files' => true, 'method' => 'PATCH'] ) }}
                                            </br>
                                            <p>{{ Form::file('avatar') }}</p>
                                            <p>{{ Form::submit('Actualizar', ['name' => 'submit'] ) }}</p>
                                            {{ Form::close() }}
                            </div>
                        </div>     
                </div>    
                

                
      
            </div>
                
        </div>
        @if(Auth::user()->id == 1)    
             
        <div class = "col-md-9">
        </br>
        
            <div class="card">
                <h1>Lista de usuarios</h1>
  
                <table class="table table-striped">
                {{ $users->links() }}
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Eliminar</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->cedula }}</td>
                        <td>{{ $user->telefono }}</td>
                        <td>
                            <a class="button is-outlined" href="{{route('user.delete',['id' => $user->id])}}" onclick="return confirm('Seguro queires eliminar a este usuario?')" >
                                Eliminar
                            </a>
                        </td>
                    </tr>
                    

                    @endforeach  
            </div>

        </div>
        @endif  
    </div>
    
</div>
@endsection
