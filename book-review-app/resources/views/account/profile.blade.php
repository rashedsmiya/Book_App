@extends('layouts.app')

@section('main')
 
    <div class="container">
        <div class="row my-5">
            <div class="col-md-3">
                <div class="card border-0 shadow-lg">
                    <div class="card-header  text-white">
                        Welcome, {{ Auth::user()->name }}                       
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="https://scontent.fcla7-1.fna.fbcdn.net/v/t39.30808-6/500980027_636027386150552_5415042512745694691_n.jpg?_nc_cat=111&cb=99be929b-ca288af0&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=KJcPrvqEwT8Q7kNvwEpfG5H&_nc_oc=Adnts7UnVtNETYkmbC-gvYHWtpNb6zPQK6khOy_qWNx4Rpt4GrCB9i_0okF1Lx2ZcCg&_nc_zt=23&_nc_ht=scontent.fcla7-1.fna&_nc_gid=1MRGEo5CV-YETlCiA4IXuw&oh=00_AfQECNlSHur9_kbkk3A7cX4u9OU_1yybBP3Yw_M8DUCrQA&oe=688FE521" class="img-fluid rounded-circle" width=" 100" height="10" alt="Luna John">                            
                        </div>
                        <div class="h5 text-center">
                            <strong>{{ Auth::user()->name }}</strong>
                            <p class="h6 mt-2 text-muted">5 Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-lg mt-3">
                    <div class="card-header  text-white">
                        Navigation
                    </div>
                    <div class="card-body sidebar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="book-listing.html">Books</a>                               
                            </li>
                            <li class="nav-item">
                                <a href="reviews.html">Reviews</a>                               
                            </li>
                            <li class="nav-item">
                                <a href="profile.html">Profile</a>                               
                            </li>
                            <li class="nav-item">
                                <a href="my-reviews.html">My Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a href="change-password.html">Change Password</a>
                            </li> 
                            <li class="nav-item">
                                <a href="{{route('account.logout')}}">Logout</a>
                            </li>                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 shadow">
                    <div class="card-header  text-white">
                        Profile
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="John Doe" class="form-control" placeholder="Name" name="name" id="" />
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="text" value="john@example.com" class="form-control" placeholder="Email"  name="email" id="email"/>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <img src="images/profile-img-1.jpg" class="img-fluid mt-4" alt="Luna John" >
                        </div>   
                        <button class="btn btn-primary mt-2">Update</button>                     
                    </div>
                </div>                
            </div>
        </div>       
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
</body>
</html>
@endsection