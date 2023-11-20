<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form {
            background-color: #F3F3F3;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/parsley.css')}}">
    <!-- Jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <title>Create Posts</title>
</head>

<body>
    <form method="post" action="{{route('posts.store')}}" class="container w-50% mx-auto my-5" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px; padding: 2rem;" id="form">
        @csrf
        <h1 class="text-center">Create Post</h1>
        <div class="form-group mt-3">
            <label>Post Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group mt-3">
            <label>Post Description:</label>
            <textarea class="form-control" name="description" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group mt-3">
            <label>Published</label>
            <select name="is_published" class="form-control">
                <option value="" selected>Choose Options</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label>Active</label>
            <select name="is_active" class="form-control">
                <option value="" selected>Choose Options</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>


    <script>
        $('#form').parsley();
    </script>
</body>

</html>