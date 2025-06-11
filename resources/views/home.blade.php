    @extends('layouts.master')
    {{-- Customize layout sections --}}
    @section('subtitle', 'Dashboard')
    @section('content_header_title', 'Dashboard')
    @section('content_header_subtitle', 'Welcome')
    {{-- Content body: main page content --}}
    @section('content_body')
        <p>Liste des bénéficiaires.</p>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    @stop
    {{-- Push extra CSS --}}
    @push('css')
        {{-- Add here extra stylesheets --}}
        {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @endpush
    {{-- Push extra scripts --}}
    @push('js')
        <script> console.log("Hi, We are using the Laravel-AdminLTE package!"); </script>
    @endpush 