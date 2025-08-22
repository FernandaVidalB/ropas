@extends('layouts.app')

@section('template_title')
    Ropas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ropas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ropas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Name</th>
									<th >Description</th>
									<th >Price</th>
									<th >Stock</th>
									<th >Size</th>
									<th >Color</th>
									<th >Brand</th>
									<th >Gender</th>
									<th >Release Date</th>
									<th >Is Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ropas as $ropa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $ropa->name }}</td>
										<td >{{ $ropa->description }}</td>
										<td >{{ $ropa->price }}</td>
										<td >{{ $ropa->stock }}</td>
										<td >{{ $ropa->size }}</td>
										<td >{{ $ropa->color }}</td>
										<td >{{ $ropa->brand }}</td>
										<td >{{ $ropa->gender }}</td>
										<td >{{ $ropa->release_date }}</td>
										<td >{{ $ropa->is_active }}</td>

                                            <td>
                                                <form action="{{ route('ropas.destroy', $ropa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ropas.show', $ropa->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ropas.edit', $ropa->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ropas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
