@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Create Movie Inventory</h4>
            </div>
            <div class="panel-body">

                @include('errors.form')
            
                <form action="/movies" method="POST" class="form-horizontal">
                    
                    @include('movies/form')

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Create Inventory</button>
                        </div>
                    </div>

                </form>
                <a href="https://www.themoviedb.org/" target="_blank"><img src="/assets/img/tmdb-logo.png" width="200"></a>
            </div>
        </div>
    </div>
</div>
@stop

@section('css.head')
    <link href="/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
@stop
    
@section('scripts.footer')
    <script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
    <script src="/assets/plugins/maskmoney/jquery.maskMoney.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            
            var title = $('#title');
            var description = $('#description');
            var releaseDate = $('#release_date');
            var image = $('#image');
            var rating = $('#rating');

            $("#select2_title").select2({
              ajax: {
                url: "http://api.themoviedb.org/3/search/movie",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                  return {
                    query: params.term, // search term
                    api_key: "{{ env('THEMOVIEDB_API_KEY') }}",
                  };
                },
                processResults: function (data, page) {
                  return {
                    results: data.results
                  };
                },
                cache: true
              },
              escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
              minimumInputLength: 1,
              templateResult: formatMovie, // omitted for brevity, see the source of this page
              templateSelection: formatMovieSelection // omitted for brevity, see the source of this page
            });

            function formatMovie (movie) {
                if (movie.loading) return movie.text;                
                var markup = '<div class="clearfix">' +
                '<div class="col-sm-2">' +
                '<img src="http://image.tmdb.org/t/p/w500/' + movie.poster_path + '" style="max-width: 100%" />' +
                '</div>' +
                '<div clas="col-sm-10">' +
                '<div class="clearfix">' +
                '<div class="col-sm-5">' + movie.original_title + '</div>' +
                '<div class="col-sm-3"><i class="fa fa-calendar-o"></i> ' + movie.release_date.replace(/(-\d*-\d*)/, "") + '</div>' +
                '<div class="col-sm-2"><i class="fa fa-star"></i> ' + movie.vote_average + '</div>' +
                '</div>';

                if (movie.overview) {
                  markup += '<div>' + movie.overview + '</div>';
                }

                markup += '</div></div>';

                return markup;
              }

              function formatMovieSelection (movie) {
                title.val(movie.original_title);
                description.val(movie.overview);
                releaseDate.val(movie.release_date);
                image.val(movie.poster_path);
                rating.val(movie.vote_average);
                return movie.original_title;
              }

            $('#price').maskMoney({
                prefix: '$',
                allowNegative: false
            });
        });
    </script>
@stop