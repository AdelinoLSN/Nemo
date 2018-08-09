<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('definitions.head')
    @include('layouts.navbar')

    <div id="site">
        <!--@include('layouts.header')-->
        @include('layouts.body')
    </div>
    @include('layouts.footer')
</html>