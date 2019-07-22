<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

    <body>
        {{--  =====nav bar=======  --}}
        <nav class="navbar navbar-expand-lg navbar-light" style="background:#9c27b0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    
                  </div>
                </div>
              </nav>
        {{--  =====nav bar=======  --}}
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card" style="background:#9c27b0">
                        <div class="card-body">
                            <h5 class="card-title">Required to publish</h5>
    
                            <form action="{{route('frontend.save','id')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Photo</label>
                                    <input type="file" class="form-control" name="img[]" id="" multiple aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted">Add Multiple Photo</small>
                                </div>
                                
                                <div class="form-group" >
                                    <label for="">Video</label>
                                    <input type="text" class="form-control" name="video" id="" placeholder="Embed Video" aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted" >Take Embed Video cod from your youtube video</small>
                                </div>
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </form>
    
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>