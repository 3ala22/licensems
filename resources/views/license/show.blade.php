@extends('layouts.master')

@section('content')

   <section>
       <h2>{{ $license->trade_name }}</h2>
   </section>

    <section>
        <h2>Documents</h2>

        <form id="addDocumentsForm" action="/license/{{ $license->license_number }}/documents" method="POST" class="dropzone">
            {{ csrf_field() }}

        </form>

    </section>
@stop

@section('scripts.footer')
    <script>
        Dropzone.options.addDocumentsForm = {
            paramName: 'document',
            maxFileZie: 10,
            acceptedFiles: '.jpg, .jpeg, .png, .gif, .bmp, .doc, .docx, .pdf, .key, .ppt, .pptx, .pps, .ppsx, .odt, .xls, .xlsx'
        }
    </script>

@stop