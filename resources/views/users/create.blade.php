<h1>User Create Page</h1>
<p>This is the create page </p>

<div class="row">
    <div class="col-6">
        <form action="{{ url('user'),}}" method="POST"
            @csrf
            <div class="form-group">
                <lable for="fullname" class="form-label">Fullname</lable>
                <input type="text" class="form-control" id="fullname" name="fullname"/>
            </div>
            <div class="form-group">
                <botton class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

