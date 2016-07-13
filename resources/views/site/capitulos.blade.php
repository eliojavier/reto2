@extends('app')



@section('content')

    <div class="container">
        CAPÍTULOS
    </div>

    <div>
        <a class="youtube rounded" href="https://www.youtube.com/watch?v/=RKEW9xfGTlE?autoplay=1">Capitulo 1</a>
    </div>

    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#videoModal" data-theVideo="https://www.youtube.com/v/RKEW9xfGTlE" >VIDEO</a>

    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div>
                        <iframe width="100%" height="350" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="player"></div>
@endsection
