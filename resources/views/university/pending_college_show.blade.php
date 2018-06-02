@extends('layouts.university')
@section('section')
<div class="container">
 <h1>Pending Colleges</h1> 
<div class="panel-body">

 <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>college code</th>
                                                <th>college name</th>
                                                <th>Contact</th>
                                                <th>address</th>
                                                <th>email</th>
                                                <th>action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($university->pendingCollege as $clg)
                                              <tr>
                                                <td >{{ $clg->college }}</td>
                                                <td>{{ $clg->name }}</td>
                                                <td>{{ $clg->contact }}</td>
                                                <td>{{ $clg->address }}</td>
                                                <td>{{ $clg->email }}</td>
                                                <td><button  id="submit" data-id="{{ $clg->college}}">Verify</button></td>
                                              </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
</div>
@stop
  <script src={{url("js/jquery-2.2.3.min.js")}}></script>

<script type="text/javascript">
$(document).ready(function(){
$('#submit').on('click',function(e){
    // alert();
    var btn = $(this);
    e.preventDefault(e);
        $.ajax({
        type:"GET",
        url:'/jare',
        data: {'id' : $(this).data('id')},
        success: function(data){
            // alert(data);
            btn.parent().parent().css('background','#00f900');
            btn.parent().parent().hide(800);
            console.log(data);

        },
        error: function(data){
            console.log(data);
        
        }
    })
    });
    });


</script>