@extends('template.layout')

@section('page_title',$pageTitle)



@section('custom_styles')

<style type="text/css">
	/*INTERNAL STYLES*/

</style>

@endsection



@section('page_content')

<p id="lbl_myName">{{ $myname }}</p>



@endsection



@section('custom_scripts')

<script src="<?php echo base_url(); ?>/assets/js/{{ $customScripts }}"></script>

@endsection