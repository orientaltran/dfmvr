@extends('layouts.frontend')

@section('content')
    
    {{ Widget::BlockHomeAbout() }}

    {{ Widget::BlockHomeService() }}

    {{ Widget::BlockHomeProject() }}
    
    {{ Widget::BlockHomeNews() }}    

    {{ Widget::BlockHomeContact() }}

@endsection