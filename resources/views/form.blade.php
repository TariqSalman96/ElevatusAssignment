<!doctype html>
<html lang="en">
<head>
    <title>Elevatus Assignment - Back End Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form action="{{route('submit')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xl-6 m-auto">
                <div class="card shadow">
                    {{-- For returning the distance result --}}
                    @if(!empty(Session::get('data')))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p>The hamming distance between the inputs is = {{ Session::get('data')['hamming_dis'] }}</p>
                            <p>The Levenshtein distance between the inputs is = {{ Session::get('data')['levenshtein_dis'] }}</p>
                        </div>
                    @endif

                    <div class="card-header">
                        <h4 class="card-title font-weight-bold"> Please fill in texts: </h4>
                    </div>

                    <div class="card-body">
                        {{--Input Text One--}}
                        <div class="form-group">
                            <label for="text1"> Text1 <span class="text-danger"> * </span> </label>
                            <input type="text" name="text1" class="form-control" value="{{old('text1')}}" />
                            {!!$errors->first("text1", "<span class='text-danger'>:message</span>")!!}
                        </div>
                        {{--Input Text Two--}}
                        <div class="form-group">
                            <label for="text2"> Text2 <span class="text-danger"> * </span> </label>
                            <input type="text" name="text2" class="form-control" value="{{old('text2')}}" />
                            {!!$errors->first("text2", "<span class='text-danger'>:message</span>")!!}
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
