@extends('layouts.app')

@section('title', 'Csv Page')

@section('sidebar')
    @parent

    <!-- <p>ここはメインのサイドバーに追加</p> -->
@endsection

@section('content')
    <p>CSV PAGE</p>


<form action="/csvpage/import-csv" method="post" enctype="multipart/form-data" id="csvUpload">
{{ csrf_field() }}
<input type="file" value="ファイルを選択" name="csv_file">
<button type="submit">インポート</button>
</form>

@endsection