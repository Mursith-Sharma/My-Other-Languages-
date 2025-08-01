@extends('layout.master')                     
@section('box')
    <div class="container-fluid ">
       
        <div class="row">
            <div class="col-lg-8">
              <h1 class="mb-4">Post Title</h1>
              <p class="text-muted">Posted on January 1, 2024</p>
              <img src="https://via.placeholder.com/800x400" class="img-fluid mb-4" alt="Blog Image">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consectetur tortor vel magna tincidunt tempus. Maecenas eget maximus eros. Vivamus id nisl lacus. Donec et risus turpis. In nec efficitur purus, ac faucibus nulla. Aenean nec malesuada velit. Quisque ac mauris ac turpis semper interdum.</p>
              <p>Sed et lorem et lacus consequat suscipit. Vestibulum dapibus sapien et eros aliquam, a dictum leo vehicula. Aliquam consequat turpis vitae lectus tristique, quis efficitur orci fermentum. Phasellus a ligula pulvinar, blandit eros at, euismod nisl. Nam pharetra urna id purus volutpat, a feugiat magna convallis. Curabitur vestibulum velit sit amet nisl sollicitudin, eget rutrum enim fermentum.</p>
              <p>Donec quis nisi vitae metus sodales fermentum ac eu eros. Nulla facilisi. Fusce bibendum nisl et varius vehicula. Duis volutpat convallis justo nec pharetra. Cras convallis dolor vitae hendrerit mollis. Curabitur ultrices odio vitae sapien fringilla rhoncus. Ut feugiat condimentum ligula, vel faucibus neque sollicitudin sed. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam eget mauris hendrerit, lobortis urna id, sollicitudin est. Nam semper aliquam magna, non egestas orci elementum ac.</p>
            </div>
            <div class="col-lg-4">
              <div class="card mt-3">
                <div class="card-body">
                  <h5 class="card-title">Related Posts</h5>
                  <ul class="list-unstyled">
                    <li><a href="./detail.html">Post 1</a></li>
                    <li><a href="./detail.html">Post 2</a></li>
                    <li><a href="./detail.html">Post 3</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection
