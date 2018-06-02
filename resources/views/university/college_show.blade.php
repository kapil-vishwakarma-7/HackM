@extends('layouts.university')
@section('section')
<div class="container">
  <h1>Show Colleges</h1>
                                      
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
      </tr>
    </thead>
    <tbody>
      @foreach($university->pendingCollege as $clg)
        <tr>
          <td>{{ $clg->college_code }}</td>
          <td>{{ $clg->name }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop