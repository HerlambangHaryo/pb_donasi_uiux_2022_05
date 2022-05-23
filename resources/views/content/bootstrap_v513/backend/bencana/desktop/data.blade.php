@extends('template.'.$template.'.backend')

@section('title', $panel_name)

@section('content')  

 
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3"> 
			<div class="btn-group me-2">
				<a type="button" class="btn btn-sm btn-outline-secondary"
					href="{{ route($content.'.create') }}">
					Create
				</a> 
			</div> 
        </div>
        <div class="card-body">
            
            <section class="timeline_area section_padding_130">
                <div class="container"> 
                    <div class="row">
                        <div class="col-12"> 

                            <div class="table-responsive">
								<table class="table table-striped table-sm">
									<x-bootstrap_v513.thead-default/>
										<tr>
											<th scope="col">#</th>
											<th scope="col">
												Bantuan
											</th>
											<th scope="col"></th> 
										</tr>
									</thead>
									<tbody>
										@foreach($data as $row)
										<tr>
											<td>
												{{$row->id}}
											</td>
											<td>
												{{$row->nama}}
											</td>
											<td>
							    				<x-bootstrap_v513.button-dropdown-action route="{!!$content!!}" id="{!!$row->id!!}"/> 
											</td>
										</tr> 
										@endforeach
									</tbody>
								</table>
							</div>

                        </div>
                    </div>
                </div>
            </section>
 
        </div>
    </div>  



@endsection