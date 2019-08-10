@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron" id="jumbotron_index">
        <!--router-link to="/foo">Go to Foo</!--router-link>
        <router-link-- to="/bar">Go to Bar</router-link-->
        <div class="text-center">
            <h1> Jaya901 LaraVue</h1>
            <p>CRUD SIMPLE APK LARAVEL + VUE.JS</p>
        </div>
        <router-view></router-view> 
    </div>
</div>
@endsection
