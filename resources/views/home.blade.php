@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <img width="200px" height="200px" src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}">                    
            
        
        </div> 
        
        <div class="col-md-8">
        
       
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
        
    </div>
</div>
@endsection
