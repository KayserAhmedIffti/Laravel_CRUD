@extends('layout.master')
@section('title') {{--Here title is @yield which is dynamic in -head.blade.php --}}
Dashboard  {{--In this section we can change because it is dynamic--}}
@endsection
@section('MainContent')
<div>This is test Text</div>
@endsection