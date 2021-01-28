@extends('master')


@section('maincontent')

    <div>

        <select name="" id="" class="form-control">
            @forelse($data as $val)

                    <option value="{{ $val->id }}">
                        {{ $val->penalty }}
                    </option>
            @empty
                NO data
            @endforelse
        </select>

    </div>

@endsection
