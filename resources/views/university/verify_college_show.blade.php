@extends('layouts.university')
@section('section')
<div class="container">
 <h1>Verify  Colleges</h1> 
<div class="panel-body">

 <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>college code</th>
                                                <th>college name</th>
                                                <th>Contact</th>
                                                <th>address</th>
                                                <th>email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($university->college as $clg)
                                              <tr>
                                                <td >{{ $clg->college }}</td>
                                                <td>{{ $clg->name }}</td>
                                                <td>{{ $clg->contact }}</td>
                                                <td>{{ $clg->address }}</td>
                                                <td>{{ $clg->email }}</td>
                                                
                                              </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
</div>
@stop