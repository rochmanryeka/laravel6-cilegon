@extends('layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-10 offset-sm-1">
                <div class="events">
                    <a href="{{ route('blog.add') }}" class="btn btn-success float-sm-right mb-2">Add Blog</a>
                </div>
                <table class="table table-dark mb-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Create At</th>
                            <th>Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($blogs)>0)
                            @foreach ($blogs as $key => $val)
                                <tr>
                                    <td>{{ (($blogs->currentPage()-1)*$blogs->perPage())+$key+1 }}</td>
                                    <td>{{ $val['judul'] }}</td>
                                    <td>{{ $val['kategori'] }}</td>
                                    <td>{{ $val['created_at'] }}</td>
                                    <td>
                                        <a href="{{ route('blog.edit', ['id' => $val['id']]) }}" class="btn btn-primary">Edit</a>
                                        <button data-event="delete" data-id="{{ $val->id }}" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">Data blog masih kosong</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                
                <div class="text-center">
                    <div class="d-inline-block">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('[data-event="delete"]').on('click', function(){
                var c = confirm("Are you sure to delete?");
                if (c == true) {
                    window.location = '{{ route('blog.delete') }}?id=' + $(this).data('id')
                }
            })
        })
    </script>
@endsection