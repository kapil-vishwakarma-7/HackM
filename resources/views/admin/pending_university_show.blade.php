@extends('layouts.admin')
@section('section')
<div class="container">
 <h1>Pending University</h1> 
<div class="panel-body">

 <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>University code</th>
                                                <th>University name</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($university as $clg)
                                              <tr>
                                                <td >{{ $clg->university_code }}</td>
                                                <td>{{ $clg->name }}</td>
                                                <td>{{ $clg->contact }}</td>
                                                <td>{{ $clg->address }}</td>
                                                <td>{{ $clg->email }}</td>
                                                <td><button  class='submit' data-id="{{ $clg->university_code}}">Verify</button></td>
                                              </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                                    
                                    
                                </div>
                            </div>
</div>






<script src={{url("js/jquery-2.2.3.min.js")}}></script>

<script type="text/javascript">
$(document).ready(function(){
$('.submit').on('click',function(e){
    // alert();
    var btn = $(this);
    e.preventDefault(e);
        $.ajax({
        type:"GET",
        url:'/a',
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
@stop