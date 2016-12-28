
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-heading" style="text-align:center;font-weight:bold;">List of Game of Thrones Characters</div>

                            @if(Auth::check())
                                <!-- Table -->
                                <table class="table" style="text-align:center;">
                                <tr>
                                    <th style="text-align:center;">Character</th>
                                    <th style="text-align:center;">Real Name</th>
                                </tr>
                                @foreach($characters as $key => $value)
                                <tr>
                                {{-- $key is the left value, $value is the value to the key, they are each a variable --}}
                                <td>{{ $key }}</td><td>{{ $value }}</td>
                            </tr>
                          @endforeach
                      </table>
                    @endif
                </div>
            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login to see the list 😜😜 </a><br />
            @endif

            <h5 class="btn btn-info">This authentication has successfully succeeded! 😜😜 </h5>




        </div>
    </div>
</div>
@endsection
       