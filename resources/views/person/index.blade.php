@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        @csrf
        <tr><th>Name</th><th>Board</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>
                    @if ($item->boards != null)
                        <table width="100%">
                            @foreach ($item->boards as $obj)
                                <tr><td>{{ $obj->getData() }}</td></tr>
                            @endforeach
                        </table>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    @copyright 2020 tuyano.
@endsection
