@extends('admin.default')

@section('page-header')
    Agents <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')
    <div class="mB-20">
        <a href="{{ route(ADMIN . '.agents.create') }}" class="btn btn-info">
            {{ trans('app.add_button') }}
        </a>
    </div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <div class="table-responsive">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                              <a href="{{ route(ADMIN . '.agents.edit', $item->id) }}">{{ $item->name }}</a>
                                @if($item->jenis_kelamin == 1)
                                  (<i class="text-info fa fa-male"></i>)
                                @else
                                  (<i class="text-danger fa fa-female"></i>)
                                  @endif
                            </td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->telp }}</td>
                            <td>{{ $item->alamat_lengkap }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.agents.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a>
                                    </li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.agents.destroy', $item->id),
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}
    
                                            <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>

@endsection