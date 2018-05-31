@extends('layouts.college')
@section('section')


 <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Student Approval Request</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="150">Name</th>
                                                    <th width="150">Enroll No</th>
                                                    <th width="100">Course</th>
                                                    <th width="100">Contact</th>
                                                    <th width="100">date</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center">1</td>
                                                    <td><strong>John Doe</strong></td>
                                                    <td><span class="label label-success">New</span></td>
                                                    <td>$430.20</td>
                                                    <td>24/09/2014</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-check"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                               
                                               
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    @stop