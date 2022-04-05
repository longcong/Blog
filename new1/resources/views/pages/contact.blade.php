@extends('main')

@section('title', '| Contact Me')

@section('content')
       <div class="row">
           <div class="col-md-12">
               <h1>About Me</h1>
                <hr>
                <form action="form-group">
                    <label name="Username">Name:</label>
                    <input  id="username" name="username" class="form-control" > 
                </form>

                <form action="form-group">
                    <label name="Subject">Subject:</label>
                    <input  id="Subject" name="Subject" class="form-control" >    
                </form>

                <form action="form-group">
                    <label name="message">Messager:</label>
                    <textarea name="message" id="message" class="form-control">Type your Messager</textarea>
                    <br>
                    <input type="submit" value="Send messager" class="btn btn-success">
            </div>
       </div>
@endsection
