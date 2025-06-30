@extends('layout.main')

@section('content')
<div class="section-body">
            <div class="container-fluid">
                   
                <div class="row clearfix">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{$roadmap->name}}</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <span>Description:</span> {{$roadmap->description}}<br>
                                    <span>Features:</span> {{$roadmap->features}}<br>
                                    <span>Milestones:</span> {{$roadmap->milestones}}<br>
                                    <span>Goals:</span> {{$roadmap->goals}}<br>
                                    <span>Status:</span>
                                
                                        @if($roadmap->status == 'done')
                                                    <span  class="tag tag-success">{{$roadmap->status}}</span>
                                                    @elseif($roadmap->status == 'draft')
                                                    <span  class="tag tag-warning">{{$roadmap->status}}</span>
                                                    @else 
                                                    <span  class="tag tag-orange">{{$roadmap->status}}</span>
                                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop