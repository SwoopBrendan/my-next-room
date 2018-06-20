<div class="card user-card text-center">
    <img class="card-img-top rounded-circle user-image" src="http://via.placeholder.com/200x200" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ Auth::user()->name }}</h5>
        <p class="card-text">{{ Auth::user()->bio }}</p>
        <hr/>
        <a href="#" class="btn btn-sm btn-primary">Edit</a>
    </div>
</div>