@extends('layout.main')

@section('content')
<div class="section-body">
            <div class="container-fluid">
                   
                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Project Summary</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Features</th>
                                                <th>Goals</th>
                                                <th>Milestones</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        {{--
                                        @foreach($roadmaps as $roadmap)
                                        <tbody>
                                            <tr>
                                                <td>{{$roadmap->id}}</td>
                                                <td>{{$roadmap->name}}</td>
                                                <td>{{$roadmap->description}}</td>
                                                <td>{{$roadmap->features}}</td>
                                                <td>{{$roadmap->milestones}}</td>
                                                <td>{{$roadmap->goals}}</td>
                                                
                                                <td>
                                                    @if($roadmap->status == 'done')
                                                    <span  class="tag tag-success">Delivered</span>
                                                    @elseif($roadmap->status == 'draft')
                                                    <span  class="tag tag-orange">Delivered</span>
                                                    @else 
                                                    <span  class="tag tag-warning">Delivered</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            
                                            
                                           
                                            
                                        </tbody>
                                        @endforeach
                                        --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop


