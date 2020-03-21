@extends('admin.layout');
@if(session('success'))
   <!-- <h1>{{session('success')}}</h1>-->
   <script type="text/javascript">
   	alert("succefully added");
   </script>
@endif